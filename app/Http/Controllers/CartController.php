<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Coupon;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\Country;
use App\Models\City;
use App\Mail\OrderConfirmationMail;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{

   public function index()
   {
      $cart = session()->get('cart', []);     
      return view('cart', compact('cart'));
   }
    
   public function addToCart(Request $request)
   {
        
        $productId = $request->input('product_id');
        $price = $request->input('price');
        $name = $request->input('name');
        $image = $request->input('image');
        $quantity = $request->input('quantity');

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity,
                'image' => $image,
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'message' => 'Item added to cart successfully',
            'cart' => $cart, 
        ]);
    }


    public function updateCart(Request $request)
    {
        $cart = session()->get('cart', []);

        foreach ($request->cart as $item) {
            if (isset($cart[$item['product_id']])) {
                $cart[$item['product_id']]['quantity'] = (int) $item['quantity'];
            }
        }

        session()->put('cart', $cart);

        return response()->json(['message' => 'Cart updated successfully!']);
    }

    public function applyCoupon(Request $request)
    {
        if (!$request->has('coupon_code')) {
            return response()->json(['message' => 'Coupon code is required.'], 400);
        }

        $coupon = Coupon::where('code', $request->coupon_code)
            ->where('expiry_date', '>=', now())
            ->first();

        if (!$coupon) {
            return response()->json(['message' => 'Invalid or expired coupon!'], 400);
        }

        $discountAmount = 0;
        $cartTotal = collect(session('cart', []))->sum(fn($item) => $item['quantity'] * $item['price']);

        if ($coupon->type === 'percentage') {
            $discountAmount = ($coupon->discount / 100) * $cartTotal;
        } elseif ($coupon->type === 'fixed') {
            $discountAmount = $coupon->discount;
        }

        session()->put('applied_coupon', [
            'code' => $coupon->code,
            'discount' => $discountAmount
        ]);

        return response()->json([
            'message' => 'Coupon applied successfully!',
            'discount' => $discountAmount,
            'new_total' => max(0, $cartTotal - $discountAmount)
        ]);
    }

    public function removeFromCart($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]); 
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Item removed from cart');
    }

    public function checkout()
    {
        $country = Country::get();
        $cart = session('cart', []);
        $cartTotal = collect($cart)->sum(fn($item) => $item['quantity'] * $item['price']) ?? 0;
        $discountAmount = session('applied_coupon.discount', 0) ?? 0;
        $finalTotal = max(0, $cartTotal - $discountAmount);

        return view('checkout', compact('cart', 'cartTotal', 'discountAmount', 'finalTotal', 'country'));
    }

   public function order_submit(Request $request)
   {  
        $request->validate([
            'country' => 'required',
            'f_name' => 'required',
            'l_name' => 'required',
            'street_address' => 'required',
            'apartment' => 'nullable',
            'city' => 'required',
            'postal_code' => 'nullable',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->route('shop')->with('error', 'Your cart is empty!');
        }

        $cartTotal = collect($cart)->sum(fn($item) => $item['quantity'] * $item['price']);
        $discountAmount = session('applied_coupon.discount', 0);
        $finalTotal = max(0, $cartTotal - $discountAmount);

        $order = Order::create([
            'user_id' => auth()->id() ?? null,
            'total_amount' => $finalTotal,
            'status' => 'pending',
            'country' => $request->country,
            'f_name' => $request->f_name,
            'l_name' => $request->l_name,
            'street_address' => $request->street_address,
            'apartment' => $request->apartment,
            'city' => $request->city,
            'postal_code' => $request->postal_code,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
        ]);

        foreach ($cart as $productId => $details) {
            $totalAmount = $details['quantity'] * $details['price']; // Calculate total amount
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $details['quantity'],
                'price' => $details['price'],
                'total_amount' => $totalAmount,
            ]);
        }

        $order = Order::with('items.product')->find($order->id);

     
        Mail::to($request->email)->send(new OrderConfirmationMail($order));

        
        Mail::to('alimuhammad12.2005@gmail.com')->send(new OrderConfirmationMail($order));

        session()->forget('cart');

        return redirect()->route('shop')->with('success', 'Order placed successfully! Confirmation email sent.');
     }

     public function check($id, Request $request)
     {
        $product = Product::find($id);
        if (!$product) {
            return "Product nahi mila! ID: " . $id;
        }

        $selectedCountry = $request->query('country');
        $delivers = $product->countries()->where('name', $selectedCountry)->exists();

        if ($delivers) {
            return "Ye product " . $selectedCountry . " me deliver ho sakta hai.";
        } else {
            return "Ye product " . $selectedCountry . " me deliver nahi ho sakta.";
        }
     }

     public function getCities(Request $request)
     {   
        $cities = City::whereHas('country', function ($query) use ($request) {
            $query->where('name', $request->country_name);
        })->get();
        return response()->json($cities);
     }

     public function getDeliveryCharge(Request $request)
     {
        $city = City::find($request->city_id);
        
        if ($city && $city->delivery_price !== null) {
            return response()->json([
                'success' => true,
                'delivery_charge' => $city->delivery_price
            ]);
        } else {
            return response()->json(['success' => false]);
        }
    }


    public function view_order()
    {
        $order = Order::with('items', 'city')->get();
        return view('admin.order.index', compact('order'));
    }

   public function viewOrderDetail($id)
   {
    $order = Order::with('items', 'city')->findOrFail($id);
    return view('admin.order.order_detail', compact('order'));
   }

   public function updateStatus(Request $request)
   {
        $order = Order::find($request->order_id);
        if ($order) {
            $order->status = $request->status;
            $order->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
   }

    public function showTrackOrderForm()
    {
        return view('track-order'); 
}

public function trackOrder(Request $request)
    {
        // ویلیڈیشن: آرڈر ID اور ای میل ضروری ہیں
        $request->validate([
            'order_id' => 'required|exists:orders,id', // آرڈر ID ڈیٹابیس میں موجود ہونا چاہیے
            'email' => 'required|email|exists:orders,email', // ای میل ڈیٹابیس میں موجود ہونا چاہیے
        ]);

        // آرڈر کو ڈیٹابیس سے تلاش کریں
        $order = Order::where('id', $request->order_id)
                     ->where('email', $request->email)
                     ->first();

        // اگر آرڈر مل گیا تو تفصیلات دکھائیں
        if ($order) {
            return view('track-order', ['order' => $order]); // آرڈر کی تفصیلات کے ساتھ ویو کو رینڈر کریں
        }

        // اگر آرڈر نہیں ملا تو غلطی کا پیغام دکھائیں
        return redirect()->route('track.order.form')->with('error', 'Order not found with the provided details.');
    }
}




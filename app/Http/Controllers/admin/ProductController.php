<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\ProductSubImages;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::With('category')->get();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        $productCode = 'P-' . str_pad(\App\Models\Product::max('id') + 1, 5, '0', STR_PAD_LEFT);
        $category = Category::get();
        return view('admin.product.create', compact('category', 'productCode'));
    }

    public function store(Request $request) 
    {
        $request->validate([
            'name' => 'required|unique:products',
            'slug' => 'required',
            'category_id' => 'required',
            'regular_price' => 'required',
            'sale_price' => 'required',
            'quantity' => 'required',
            'status' => 'required',
            'img' => 'required|image'
        ]);
        $imagePath = $request->file('img')->store('product', 'public');
        $product = Product::create([
            'product_code' => $request->product_code,
            'name' => $request->name,
            'slug' => $request->slug,
            'category_id' => $request->category_id,
            'reguler_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'stock_quantity' => $request->quantity,
            'status' => $request->status,
            'description' => $request->description,
            'image' => $imagePath
        ]);
        if($request->hasFile('sub_images'))
        {
            foreach ($request->file('sub_images') as $subImage) {
                $subImagepath = $subImage->store('product_sub_images', 'public');
                ProductSubImages::create([
                   'product_id' => $product->id,
                   'images' => $subImagepath,
                ]);
            }
        }
        return redirect()->route('product')->with('success', 'Product added successfully!');
    }

    public function edit($id)
    {
        $category = Category::get();
        $product = Product::findorfail($id);
        $sub_images = ProductSubImages::Where('product_id', $product->id)->get();
        return view('admin.product.edit', compact('product', 'category', 'sub_images'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'regular_price' => 'required|numeric',
            'sale_price' => 'nullable|numeric',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|in:Active,Deactive',
            'description' => 'nullable|string',
        ]);

        $product = Product::findOrFail($id);
        if ($request->hasFile('img')) {
            if ($product->image) {
                Storage::delete('public/' . $product->image);
            }
            $imagePath = $request->file('img')->store('product', 'public');
            $product->image = $imagePath;
        }
        $product->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'reguler_price' => $request->regular_price,
            'sale_price' => $request->sale_price,
            'stock_quantity' => $request->quantity,
            'status' => $request->status,
            'description' => strip_tags($request->description),
        ]);

        if ($request->hasFile('sub_images')) {
            ProductSubImages::where('product_id', $product->id)->delete();
            foreach ($request->file('sub_images') as $subImage) {
                $subImagePath = $subImage->store('product_sub_images', 'public');
                ProductSubImages::create([
                    'product_id' => $product->id,
                    'images' => $subImagePath,
                ]);
            }
        }
        return redirect()->route('product' )->with('success', 'Product updated successfully!');
    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        if ($product->image) {
            Storage::delete('public/'.$product->image);
        }
        foreach ($product->SubImages as $image) {
            Storage::disk('public')->delete($image->images);
            $image->delete();
        }
        $product->delete();
        return redirect()->route('product')->with('success', 'product Deleted!');
    }

    public function updateStatus(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'status' => $request->status
        ]);

        return response()->json(['success' => true, 'message' => 'Status updated successfully']);
    }

   
    public function CreateVaration()
    {
        return view('admin.product-varation.create');
    }

    public function EditVaration()
    {
        return view('admin.product-varation.edit');
    }
}

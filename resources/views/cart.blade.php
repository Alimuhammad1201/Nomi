@extends('master')

@section('content')
@if(count($cart) > 0)
<section class="space space-extra-bottom">
    <div class="container">
        <div class="woocommerce-notices-wrapper">
            <div class="woocommerce-message">Shipping costs updated.</div>
        </div>

        <form action="#" class="woocommerce-cart-form">
            <table class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Product Name</th>
                        <th class="cart-col-price">Price</th>
                        <th class="cart-col-quantity">Quantity</th>
                        <th class="cart-col-total">Total</th>
                        <th class="cart-col-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                     @php
                        $cart = session('cart', []);
                        $cartTotal = collect($cart)->sum(fn($item) => $item['quantity'] * $item['price']) ?? 0;
                        $discountAmount = session('applied_coupon.discount', 0) ?? 0;
                        $finalTotal = max(0, $cartTotal - $discountAmount);
                    @endphp

                    @foreach($cart as $productId => $details)
                    <tr class="cart_item" data-product-id="{{ $productId }}">
                        <td data-title="Product">
                            <a class="cart-productimage" href="#">
                                <img width="100" height="95" src="{{ asset('storage/'.  $details['image']) }}" alt="Image">
                            </a>
                        </td>
                        <td data-title="Name">
                            <a class="cart-productname" href="#"> 
                                {{ $details['name'] ?? 'Not Found' }}
                            </a>
                        </td>
                        <td data-title="Price">
    <span class="amount">
        <bdi>
            <span class="product-price__number" data-price="{{ $details['price'] }}">
                $ {{ $details['price'] ?? 'Not Found' }}
            </span>
        </bdi>
    </span>
</td>
                <td data-title="Quantity">
    <div class="quantity style2">
        <div class="quantity__field quantity-container">
            <button class="quantity-minus qty-btn"><i class="fal fa-minus"></i></button>
            <input type="number" id="quantity-{{ $productId }}" class="qty-input" step="1" min="1" max="100" name="quantity" value="{{ $details['quantity'] ?? 1 }}" title="Qty">
            <button class="quantity-plus qty-btn"><i class="fal fa-plus"></i></button>
        </div>
    </div>
</td>
                        <td data-title="Total">
    <span class="amount">
        <bdi>
            
            <span class="product-price__number" data-price="{{ isset($details['price'], $details['quantity']) ? ($details['quantity'] * $details['price']) : '0' }}">
               $ {{ isset($details['price'], $details['quantity']) ? ($details['quantity'] * $details['price']) : '0' }}
            </span>
        </bdi>
    </span>
</td>
                        <td data-title="Remove">
                            <a href="{{ route('cart.remove', $productId) }}" class="remove">
                                <i class="fal fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                    <tr>
                        <td colspan="6" class="cart-actions">
                            <div class="row justify-content-between">
                                <div class="col-lg-6">
                                    <div class="vs-cart-coupon">
                                        <input type="text" class="form-control" name="coupon_code" placeholder="Coupon Code...">
                                        <button type="button" class="apply-coupon vs-btn">Apply Coupon</button>
                                    </div>
                                </div>
                                <div class="col-lg-auto">
                                    <div class="vs-cart-coupon">
                                        <button type="button" class="update-cart vs-btn">Update Cart</button>
                                        <a href="{{ route('shop') }}" class="vs-btn">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>

        <div class="row justify-content-end">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <h2 class="h4 summary-title">Cart Totals</h2>
                <table class="cart_totals">
                  <tbody>
    <tr>
        <td>Cart Subtotal</td>
        <td data-title="Cart Subtotal">
            <span class="amount">
                <bdi>
                    
                    <span class="product-price__number" data-price="{{ $cartTotal ?? 0 }}">
                      $  {{ $cartTotal ?? 0 }}
                    </span>
                </bdi>
            </span>
        </td>
    </tr>
    <tr>
        <td>Discount</td>
        <td data-title="Discount">
            <span class="amount">
                <bdi>
                    
                    <span class="product-price__number" data-price="{{ $discountAmount ?? 0 }}">
                       $ {{ $discountAmount ?? 0 }}
                    </span>
                </bdi>
            </span>
        </td>
    </tr>
</tbody>
<tfoot>
    <tr class="order-total">
        <td>Order Total</td>
        <td data-title="Total">
            <strong>
                <span class="amount">
                    <bdi>
                        
                        <span class="product-price__number" data-price="{{ $finalTotal ?? 0 }}">
                           $ {{ $finalTotal ?? 0 }}
                        </span>
                    </bdi>
                </span>
            </strong>
        </td>
    </tr>
</tfoot>
                </table>
                <div class="wc-proceed-to-checkout mb-30">
                    <a href="{{ route('checkout') }}" class="vs-btn">Proceed to checkout</a>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<p class="text-center">Your cart is empty.</p>
<div class="d-flex justify-content-center">
    <a href="{{ route('shop') }}" class="vs-btn">Continue Shopping</a>
</div>
@endif

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var cartUpdateRoute = "{{ route('cart.update') }}";
    var couponApplyRoute = "{{ route('coupon.apply') }}";
    var csrfToken = "{{ csrf_token() }}";
$(document).ready(function() {
    $('#currencySelect').on('change', function() {
        var selectedCurrency = $(this).val();

        $.ajax({
            url: '/getExchangeRate/PKR/' + selectedCurrency,
            type: 'GET',
            success: function(response) {
                var exchangeRate = response.rate;
                $('.cart_item').each(function() {
                    var originalPrice = parseFloat($(this).find('.product-price__number').attr('data-price'));
                    var quantity = parseInt($(this).find('.qty-input').val());

                    if (!isNaN(originalPrice) && !isNaN(quantity)) {
                        var convertedPrice = (originalPrice * exchangeRate).toFixed(2);
                        var convertedTotal = (convertedPrice * quantity).toFixed(2);

                        // صرف `data-price` والے span کو اپڈیٹ کر رہے ہیں
                        $(this).find('.product-price__number').text(selectedCurrency + ' ' + convertedPrice);
                        $(this).find('.product-price__number').attr('data-price', convertedPrice);
                        $(this).find('.total-price').text(selectedCurrency + ' ' + convertedTotal);
                    }
                });
            },
            error: function() {
                alert('Error fetching exchange rate');
            }
        });
    });
});
</script>
<script src="{{ asset('js/cart.js') }}"></script>

@endsection

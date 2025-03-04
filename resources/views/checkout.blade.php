@extends('master') @section('content') <div class="vs-checkout-wrapper space-top space-extra-bottom">
  <div class="container">
    <form action="{{ route('place.order') }}" method="POST" class="woocommerce-checkout mt-40 space-extra-top space-extra-bottom">
     @csrf 
     <div class="row">
        <div class="col-lg-12">
          <h3 class="h4 summary-title">Billing Details</h3>
          <div class="row">
            <div class="col-12 form-group">
              <select class="form-select" id="countrySelect" name="country">
                <option>Select Country</option>
                 @foreach($country as $row) 
                    <option value="{{ $row->name }}">{{ $row->name }}</option> 
                 @endforeach
              </select>
              <p id="deliveryMessage"></p>
              <p id="deliveryMessage"></p>
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="f_name" placeholder="First Name">
            </div>
            <div class="col-md-6 form-group">
              <input type="text" class="form-control" name="l_name" placeholder="Last Name">
            </div>
            <div class="col-12 form-group">
              <input type="text" class="form-control" placeholder="Street Address" name="street_address">
              <input type="text" class="form-control" name="apartment" placeholder="Apartment, suite, unit etc. (optional)">
            </div>
            <div class="row">
              <div class="col-md-6">
                <select id="city" name="city" class="form-select">
                  <option value="">Select City</option>
                </select>
              </div>
              <div class="col-md-6 form-group">
                <input type="text" class="form-control" name="postal_code" placeholder="Postcode / Zip">
              </div>
            </div>
            <div class="col-12 form-group">
              <input type="text" class="form-control" name="email" placeholder="Email Address">
              <input type="text" class="form-control" name="phone_number" placeholder="Phone number">
            </div>
          </div>
        </div>
        <h4 class="h4 summary-title">Your Order</h4>
        <table class="cart_table mb-20">
          <thead>
            <tr>
              <th class="cart-col-image">Image</th>
              <th class="cart-col-productname">Product Name</th>
              <th class="cart-col-price">Price</th>
              <th class="cart-col-quantity">Quantity</th>
              <th class="cart-col-total">Total</th>
            </tr>
          </thead>
          <tbody> @foreach($cart as $productId => $details) <tr class="cart_item">
              <td data-title="Product">
                <a class="cart-productimage" href="shop.html">
                  <img width="91" height="91" src="{{ asset('storage/' . $details['image']) }}" alt="Image">
                </a>
              </td>
              <td data-title="Name">
                <a class="cart-productname" href="shop.html">{{ $details['name'] ?? 'Not Found' }}</a>
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
                <strong class="product-quantity">{{ $details['quantity'] ?? 1 }}</strong>
              </td>
                   <td data-title="Total">
    <span class="amount">
        <bdi>
            
            <span class="product-price__number" data-price="{{ isset($details['price'], $details['quantity']) ? ($details['quantity'] * $details['price']) : '0' }}">
              $  {{ isset($details['price'], $details['quantity']) ? ($details['quantity'] * $details['price']) : '0' }}
            </span>
        </bdi>
    </span>
</td>
            </tr> @endforeach </tbody>
          <tfoot class="checkout-ordertable">
            <tr class="cart-subtotal">
              <th>Subtotal</th>
              <td data-title="Subtotal" colspan="4">
                <span class="woocommerce-Price-amount amount">
                  <bdi>
                   <span class="product-price__number" data-price="{{ $cartTotal ?? 0 }}">
                       $ {{ $cartTotal ?? 0 }}
                    </span>
              </td>
            </tr>
            <tr class="woocommerce-shipping-totals shipping">
              <th>Shipping</th>
              <td data-title="Shipping" colspan="4">Enter your address to view shipping options.</td>
            </tr>
            <tr class="cart-subtotal">
              <th>Discount</th>
              <td data-title="Subtotal" colspan="4">
                <span class="product-price__number" data-price="{{ $discountAmount ?? 0 }}">
                       $ {{ $discountAmount ?? 0 }}
                    </span>
              </td>
            </tr>
            <tr class="order-total">
              <th>Total</th>
              <td data-title="Total" colspan="4">
                <strong>
                 <span class="product-price__number" data-price="{{ $finalTotal ?? 0 }}">
                          $  {{ $finalTotal ?? 0 }}
                        </span>
                </strong>
              </td>
            </tr>
          </tfoot>
        </table>
        <div class="mt-lg-3 mb-30">
          <div class="woocommerce-checkout-payment">
            <ul class="wc_payment_methods payment_methods methods">
              <li class="wc_payment_method payment_method_cheque">
                <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque">
                <label for="payment_method_cheque">COD</label>
                <div class="payment_box payment_method_cheque"></div>
              </li>
              <li class="wc_payment_method payment_method_bacs">
                <input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="">
                <label for="payment_method_bacs">Direct bank transfer</label>
                <div class="payment_box payment_method_bacs">
                  <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                </div>
              </li>
            </ul>
            <div class="form-row place-order">
              <button type="submit" class="vs-btn">Place order</button>
            </div>
          </div>
        </div>
    </form>
  </div>
</div>
    <!--============================== -->

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.getElementById("countrySelect").addEventListener("change", function () {
    let selectedCountry = this.value;
    let productId = {{ $productId ?? 'null' }}; // Product ID dynamically pass karna hai

    if (selectedCountry && productId) {
        fetch(`/admin/product/check/${productId}?country=${selectedCountry}`)
            .then(response => response.text())
            .then(data => {
                document.getElementById("deliveryMessage").innerText = data;
            })
            .catch(error => console.error("Error:", error));
    }
});

         $(document).ready(function () {
    $('#countrySelect').change(function () {
        var countryName = $(this).val(); // Country Name Get Karein
        if (countryName) {
            $.ajax({
                url: '{{ route("get.cities") }}', // Route check karein
                type: 'GET',
                data: { country_name: countryName }, // Country Name Pass Karein
                success: function (response) {
                    $('#city').empty().append('<option value="">Select City</option>');
                    $.each(response, function (key, value) {
                        $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                },
                error: function () {
                    alert("Error fetching cities!");
                }
            });
        } else {
            $('#city').empty().append('<option value="">Select City</option>');
        }
    });
});

       $(document).ready(function () {
    $('#city').change(function () {
        var cityId = $(this).val();
        if (cityId) {
            $.ajax({
                url: '{{ route("get.delivery.charge") }}',
                type: 'GET',
                data: { city_id: cityId },
                success: function (response) {
                    if (response.success) {
                        // Shipping Price Update with data-price attribute
                        $('.woocommerce-shipping-totals td').html('<span data-price="' + response.delivery_charge + '">RS ' + response.delivery_charge + '</span>');
                        
                        // Total Price Calculation
                        var cartTotal = parseFloat("{{ $cartTotal }}"); 
                        var discountAmount = parseFloat("{{ $discountAmount }}"); 
                        var finalTotal = cartTotal - discountAmount + parseFloat(response.delivery_charge);
                        
                        // Total Price Update with data-price attribute
                        $('.order-total td strong span').html('<bdi><span class="woocommerce-Price-currencySymbol">RS</span> <span class="final-total" data-price="' + finalTotal + '">' + finalTotal + '</span></bdi>');
                    } else {
                        $('.woocommerce-shipping-totals td').html('Shipping charge not available.');
                    }
                },
                error: function () {
                    alert("Error fetching delivery charge!");
                }
            });
        } else {
            $('.woocommerce-shipping-totals td').html('Enter your address to view shipping options.');
        }
    });
});
    </script>
@endsection
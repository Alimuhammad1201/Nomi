$(document).ready(function() {
    // Update quantity with buttons
    $('.quantity-plus').click(function() {
        let qtyInput = $('#quantity');
        let qty = parseInt(qtyInput.val()) || 1; // اگر qty NaN ہو تو 1 سیٹ کرو
        if (qty < 100) {
            qtyInput.val(qty + 1);
        }
    });

    $('.quantity-minus').click(function() {
        let qtyInput = $('#quantity');
        let qty = parseInt(qtyInput.val()) || 1;
        if (qty > 1) {
            qtyInput.val(qty - 1);
        }
    });

    // Item Add To Cart
    document.querySelectorAll('.add-to-cart-btn').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();

            let productId = this.dataset.productId;
            let price_p = this.dataset.price;
            let name_p = this.dataset.name;
            let image_p = this.dataset.image;

            // Check if quantity input exists
            let quantityInput = document.getElementById('quantity');
            let quantity_p = quantityInput ? parseInt(quantityInput.value) : 1;
            quantity_p = isNaN(quantity_p) ? 1 : quantity_p;

            console.log('Product ID:', productId);
            console.log('Price:', price_p);
            console.log('Name:', name_p);
            console.log('Image:', image_p);
            console.log('Quantity:', quantity_p);

            // Send data to Laravel using fetch API
            fetch('/add-to-cart', {
                    method: 'POST',
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                    },
                    body: JSON.stringify({
                        product_id: productId,
                        price: price_p,
                        name: name_p,
                        image: image_p,
                        quantity: quantity_p
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Server Response:", data);
                    alert("Item added to cart successfully!");
                    window.location.reload();
                })
                .catch(error => {
                    console.error("Error:", error);
                });
        });
    });
});
// UPDATE CART

$(document).ready(function() {
    $(".update-cart").click(function() {
        let cartData = [];
        
        $(".cart_item").each(function() {
            let productId = $(this).data("product-id");
            let qtyInput = $(this).find(".qty-input").val();  // Ensure this is specific to each item
            cartData.push({
                product_id: productId,
                quantity: parseInt(qtyInput) // Ensure integer value
            });
        });

        $.ajax({
            url: cartUpdateRoute,
            type: "POST",
            data: {
                _token: csrfToken,
                cart: cartData
            },
            success: function(response) {
                alert("Cart updated successfully!");
                location.reload();
            },
            error: function() {
                alert("Something went wrong!");
            }
        });
    });

    // Increment quantity on "+" button click
    $(".qty-increase").click(function() {
        let inputField = $(this).closest(".cart_item").find(".qty-input");
        let currentVal = parseInt(inputField.val()) || 0;
        inputField.val(currentVal + 1);
    });

    // Decrement quantity on "-" button click
    $(".qty-decrease").click(function() {
        let inputField = $(this).closest(".cart_item").find(".qty-input");
        let currentVal = parseInt(inputField.val()) || 0;
        if (currentVal > 1) {
            inputField.val(currentVal - 1);
        }
    });

    // Couppon Apply

    $(".apply-coupon").click(function() {
        let couponCode = $('input[name="coupon_code"]').val();
        $.ajax({
            url: couponApplyRoute,
            type: "POST",
            data: {
                coupon_code: couponCode,
                _token: csrfToken
            },
            success: function(response) {
                alert(response.message);
                location.reload();
            },
            error: function(xhr) {
                let errorMessage = "Something went wrong!";
                if (xhr.responseJSON && xhr.responseJSON.errors) {
                    errorMessage = Object.values(xhr.responseJSON.errors).flat().join("\n");
                } else if (xhr.responseJSON && xhr.responseJSON.message) {
                    errorMessage = xhr.responseJSON.message;
                }
                alert(errorMessage);
            }
        });
    });
});

// Product Review

  
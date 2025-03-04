@extends('master')
@section('page-title')
    Delivery Policy
@endsection
@section('content')
<div class="container py-5">
    <div class="policy-container bg-dark text-light p-5 rounded shadow">
        <h1 class="policy-heading text-center mb-4 fw-bold text-warning">Delivery Policy</h1>
        <p class="policy-content text-white text-center">
            Welcome to our delivery policy page. We ensure that your orders are processed and delivered in a timely manner.
        </p>
        <div class="mt-4">
            <ul class="list-group list-group-flush text-light">
                <li class="list-group-item bg-dark text-white border-0">
                    <strong class="text-warning">Processing Time:</strong> Orders are processed within 1-2 business days.
                </li>
                <li class="list-group-item bg-dark text-white border-0">
                    <strong class="text-warning">Delivery Time:</strong> Standard delivery takes 3-7 business days, while express delivery takes 1-3 business days.
                </li>
                <li class="list-group-item bg-dark text-white border-0">
                    <strong class="text-warning">Shipping Charges:</strong> Free shipping on orders above $50.
                </li>
                <li class="list-group-item bg-dark text-white border-0">
                    <strong class="text-warning">International Shipping:</strong> Available with additional charges.
                </li>
                <li class="list-group-item bg-dark text-white border-0">
                    <strong class="text-warning">Order Tracking:</strong> You will receive a tracking link once your order is shipped.
                </li>
            </ul>
        </div>
        <p class="policy-content mt-4 text-white text-center">
            For any issues or concerns, please contact our support team at 
            <strong class="text-warning">support@example.com</strong>.
        </p>
    </div>
</div>
@endsection

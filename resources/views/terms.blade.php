@extends('master')
@section('page-title')
    Terms & Conditions
@endsection
@section('content')
<div class="container py-5">
    <div class="policy-container bg-dark text-light p-5 rounded shadow">
        <h1 class="policy-heading text-center mb-4 fw-bold text-warning">Terms & Conditions</h1>
        <p class="policy-content text-center text-white">
            By using our website, you agree to the following terms and conditions. Please read them carefully.
        </p>
        <div class="mt-4">
            <ul class="list-group list-group-flush text-light">
                <li class="list-group-item bg-dark text-white border-0">
                    <strong class="text-warning">Use of Website:</strong> You must be at least 18 years old to use this website.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Account Responsibility:</strong> You are responsible for maintaining the confidentiality of your account details.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Order Acceptance:</strong> We reserve the right to accept or reject any order.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Payment & Billing:</strong> All payments must be made through authorized payment methods.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Intellectual Property:</strong> All content on this website is protected by copyright laws.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Limitation of Liability:</strong> We are not responsible for any direct or indirect damages caused by the use of our services.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Changes to Terms:</strong> We reserve the right to update these terms at any time.
                </li>
            </ul>
        </div>
        <p class="policy-content mt-4 text-center text-white">
            If you have any questions about our Terms & Conditions, contact us at 
            <strong class="text-warning">support@example.com</strong>.
        </p>
    </div>
</div>
@endsection

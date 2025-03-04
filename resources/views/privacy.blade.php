@extends('master')
@section('page-title')
    Privacy Policy
@endsection
@section('content')
<div class="container py-5">
    <div class="policy-container bg-dark text-light p-5 rounded shadow">
        <h1 class="policy-heading text-center mb-4 fw-bold text-warning">Privacy Policy</h1>
        <p class="policy-content text-center text-white">
            Your privacy is important to us. This privacy policy explains how we collect, use, and protect your personal information.
        </p>
        <div class="mt-4">
            <ul class="list-group list-group-flush text-light">
                <li class="list-group-item bg-dark text-white border-0">
                    <strong class="text-warning">Information Collection:</strong> We collect personal information such as name, email, and contact details.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Data Usage:</strong> Your data is used to improve our services and provide a better shopping experience.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Data Protection:</strong> We use encryption and secure servers to protect your information.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Cookies & Tracking:</strong> We use cookies to enhance user experience.
                </li>
                <li class="list-group-item bg-dark border-0 text-white">
                    <strong class="text-warning">Third-Party Sharing:</strong> We do not sell or share your data with third parties without consent.
                </li>
            </ul>
        </div>
        <p class="policy-content mt-4 text-center text-white">
            If you have any questions regarding our privacy policy, contact us at 
            <strong class="text-warning">privacy@example.com</strong>.
        </p>
    </div>
</div>
@endsection

<!-- resources/views/track-order.blade.php -->

@extends('master')
@section('title')
  Track Order
@endsection
@section('content')
<style>
    /* public/css/styles.css */

.track-order-form {
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-control {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
}

.btn-primary {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #0056b3;
}

.status-timeline {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.status-item {
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    text-align: center;
    flex: 1;
    margin: 0 5px;
}

.status-item.active {
    background-color: #007bff;
    color: white;
    border-color: #007bff;
}

.alert-danger {
    background-color: #f8d7da;
    color: #721c24;
    padding: 10px;
    border-radius: 5px;
    margin-top: 20px;
}
</style>
<div class="all-content-wrapper">
    <div class="password-meter-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                        <div class="sparkline10-hd">
                            <h2 style="color: white; margin-bottom: 50px;">Track Your Order</h2>
                        </div>
                        <div class="invoice-wrapper" style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <!-- Track Order Form -->
                            <div class="track-order-form">
                                <form action="{{ route('track.order') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="order_id">Order ID</label>
                                        <input type="text" class="form-control" id="order_id" name="order_id" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Billing Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">TRACK ORDER</button>
                                </form>
                            </div>

                            <!-- Order Details -->
                            @if(isset($order))
                            <div class="order-details mt-4">
                                <h3 style="color: #333; font-size: 24px; margin-bottom: 20px;">Order Status</h3>
                                <div class="status-timeline">
                                    <div class="status-item {{ $order->status === 'placed' ? 'active' : '' }}">Placed</div>
                                    <div class="status-item {{ $order->status === 'confirmed' ? 'active' : '' }}">Confirmed</div>
                                    <div class="status-item {{ $order->status === 'processing' ? 'active' : '' }}">Processing</div>
                                    <div class="status-item {{ $order->status === 'dispatched' ? 'active' : '' }}">Dispatched</div>
                                    <div class="status-item {{ $order->status === 'shipped' ? 'active' : '' }}">Shipped</div>
                                    <div class="status-item {{ $order->status === 'delivered' ? 'active' : '' }}">Delivered</div>
                                    <div class="status-item {{ $order->status === 'cancelled' ? 'active' : '' }}">Cancelled</div>
                                    <div class="status-item {{ $order->status === 'returned' ? 'active' : '' }}">Returned</div>
                                </div>
                            </div>
                            @endif

                            <!-- Error Message -->
                            @if(session('error'))
                            <div class="alert alert-danger mt-4">
                                {{ session('error') }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
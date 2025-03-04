@extends('../layouts/app')
@section('title')
  Order Detail
@endsection
@section('content')
<div class="all-content-wrapper">
    <div class="password-meter-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                        <div class="sparkline10-hd">
                            <h2 style="color: white; margin-bottom: 50px;">Order Details - Invoice</h2>
                        </div>
                        <div class="invoice-wrapper" style="background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                            <!-- Invoice Header -->
                            <div class="invoice-header">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="{{ asset('/assets/img/logo.png') }}" alt="Company Logo" style="max-width: 150px;">
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <h2 style="color: #333; font-size: 28px; margin-bottom: 10px;">INVOICE</h2>
                                        <p style="color: #666; font-size: 14px;">Invoice #: {{ $order->id }}</p>
                                        <p style="color: #666; font-size: 14px;">Date: {{ $order->created_at->format('d M, Y') }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Customer Details -->
                            <div class="customer-details mt-4">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 style="color: #333; font-size: 18px; margin-bottom: 10px;">Bill To:</h4>
                                        <p style="color: #666; font-size: 14px;">{{ $order->f_name }} {{ $order->l_name }}</p>
                                        <p style="color: #666; font-size: 14px;">{{ $order->email }}</p>
                                        <p style="color: #666; font-size: 14px;">{{ $order->country }}</p>
                                        <p style="color: #666; font-size: 14px;">{{ $order->city->name }}</p>
                                        <p style="color: #666; font-size: 14px;">{{ $order->street_address }}</p>
                                        <p style="color: #666; font-size: 14px;">{{ $order->postal_code }}</p>
                                        <p style="color: #666; font-size: 14px;">Phone: {{ $order->phone_number }}</p>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <h4 style="color: #333; font-size: 18px; margin-bottom: 10px;">Order Status:</h4>
                                        <p style="color: {{ $order->status === 'active' ? 'green' : 'red' }}; font-weight: bold; font-size: 16px;">
                                            {{ ucfirst($order->status) }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- Order Items Table -->
                            <div class="order-items mt-4">
                                <table class="table table-bordered" style="width: 100%; border-collapse: collapse;">
                                    <thead>
                                        <tr style="background-color: #f8f9fa;">
                                            <th style="padding: 10px; border: 1px solid #ddd;">S.no</th>
                                            <th style="padding: 10px; border: 1px solid #ddd;">Product Image</th>
                                            <th style="padding: 10px; border: 1px solid #ddd;">Product Name</th>
                                            <th style="padding: 10px; border: 1px solid #ddd;">Quantity</th>
                                            <th style="padding: 10px; border: 1px solid #ddd;">Price</th>
                                            <th style="padding: 10px; border: 1px solid #ddd;">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($order->items as $item)
                                        <tr>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $loop->iteration }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">
                                                <img src="{{ asset('storage/'. $item->product->image )}}" width="50" height="50" style="border-radius: 5px;">
                                            </td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $item->product->name }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ $item->quantity }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ number_format($item->price, 2) }}</td>
                                            <td style="padding: 10px; border: 1px solid #ddd;">{{ number_format($item->quantity * $item->price, 2) }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center" style="padding: 10px; border: 1px solid #ddd;">No Items Found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <!-- Order Summary -->
                            <div class="order-summary mt-4">
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <table class="table table-bordered" style="width: 100%; border-collapse: collapse;">
                                            <tr>
                                                <th style="padding: 10px; border: 1px solid #ddd; background-color: #f8f9fa;">Subtotal</th>
                                                <td style="padding: 10px; border: 1px solid #ddd;">{{ number_format($order->total_amount, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <th style="padding: 10px; border: 1px solid #ddd; background-color: #f8f9fa;">Tax (10%)</th>
                                                <td style="padding: 10px; border: 1px solid #ddd;">{{ number_format($order->total_amount * 0.1, 2) }}</td>
                                            </tr>
                                            <tr>
                                                <th style="padding: 10px; border: 1px solid #ddd; background-color: #f8f9fa;">Grand Total</th>
                                                <td style="padding: 10px; border: 1px solid #ddd;">{{ number_format($order->total_amount * 1.1, 2) }}</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Footer -->
                            <div class="invoice-footer mt-4">
                                <p class="text-center" style="color: #666; font-size: 14px;">Thank you for your business!</p>
                                <p class="text-center" style="color: #666; font-size: 14px;">Contact us at: support@yourcompany.com | +91 123 456 7890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
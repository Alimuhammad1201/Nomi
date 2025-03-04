<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            color: #333;
                            line-height: 1.6;
                            background-color: #f4f4f4;
                            padding: 20px;
                        }
                        .email-container {
                            width: 100%;
                            max-width: 600px;
                            margin: 0 auto;
                            background-color: #fff;
                            padding: 20px;
                            border-radius: 10px;
                            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                        }
                        .header {
                            text-align: center;
                            margin-bottom: 20px;
                        }
                        .header h1 {
                            color: #1a73e8;
                        }
                        .order-details {
                            margin: 20px 0;
                        }
                        .order-details p {
                            margin: 10px 0;
                        }
                        .order-items {
                            margin-top: 20px;
                            padding: 10px;
                            background-color: #f9f9f9;
                            border-radius: 5px;
                        }
                        .order-items table {
                            width: 100%;
                            border-collapse: collapse;
                        }
                        .order-items th, .order-items td {
                            padding: 10px;
                            text-align: left;
                            border-bottom: 1px solid #ddd;
                        }
                        .footer {
                            margin-top: 30px;
                            text-align: center;
                            color: #777;
                        }
                    </style>
                </head>
                <body>
                    <div class="email-container">
                        <div class="header">
                            <h1>Order Confirmation</h1>
                            <p>Hello {{ $order->f_name }} {{ $order->l_name }}</p>
                            <p>Thank you for your order! Here are the details:</p>
                        </div>
        
                        <div class="order-details">
                            <p><strong>Order ID:</strong> {{ $order->id }}</p>
                            <p><strong>Total Amount:</strong> {{ number_format($order->total_amount, 2) }}</p>
                            <p><strong>Status:</strong>{{ ucfirst($order->status) }}</p>
                        </div>
        
                        <div class="order-items">
                            <h3>Your Order Items:</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total Amount</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($order->items as $item)
                                           <tr>
                                              <td>
    <img src="{{ asset('storage/'. $item->product->image) }}" width="50" height="50">
</td>
                                            <td>{{ $item->product->name }}</td>
                                    
                                            <td>{{ $item->quantity }}</td>
                                            <td>RS{{ number_format($item->price, 2) }}</td>
                                            <td>RS{{ $item->total_amount }}</td>
                                           </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
        
                        <div class="footer">
                            <p>Thank you for shopping with us!</p>
                            <p>If you have any questions, feel free to contact us.</p>
                        </div>
                    </div>
                </body>
                </html>
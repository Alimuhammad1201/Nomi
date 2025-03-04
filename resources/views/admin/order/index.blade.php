@extends('../layouts/app')
@section('title')
  Media List
@endsection
@section('content')
@if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif
<div class="all-content-wrapper">
<div class="password-meter-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                    <div class="sparkline10-hd">
                        <h2 style="color: white; margin-bottom:  50px;">Manage Media List</h2>
                    </div>
                    <div class="sparkline10-graph table-responsive" style="height: 100vh; overflow-y: auto;">
                        <table class="table table-bordered" style="background-color: #152036 !important;">
                            <thead>
                                <tr>
                                    <th >S.no</th>
                                    <th >First Name</th>
                                    <th >Last Name</th>
                                    <th >Email</th>
                                    <th >Status</th>
                                    <th >City</th>
                                    <th >Phone No</th>
                                    <th >Total</th>
                                    <th >View Order Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(collect($order) as $row)

                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $row->f_name }}</td>
                                    <td>{{ $row->l_name }}</td>
                                    <td>{{ $row->email }}</td>
                                   <td>
    <select class="status-dropdown" data-order-id="{{ $row->id }}">
        <option value="pending" {{ $row->status == 'pending' ? 'selected' : '' }}>Pending</option>
        <option value="processing" {{ $row->status == 'processing' ? 'selected' : '' }}>Processing</option>
        <option value="shipped" {{ $row->status == 'shipped' ? 'selected' : '' }}>Shipped</option>
        <option value="delivered" {{ $row->status == 'delivered' ? 'selected' : '' }}>Delivered</option>
        <option value="cancelled" {{ $row->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
        <option value="returned" {{ $row->status == 'returned' ? 'selected' : '' }}>Returned</option>
        <option value="refunded" {{ $row->status == 'refunded' ? 'selected' : '' }}>Refunded</option>
    </select>
</td>
                                    <td>{{ $row->city->name }}</td>
                                    <td>{{ $row->phone_number }}</td>
                                    <td>{{ $row->total_amount }}</td>


                                 
                                    
                                    <td>
                                        <a href="{{ route('view.detail', $row->id) }}" class="btn btn-success btn-sm">View Compilte Order Details</a>
                                    </td> 
                                </tr>
                                  
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">No Record Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-copy-right">
                    <p>Copyright © 2018 <a href="https://colorlib.com/wp/templates/">Colorlib</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
   document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".status-btn").forEach(button => {
        button.addEventListener("click", function () {
            let ReviewId = this.getAttribute("data-id");
            let currentStatus = this.getAttribute("data-status");
            let newStatus = currentStatus === "active" ? "deactive" : "active";

            fetch(`/product/review/update/${ReviewId}`, { // Fix: "update" instead of "updata"
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ status: newStatus })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    this.innerText = newStatus.charAt(0).toUpperCase() + newStatus.slice(1);
                    this.setAttribute("data-status", newStatus);
                    this.style.backgroundColor = newStatus === "active" ? "green" : "#d9534f";
                } else {
                    alert("Status update failed!");
                }
            })
            .catch(error => console.error("Error:", error));
        });
    });
});

   
$(document).ready(function() {
    $('.status-dropdown').on('change', function() {
        var orderId = $(this).data('order-id');
        var newStatus = $(this).val();

        $.ajax({
            url: '/update-order-status',
            method: 'POST',
            data: {
                order_id: orderId,
                status: newStatus,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                alert('Status updated successfully!');
            },
            error: function(xhr) {
                alert('Error updating status. Please try again.');
            }
        });
    });
});


</script>

@endsection

@extends('../layouts/app')
@section('title')
  Product List
@endsection
@section('content')
<div class="all-content-wrapper">
    <div class="password-meter-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                        <div class="sparkline10-hd">
                            <h2 style="color: white; margin-bottom: 50px;">Product List</h2>
                        </div>
                        <div class="sparkline10-graph table-responsive" style="height: 100vh; overflow-y: auto;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th >#</th>
                                        <th >Code</th>
                                        <th >Product Name</th>
                                        <th >Slug</th>
                                        <th >Category</th>
                                        <th >Regular Price</th>
                                        <th >Sale Price</th>
                                        <th >Quantity</th>
                                        <th >Status</th>
                                        <th >Image</th>
                                        <th >Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse (collect($product) as $row )
                                    <tr>
                                        <td >{{ $loop->iteration  }}</td>
                                        <td >{{ $row->code  }}</td>
                                        <td >{{ $row->name}}</td>
                                        <td >{{ $row->slug}}</td>
                                        <td >{{ $row->category->name}}</td>
                                        <td >{{ $row->reguler_price}}</td>
                                        <td >{{ $row->sale_price}}</td>
                                        <td >{{ $row->stock_quantity}}</td>
                                         <td>
                                        <button class="btn btn-sm status-btn"
                                            data-id="{{ $row->id }}"
                                            data-status="{{ $row->status }}"
                                            style="background-color: {{ $row->status == 'active' ? 'green' : '#d9534f' }}; color: white;">
                                            {{ ucfirst($row->status) }}
                                        </button>
                                    </td>
                                        <td>
                                            @if ($row->image)
                                            <img src="{{ asset('storage/'.$row->image) }}" width="50">
                                        @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('product.edit', $row->id) }}" class="btn btn-info btn-sm">Edit</a>
                                            <form action="{{ route('product.destroy', $row->id) }}" method="POST" style="display:inline;">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this category?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="11" class="text-center"> No Product Found</td>
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

    <!-- Footer -->
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
                let productId = this.getAttribute("data-id");
                let currentStatus = this.getAttribute("data-status");

                let newStatus = currentStatus === "active" ? "deactive" : "active";

                fetch(`/admin/product/update-status/${productId}`, {
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
                        this.style.backgroundColor = newStatus === "active" ? "green" : "red";
                    } else {
                        alert("Status update failed!");
                    }
                })
                .catch(error => console.error("Error:", error));
            });
        });
    });
</script>
@endsection

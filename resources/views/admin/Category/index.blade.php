@extends('../layouts/app')
@section('title')
  Category List
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
                        <h2 style="color: white; margin-bottom:  50px;">Manage Category List</h2>
                    </div>
                    <div class="sparkline10-graph table-responsive" style="height: 100vh; overflow-y: auto;">
                        <table class="table table-bordered" style="background-color: #152036 !important;">
                            <thead>
                                <tr>
                                    <th >S.no</th>
                                    <th >Category Name</th>
                                    <th >Slug</th>
                                    <th >Description</th>
                                    <th >Category Image</th>
                                    <th >Status</th>
                                    <th >Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse(collect($category) as $row)
                                <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $row->name }}</td>
                                    <td>{{ $row->slug }}</td>
                                    <td>{{ $row->description }}</td>
                                    <td>
                                        @if ($row->img)
                                            <img src="{{ asset('storage/'.$row->img) }}" width="50">
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm status-btn"
                                            data-id="{{ $row->id }}"
                                            data-status="{{ $row->status }}"
                                            style="background-color: {{ $row->status == 'active' ? 'green' : '#d9534f' }}; color: white;">
                                            {{ ucfirst($row->status) }}
                                        </button>
                                    </td>
                                    <td>
                                        <a href="{{ route('category.edit', $row->id) }}" class="btn btn-info btn-sm">Edit</a>
                                        <form action="{{ route('category.destroy', $row->id) }}" method="POST" style="display:inline;">
                                            @csrf @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this category?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">No Record Found</td>
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
                let categoryId = this.getAttribute("data-id");
                let currentStatus = this.getAttribute("data-status");

                let newStatus = currentStatus === "active" ? "deactive" : "active";

                fetch(`/admin/category/update-status/${categoryId}`, {
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

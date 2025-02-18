@extends('../layouts/app')
@section('title')
  Product Variations
@endsection
@section('content')
<div class="all-content-wrapper">
    <div class="password-meter-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                    <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                        <div class="sparkline10-hd">
                            <h2 style="color: white; margin-bottom: 50px;">Product Variations</h2>
                        </div>
                        <div class="sparkline10-graph table-responsive" style="max-height: 70vh; overflow-y: auto;">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="color: white;">#</th>
                                        <th style="color: white;">Product</th>
                                        <th style="color: white;">Variation Type</th>
                                        <th style="color: white;">Variation Value</th>
                                        <th style="color: white;">Additional Price</th>
                                        <th style="color: white;">Stock Quantity</th>
                                        <th style="color: white;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="color: white;">1</td>
                                        <td style="color: white;">Laptop</td>
                                        <td style="color: white;">RAM</td>
                                        <td style="color: white;">16GB</td>
                                        <td style="color: white;">$50</td>
                                        <td style="color: white;">10</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this variation?');">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="color: white;">2</td>
                                        <td style="color: white;">Smartphone</td>
                                        <td style="color: white;">Storage</td>
                                        <td style="color: white;">256GB</td>
                                        <td style="color: white;">$100</td>
                                        <td style="color: white;">5</td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">Edit</button>
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this variation?');">Delete</button>
                                        </td>
                                    </tr>
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
@endsection

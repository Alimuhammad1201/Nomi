@extends('../layouts/app')
@section('title')
  Product Create
@endsection
@section('content')
<div class="all-content-wrapper">
<div class="password-meter-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                    <div class="sparkline10-hd">

                    </div>
                    <div class="sparkline10-graph">
                        <form>
                            <div id="variation-container" class="mb-4">
                                <div class="row variation-row">
                                    <div class="col-md-2">
                                        <label style="color: white" for="product_id">Select Product</label>
                                        <select name="product_id[]" class="form-control">
                                            <option>Select Product</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2">
                                        <label style="color: white" for="varation_type">Variation Type</label>
                                        <input type="text" class="form-control" name="varation_type[]" placeholder="Add Type">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="color: white" for="varation_value">Variation Value</label>
                                        <input type="text" class="form-control" name="varation_value[]" placeholder="Add Value">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="color: white" for="additional_price">Additional Price</label>
                                        <input type="text" class="form-control" name="additional_price[]" placeholder="Additional Price">
                                    </div>

                                    <div class="col-md-2">
                                        <label style="color: white" for="qty">Stock Quantity</label>
                                        <input type="text" class="form-control" name="qty[]" placeholder="Quantity">
                                    </div>

                                    <div class="col-md-2 d-flex align-items-end" style="margin-top: 27px; gap: 4px">
                                        <button type="button" class="btn btn-success add-row">+</button>
                                        <button type="button" class="btn btn-danger remove-row ml-2">-</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Password meter End-->

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
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.ckeditor.com/4.19.1/full/ckeditor.js"></script>
<script>
     document.addEventListener("DOMContentLoaded", function () {
        document.querySelector(".add-row").addEventListener("click", function () {
            let container = document.getElementById("variation-container");
            let newRow = document.querySelector(".variation-row").cloneNode(true);
            container.appendChild(newRow);

            // Remove row on click of "-" button
            newRow.querySelector(".remove-row").addEventListener("click", function () {
                newRow.remove();
            });
        });

        // Remove the first row if "-" is clicked
        document.querySelector(".remove-row").addEventListener("click", function () {
            if (document.querySelectorAll(".variation-row").length > 1) {
                this.closest(".variation-row").remove();
            }
        });
    });
</script>
@endsection

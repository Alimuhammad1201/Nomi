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
                        <div id="pwd-container3">
                            <div class="form-group">
                                <label style="color: white" for="Prodcut">Select Product</label>
                                <select name="product_id" class="form-control example3" id="">
                                    <option>Select Product</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="discount_per">Product discount Percantage</label>
                                <input type="text" class="form-control example3" id="discount_per" name="discount_per" placeholder="discount_per" >
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="start_date">Start Date</label>
                                <input type="date" class="form-control example3" id="start_date" name="start_date" placeholder="Select Date" >
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="end_date">End Date</label>
                                <input type="date" class="form-control example3" id="end_date" name="end_date" placeholder="Select Date" >
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="slug">Select Status</label>
                                <select name="status" class="form-control example3" id="">
                                    <option>Select Status</option>
                                    <option>Active</option>
                                    <option>Deactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary btn-block loginbtn">Add</button>
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
    document.getElementById("name").addEventListener("keyup", function() {
        let nameValue = this.value;
        let slug = nameValue.toLowerCase()
            .replace(/ /g, "-")
            .replace(/[^\w-]+/g, "");
        document.getElementById("slug").value = slug;
    });

    tinymce.init({
        selector: '#description',
        plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
        toolbar_mode: 'floating',
        height: 300
    });

    CKEDITOR.replace('description', {
        extraPlugins: 'link'
    });
</script>
@endsection

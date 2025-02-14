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
                                <label style="color: white" for="code">Product Code</label>
                                <input type="text" class="form-control" id="code" name="code" value="" placeholder="">
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Product Name">
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="slug">Product Slug</label>
                                <input type="text" class="form-control example3" id="slug" name="slug" placeholder="slug" readonly >
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="slug">Select Category</label>
                                <select name="category_id" class="form-control example3" id="">
                                    <option>Select Category</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>

                                </select>
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="Regulier Price">Product Regulier Price</label>
                                <input type="text" class="form-control example3" id="Regulier Price" name="Regulier Price" placeholder="Regulier Price" readonly >
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="Sele Price">Product Sele Price</label>
                                <input type="text" class="form-control example3" id="Sele Price" name="Sele Price" placeholder="Sele Price" readonly >
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="quantity">Product quantity</label>
                                <input type="text" class="form-control example3" id="quantity" name="quantity" placeholder="quantity" readonly >
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
                                <label style="color: white" for="description">Product Description</label>
                                <textarea id="description" name="description"></textarea>
                            </div>


                            <div class="form-group">
                                <label style="color: white" for="img">Product Image</label>
                                <input type="file" name="img" class="form-control example3" id="img">
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="sub_img">Product Sub Images</label>
                                <input type="file" name="sub_img" class="form-control example3" id="sub_img" multiple>
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

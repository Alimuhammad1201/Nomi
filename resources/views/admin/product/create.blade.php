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
                    <div class="sparkline10-graph"  style="height: 100vh;">
                        <form method="POST" action="{{ route('product.store')}}" name="ProductAdd" id="ProductAdd" enctype="multipart/form-data">
                            @csrf
                        <div id="pwd-container3">

                            <div class="form-group">
                                <label style="color: white" for="product_code">Product Code</label>
                                <input type="text" class="form-control @error('product_code') is-invalid @enderror" id="product_code" name="product_code" value="{{ $productCode }}" readonly>
                                @error('product_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="name">Product Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Product Name" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="slug">Product Slug</label>
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="slug" readonly value="{{ old('slug') }}">
                                @error('slug')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="category_id">Select Category</label>
                                <select name="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    <option>Select Category</option>
                                    @foreach ($category as $row)
                                        <option value="{{ $row->id }}" {{ old('category_id') == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="regular_price">Product Regular Price</label>
                                <input type="text" class="form-control @error('regular_price') is-invalid @enderror" id="regular_price" name="regular_price" placeholder="Regular Price" value="{{ old('regular_price') }}">
                                @error('regular_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="sale_price">Product Sale Price</label>
                                <input type="text" class="form-control @error('sale_price') is-invalid @enderror" id="sale_price" name="sale_price" placeholder="Sale Price" value="{{ old('sale_price') }}">
                                @error('sale_price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="quantity">Product Quantity</label>
                                <input type="text" class="form-control @error('quantity') is-invalid @enderror" id="quantity" name="quantity" placeholder="Quantity" value="{{ old('quantity') }}">
                                @error('quantity')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="status">Select Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option>Select Status</option>
                                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Deactive" {{ old('status') == 'Deactive' ? 'selected' : '' }}>Deactive</option>
                                </select>
                                @error('status')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="description">Product Description</label>
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="img">Product Image</label>
                                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror" id="img">
                                @error('img')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color:white" for="sub_images">Product Images</label>
                                <input type="file" name="sub_images[]" class="form-control @error('sub_images') is-invalid @enderror" id="sub_images" multiple>
                                @error('sub_images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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

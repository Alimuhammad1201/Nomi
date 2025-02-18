@extends('../layouts/app')
@section('title')
  Edit Product
@endsection
@section('content')
<div class="all-content-wrapper">
<div class="password-meter-area mg-tb-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                <div class="sparkline12-list mg-t-30 responsive-mg-b-0">
                    <div class="sparkline10-graph" style="height: 100vh;">
                        <form method="POST" action="{{ route('product.update', $product->id) }}" name="ProductEdit" id="ProductEdit" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                        <div id="pwd-container3">

                            <div class="form-group">
                                <label style="color: white" for="product_code">Product Code</label>
                                <input type="text" class="form-control" id="product_code" name="product_code" value="{{ $product->product_code }}" readonly>
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="name">Product Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="slug">Product Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $product->slug }}" readonly>
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="category_id">Select Category</label>
                                <select name="category_id" class="form-control">
                                    @foreach ($category as $row)
                                        <option value="{{ $row->id }}" {{ $product->category_id == $row->id ? 'selected' : '' }}>{{ $row->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="regular_price">Product Regular Price</label>
                                <input type="text" class="form-control" id="regular_price" name="regular_price" value="{{ $product->reguler_price }}">
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="sale_price">Product Sale Price</label>
                                <input type="text" class="form-control" id="sale_price" name="sale_price" value="{{ $product->sale_price }}">
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="quantity">Product Quantity</label>
                                <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->stock_quantity }}">
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="status">Select Status</label>
                                <select name="status" class="form-control">
                                    <option value="Active" {{ $product->status == 'Active' ? 'selected' : '' }}>Active</option>
                                    <option value="Deactive" {{ $product->status == 'Deactive' ? 'selected' : '' }}>Deactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="description">Product Description</label>
                                <textarea id="description" name="description" class="form-control">{{  strip_tags($product->description) }}</textarea>
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="img">Product Image</label>
                                <input type="file" name="img" class="form-control" id="img">
                                <img src="{{ asset('storage/' . $product->image) }}" width="100" class="mt-2">
                            </div>

                            <div class="form-group">
                                <label style="color:white" for="sub_images">Product Images</label>
                                <input type="file" name="sub_images[]" class="form-control @error('sub_images') is-invalid @enderror" id="sub_images" multiple>
                                @foreach($sub_images as $row)
                                <img src="{{ asset('storage/' . $row->images) }}" width="100" height="20" class="mt-2"> 
                                @endforeach
                                @error('sub_images')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div> 

                            <div class="form-group">
                                <button class="btn btn-primary btn-block loginbtn">Update</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    document.getElementById("name").addEventListener("keyup", function() {
        let nameValue = this.value;
        let slug = nameValue.toLowerCase().replace(/ /g, "-").replace(/[^\w-]+/g, "");
        document.getElementById("slug").value = slug;
    });
</script>
@endsection

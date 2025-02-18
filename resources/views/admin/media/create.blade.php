@extends('../layouts/app')
@section('title')
  Media Create
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
                        <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                             <div class="form-group">
                                <label class="text-white">Media Type</label>
                                <select class="form-control @error('name') is-invalid @enderror" id="type" name="type">
                                    <option>Select Type</option>
                                    <option>Slider</option>
                                    <option>Gallery </option>
                                    <option>Banner</option>
                                </select>
                                
                                @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="text-white">Media Title</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter Media Name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="text-white">Media Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" placeholder="Auto Generated" readonly value="{{ old('slug') }}">
                            </div>

                            <div class="form-group">
                                <label class="text-white">Description</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Enter Description">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="text-white">media Image</label>
                                <input type="file" class="form-control @error('img') is-invalid @enderror" name="img">
                                @error('img')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save media</button>
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
<script>
    document.getElementById("name").addEventListener("keyup", function() {
        let nameValue = this.value;
        let slug = nameValue.toLowerCase()
            .replace(/ /g, "-")
            .replace(/[^\w-]+/g, "");
        document.getElementById("slug").value = slug;
    });
</script>
@endsection

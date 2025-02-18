@extends('../layouts/app')
@section('title')
  Media Edit
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
                        <form action="{{ route('media.update', $media->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="text-white">Media Type</label>
                                <select class="form-control @error('media_type') is-invalid @enderror" id="type" name="media_type"> 
                                    <option value="">Select Type</option>
                                    <option value="Slider" {{ old('media_type', $media->media_type) == 'Slider' ? 'selected' : '' }}>Slider</option>
                                    <option value="Gallery" {{ old('media_type', $media->media_type) == 'Gallery' ? 'selected' : '' }}>Gallery</option>
                                    <option value="Banner" {{ old('media_type', $media->media_type) == 'Banner' ? 'selected' : '' }}>Banner</option>
                                </select>
                                
                                @error('media_type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="name">Media Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $media->media_title }}" placeholder="media Name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="slug">Media Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="{{ $media->media_slug }}" placeholder="slug" readonly>
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="description">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="Enter Description...">{{ $media->description }}</textarea>
                            </div>


                            <div class="form-group">
                                <label style="color: white" for="img">Media Image</label>
                                <input type="file" name="img" class="form-control">
                                <img src="{{ asset('storage/' . $media->img) }}" width="100" class="mt-2">
                                @error('img')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button class="btn btn-primary btn-block">Update Media</button>
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

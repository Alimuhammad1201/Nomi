@extends('../layouts/app')
@section('title')
  Category Create
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
                                <label style="color: white" for="name">Category Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Category Name">
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="slug">Category Slug</label>
                                <input type="text" class="form-control example3" id="slug" name="slug" placeholder="slug" readonly >
                            </div>

                            <div class="form-group">
                                <label style="color: white" for="description">Description</label>
                                <textarea type="text" class="form-control example3" id="description" placeholder="Enter Description..."></textarea>
                            </div>
                            <div class="form-group">
                                <label style="color: white" for="img">Category Image</label>
                                <input type="file" name="img" class="form-control example3" id="img">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block loginbtn">Login</button>
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

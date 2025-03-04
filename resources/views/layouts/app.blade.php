<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')TriA Tech Panel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/backend/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="/backend/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/owl.carousel.css">
    <link rel="stylesheet" href="/backend/css/owl.theme.css">
    <link rel="stylesheet" href="/backend/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/backend/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/backend/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/backend/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/backend/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        input[readonly] {
        background-color: #152036 !important;
        color: white !important;

    }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="/backend/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="/backend/index.html"><img class="main-logo" src="/backend/img/logo/logo.png" alt="" /></a>
                <strong><img src="/backend/img/logo/logosn.png" alt="" /></strong>
            </div>
			<div class="nalika-profile">
				<div class="profile-dtl">
					<a href="/backend/#"><img src="/backend/img/notification/4.jpg" alt="" /></a>
					<h2>Lakian <span class="min-dtn">Das</span></h2>
				</div>
				<div class="profile-social-dtl">
					<ul class="dtl-social">
						<li><a href="/backend/#"><i class="icon nalika-facebook"></i></a></li>
						<li><a href="/backend/#"><i class="icon nalika-twitter"></i></a></li>
						<li><a href="/backend/#"><i class="icon nalika-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                            <a class="has-arrow" href="#">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Category</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a href="{{ route('category.create') }}"><span class="mini-sub-pro">Create Category</span></a></li>
                                <li><a href="{{ route('category') }}"><span class="mini-sub-pro">Manage Category</span></a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::is('admin/media*') ? 'active' : '' }}">
                            <a class="has-arrow" href="#">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Media</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a href="{{ route('media.create') }}"><span class="mini-sub-pro">Create Media</span></a></li>
                                <li><a href="{{ route('media') }}"><span class="mini-sub-pro">Manage media</span></a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::is('admin/product*') ? 'active' : '' }}">
                            <a class="has-arrow" href="#">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Product</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a href="{{ route('product.create') }}"><span class="mini-sub-pro">Create Product</span></a></li>
                                <li><a href="{{ route('product') }}"><span class="mini-sub-pro">Manage Product</span></a></li>
                                <li><a href="{{ route('varartion.create') }}"><span class="mini-sub-pro">Product Variations</span></a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::is('admin/deals*') ? 'active' : '' }}">
                            <a class="has-arrow" href="#">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Deals</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a href="{{ route('deals.create') }}"><span class="mini-sub-pro">Create Deals</span></a></li>
                                <li><a href="{{ route('deals') }}"><span class="mini-sub-pro">Manage Deals</span></a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::is('admin/varation*') ? 'active' : '' }}">
                            <a class="has-arrow" href="#">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Variations</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a href="{{ route('varartion.create') }}"><span class="mini-sub-pro">Create Variation</span></a></li>
                                <li><a href="{{ route('varartion.edit', ['id' => 1]) }}"><span class="mini-sub-pro">Edit Variation</span></a></li>
                            </ul>
                        </li>

                        <li class="{{ Request::is('admin/view/order*') ? 'active' : '' }}">
                            <a class="has-arrow" href="#">
                                <i class="icon nalika-home icon-wrap"></i>
                                <span class="mini-click-non">Orders</span>
                            </a>
                            <ul class="submenu-angle" aria-expanded="true">
                                <li><a href="{{ route('view.order') }}"><span class="mini-sub-pro">View Order</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    @yield('content')

    <!-- jquery
		============================================ -->
    <script src="/backend/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/backend/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/backend/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/backend/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/backend/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/backend/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="/backend/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/backend/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/backend/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/backend/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="/backend/js/metisMenu/metisMenu.min.js"></script>
    <script src="/backend/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="/backend/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="/backend/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="/backend/js/calendar/moment.min.js"></script>
    <script src="/backend/js/calendar/fullcalendar.min.js"></script>
    <script src="/backend/js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="/backend/js/flot/jquery.flot.js"></script>
    <script src="/backend/js/flot/jquery.flot.resize.js"></script>
    <script src="/backend/js/flot/jquery.flot.pie.js"></script>
    <script src="/backend/js/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/backend/js/flot/jquery.flot.orderBars.js"></script>
    <script src="/backend/js/flot/curvedLines.js"></script>
    <script src="/backend/js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/backend/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/backend/js/main.js"></script>
</body>

</html>

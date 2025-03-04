<!doctype html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>@yield('page-title') </title>
<meta name="author" content="vecuro">
  <meta name="description" content="Luxrio - The Fashion & Watch E-Commerce HTML5 Template">
  <meta name="keywords" content="Luxrio - The Fashion & Watch E-Commerce HTML5 Template">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="robots" content="INDEX,FOLLOW">
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons - Place favicon.ico in the root directory -->
  
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicons/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
  <link rel="manifest" href="/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/assets/img/favicons/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!--==============================
    Google Fonts
  ============================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant:ital,wght@0,300..700;1,300..700&family=Italiana&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <!--==============================
      All CSS File
  ============================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <!-- Fontawesome Icon -->
  <link rel="stylesheet" href="/assets/css/fontawesome.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="/assets/css/slick.min.css">
  <!-- Animation CSS -->
  <link rel="stylesheet" href="/assets/css/animate.min.css">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="vs-body">
  <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <!--********************************
      Code Start From Here 
  ******************************** -->
  <!--==============================
    Preloader
  ==============================-->
  <div class="preloader">
    <button class="vs-btn preloaderCls">Cancel Preloader </button>
    <div class="preloader-inner">
      <img src="/assets/img/logo.png" alt="logo">
      <span class="loader"></span>
    </div>
  </div>
  <!--==============================
    Mobile Menu
  ============================== -->
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <div class="mobile-logo">
        <a href="{{ route('home') }}"><img src="/assets/img/logo.png" alt="Carmax" class="logo"></a>
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      </div>
      <div class="vs-mobile-menu">
        <ul>
          <li class="menu-item-has-children">
            <a href="{{ route('home') }}">Home</a>
          </li>

           <li class="menu-item-has-children">
            <a href="{{ route('shop')}}">Shop</a>
          </li>
          <li class="menu-item-has-children">
            <a href="{{ route('about') }}">About</a>
          </li>
         <li class="menu-item-has-children">
            <a href="#">Jewellery</a>
            <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('category_detail', $category->slug) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </li>
          <li>
            <a href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!--==============================
    Offcanvas
  ============================== -->
  <div class="sidemenu-wrapper">
    <div class="sidemenu-content">
      <div class="sidemenu-logo">
        <a href="{{ route('home') }}"><img src="/assets/img/logo.png" alt="Greeno" class="logo"></a>
        <button class="closeButton sideMenuCls">X</button>
      </div>
      <div class="sidemenu-body">
        <h3 class="sidemenu-title">Best Seller of the <span>Month</span></h3>
        <h4 class="sidemenu-subtitle">CONTACT US</h4>
        <div class="sidemenu-contact">
          <a href="tel:+95552247849" class="sidemenu-link">+9 555 224 7849</a>
          <a href="mailto:info@luxrio.com" class="sidemenu-link">info@luxrio.com</a>
          <a href="#" class="sidemenu-link">munich Expresswa 70 Germany, TX 7859</a>
        </div>
        <a href="{{ route('contact') }}">
        <button class="sidemenu-subtitle style2 vs-btn">Contact Us</button>
        </a>
        <p>Subscribe dolor sitamet, consectetur adiping eli. Duis esollici tudin augue.</p>
        <div class="footer-social">
          <span>follow us on :</span>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-behance"></i></a>
        </div>
      </div>
      <p class="footer-copyright style2">
        Copyright <i class="fal fa-copyright"></i> 2025 <a href="{{ route('home') }}">Mr Nomi</a>.
        All rights reserved by <a href="https://triatechsol.com/">TriA Tech Solution</a>.
      </p>
    </div>
  </div>
  <!-- ==============================
      Popup Search Box
    ============================== -->
  <div class="popup-search-box">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
      <input type="text" class="border-theme" placeholder="What are you looking for">
      <button type="submit"><i class="fal fa-search"></i></button>
    </form>
  </div>
  <!-- ==============================
      Sticky Navbar
    ============================== -->
  <div id="navbars" class="header-sticky navbars">
    <div class="container custom-container">
      <div class="row justify-content-between align-items-center">
        <div class="col-xl-3 col-md-auto d-none d-lg-block col-auto">
          <div class="menu-wrapper">
            <div class="menu-category">
              <button class="menu-toggle">
                <svg class="menu-icon" width="31" height="23" viewBox="0 0 31 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="line1" d="M7 1.5C7 0.671573 7.67157 0 8.5 0H29.5C30.3284 0 31 0.671573 31 1.5C31 2.32843 30.3284 3 29.5 3H8.5C7.67157 3 7 2.32843 7 1.5Z" fill="white"></path>
                  <path class="line2" d="M0 11.5C0 10.6716 0.671573 10 1.5 10H29.5C30.3284 10 31 10.6716 31 11.5C31 12.3284 30.3284 13 29.5 13H1.5C0.671573 13 0 12.3284 0 11.5Z" fill="white"></path>
                  <path class="line3" d="M7 21.5C7 20.6716 7.67157 20 8.5 20H29.5C30.3284 20 31 20.6716 31 21.5C31 22.3284 30.3284 23 29.5 23H8.5C7.67157 23 7 22.3284 7 21.5Z" fill="white"></path>
                </svg>
              </button>
              <ul class="menu-list">
                   @foreach ($categories as $category)
                     <li class="menu-item">
                        <a href="{{ route('category_detail', $category->slug) }}"><span class="icon"></span> {{ $category->name }}</a>
                    </li>
                  @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-auto col-md-auto col-auto">
          <nav class="main-menu d-none d-lg-block">
                 <ul>
          <li class="menu-item-has-children">
            <a href="{{ route('home') }}">Home</a>
          </li>

           <li class="menu-item-has-children">
            <a href="{{ route('shop') }}">Shop</a>
          </li>
          <li class="menu-item-has-children">
            <a href="{{ route('about') }}">About</a>
          </li>
         <li class="menu-item-has-children">
            <a href="#">Jewellery</a>
            <ul class="sub-menu">
                @foreach ($categories as $category)
                    <li><a href="{{ route('category_detail', $category->slug) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </li>
          <li>
            <a href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
          </nav>
          <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
        </div>
        <div class="col-xl-3 col-md-auto col-auto">
          <div class="header-wc">
        
           <a class="wc-link" href="{{ route('cart.index') }}">
    bag <span id="cart-count">{{ array_sum(array_column(session('cart', []), 'quantity')) }}</span>
    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.33315 6.33334V3.12501C5.33315 1.75001 6.24982 0.833344 7.62482 0.833344H10.3748C11.7498 0.833344 12.6665 1.75001 12.6665 3.12501V6.33334M16.709 14.6108H5.33315M5.70002 4.95834H12.3C15.4167 4.95834 15.7284 6.41584 15.9392 8.19418L16.7642 15.0692C17.03 17.3242 16.3334 19.1667 13.125 19.1667H4.88419C1.66669 19.1667 0.970022 17.3242 1.24502 15.0692L2.07003 8.19418C2.2717 6.41584 2.58336 4.95834 5.70002 4.95834Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ==============================
      Popup Subscription
    ============================== -->
  <div id="popup" class="popup-overlay d-none">
    <div class="popup-content" data-bg-src="/assets/img/popup/popup-bg.png">
      <img src="/assets/img/popup/img-1-1.jpg" alt="popup" class="popup-img">
      <div class="popup-form">
        <span class="close-btn" id="close-popup">X</span>
        <h3 class="popup-title"><span>subscribe</span> to get access</h3>
        <p class="popup-text">Subscribe to our newsletter and we will ship 20% discount code today</p>
        <input class="popup-input" type="email" placeholder="Enter your Email...">
        <button class="vs-btn">Submit</button>
        <p class="no-thanks">No thanks</p>
      </div>
    </div>
  </div>
  <!-- ==============================
      Main Section Wrapper
    ============================== -->
  <main class="main">
    <!--==============================
    Header Area
==============================-->
    <header class="vs-header layout2">
      <div class="container custom-container">
        <div class="header-top">
          <div class="row align-items-end justify-content-between">
            <div class="col-md-4 d-none d-md-block">
              <form action="#" class="header-search">
                <input type="text" placeholder="search">
                <button type="submit" aria-label="search-button"><i class="far fa-search"></i></button>
              </form>
            </div>
            <div class="col-md-4 text-center">
              <div class="header-logo">
                <a href="{{ route('home') }}"><img src="/assets/img/logo.png" width="150" alt="Luxrio" class="logo"></a>
              </div>
            </div>
       <div class="col-md-4 d-flex justify-content-end align-items-center">
  <!--   <select id="currency-dropdown" class="form-select shadow-sm me-3 text-white fw-bold">
    <option value="PKR" selected>PKR</option>
    <option value="USD">USD</option>
    <option value="EUR">EUR</option>
</select> -->

    <button class="sideMenuToggler btn btn-outline-light">
        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 10V0H10.5L15 5L20 0H29.5V10L25.5 15L29.5 19.5V30H20L15 25.5L10.5 30H0V19.5L5 15L0 10Z" fill="#EEE7D5"/>
        </svg>
    </button>
</div>

<style>
    .sideMenuToggler {
        background: #333;
        border: 2px solid #EEE7D5;
        border-radius: 8px;
        padding: 5px 10px;
        transition: all 0.3s ease-in-out;
    }
    .sideMenuToggler:hover {
        background: #555;
        transform: scale(1.1);
    }
    #currency-dropdown {
        width: 120px;
        border-radius: 8px;
    }
</style>




          </div>
        </div>
      </div>
      <!-- Main Menu Area -->
      <div class="sticky-wrapper">
        <div class="sticky-active">
          <div class="container custom-container">
            <div class="row justify-content-between align-items-center">
              <div class="col-xl-3 col-md-auto d-none d-lg-block col-auto">
                <div class="menu-wrapper">
                  <div class="menu-category">
                    <button class="menu-toggle">
                      <svg class="menu-icon" width="31" height="23" viewBox="0 0 31 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="line1" d="M7 1.5C7 0.671573 7.67157 0 8.5 0H29.5C30.3284 0 31 0.671573 31 1.5C31 2.32843 30.3284 3 29.5 3H8.5C7.67157 3 7 2.32843 7 1.5Z" fill="white"></path>
                        <path class="line2" d="M0 11.5C0 10.6716 0.671573 10 1.5 10H29.5C30.3284 10 31 10.6716 31 11.5C31 12.3284 30.3284 13 29.5 13H1.5C0.671573 13 0 12.3284 0 11.5Z" fill="white"></path>
                        <path class="line3" d="M7 21.5C7 20.6716 7.67157 20 8.5 20H29.5C30.3284 20 31 20.6716 31 21.5C31 22.3284 30.3284 23 29.5 23H8.5C7.67157 23 7 22.3284 7 21.5Z" fill="white"></path>
                      </svg>
                    </button>
                    <ul class="menu-list">
                     @foreach ($categories as $category)
                     <li class="menu-item">
                        <a href="{{ route('category_detail', $category->slug) }}" style="color: black;"><span class="" ></span> {{ $category->name }}</a>
                    </li>
                  @endforeach
                     
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-auto col-md-auto col-auto">
                <nav class="main-menu d-none d-lg-block">
                       <ul>
          <li class="menu-item-has-children">
            <a href="{{ route('home')}}">Home</a>
          </li>

           <li class="menu-item-has-children">
            <a href="{{ route('shop') }}">Shop</a>
          </li>
          <li class="menu-item-has-children">
            <a href="{{ route('about')}}">About</a>
          </li>
         <li class="menu-item-has-children">
            <a href="#">Jewellery</a>
            <ul>
               
            </ul>

             <ul class="sub-menu">
                        @foreach ($categories as $category)
                    <li><a href="{{ route('category_detail', $category->slug) }}">{{ $category->name }}</a></li>
                @endforeach
                      </ul>
        </li>
          <li>
            <a href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
                </nav>
                <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
              </div>
              <div class="col-xl-3 col-md-auto col-auto">
                <div class="header-wc">
                  
                 <a class="wc-link" href="{{ route('cart.index') }}">
    bag <span id="cart-count">{{ array_sum(array_column(session('cart', []), 'quantity')) }}</span>
    <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5.33315 6.33334V3.12501C5.33315 1.75001 6.24982 0.833344 7.62482 0.833344H10.3748C11.7498 0.833344 12.6665 1.75001 12.6665 3.12501V6.33334M16.709 14.6108H5.33315M5.70002 4.95834H12.3C15.4167 4.95834 15.7284 6.41584 15.9392 8.19418L16.7642 15.0692C17.03 17.3242 16.3334 19.1667 13.125 19.1667H4.88419C1.66669 19.1667 0.970022 17.3242 1.24502 15.0692L2.07003 8.19418C2.2717 6.41584 2.58336 4.95834 5.70002 4.95834Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--==============================
    Header Area end
==============================-->
    @yield("content")

    <!--==============================
        Footer Area
    ==============================-->
<footer class="footer-layout2" data-bg-src="/assets/img/footer/footer-image-1-1.png">
      <div class="footer-widgets">
        <div class="container">
          <div class="row gy-4 justify-content-between">
            <div class="col-lg-3">
              <div class="footer-logo">
                <a href="{{ route('home') }}"><img src="/assets/img/logo.png" alt="logo"></a>
              </div>
              <div class="footer-info style2">
                <p><span>Address :</span> 966 munich Expressway
                  Sue 700 Germany, TX 7859</p>
              </div>
              <a href="cart.html"><img src="/assets/img/footer/payments.png" alt="payments"></a>
            </div>
            <div class="col-lg-auto">
              <div class="footer-widget">
                <h3 class="footer-title">Shopping</h3>
                <div class="footer-menu2">
                  <a href="{{ route('conditionas') }}">terms & conditions</a>
                  <a href="{{ route('privacy') }}">privacy policy</a>
                  <a href="{{ route('delivery') }}">delivery</a>
                </div>
              </div>
            </div>
            <div class="col-lg-auto">
              <div class="footer-widget">
                <h3 class="footer-title">About Store</h3>
                <div class="footer-menu2">
                  <a href="{{ route('shop') }}">Shopping</a>
                  <a href="{{ route('track.order.form' )}}">Order Tracking</a>
                  <a href="{{ route('privacy') }}">Privacy Policy</a>
                  <a href="{{ route('conditionas') }}">Help</a>
                </div>
              </div>
            </div>
            <div class="col-lg-auto">
              <div class="footer-widget">
                <h3 class="footer-title">Subscribe for <span>newsletter</span></h3>
               <form class="footer-newsletter" action="{{ route('subscribe') }}" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Enter your email" required>
    <button type="submit">
        <svg width="20" height="14" viewBox="0 0 20 14" fill="none">
            <path d="M12.43 0.930176L18.5 7.00018L12.43 13.0702M1.5 7.00018H18.33" stroke="#F5F1E6" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
</form>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                <h4 class="footer-title">follow</h4>
                <div class="social-style">
                  <a class="facebook" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                  <a class="instagram" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                  <a class="twitter" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                  <a class="linkedin" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <p class="footer-copyright style2">
        Copyright <i class="fal fa-copyright"></i> 2025 <a href="{{ route('home') }}">Mr Nomi</a>.
        All rights reserved by <a href="https://triatechsol.com/">TriA Tech Solution</a>.
      </p>
    </footer>
    <!--==============================
        Footer Area End
    ==============================-->
  </main>
  <!-- ==============================
    	Main Section Wrapper End
  	============================== -->
  <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
  <!--********************************
		Code End  Here
******************************** -->
  <!--==============================
        All Js File
    ============================== -->
  <!-- Jquery -->
  <script src="/assets/js/vendor/jquery-3.6.0.min.js"></script>
  <!-- Jquery UI -->
  <script src="/assets/js/jquery-ui.min.js"></script>
  <!-- Slick Slider -->
  <script src="/assets/js/slick.min.js"></script>
  <!-- Bootstrap -->
  <script src="/assets/js/bootstrap.min.js"></script>
  <!-- WOW.js Animation -->
  <script src="/assets/js/wow.min.js"></script>
  <!-- Magnific Popup -->
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Image Loaded Jquery -->
  <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
  <!-- Gsap -->
  <script src="/assets/js/gsap.min.js"></script>
  <!-- ScrollTrigger -->
  <script src="/assets/js/ScrollTrigger.min.js"></script>
  <!-- ScrollToPlugin -->
  <script src="/assets/js/ScrollToPlugin.min.js"></script>
  <!-- SplitText -->
  <script src="/assets/js/SplitText.min.js"></script>
  <!-- Lenis -->
  <script src="/assets/js/bundled-lenis.min.js"></script>
  <!-- Main Js File -->
  <script src="/assets/js/main.js"></script>
  <script src="/assets/js/cart.js"></script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// $(document).ready(function () {
//     // Check if currency is already selected
//     var savedCurrency = localStorage.getItem("selectedCurrency");
//     if (savedCurrency) {
//         $("#currency-dropdown").val(savedCurrency);
//         convertPrices(savedCurrency); // Call function to convert prices
//     }

//     $("#currency-dropdown").change(function () {
//         var selectedCurrency = $(this).val();
        
//         // Save currency selection in localStorage
//         localStorage.setItem("selectedCurrency", selectedCurrency);

//         convertPrices(selectedCurrency); // Convert prices on selection
//     });

//     function convertPrices(selectedCurrency) {
//         $.ajax({
//             url: "/getExchangeRate/PKR/" + selectedCurrency,
//             type: "GET",
//             success: function (response) {
//                 var exchangeRate = response.exchange_rate;

//                 $(".product-price__number").each(function () {
//                     var originalPrice = $(this).data("price");
//                     var convertedPrice = (originalPrice * exchangeRate).toFixed(2);
//                     $(this).text(selectedCurrency + " " + convertedPrice);
//                 });
//             },
//             error: function () {
//                 alert("Error fetching exchange rate!");
//             }
//         });
//     }
// });
</script>

</body>

</html>

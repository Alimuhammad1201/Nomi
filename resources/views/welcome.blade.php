@extends('master')
@section('page-title')
    Home Page
@endsection
@section('content')
    <!--==============================
      Hero Area
  ==============================-->
 <section>
    {{-- Desktop Section --}}
    <div class="vs-hero "> {{-- Ye sirf desktop par chalega --}}
        <div class="vs-carousel hero-layout2" data-fade="true" data-dots="true" style="">
         @foreach($media as $row)
               <img src="{{ asset('storage/'.$row->img) }}" width="200" height="200" alt="" class="hero-img2">
            @endforeach 
          
        </div>
    </div>

  
</section>
<style>
  @media (max-width: 768px) {
    .d-md-none {
        display: block !important;
    }
    .d-none {
        display: none !important;
    }
}
  </style>
    <!--==============================
    Hero Area end
==============================-->
    <!--==============================
    Product Two
  ==============================-->
    <section class="space space-extra-bottom z-index-common h2section-layout1">
      <img class="ele1" src="{{ asset('assets/img/shapes/ele-p-2-1.svg ') }}" alt="ele">
      <img class="ele2" src="{{ asset('assets/img/shapes/ele-p-2-2.svg ') }}" alt="ele">
      <div class="gradient-bg"></div>
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-auto">
            <div class="title-area">
              <span class="sec-subtitle">Find New-in</span>
              <h2 class="sec-title text-white">Top Trending</h2>
            </div>
          </div>
          <div class="col-md-auto">
            <div class="carousel-arrow2 title-area">
              <button data-slick-prev=".product-carousel2">
                <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.08984 16.92L1.56984 10.4C0.799843 9.62996 0.799843 8.36996 1.56984 7.59996L8.08984 1.07996" stroke="#EEDCB3" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
              <button class="btn-right" data-slick-next=".product-carousel2">
                <svg width="9" height="18" viewBox="0 0 9 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0.910156 16.92L7.43016 10.4C8.20016 9.62996 8.20016 8.36996 7.43016 7.59996L0.910156 1.07996" stroke="#EEDCB3" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </button>
            </div>
          </div>
        </div>
        <div class="row vs-carousel product-carousel2" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
       @foreach($product as $row)
    <div class="col-lg-3">
      <a href="{{ route('detail', $row->slug) }}">
        <div class="product-style2 version2">
            <div class="product-img">
                <img class="img" src="{{ asset('storage/'. $row->image) }}" alt="product">
            </div>
            <h3 class="product-title">
                <a href="{{ route('detail', $row->slug) }}">{{ $row->name }}</a>
            </h3>
            <span class="product-price">
                <span class="product-price__number" 
                      data-price="{{ $row->sale_price }}">
                      $ {{ $row->sale_price }}
                </span>
                <button class="product-cart add-to-cart-btn"  
                    data-product-id="{{ $row->id }}"  
                    data-price="{{ $row->sale_price }}" 
                    data-name="{{ $row->name }}" 
                    data-image="{{ $row->image }}">
                    Add to Cart
                </button>
            </span>
        </div>
      </a>
    </div>
@endforeach

        </div>
      </div>
    </section>
    <!--==============================
    Product Two End
  ==============================-->
    <div class="grid-container">
      <div class="view-style item1 wow animate__fadeInUp" data-wow-delay="0.1s">
        <img src="{{ asset('assets/img/gallery/item-1-1.jpg ') }}" alt="Large Necklace">
        <div class="view-content">
          <img class="shape1" src="{{ asset('assets/img/shapes/shape-3-1.svg ') }}" alt="shape1">
          <h2 class="view-title">Top categories</h2>
          <a class="view-link" href="{{ route('shop') }}">shop now<i class="fa-solid fa-angles-right"></i></a>
        </div>
      </div>
     @foreach ($category as $index => $row)
    <div class="view-style item{{ $index + 2 }} wow animate__fadeInUp" data-wow-delay="0.{{ $index + 2 }}s">
        <img src="{{ asset('storage/' . $row['img']) }}" alt="{{ $row['name'] }}">
        <h2 class="view-title2">
            <a href="{{ route('category_detail', $row->slug) }}">
                {{ $row['name'] }}
                @if ($row['name'] == 'Bracelets')
                <span>
                    <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line y1="8.25" x2="19" y2="8.25" stroke="white" stroke-width="1.5" />
                        <line x1="9.75" y1="0" x2="9.75" y2="17" stroke="white" stroke-width="1.5" />
                    </svg>
                </span>
                @endif
            </a>
        </h2>
    </div>
@endforeach
    </div>
    <!-- Best Selling -->
    <section class="space space-extra-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-auto mx-auto">
            <div class="title-area text-center">
              <span class="sec-subtitle">best selling</span>
              <h2 class="sec-title text-white">Graceful Ear Drops</h2>
              <img src="{{ asset('assets/img/shapes/title-shape-1.svg ') }}" alt="title shape">
            </div>
          </div>
        </div>
        <div class="tab-style1">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">CLASSIC</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Modern</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <div class="row">
               @foreach($product as $row)
          <div class="col-lg-3">
            <div class="product-style2 version2">
          
              <div class="product-img">
                <img class="img" src="{{ asset('storage/'. $row->image) }}" alt="product">
              </div>
              <h3 class="product-title">
                <a href="{{ route('detail', $row->slug) }}">{{ $row->name }}</a>
              </h3>
              <span class="product-price">
                <span class="product-price__number" 
                      data-price="{{ $row->sale_price }}">
                      Rs {{ $row->sale_price }}
                </span>
             <button class="product-cart add-to-cart-btn"  
               data-product-id="{{ $row->id }}"  
               data-price="{{ $row->sale_price }}" 
               data-name="{{ $row->name }}" 
               data-image="{{ $row->image }}">
               Add to Cart
             </button>
              </span>
            </div>
          </div>
          @endforeach
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <div class="row">
                @foreach($product as $row)
          <div class="col-lg-3">
            <div class="product-style2 version2">
          
              <div class="product-img">
                <img class="img" src="{{ asset('storage/'. $row->image) }}" alt="product">
              </div>
              <h3 class="product-title">
                <a href="{{ route('detail', $row->slug) }}">{{ $row->name }}</a>
              </h3>
              <span class="product-price">
              <span class="product-price__number">Rs {{ $row->sale_price }}</span>
             <button class="product-cart add-to-cart-btn"  
               data-product-id="{{ $row->id }}"  
               data-price="{{ $row->sale_price }}" 
               data-name="{{ $row->name }}" 
               data-image="{{ $row->image }}">
               Add to Cart
             </button>
              </span>
            </div>
          </div>
          @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Best Selling End -->
    <!-- Deal -->
    <section class="space z-index-common bg-position" data-bg-src="{{ asset('assets/img/bg/deal-bg-1-1.jpg ') }}">
      <div class="overlay"></div>
      <div class="img-box6">
        <img src="{{ asset('assets/img/deal/deal-img1.jpg ') }}" alt="deal" class="img1">
        <div class="img-content">
          <div class="img-offer wow animate__fadeInUp" data-wow-delay="0.4s">
            <span>20%</span>
            <span>off</span>
          </div>
          <h3 class="wow animate__fadeInUp" data-wow-delay="0.5s">limited time</h3>
          <img src="{{ asset('assets/img/deal/deal-img2.svg ') }}" alt="deal" class="img2 wow animate__fadeInUp" data-wow-delay="0.6s">
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-xxl-6 offset-xxl-3 col-xl-6 col-lg-auto deal-content wow animate__fadeInUp text-center text-md-start" data-wow-delay="0.2s">
            <span class="sec-subtitle">your need it</span>
            <h2 class="sec-title">deal of the week</h2>
            <p class="sec-text2">New deal every week! Hurry Up!</p>
            <div class="counter-style">
              <ul class="offer-counter" data-offer-date="01/01/2025">
                <li>
                  <div class="day count-number">00</div><span class="count-name">Days</span>
                </li>
                <li>
                  <div class="hour count-number">00</div><span class="count-name">Hours</span>
                </li>
                <li>
                  <div class="minute count-number">00</div><span class="count-name">Minutes</span>
                </li>
                <li>
                  <div class="seconds count-number">00</div><span class="count-name">Seconds</span>
                </li>
              </ul>
            </div>
            <a href="{{ route('shop') }}" class="vs-btn style5">shop now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Deal End-->
    <!-- Feature Area -->
    <section class="space-top">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.2s">
            <div class="feature-style">
              <img class="feature-style__icon mb-3" src="{{ asset('assets/img/icons/vs-feature-icon-1-1.svg ') }}" alt="vs-feature-icon-1-1">
              <h3 class="feature-style__title">Free Shipping</h3>
              <p class="feature-style__text">Fact that a reader will distracted</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.4s">
            <div class="feature-style">
              <img class="feature-style__icon mb-3" src="{{ asset('assets/img/icons/vs-feature-icon-1-2.svg ') }}" alt="vs-feature-icon-1-1">
              <h3 class="feature-style__title">online Support</h3>
              <p class="feature-style__text">within 30 days for an exchange</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.6s">
            <div class="feature-style">
              <img class="feature-style__icon mb-3" src="{{ asset('assets/img/icons/vs-feature-icon-1-3.svg ') }}" alt="vs-feature-icon-1-1">
              <h3 class="feature-style__title">Money Back</h3>
              <p class="feature-style__text">Fact that a reader will distracted</p>
            </div>
          </div>
          <div class="col-xl-3 col-md-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.8s">
            <div class="feature-style">
              <img class="feature-style__icon mb-3" src="{{ asset('assets/img/icons/vs-feature-icon-1-4.svg ') }}" alt="vs-feature-icon-1-1">
              <h3 class="feature-style__title">Return Product</h3>
              <p class="feature-style__text">Fact that a reader will distracted</p>
            </div>
          </div>
        </div>
        <hr class="sec-divider mb-0">
      </div>
    </section>
    <!-- Feature Area End -->
    <section class="space-top space-extra-bottom z-index-common contact-layout2">
      <img data-speed="1.1" class="ele1 it-scroll-element" data-it-scroll-speed="3" data-it-scroll-y="-500" src="{{ asset('assets/img/shapes/ele-j-2-1.png ') }}" alt="ele">
      <img data-speed="1.1" class="ele2 it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="-300" src="{{ asset('assets/img/shapes/ele-j-2-2.png ') }}" alt="ele">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-30">
            <div class="img-box5">
              <div class="img1">
                <img src="{{ asset('assets/img/about/about-1-3.jpg ') }}" alt="about-1-3">
              </div>
              <div class="img2">
                <img class="it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="50" src="{{ asset('assets/img/about/about-1-4.jpg ') }}" alt="about-1-4">
              </div>
              <div class="img3">
                <img class="it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="50" src="{{ asset('assets/img/about/about-1-6.svg ') }}" alt="about-1-5">
              </div>
              <div class="img4">
                <img class="it-scroll-element" data-it-scroll-speed="2" data-it-scroll-y="50" src="{{ asset('assets/img/about/about-1-5.svg ') }}" alt="about-1-5">
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-30">
            <div class="text-center">
              <img class="mb-20" src="{{ asset('assets/img/about/about-1-7.svg ') }}" alt="title shape">
              <span class="sec-subtitle">customs jewelry</span>
              <h2 class="sec-title text-white">Graceful Ear Drops</h2>
              <img src="{{ asset('assets/img/shapes/title-shape-1.svg ') }}" alt="title shape">
              <p class="sec-text pt-20 mb-30 fw-medium">Lorem ipsum dolor sit amet, conse elit, sedid do eiusmod
                tempor incidit
                laboret dolore magna aliqua. Quis ipsum conseel usndi laboris
                sitamet sedid sedid do eiusm.</p>
              <a href="{{ route('contact') }}" class="vs-btn style4" tabindex="0">contact us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
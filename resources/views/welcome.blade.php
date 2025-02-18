@extends('master')
@section('page-title')
    Home Page
@endsection
@section('content')
    <!--==============================
      Hero Area
  ==============================-->
    <section>
      <div class="vs-hero">
        <div class="vs-carousel hero-layout2" data-fade="true" data-dots="true">
          <div>
            <div class="hero-main style3" data-bg-src="{{ asset('assets/img/hero/hero-bg-2-2.jpg ') }}">
              <img src="{{ asset('assets/img/hero/hero-slide-2-1.png ') }}" alt="" class="hero-img2 start-0">
              <div class="container">
                <div class="row">
                  <div class="col-xl-9 col-lg-6 col-md-7">
                    <div class="hero-content">
                      <h1 class="hero-title">
                        <span>
                      <span class="htext1">earrings</span> <span class="htext2 highlight">look</span>
                        </span>
                      </h1>
                      <span class="hero-subtitle">
                    <span class=" htext3">
                      Designed for luxrio unique shop
                    </span>
                      </span>
                      <div class="d-flex overflow-hidden hbtn1">
                        <a href="shop.html" class="vs-btn">Shop
                          Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="hero-main style3" data-bg-src="{{ asset('assets/img/hero/hero-bg-2-1.jpg ') }}">
              <div class="container">
                <div class="row">
                  <div class="col-xl-9 col-lg-6 col-md-7">
                    <div class="hero-content">
                      <h1 class="hero-title">
                        <span>
                      <span class="htext1">earrings</span> <span class="htext2 highlight">look</span>
                        </span>
                      </h1>
                      <span class="hero-subtitle">
                    <span class=" htext3">
                      Designed for luxrio unique shop
                    </span>
                      </span>
                      <div class="d-flex overflow-hidden hbtn1">
                        <a href="shop.html" class="vs-btn">Shop
                          Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="hero-main style3" data-bg-src="{{ asset('assets/img/hero/hero-bg-2-3.jpg ') }}">
              <div class="container">
                <div class="row">
                  <div class="col-xl-9 col-lg-6 col-md-7">
                    <div class="hero-content">
                      <h1 class="hero-title">
                        <span>
                      <span class="htext1">earrings</span> <span class="htext2 highlight">look</span>
                        </span>
                      </h1>
                      <span class="hero-subtitle">
                    <span class=" htext3">
                      Designed for luxrio unique shop
                    </span>
                      </span>
                      <div class="d-flex overflow-hidden hbtn1">
                        <a href="shop.html" class="vs-btn">Shop
                          Now</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
          <div class="col-lg-3">
            <div class="product-style2 version2">
              <div class="product-action">
                <button class="product-action__btn">
                  <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
                <button class="product-action__btn">
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                    <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                  </svg>
                </button>
              </div>
              <div class="product-img">
                <img class="img" src="{{ asset('assets/img/products5/product-1-1.png ') }}" alt="product">
              </div>
              <h3 class="product-title">
                <a href="shop.html">triumph watch</a>
              </h3>
              <span class="product-price">
            <span class="product-price__number">$155.00</span>
              <a class="product-cart" href="cart.html">add to cart</a>
              </span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="product-style2 version2">
              <a href="#new" class="product-tag">new</a>
              <div class="product-action">
                <button class="product-action__btn">
                  <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
                <button class="product-action__btn">
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                    <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                  </svg>
                </button>
              </div>
              <div class="product-img">
                <img class="img" src="{{ asset('assets/img/products5/product-1-2.png ') }}" alt="product">
              </div>
              <h3 class="product-title">
                <a href="shop.html">golden line</a>
              </h3>
              <span class="product-price">
            <span class="product-price__number">$155.00</span>
              <a class="product-cart" href="cart.html">add to cart</a>
              </span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="product-style2 version2">
              <div class="product-action">
                <button class="product-action__btn">
                  <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
                <button class="product-action__btn">
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                    <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                  </svg>
                </button>
              </div>
              <div class="product-img">
                <img class="img" src="{{ asset('assets/img/products5/product-1-3.png ') }}" alt="product">
              </div>
              <h3 class="product-title">
                <a href="shop.html">Round Dial semi</a>
              </h3>
              <span class="product-price">
            <span class="product-price__number">$155.00</span>
              <a class="product-cart" href="cart.html">add to cart</a>
              </span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="product-style2 version2">
              <div class="product-action">
                <button class="product-action__btn">
                  <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
                <button class="product-action__btn">
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                    <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                  </svg>
                </button>
              </div>
              <div class="product-img">
                <img class="img" src="{{ asset('assets/img/products5/product-1-4.png ') }}" alt="product">
              </div>
              <h3 class="product-title">
                <a href="shop.html">Black Dial Red</a>
              </h3>
              <span class="product-price">
            <span class="product-price__number">$155.00</span>
              <a class="product-cart" href="cart.html">add to cart</a>
              </span>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="product-style2 version2">
              <div class="product-action">
                <button class="product-action__btn">
                  <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                  </svg>
                </button>
                <button class="product-action__btn">
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                    <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                  </svg>
                </button>
              </div>
              <div class="product-img">
                <img class="img" src="{{ asset('assets/img/products5/product-1-5.png ') }}" alt="product">
              </div>
              <h3 class="product-title">
                <a href="shop.html">Black Dial Red</a>
              </h3>
              <span class="product-price">
            <span class="product-price__number">$155.00</span>
              <a class="product-cart" href="cart.html">add to cart</a>
              </span>
            </div>
          </div>
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
          <a class="view-link" href="shop.html">shop now<i class="fa-solid fa-angles-right"></i></a>
        </div>
      </div>
      <div class="view-style item2 wow animate__fadeInUp" data-wow-delay="0.2s">
        <img src="{{ asset('assets/img/gallery/item-1-2.jpg ') }}" alt="Necklace">
        <h2 class="view-title2"><a href="shop.html">necklace</a></h2>
      </div>
      <div class="view-style item3 wow animate__fadeInUp" data-wow-delay="0.3s">
        <img src="{{ asset('assets/img/gallery/item-1-3.jpg ') }}" alt="Earrings">
        <h2 class="view-title2"><a href="shop.html">Earrings</a></h2>
      </div>
      <div class="view-style item4 wow animate__fadeInUp" data-wow-delay="0.4s">
        <img src="{{ asset('assets/img/gallery/item-1-4.jpg ') }}" alt="Bracelet">
        <h2 class="view-title2">
          <a href="shop.html">
            Bracelets
            <span>
          <svg width="19" height="17" viewBox="0 0 19 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line y1="8.25" x2="19" y2="8.25" stroke="white" stroke-width="1.5" />
            <line x1="9.75" y1="3.27836e-08" x2="9.75" y2="17" stroke="white" stroke-width="1.5" />
          </svg>
        </span>
          </a>
        </h2>
      </div>
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
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.2s">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-1.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">triumph watch</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$755.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.3s">
                  <div class="product-style2 version2">
                    <a href="#new" class="product-tag">new</a>
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-2.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">golden line</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$955.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.4s">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-3.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Round Dial semi</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$555.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.5s">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-4.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$355.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.2s">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-6.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$745.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.3s">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-7.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$185.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.4s">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-8.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 wow animate__fadeInUp" data-wow-delay="0.5s">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-9.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$355.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-3 col-md-6">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-9.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">triumph watch</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$755.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <a href="#new" class="product-tag">new</a>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-8.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">golden line</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$655.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-7.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Round Dial semi</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$555.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-6.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$355.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-5.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$325.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-4.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$585.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-3.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$155.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="product-style2 version2">
                    <div class="product-action">
                      <button class="product-action__btn">
                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                      </button>
                      <button class="product-action__btn">
                        <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B" />
                          <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B" />
                        </svg>
                      </button>
                    </div>
                    <div class="product-img">
                      <img class="img" src="{{ asset('assets/img/products5/product-1-2.png ') }}" alt="product">
                    </div>
                    <h3 class="product-title">
                      <a href="shop.html">Black Dial Red</a>
                    </h3>
                    <span class="product-price">
                  <span class="product-price__number">$915.00</span>
                    <a class="product-cart" href="cart.html">add to cart</a>
                    </span>
                  </div>
                </div>
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
            <a href="shop.html" class="vs-btn style5">shop now</a>
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
              <a href="shop.html" class="vs-btn style4" tabindex="0">contact us</a>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
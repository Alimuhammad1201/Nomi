@extends('master')
@section('page-title')
  About Us
@endsection
@section('content')
 <!-- About Us -->
    <section class="space-extra-bottom space-top z-index-common aboutpage-layout1">
      <img class="abele1" src="assets/img/shapes/aboutpage-ele1.png" alt="about page element">
      <img class="abele2" src="assets/img/shapes/aboutpage-ele2.png" alt="about page element">
      <div class="extra-shape"></div>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.2s">
            <div class="title-area mb-4">
              <span class="sec-subtitle">about us</span>
              <h2 class="sec-title text-white">Graceful Drops</h2>
              <img src="assets/img/shapes/title-shape-1.svg" alt="title shape">
              <p class="sec-text pt-20">Lorem ipsum dolor sit amet, conse elit, sedid golden eiusmod tempor
                aboret dolore magna aliqua. ipsum conseel dimonds usndi labois
                sitamet sedid sedid do eiusm.</p>
            </div>
            <div class="row gy-4">
              <div class="col-lg-auto col-md-6">
                <div class="icon-box">
                  <img class="icon-box__media" src="assets/img/icons/vs-about-icon-1.svg" alt="vs-about-icon-1">
                  <h4 class="icon-box__title">Online Booking</h4>
                </div>
              </div>
              <div class="col-lg-auto col-md-6">
                <div class="icon-box">
                  <img class="icon-box__media" src="assets/img/icons/vs-about-icon-2.svg" alt="vs-about-icon-1">
                  <h4 class="icon-box__title">Amazing Deals</h4>
                </div>
              </div>
            </div>
            <hr class="about-divider">
            <div class="row gy-4">
              <div class="col-lg-auto col-md-6">
                <a href="shop.html" class="vs-btn style4" tabindex="0">contact us</a>
              </div>
              <div class="col-lg-auto col-md-6">
                <div class="call-box">
                  <div class="call-box__list">
                    <a href="#">
                      <img src="assets/img/author/about-auth-1-1.jpg" alt="about author">
                    </a>
                    <a href="#">
                      <i class="fa-solid fa-headphones"></i>
                    </a>
                  </div>
                  <div class="call-box__content">
                    <h4 class="call-box__title">call for us</h4>
                    <a class="call-box__subtitle" href="tel:+1444888966">+1 444 888 966</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 mb-30 wow animate__fadeInUp" data-wow-delay="0.3s">
            <div class="img-box4">
              <img src="assets/img/about/about-1-1.jpg" alt="about us" class="img-box4__img1">
              <img src="assets/img/about/about-1-2.svg" alt="about us" class="img-box4__img2">
              <span class="img-box4__shape"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us End -->

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
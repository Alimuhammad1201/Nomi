@extends('master')
@section('page-title')
 {{ $detail->name  }} | Detail
@endsection
@section('content')
 <!-- Products Area -->
    <div class="vs-product-wrapper space-top space-extra-bottom z-index-common">
      <div class="extra-shape"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mb-30">
            <div class="product-slide-row">
              <div class="product-thumb-slide vs-carousel" data-slide-show="4" data-md-slide-show="4" data-sm-slide-show="3" data-xs-slide-show="3" data-asnavfor=".product-big-img" data-vertical="true" data-sm-vertical="false" data-xs-vertical="false">
              	@foreach($sub_images as $img)
                <div>
                  <div class="thumb"><img src="{{ asset('storage/'. $img->images) }}" alt="{{ $detail->name}}"></div>
                </div>
                @endforeach
              </div>
              <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".product-thumb-slide">
                @foreach($sub_images as $img)
                  <div class="img"><img src="{{ asset('storage/'. $img->images) }}" alt="{{ $detail->name}}"></div>
                 @endforeach
               
              </div>
            </div>
          </div>
          <div class="col-lg-5 mb-30">
            <div class="product-about">
              <div class="product-rating">
                <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                  <span></span>
                </div>
                <span class="product-rating__total">{{ $detail->review_count}} review</span>
              </div>
              <h2 class="product-title">{{ $detail->name }}</h2>
              <p class="product-price product-price__number" data-price="{{ $detail->sale_price }}">$ {{ $detail->sale_price }} <span>in stock</span></p>
              <p class="product-desc">{{ strip_tags($detail->description) }}</p>
              <div class="product-swatches-container">
                <div class="swatch swatch1 active"></div>
                <div class="swatch swatch2"></div>
                <div class="swatch swatch3"></div>
              </div>
            <div class="actions">
   <div class="cart_item" data-product-id="1">
    <div class="quantity">
        <div class="quantity__field quantity-container">
            <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
            <div class="quantity__buttons">
                <button class="quantity-plus qty-btn qty-increase"><i class="fa-solid fa-angle-up"></i></button>
                <button class="quantity-minus qty-btn qty-decrease"><i class="fa-solid fa-angle-down"></i></button>
            </div>
        </div>
    </div>
</div>
    <button class="add-to-cart-btn vs-btn" 
        data-product-id="{{ $detail->id }}" 
        data-price="{{ $detail->sale_price }}" 
        data-name="{{ $detail->name }}" 
        data-image="{{ $detail->image }}">
        Add to Cart
    </button>
</div>
              <a class="wish-btn" href="#"><i class="fa-light fa-heart"></i>add to Wishlist</a>
              <hr class="product-divider">
              <div class="product_meta">
                <span>Category :
              <span>
                <a href="#">{{ $detail->category->name}}</a>
              </span>
                </span>
             
             
                </span>
                <span>share :
              <span class="social">
                <a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="instagram" href="#"><i class="fab fa-instagram"></i></a>
                <a class="twitter" href="#"><i class="fab fa-twitter"></i></a>
                <a class="linkedin" href="#"><i class="fab fa-linkedin-in"></i></a>
              </span>
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Products Area End -->
    <div class="space-bottom z-index-common">
      <div class="container">
        <div class="product-description">
          <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">product details</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">additional
                information</button>
            </li> -->
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">review ({{ $detail->review_count}})</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="desc-content">
                <p class="desc-text">{{ strip_tags($detail->description) }}</p>
              </div>
            </div>
           <!--  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="desc-content">
                <div class="product-information">
                  <div class="product-information__item">
                    <span class="product-information__name">Weight</span>
                    <span>0.5 kg</span>
                  </div>
                  <div class="product-information__item">
                    <span class="product-information__name">Dimensions</span>
                    <span>24 × 1 × 2 cm</span>
                  </div>
                  <div class="product-information__item">
                    <span class="product-information__name">Weight</span>
                    <span>0.5kg, 1.5kg, 1kg, 2.5kg, 2kg, 3kg</span>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="desc-content">
                <div class="vs-comments-wrap">
                  <h2 class="inner-title">Latest Reviews</h2>
                  <ul class="comment-list">
                    @foreach($reviews as $row)
                    <li class="review vs-comment-item">
                      <div class="vs-post-comment">
                        <!-- <div class="comment-avater">
                          <img src="/assets/img/shop/reviewer-1.jpg" alt="Comment Author">
                        </div> -->
                        <div class="comment-content">
                          <div class="comment-content__header">
                            <h4 class="name">{{ $row->name}}<span class="commented-on">–  {{ $row->created_at->format('F J, Y') }}</span>
                            </h4>
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                              <span></span>
                            </div>
                          </div>
                          <p class="text">{{ $row->review}}</p>
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                </div>
                <form method="POST" action="{{ route('add.review') }}" name="review_add" id="review_add">
				 @csrf
				    <input type="hidden" name="product_id" value="{{ $detail->id }}">

				    <div class="vs-comment-form review-form">
				        <div id="respond" class="comment-respond">
				            <div class="form-title">
				                <h3 class="blog-inner-title">Add a review</h3>
				                <p>Your email address will not be published. Required fields are marked *</p>

				                  <!-- Display Success Message -->
					                @if(session('success'))
					                    <div class="alert alert-success">
					                        {{ session('success') }}
					                    </div>
					                @endif

				                <!-- Rating Field -->
				                <div class="rating-select">
				                    <label>Your Rating *</label>
				                    <p class="stars">
				                        <span>
				                            <a class="star-1" data-rating="1" href="#">1</a>
				                            <a class="star-2" data-rating="2" href="#">2</a>
				                            <a class="star-3" data-rating="3" href="#">3</a>
				                            <a class="star-4" data-rating="4" href="#">4</a>
				                            <a class="star-5" data-rating="5" href="#">5</a>
				                        </span>
				                    </p>
				                </div>
				                <input type="hidden" name="rating" value="">
				            </div>

				            <!-- Review Fields -->
				            <div class="row">
				                <div class="col-12 form-group">
				                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Your review *">{{ old('description') }}</textarea>
				                     @error('description')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                     @enderror
				                </div>
				                <div class="col-md-6 form-group">
				                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Your Name *" value="{{ old('name') }}">
				                    @error('name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
				                </div>
				                <div class="col-md-6 form-group">
				                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your email *" value="{{ old('email') }}">
				                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
				                </div>

				                <!-- reCAPTCHA field -->
							<div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
				                <div class="col-12 form-group mb-0">
				                    <button class="vs-btn">Submit</button>
				                </div>
				            </div>
				        </div>
				    </div>
				</form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==============================
        Product Two
      ==============================-->
    <section class="space-extra-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-auto mx-auto">
            <div class="title-area text-center">
              <span class="sec-subtitle">highly recommend</span>
              <h2 class="sec-title text-white">top related products</h2>
              <img src="/assets/img/shapes/title-shape-1.svg" alt="title shape">
            </div>
          </div>
        </div>
        <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
           @foreach($relatedProducts as $row)
	          <div class="col-lg-3">
	            <div class="product-style2 version2">
	              <div class="product-img">
	                <img class="img" src="{{ asset('storage/'. $row->image) }}" alt="{{ $row->name }}">
	              </div>
	              <h3 class="product-title">
	                <a href="{{ route('detail', $row->slug) }}">{{ $row->name }}</a>
	              </h3>
	              <span class="product-price product-price__number"  data-price="{{ $row->sale_price }}">$ {{ $row->sale_price }}</span>
	            </div>
	          </div>
	       @endforeach
        </div>
      </div>
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </section>
    <!--==============================
        Product Two End
      ==============================-->
      <script>
        document.querySelectorAll('.stars a').forEach(star => {
            star.addEventListener('click', function(event) {
                event.preventDefault(); 
                let rating = this.getAttribute('data-rating'); 
                document.querySelector('input[name="rating"]').value = rating; 
                document.querySelectorAll('.stars a').forEach(star => {
                    star.classList.remove('selected'); 
                });
                this.classList.add('selected'); 
            });
        });

      </script>
@endsection
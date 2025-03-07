@extends('master')
@section('page-title')
   Shop Page
@endsection
@section('content')
  <!-- Products Area -->
    <div class="space-top space-extra-bottom z-index-common">
      <div class="extra-shape"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-4">
            <aside class="shop-sidebar">
              
              <div class="widget">
                <h3 class="widget_title">Category</h3>
                <div class="category-filter">
                  <ul>
                    @foreach($category_data as $row)
                        <a href="{{ route('category_detail', $row->slug)}}"><li><input type="checkbox" id="babys" name="babys" checked> <label for="babys">{{$row->name}}</label> <span class="total">05</span></li></a>
                    @endforeach
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h3 class="widget_title">Latest Products</h3>
                <div class="latest-product-area">
                    @foreach($category_detail as $row)
                  <div class="latest-product">
                    <div class="media-img"><a href="{{ route('detail', $row->slug) }}"><img src="{{ asset('storage/' . $row->image) }}" alt="product"></a></div>
                    <div class="media-body">
                      <h4 class="product-title"><a class="text-inherit" href="{{ route('detail', $row->slug) }}">{{ $row->name }}</a></h4>
                      <p class="product-price"><span class="currency">$</span>{{ $row->sale_price}}</p>
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
              <div class="widget">
                <h4 class="widget_title">instagram</h4>
                <div class="sidebar-gallery">
                  <div class="gallery-thumb"><img src="assets/img/widget/gal-s-1-1.jpg" alt="Gallery Image" class="w-100">
                  </div>
                  <div class="gallery-thumb"><img src="assets/img/widget/gal-s-1-2.jpg" alt="Gallery Image" class="w-100">
                  </div>
                  <div class="gallery-thumb"><img src="assets/img/widget/gal-s-1-3.jpg" alt="Gallery Image" class="w-100">
                  </div>
                  <div class="gallery-thumb"><img src="assets/img/widget/gal-s-1-4.jpg" alt="Gallery Image" class="w-100">
                  </div>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-xl-9 col-lg-8">
            <div class="vs-sort-bar style2">
              <div class="row gx-4 gy-4 align-items-center">
               
                <div class="col-md-auto">
              
              </div>
            </div>
            <div class="row">
              @foreach($category_detail as $row)
              <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="product-style2 version3">
                  <div class="product-action">
                    <button class="product-action__btn" tabindex="0">
                      <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.465 14.6076C9.21 14.6976 8.79 14.6976 8.535 14.6076C6.36 13.8651 1.5 10.7676 1.5 5.51757C1.5 3.20007 3.3675 1.32507 5.67 1.32507C7.035 1.32507 8.2425 1.98507 9 3.00507C9.7575 1.98507 10.9725 1.32507 12.33 1.32507C14.6325 1.32507 16.5 3.20007 16.5 5.51757C16.5 10.7676 11.64 13.8651 9.465 14.6076Z" stroke="#6D747B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      </svg>
                    </button>
                    <button class="product-action__btn" tabindex="0">
                      <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.5273 6.363C17.8445 4.86967 15.1666 0 9.33323 0C3.4999 0 0.822011 4.86967 0.139122 6.363C0.0474519 6.56312 0 6.78066 0 7.00078C0 7.2209 0.0474519 7.43843 0.139122 7.63856C0.822011 9.13033 3.4999 14 9.33323 14C15.1666 14 17.8445 9.13033 18.5273 7.637C18.6188 7.4371 18.6662 7.21984 18.6662 7C18.6662 6.78016 18.6188 6.5629 18.5273 6.363ZM9.33323 12.4444C4.42779 12.4444 2.13879 8.27089 1.55546 7.00856C2.13879 5.72911 4.42779 1.55556 9.33323 1.55556C14.227 1.55556 16.5168 5.71122 17.111 7C16.5168 8.28878 14.227 12.4444 9.33323 12.4444Z" fill="#6D747B"></path>
                        <path d="M9.33323 3.11145C8.56408 3.11145 7.8122 3.33953 7.17268 3.76685C6.53315 4.19416 6.0347 4.80152 5.74036 5.51213C5.44602 6.22273 5.36901 7.00465 5.51906 7.75902C5.66912 8.51339 6.0395 9.20633 6.58337 9.7502C7.12724 10.2941 7.82017 10.6645 8.57454 10.8145C9.32891 10.9646 10.1108 10.8875 10.8214 10.5932C11.532 10.2989 12.1394 9.80042 12.5667 9.16089C12.994 8.52137 13.2221 7.76949 13.2221 7.00034C13.2209 5.96932 12.8108 4.98088 12.0817 4.25184C11.3527 3.5228 10.3642 3.11269 9.33323 3.11145ZM9.33323 9.33367C8.87174 9.33367 8.42061 9.19683 8.0369 8.94044C7.65318 8.68405 7.35411 8.31963 7.17751 7.89327C7.0009 7.46691 6.9547 6.99775 7.04473 6.54513C7.13476 6.09251 7.35699 5.67675 7.68331 5.35042C8.00963 5.0241 8.42539 4.80187 8.87802 4.71184C9.33064 4.62181 9.79979 4.66802 10.2262 4.84462C10.6525 5.02122 11.0169 5.32029 11.2733 5.70401C11.5297 6.08772 11.6666 6.53885 11.6666 7.00034C11.6666 7.61918 11.4207 8.21267 10.9831 8.65026C10.5456 9.08784 9.95207 9.33367 9.33323 9.33367Z" fill="#6D747B"></path>
                      </svg>
                    </button>
                  </div>
                  <div class="product-img">
                    <img class="img" src="{{ asset('storage/' . $row->image) }}" alt="product">
                  </div>
                  <h3 class="product-title">
                    <a href="{{ route('detail', $row->slug) }}">{{ $row->name}}</a>
                  </h3>
                  <span class="product-price">
                <span class="product-price__number" data-price="{{ $row->sale_price }}">{{ $row->sale_price }}</span>
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
            <div class="vs-pagination pagi-shop">
              <a href="#" class="pagi-btn"><i class="fa-solid fa-angles-left"></i></a>
              <ul>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">...</a></li>
              </ul>
              <a href="#" class="pagi-btn"><i class="fa-solid fa-angles-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Products Area End -->
@endsection
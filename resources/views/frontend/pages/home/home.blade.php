@extends('frontend.master_layout.layout')
@section('title','home-page')
@section('style')
<!-- style -->

<style>




 @media (max-width: 767px){
    .service .hrx-cms{
    width:50%;
    height: 100px;

}
.service .hrx-cms .s-box-hrx {
    width: 100%;
    height: 100%;
}
}

@media (max-width: 991px){
    .service .hrx-cms{
    width: 40%;
    height: 100px;

}
.service .hrx-cms .s-box-hrx {
    width: 100%;
    height: 100%;
}

}

@media (max-width: 1199px){
    .service .hrx-cms{
    width: 30%;
    height: 100px;

}
.service .hrx-cms .s-box-hrx {
    width: 100%;
    height: 100%;
}



}
/* =============================================== */
/* * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

.gallery {
  background: #EEE;
}

.gallery-cell {
  width: 66%;
  height: 200px;
  margin-right: 10px;
  background: #8C8;
  counter-increment: gallery-cell;
} */

/* cell number */
/* .gallery-cell:before {
  display: block;
  text-align: center;
  content: counter(gallery-cell);
  line-height: 200px;
  font-size: 80px;
  color: white;
} */
/* =============================================== */

</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
@section('content')
<!-- service start -->
<section class="service-section section-tb-padding" style="padding-top: 2px;padding-bottom: 2px">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title" style="text-align: center">
                    {{-- <h6>- ◀ Shop by category ▶ -</h6> --}}
                </div>
                <div class="service service-hrx" >

                    @isset($categories)

                  @foreach ($categories as $categorie)
                    {{-- Item Category Start --}}
                    <div class="service-box hrx-cms" style=" margin: auto;width: 50%;">
                        <div class="s-box s-box-hrx">

                                <img src="{{ asset($categorie->image) }}"  width="80" height="80" style="border-radius: 10%" alt="">
                           </div>
                    </div>
                    {{-- Item Category End --}}
                    @endforeach
                    @endisset


                </div>
            </div>
        </div>
    </div>
</section>
{{-- ================================================================== --}}


{{-- ================================================================== --}}



 {{-- Slider section----------------------------------------Start --}}
 <section class="home-slider-6" style="margin-bottom: 10px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="slider-banner">
                    <div class="home-slider-main-6">
                        <div class="home6-slider owl-carousel owl-theme">


                            @if($agent->isMobile())


                            @isset($mobile_sliders)
                            @foreach ($mobile_sliders as $mobile_slider)
                                {{-- screen regulation Less than 700 --}}
                           <div class="items">
                            <div class="img-back" style="background-image:url({{ asset($mobile_slider->image) }});">
                             </div>
                           </div>

                            @endforeach
                            @endisset
                           @else
                           @isset($desktop_sliders)
                           @foreach ($desktop_sliders as $desktop_slider)
                            {{-- screen regulation more than 700 --}}
                            <div class="items">
                                <div class="img-back" style="background-image:url({{ asset($desktop_slider->image) }});">
                                 </div>
                            </div>
                            @endforeach
                            @endisset

                           @endif


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
{{-- Slider section----------------------------------------End --}}

<!--home page slider end-->

<!-- Best Selling products start -->
<section class="featured-product-6 section-b-padding" style="padding-bottom: 10px">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title3">
                    <h2 style="margin-bottom: 20px;margin-top: 20px"><span>◀  Best Selling ▶</span></h2>
                </div>
                <div class="home6-featured owl-carousel owl-theme">

                    @isset($best_selling_products)


                    @foreach ($best_selling_products as $best_selling_product)



                    {{-- single product----start --}}
                    <div class="items" style="border: 1px solid #2277aa;margin: 0px;padding: 0px">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="{{ route('product-details') }}">
                                    <img class="img-fluid" src="{{ asset($best_selling_product->image) }}" alt="pro-img1">
                                    @php
                                        $best_selling_image_two = DB::table('product_images')->where('status', 'published')->where('product_id', $best_selling_product->id)->first();
                                    @endphp

                                    <img class="img-fluid additional-image" src="{{ asset($best_selling_image_two->image) }}" alt="additional image">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                            <div class="pro-icn">
                                {{-- <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a> --}}
                                <a href="{{ route('chackout') }}" class="w-c-q-icn"><i class="fa fa-eye"></i></a>
                                {{-- <a href="{{ route('chackout') }}"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a> --}}

                            </div>
                        </div>
                        <div class="caption">
                            <h3><a href="{{ route('product-details') }}" style="padding-right: 3px;padding-left: 2px">{{ $best_selling_product->name }}</a></h3>
                           <div class="pro-price">
                            <span class="new-price">{{ $best_selling_product->sale_price }}</span>
                        </div>
                            <div class="pro-price" style="margin-bottom: 5px">
                                <a href="{{ route('product-details') }}" class="new-price hrx-order-button ">Order Now</a>
                            </div>

                        </div>
                    </div>
                     {{-- single product----End --}}



                     @endforeach

                     @endisset

                </div>
            </div>
        </div>
    </div>
</section>
<!--  Best Selling products end -->
{{-- Products Start --}}
<section style="background-color: #eee;">
    <div class="text-center container py-5">
      <h4 class="mt-4 mb-5"><strong>Product Section</strong></h4>

      <div class="row">
        @isset($products)


        @foreach ($products as $product)

        {{-- Single Item Start--}}
        <div class="col-lg-3 col-md-3 col-sm-6 col-xl-2 col-xxl-2 col-6 mb-4">
          <div class="card">
            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
              <img src="{{ asset($product->image) }}"
                class="w-100" />
              <a href="{{ route('product-details') }}" >
                <div class="mask" >
                  <div class="d-flex justify-content-start align-items-end h-100" >
                    <h5 ><span class="badge bg-primary ms-1" >Order Now</span></h5>
                  </div>
                </div>
                <div class="hover-overlay">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </div>
              </a>
            </div>
            <div class="card-body">
              <a href="{{ route('product-details') }}" class="text-reset">
                <p class="card-title mb-2">{{  Str::limit($product->name, 30) }}</p>
              </a>
              <h6 class="mb-2">
               <strong class="ms-2 text-danger">{{  $product->sale_price }} TK</strong>
              </h6>
            </div>
          </div>
        </div>
        {{-- Single Item End--}}


        @endforeach

        @endisset


      </div>
    </div>
  </section>
{{-- Products End --}}
<!-- service start -->
<section class="service-section section-tb-padding" style="padding-top: 2px;padding-bottom: 2px">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="service">
                    <div class="service-box">
                        <div class="s-box">
                            <i class="ti-truck"></i>
                            <div class="service-content">
                                <span>Free home delivery</span>
                                <p>Free shipping for orders over $50</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="s-box">
                            <i class="ti-money"></i>
                            <div class="service-content">
                                <span>Return & refund</span>
                                <p>Money back guarantee</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="s-box">
                            <i class="ti-headphone"></i>
                            <div class="service-content">
                                <span>Quality support</span>
                                <p>Alway online 24/7</p>
                            </div>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="s-box">
                            <i class="ti-email"></i>
                            <div class="service-content">
                                <span>Quality Product</span>
                                <p>Inspect all products before shipping</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service end -->
<!-- Cetegory wize product start -->
{{-- <section class="home2-category">
    <div class="container container-category">
        <div class="row">
            <div class="col">
                <div class="section-title" style="text-align: center;margin-block: 20px">
                    <h6>- ◀ Shop by category ▶ -</h6>
                </div>
                <div class="home2-cate-image owl-carousel owl-theme owl-loaded owl-drag">


                <div class=""><div class="owl-stage" style="transform: translate3d(-1512px, 0px, 0px); transition: 0.25s; width: 2184px;">



                     <div class="owl-item categoy-product-slider"><div class="items">
                        <div class="cate-image">
                            <a href="{{ route('shop') }}">
                                <img src="https://www.w3schools.com/css/ocean.jpg" class="img-fluid" alt="cate-image">
                                <span>Organic dryfruit</span>
                            </a>
                        </div>
                    </div>
                </div>

                     <div class="owl-item categoy-product-slider"><div class="items">
                        <div class="cate-image">
                            <a href="{{ route('shop') }}">
                                <img src="https://www.w3schools.com/css/ocean.jpg" class="img-fluid" alt="cate-image">
                                <span>Organic dryfruit</span>
                            </a>
                        </div>
                    </div>
                </div>

                     <div class="owl-item categoy-product-slider"><div class="items">
                        <div class="cate-image">
                            <a href="{{ route('shop') }}">
                                <img src="https://www.w3schools.com/css/ocean.jpg" class="img-fluid" alt="cate-image">
                                <span>Organic dryfruit</span>
                            </a>
                        </div>
                    </div>
                </div>


                </div>
            </div>

            </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- Cetegory wize product end -->

<!-- quick veiw start -->
<section class="quick-view">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product quickview</h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                <div class="quick-veiw-area">
                    <div class="quick-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="image-1">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-2">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/prro-page-image01.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-3">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-4">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image1.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-5">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-6">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-7">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image3.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="tab-pane fade show" id="image-8">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image03.jpg" class="img-fluid" alt="image">
                                </a>
                            </div>
                        </div>
                        <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                            <li class="nav-item items">
                                <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image1.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                            </li>
                            <li class="nav-item items">
                                <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="quick-caption">
                        <h4>Fresh organic reachter</h4>
                        <div class="quick-price">
                            <span class="new-price">$350.00 USD</span>
                            <span class="old-price"><del>$399.99 USD</del></span>
                        </div>
                        <div class="quick-rating">
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star c-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-description">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                        </div>
                        <div class="pro-size">
                            <label>Size: </label>
                            <select>
                                <option>1 ltr</option>
                                <option>3 ltr</option>
                                <option>5 ltr</option>
                            </select>
                        </div>
                        <div class="plus-minus">
                            <span>
                                <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                <input type="text" name="name" value="1">
                                <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                            </span>
                            <a href="{{ route('chackout') }}" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                            <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- quick veiw end -->
@endsection
@section('script')

@endsection

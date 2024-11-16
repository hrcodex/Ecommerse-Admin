@extends('frontend.master_layout.layout')
@section('title','product-details')
@section('style')
<style>

@media (max-width: 300px){
        .hrx-video-height{
        height: 150px;
         }
        .hrx-buynow-btn{
        width: 100%;
         }
    }

    @media (max-width: 318px) and (min-width: 300px){
        .hrx-video-height{
        height: 170px;
         }
         .hrx-buynow-btn{
        width: 100%;
         }
    }
    @media (max-width: 400px) and (min-width: 318px){
        .hrx-video-height{
        height: 200px;
         }
         .hrx-buynow-btn{
        width: 100%;
         }
    }
    @media (max-width: 500px) and (min-width: 400px){
        .hrx-video-height{
        height: 250px;
         }
         .hrx-buynow-btn{
        width: 100%;
         }
    }
    @media (max-width: 700px) and (min-width: 500px){
        .hrx-video-height{
        height: 300px;
         }
         .hrx-buynow-btn{
        width: 100%;
         }
    }
    @media (max-width: 1200px) and (min-width: 700px){
        .hrx-video-height{
        height: 300px;
        width: 600px;
         }

    }

    @media (max-width: 1400px) and (min-width: 1200px){
        .hrx-video-height{
        height: 300px;
        width: 600px;
         }

    }
    @media (max-width: 1400px) and (min-width: 1000px){
        .hrx-video-height{
        height: 300px;
        width: 600px;
         }
    }



</style>
@endsection
@section('content')

        <!-- breadcumb start -->
        <section class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="breadcrumb-start"  style="text-align: center">
                            <ul class="breadcrumb-url">
                                <li class="breadcrumb-url-li">
                                    <a href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="breadcrumb-url-li">
                                    <span>Product Details</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcumb end -->
        <!-- content area start -->
        <section class="section-tb-padding">
            <div class="container">
                <div class="left-right-column">

                    <div class="right-column">
                        <!-- product info start -->
                        <section class="pro-page">
                            <div class="row pro-image">
                                <div class="col-xl-5 col-lg-6 col-md-6 col-12 larg-image">
                                    <div class="tab-content">

                                        <div class="tab-pane fade show active" id="image-11">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset($products->image) }})">
                                                    <img src="{{ asset($products->image) }}" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        @foreach ($products_images as $key=>$products_image)
                                        <div class="tab-pane fade" id="image-{{ ++$key }}">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset($products_image->image) }}">
                                                    <img src="{{ asset($products_image->image) }}" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        @endforeach


                                    </div>
                                    <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                                        <li class="nav-item items">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#image-11"><img src="{{ asset($products->image) }}" class="img-fluid" alt="image"></a>
                                        </li>
                                        @foreach ($products_images as $key=>$products_image)
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-{{ ++$key }}"><img src="{{ asset($products_image->image) }}" class="img-fluid" alt="iamge"></a>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6 col-12 pro-info">
                                    <form action="{{ route('cheakout') }}" method="post">
                                        @csrf
                                    <h4>{{ $products->name }}</h4>

                                    {{-- <div class="pro-availabale">
                                        <span class="available">Availability:</span>
                                        <span class="pro-instock">In stock</span>
                                    </div> --}}
                                    <div class="pro-price">
                                        <span class="new-price" style="font-size: 30px;color: red">৳ {{ $products->sale_price }}</span>

                                        {{-- <div class="Pro-lable">
                                            <span class="p-discount">20%</span>
                                        </div> --}}
                                    </div>
                                    {{-- <span class="pro-details">Contact :  <span class="pro-number">01790370183</span> </span> --}}
                                    <p style="color: rgb(39, 39, 39)">{!! $products->content !!}</p>
                                    {{-- -----------------------Start-------------------------- --}}
                                    @isset($products->atr_Colors)
                                    <div class="pro-items">
                                        <span class="pro-size">Colors:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Colors as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Colors" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_Dimension)
                                    <div class="pro-items">
                                        <span class="pro-size">Dimension:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Dimension as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Dimension" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_Wide)
                                    <div class="pro-items">
                                        <span class="pro-size">Wide:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Wide as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Wide" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_Size)
                                    <div class="pro-items">
                                        <span class="pro-size">Size:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Size as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Size" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_package)
                                    <div class="pro-items">
                                        <span class="pro-size">Package:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_package as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_package" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_Height)
                                    <div class="pro-items">
                                        <span class="pro-size">Height:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Height as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Height" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_Weight)
                                    <div class="pro-items">
                                        <span class="pro-size">Weight:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Weight as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Weight" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_Pieces)
                                    <div class="pro-items">
                                        <span class="pro-size">Pieces:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Pieces as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Pieces" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_Names)
                                    <div class="pro-items">
                                        <span class="pro-size">Names:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Names as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Names" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset
                                    {{-- ------ --}}
                                    @isset($products->atr_Material)
                                    <div class="pro-items">
                                        <span class="pro-size">Material:</span>
                                        <ul class="pro-wight">
                                            @foreach ($products->atr_Material as $key=>$item)
                                            {{-- <li><a href="javascript:void(0)">{{ $Color }}</a></li> --}}
                                            <li><input type="radio" name="atr_Material" @if ($key == 0)checked @endif value="{{ $item }}"><span style="margin-left: 3px;"> {{ $item }}</span></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                    @endisset


                                     {{-- -----------------------End-------------------------- --}}

                                    <div class="pro-qty">
                                        <span class="qty">Quantity:</span>
                                        <div class="plus-minus">
                                            <span>
                                                <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                                <input type="number" name="qty" value="1">
                                                <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pro-btn" >

                                        <button class="btn btn-style1 hrx-buynow-btn" style="background-color: yellow;color: black;font-weight: bold;"><span><i class="fa fa-shopping-bag"></i> Buy now</span></button>
                                        <a href="tel:{{ $settings->phone }}" class="btn btn-style1 hrx-buynow-btn" style="background-color: rgb(32, 210, 207);color: black;font-weight: bold;margin-top: 5px"><span>{{ $settings->phone }}</span></a>
                                        <input type="hidden" name="product_id" value="{{ $products->id }}">

                                    </div>
                                </form>
                                </div>
                            </div>
                        </section>
                        <!-- product info end -->
                        <!-- product page tab start -->
                        <section class="row pro-page-content section-tb-padding">
                            <div class="col">
                                <div class="pro-page-tab">
                                  <div class="tab-pane fade show" id="tab-3">
                                    @isset($products->video_link)


                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe width="100%" src="{{ $products->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="hrx-video-height"></iframe>

                                                {{-- <iframe width="100%"  src="https://www.youtube.com/embed/8GZVUxdoyyU?si=Qb3NupK3A7IjgG9e" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="hrx-video-height"></iframe> --}}
                                            </div>

                                            @endisset
                                            <div class="tab-1content">
                                                <h4>Product Description</h4>
                                                <div class="tab-description">{!! $products->description !!}</div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- product page tab end -->

                        <!-- releted product start -->
                        <section class="pro-releted">
                            <div class="section-title3">
                                <h2><span>Related Products</span></h2>
                            </div>
                            <div class="releted-products owl-carousel owl-theme">

                                {{-- ------------------------Single Product Start --}}
                                @isset($category_products)
                                @foreach ($category_products as $category_product)
                                @if($category_product->id == $products->id)
                                @else



                                <div class="items" style="padding: 10px">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details',['id'=>$category_product->id]) }}">
                                                <img class="img-fluid" src="{{ asset($category_product->image) }}" alt="img">
                                                @php
                                                $product_image_two = DB::table('product_images')->where('status', 'published')->where('product_id', $category_product->id)->first();
                                                @endphp
                                                <img class="img-fluid additional-image" src="{{ asset($product_image_two->image) }}">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                          
                                            <a href="{{ route('product-details',['id'=>$category_product->id]) }}" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>

                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details',['id'=>$category_product->id]) }}" style="padding: 5px">{{ $category_product->name }}</a></h3>

                                        <div class="pro-price">
                                            <span class="new-price">{{ $category_product->sale_price }} TK</span>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @endisset
                                 {{-- ------------------------Single Product End --}}

                            </div>
                        </section>
                        <!-- releted product end -->
                    </div>
                </div>
            </div>
        </section>

@endsection
@section('script')
<!-- jquery -->
<script>
    function zoom(e){
      var zoomer = e.currentTarget;
      e.offsetX ? offsetX = e.offsetX : offsetX = e.touches[0].pageX
      e.offsetY ? offsetY = e.offsetY : offsetX = e.touches[0].pageX
      x = offsetX/zoomer.offsetWidth*100
      y = offsetY/zoomer.offsetHeight*100
      zoomer.style.backgroundPosition = x + '% ' + y + '%';
    }
</script>
<script src="{{ asset('assets/frontend') }}/js/modernizr-2.8.3.min.js"></script>
@endsection

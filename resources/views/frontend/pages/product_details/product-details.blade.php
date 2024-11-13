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
                                    <a href="index5.html">Home</a>
                                </li>
                                <li class="breadcrumb-url-li">
                                    <span>Fresh green orange</span>
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
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url(https://img.freepik.com/premium-photo/cosmetic-products-presentation-mockup-showcase-ai-image_1209683-16885.jpg)">
                                                    <img src="https://img.freepik.com/premium-photo/cosmetic-products-presentation-mockup-showcase-ai-image_1209683-16885.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-22">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('assets/frontend') }}/image/pro-page-image/prro-page-image01.jpg)">
                                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/prro-page-image01.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-33">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image1-1.jpg)">
                                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image1-1.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-44">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image1.jpg)">
                                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image1.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-55">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image2.jpg)">
                                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image2.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-66">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image2-2.jpg)">
                                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image2-2.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-77">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image3.jpg)">
                                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image3.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="tab-pane fade" id="image-88">
                                            <a href="javascript:void(0)" class="long-img">
                                                <figure class="zoom" onmousemove="zoom(event)" style="background-image: url({{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image03.jpg)">
                                                    <img src="{{ asset('assets/frontend') }}/image/pro-page-image/pro-page-image03.jpg" class="img-fluid" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs pro-page-slider owl-carousel owl-theme">
                                        <li class="nav-item items">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#image-11"><img src="https://img.freepik.com/premium-photo/cosmetic-products-presentation-mockup-showcase-ai-image_1209683-16885.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-22"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image2.jpg" class="img-fluid" alt="iamge"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-33"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image3.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-44"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image4.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-55"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image5.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-66"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image6.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-77"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image8.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-88"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/image7.jpg" class="img-fluid" alt="image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6 col-12 pro-info">
                                    <h4>Ayatul Kursi Metal Wall Art | Islamic Wall Decor For Home</h4>

                                    <div class="pro-availabale">
                                        <span class="available">Availability:</span>
                                        <span class="pro-instock">In stock</span>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price" style="font-size: 30px;color: red">৳ 1299.00</span>

                                        <div class="Pro-lable">
                                            <span class="p-discount">20%</span>
                                        </div>
                                    </div>
                                    <span class="pro-details">Contact :  <span class="pro-number">01790370183</span> </span>
                                    <p style="color: rgb(39, 39, 39)">এই ক্যালিগ্রাফি সম্পুর্ন 0.6 মি. মি. Stainless Steel দিয়ে তৈরি করা হয়েছে কেউ {এমএস/লোহা} মনে করবেন না । এসএস কিন্তু ওয়াটার প্রুফ মেটাল তাই সহজেই জং ধরবে না,মরিচা পড়বেনা এবং কালারও নষ্ট হবে না।</p>

                                    <div class="product-color">
                                        <span class="color-label">Color:</span>
                                        <span class="color">
                                            <a href="#" class="active"><img src="https://www.canva.com/design/DAGUrUC9Thc/giNd_Qlc-FwxcEnzIOokNQ/view?utm_content=DAGUrUC9Thc&utm_campaign=designshare&utm_medium=link&utm_source=editor" class="img-fluid" alt="image" width="50" height="50"></a>
                                            <a href="#"><img src="{{ asset('assets/frontend') }}/image/pro-page-image/prro-page-image01.jpg" class="img-fluid" alt="image" width="50" height="50"></a>
                                            <a href="#"><img src="https://www.dinowala.com/products/397160598_303135425912182_1735314622669067209_n1701273700.jpg" class="img-fluid" alt="image" width="50" height="50"></a>
                                        </span>
                                    </div>
                                    <div class="pro-qty">
                                        <span class="qty">Quantity:</span>
                                        <div class="plus-minus">
                                            <span>
                                                <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                                <input type="text" name="name" value="1">
                                                <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pro-btn" >

                                        <a href="{{ route('chackout') }}" class="btn btn-style1 hrx-buynow-btn" style="background-color: yellow;color: black;font-weight: bold;"><span><i class="fa fa-shopping-bag"></i> Buy now</span></a>

                                    </div>

                                </div>
                            </div>
                        </section>
                        <!-- product info end -->
                        <!-- product page tab start -->
                        <section class="row pro-page-content section-tb-padding">
                            <div class="col">
                                <div class="pro-page-tab">
                                  <div class="tab-pane fade show" id="tab-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe width="100%"  src="https://www.youtube.com/embed/8GZVUxdoyyU?si=Qb3NupK3A7IjgG9e" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="hrx-video-height"></iframe>
                                            </div>
                                            <div class="tab-1content">
                                                <h4>Short Description</h4>
                                                <div class="tab-description">
                                                    <p>ক্যালিগ্রাফী এর বিবরণঃ</p>
                                                    <p>𝟏. 𝐒𝐢𝐳𝐞- 𝟏7/𝟐3 𝐢𝐧𝐜𝐡</p>
                                                    <p>𝟐. 𝐓𝐡𝐢𝐜𝐤 – 𝟎.𝟔 𝐦𝐦</p>
                                                    <p>𝟑. 𝐂𝐨𝐥𝐨𝐫 – 𝐋𝐢𝐟𝐞𝐭𝐢𝐦𝐞 𝐂𝐨𝐥𝐨𝐫 𝐆𝐮𝐚𝐫𝐚𝐧𝐭𝐞𝐞</p>
                                                    <p>𝟒. 𝐌𝐞𝐭𝐚𝐥: 𝐒𝐒 𝐌𝐞𝐭𝐚𝐥</p>
                                                    <p>𝟓.𝐖𝐞𝐢𝐠𝐡𝐭: 𝟑𝟗𝟎 𝐠𝐦</p>
                                                    <p>✅এই ক্যালিগ্রাফি সম্পুর্ন 0.6 মি. মি. Stainless Steel দিয়ে তৈরি করা হয়েছে কেউ {এমএস/লোহা} মনে করবেন না । এসএস কিন্তু ওয়াটার প্রুফ মেটাল তাই সহজেই জং ধরবে না,মরিচা পড়বেনা এবং কালারও নষ্ট হবে না।</p>
                                                </div>
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
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-1.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-01.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Fresh organic fruit (50gm)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$130.00 USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-2.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-02.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Fresh & healty food</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$126.00 USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-3.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-03.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-20%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Fresh apple</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$130.00 USD</span>
                                            <span class="old-price"><del>$150.00 USD</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-4.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-04.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Fresh litchi 100% organic</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$117.00 USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-5.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-05.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-12%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Vegetable tomato fresh</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$133.00 USD</span>
                                            <span class="old-price"><del>$145.00 USD</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-6.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-06.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-21%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Natural grassbean</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$139.00 USD</span>
                                            <span class="old-price"><del>$160.00 USD</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-7.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-07.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-10%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Fresh dryed almod (50gm)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                            <i class="fa fa-star e-star"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$580.00 USD</span>
                                            <span class="old-price"><del>$590.00 USD</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-8.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-08.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Orange juice (5ltr)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$93.00 USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-9.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-09.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-12%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Organic coconet (5ltr) juice</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$167.00 USD</span>
                                            <span class="old-price"><del>$179.00 USD</del></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-10.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-010.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Shrimp jumbo (5Lb)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star c-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$230.00 USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-11.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-011.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-text">New</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Sp.red fresh guava</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$45.00 USD</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="items">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="{{ route('product-details') }}">
                                                <img class="img-fluid" src="{{ asset('assets/frontend') }}/image/pro/pro-img-12.jpg" alt="pro-img1">
                                                <img class="img-fluid additional-image" src="{{ asset('assets/frontend') }}/image/pro/pro-img-012.jpg" alt="additional image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-25%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="wishlist.html" class="w-c-q-icn"><i class="fa fa-heart"></i></a>
                                            <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a>
                                            <a href="javascript:void(0)"  class="w-c-q-icn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-eye"></i></a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3><a href="{{ route('product-details') }}">Fresh mussel (500g)</a></h3>
                                        <div class="rating">
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star d-star"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$245.00 USD</span>
                                            <span class="old-price"><del>$270.00 USD</del></span>
                                        </div>
                                    </div>
                                </div>
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

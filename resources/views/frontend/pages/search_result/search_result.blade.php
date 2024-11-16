@extends('frontend.master_layout.layout')
@section('title','shop')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/responsive.css">

@endsection
@section('content')
 <!-- breadcrumb start -->
 <section class="about-breadcrumb">
    <div class="about-back " style="background-image: url({{ asset('assets/frontend') }}/image/about-image.jpg)">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="about-l">
                        <ul class="about-link">
                            <li class="go-home">{{ $products->count() }} Result(s) Found</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->
<!-- grid-list start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
                <div class="all-filter">
                    <div class="categories-page-filter">
                        <h4 class="filter-title">Categories</h4>
                        <a href="#category-filter" data-bs-toggle="collapse" class="filter-link"><span>Categories </span><i class="fa fa-angle-down"></i></a>
                        @isset($categories_shop)
                        <ul class="all-option collapse" id="category-filter">

                            @foreach ($categories_shop as $category)
                            @php
                                $Cat_counts = DB::table('products')->where('status', 'published')->where('category_id', $category->id)->get();

                            @endphp

                            <li class="grid-list-option">

                                <a href="{{ route('category',['id'=>$category->id]) }}">{{ $category->name }} <span class="grid-items">({{ $Cat_counts->count() }})</span></a>
                            </li>
                            @endforeach
                        </ul>
                        @endisset
                    </div>
                    {{-- <div class="price-filter">
                        <h4 class="filter-title">Filter by price</h4>
                        <a href="#price-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by price </span><i class="fa fa-angle-down"></i></a>
                        <ul class="all-price collapse" id="price-filter">
                            <price-range class="price-range">
                                <div class="price-range-group group-range">
                                    <input type="range" class="range" min="0" max="89" value="0" id="range1">
                                    <input type="range" class="range" min="0" max="89" value="89" id="range2">
                                </div>
                                <div class="price-input-group group-input">
                                    <div class="price-range-input input-prefix">
                                        <label class="input-prefix-label">From</label>
                                        <span class="input-prefix-value">$ <span id="demo1"></span></span>
                                    </div>
                                    <span class="price-range-delimeter">-</span>
                                    <div class="price-range-input input-prefix">
                                        <label class="input-prefix-label">To</label>
                                        <span class="input-prefix-value">$ <span id="demo2"></span></span>
                                    </div>
                                </div>
                            </price-range>
                        </ul>
                    </div> --}}

                    {{-- <div class="filter-tag">
                        <h4 class="filter-title">Filter by tags</h4>
                        <a href="#tags-filter" data-bs-toggle="collapse" class="filter-link"><span>Filter by tags </span><i class="fa fa-angle-down"></i></a>
                        <ul class="all-tag collapse" id="tags-filter">
                            <li class="tag"><a href="product.html">Almond</a></li>
                            <li class="tag"><a href="product.html">Banana</a></li>
                            <li class="tag"><a href="product.html">Bitrrot</a></li>
                            <li class="tag"><a href="product.html">Blackberry</a></li>
                            <li class="tag"><a href="product.html">Chikoo</a></li>
                            <li class="tag"><a href="product.html">Coconet</a></li>
                            <li class="tag"><a href="product.html">Guava</a></li>
                            <li class="tag"><a href="product.html">juice</a></li>
                            <li class="tag"><a href="product.html">Ladiesfinger</a></li>
                            <li class="tag"><a href="product.html">Litchi</a></li>
                            <li class="tag"><a href="product.html">Minirrot</a></li>
                            <li class="tag"><a href="product.html">Mussel</a></li>
                            <li class="tag"><a href="product.html">Onion</a></li>
                            <li class="tag"><a href="product.html">Organic-food</a></li>
                            <li class="tag"><a href="product.html">Potato</a></li>
                            <li class="tag"><a href="product.html">Shrimp</a></li>
                            <li class="tag"><a href="product.html">Tomato</a></li>
                        </ul>
                    </div> --}}


                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-12">
                {{-- <div class="grid-list-banner" style="background-image: url({{ asset('assets/frontend') }}/image/slider17.jpg);">
                    <div class="grid-banner-content">
                        <h4>Bestseller</h4>
                        <p>Praesent dapibus, neque id cursus Ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, facilisis luc...</p>
                    </div>
                </div> --}}
                <div class="grid-4-product">
                    {{-- <div class="grid-list-select">
                        <ul class="grid-list">
                            <li class="colloction-icn"><a href="grid-list-2.html"><i class="ti-layout-list-thumb"></i></a></li>
                            <li class="colloction-icn"><a href="grid-list-3.html"><i class="ti-layout-grid2"></i></a></li>
                            <li class="colloction-icn three-grid"><a href="grid-list.html"><i class="ti-layout-grid3"></i></a></li>
                            <li class="colloction-icn four-grid"><a href="grid-list-4.html" class="active"><i class="ti-layout-grid4"></i></a></li>
                        </ul>
                        <ul class="grid-list-selector">
                            <li>
                                <label>Sort by</label>
                                <select>
                                    <option>Featured</option>
                                    <option>Best selling</option>
                                    <option>Alphabetically,A-Z</option>
                                    <option>Alphabetically,Z-A</option>
                                    <option>Price, low to high</option>
                                    <option>Price, high to low</option>
                                    <option>Date new to old</option>
                                    <option>Date old to new</option>
                                </select>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="grid-pro">
                        <ul class="grid-product">


                            @isset($products)



                            @foreach ($products as $product)



                            {{-- /single product Start------------------------------ --}}
                            <li class="grid-items" style="margin-block: 10px">
                                <div class="tred-pro" style="border-top: 1px solid #2277aa;border-left: 1px solid #2277aa;border-right: 1px solid #2277aa;margin: 0px;padding: 0px">
                                    <div class="tr-pro-img" >
                                        <a href="{{ route('product-details',['id'=>$product->id]) }}">
                                            <img class="img-fluid" src="{{ asset($product->image) }}" alt="pro-img1">
                                            @php
                                            $product_image_two = DB::table('product_images')->where('status', 'published')->where('product_id', $product->id)->first();
                                        @endphp
                                            <img class="img-fluid additional-image" src="{{ asset($product_image_two->image) }}" alt="additional image">
                                        </a>

                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">

                                        {{-- <a href="cart.html" class="w-c-q-icn"><i class="fa fa-shopping-bag"></i></a> --}}
                                        {{-- <a href="" class="new-price hrx-order-button-shop ">Order Now</a> --}}

                                    </div>
                                </div>
                                <div class="caption" style="border-bottom: 1px solid #2277aa;border-left: 1px solid #2277aa;border-right: 1px solid #2277aa;margin: 0px;padding: 0px">
                                    <h3><a href="{{ route('product-details',['id'=>$product->id]) }}" style="padding-right: 3px;padding-left: 2px">{{ $product->name }}</a></h3>
                                   <div class="pro-price">

                                    <span class="new-price">{{ $product->sale_price }} TK</span>
                                    <div class="pro-price" >
                                        <a href="{{ route('product-details',['id'=>$product->id]) }}" class="new-price hrx-order-button-shop "><span style="padding: 5px">Order Now</span></a>
                                    </div>
                                </div>


                                </div>
                            </li>
                             {{-- /single product End------------------------------ --}}

                             @endforeach
                             @endisset


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- {{ $products->links('vendor.pagination.custom') }} --}}

        <div class="list-all-page">

            <div class="page-number">
                @isset($products)
                {{ $products->links('vendor.pagination.custom') }}
                @endisset

            </div>
        </div>
    </div>
</section>
<!-- grid-list start -->
@endsection
@section('script')
 <!-- price range -->
 <script src="js/range-slider.js"></script>
 <script src="{{ asset('assets/frontend') }}/js/range-slider.js"></script>
@endsection

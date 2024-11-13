@extends('frontend.master_layout.layout')
@section('title','cheakout-page')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/style2.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/responsive2.css">
@endsection
@section('content')

 <!-- cart start -->
 <section class="cart-page section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-xs-12 col-sm-12 col-md-12 col-lg-5">
                <div class="cart-total">

                    <div class="cart-info " >
                        <h4 style="padding: 3px;
                        margin-bottom: 25px;
                        padding-top: 8px;
                        padding-right: 5px;
                        padding-left: 5px;
                        border-width: 1px;
                        border-style: solid;
                        border-color: rgb(235, 44, 44);
                        box-shadow: inset 0 0 5px rgba(39, 39, 39, 0.1)">অর্ডার কনফার্ম করতে আপনার নাম, ঠিকানা, মোবাইল নাম্বার লিখে অর্ডার কনফার্ম করুন বাটনে ক্লিক করুন</h4>
                        <form>
                             {{-- ------Input Fild Two-------- --}}
                             <label> <h4>আপনার নাম</h4></label>
                             <input type="text" class="" aria-label="Default select example" style="border: 1px solid blue">
                               {{-- ------Input Fild Two-------- --}}
                             <label> <h4>আপনার মোবাইল নাম্বার</h4></label>
                             <input type="text" class="" aria-label="Default select example" style="border: 1px solid blue">
                               {{-- ------Input Fild Two-------- --}}
                             <label> <h4>আপনার সম্পূর্ন ঠিকানা</h4></label>
                             <input type="text" class="" aria-label="Default select example" style="border: 1px solid blue">

                            {{-- ------Input Fild One-------- --}}
                            <label> <h4>ডেলিভারি এলাকা নির্বাচন করুন</h4></label>
                            <select class="form-select" aria-label="Default select example" style="border: 1px solid blue">
                                <option>যেকোনো একটি নির্বাচন করুন----</option>
                                <option>1. ঢাকার ভিতর</option>
                                <option>2. ঢাকার বাহির</option>
                            </select>

                        </form>
                        <a href="{{ route('complete') }}" class="cart-calculate btn btn-style1-order-now">অর্ডার কনফার্ম করুন</a>
                    </div>
                    <div class="shop-total" >
                        <article class="card-body border-top total_section" style="border: 1px solid rgb(39, 39, 39)">
                            <div class="row">
                              <div class="col-md-6 col-6"><p class="h6 text-dark">Subtotal:</p></div>
                              <div class="col-md-6 col-6"><p class="h6 text-dark">৳1,890</p></div>
                              <div class="col-md-6 col-6"><p class="h6 text-dark">Delivery charge: </p></div>
                              <div class="col-md-6 col-6"><p class="h6 text-danger delivery_charge">৳0</p></div>
                              <div style="width: 80%;height: 1px;background-color: rgb(39, 39, 39);margin-bottom: 7px;"></div>
                              <div class="col-md-6 col-6"><p class="h6 text-dark">Total:</p></div>
                              <div class="col-md-6 col-6"><p class="h6 text-dark total">৳1,890</p></div>
                              <input type="hidden" value="1890" id="subtotal">
                              <input type="hidden" value="1890" name="amount" id="amount">

                            </div>

                          </article>
                    </div>


                </div>
            </div>
            <div class="col-xl-8 col-xs-12 col-sm-12 col-md-12 col-lg-7">
                <div class="cart-area">
                    <div class="cart-details">
                        <div class="cart-item">
                            <span class="cart-head">My cart:</span>
                            <span class="c-items">4 item</span>
                        </div>
                        <div class="cart-all-pro">
                            <div class="cart-pro">
                                <div class="cart-pro-image">
                                    <a href="product.html"><img src="{{ asset('assets/frontend') }}/image/cart-page/cart-1/image1.jpg" class="img-fluid" alt="image"></a>
                                </div>
                                <div class="pro-details">
                                    <h4><a href="product.html">Vegetable tomato fresh</a></h4>
                                    <span class="pro-size"><span class="size">Size:</span> 5kg</span>
                                    <span class="pro-shop">Petro demo</span>
                                    <span class="cart-pro-price">$384.51 CAD</span>
                                </div>
                            </div>
                            <div class="qty-item">
                                <div class="center">
                                    <div class="plus-minus">
                                        <span>
                                            <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                            <input type="text" name="name" value="1">
                                            <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                        </span>
                                    </div>
                                    <a href="grid-list.html" class="pro-remove">Remove</a>
                                </div>
                            </div>
                            <div class="all-pro-price">
                                <span>$384.51 CAD</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-area">
                    <div class="cart-details">
                        <div class="cart-all-pro">
                            <div class="cart-pro">
                                <div class="cart-pro-image">
                                    <a href="product.html"><img src="{{ asset('assets/frontend') }}/image/cart-page/cart-1/image3.jpg" class="img-fluid" alt="image"></a>
                                </div>
                                <div class="pro-details">
                                    <h4><a href="product.html">Fresh healthy food</a></h4>
                                    <span class="pro-size"><span class="size">Size:</span> 5kg</span>
                                    <span class="pro-shop">Multiwebinfo</span>
                                    <span class="cart-pro-price">$230.00 CAD</span>
                                </div>
                            </div>
                            <div class="qty-item">
                                <div class="center">
                                    <div class="plus-minus">
                                        <span>
                                            <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                            <input type="text" name="name" value="1">
                                            <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                        </span>
                                    </div>
                                    <a href="grid-list.html" class="pro-remove">Remove</a>
                                </div>
                            </div>
                            <div class="all-pro-price">
                                <span>$460.00 CAD</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-area">
                    <div class="cart-details">
                        <div class="cart-all-pro">
                            <div class="cart-pro">
                                <div class="cart-pro-image">
                                    <a href="product.html"><img src="{{ asset('assets/frontend') }}/image/cart-page/cart-1/image2.jpg" class="img-fluid" alt="image"></a>
                                </div>
                                <div class="pro-details">
                                    <h4><a href="product.html">Fresh green orange</a></h4>
                                    <span class="pro-size"><span class="size">Size:</span> 5kg</span>
                                    <span class="pro-shop">Vegist store</span>
                                    <span class="cart-pro-price">$109.20 CAD</span>
                                </div>
                            </div>
                            <div class="qty-item">
                                <div class="center">
                                    <div class="plus-minus">
                                        <span>
                                            <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                            <input type="text" name="name" value="1">
                                            <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                        </span>
                                    </div>
                                    <a href="grid-list.html" class="pro-remove">Remove</a>
                                </div>
                            </div>
                            <div class="all-pro-price">
                                <span>$109.20 CAD</span>
                            </div>
                        </div>
                        <div class="other-link">
                            <ul class="c-link">
                                <li class="cart-other-link"><a href="grid-list.html" class="btn btn-style1">Update cart</a></li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cart end -->




@endsection
@section('script')

@endsection

@extends('frontend.master_layout.layout')
@section('title','cheakout-page')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/style2.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/responsive2.css">
@endsection
@section('content')
@php
$product = DB::table('products')->where('id', $product_id)->first();
@endphp

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
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                        <form action="{{ route('complete.cheakout',['product_id'=>$product_id]) }}" method="post" >
                            @csrf
                             {{-- ------Input Fild Two-------- --}}
                             <label> <h4>আপনার নাম</h4></label>
                             <input type="text" class="" name="name" aria-label="Default select example" placeholder="সম্পূর্ণ নাম" style="border: 1px solid blue">
                               {{-- ------Input Fild Two-------- --}}
                             <label> <h4>আপনার মোবাইল নাম্বার</h4></label>
                             <input type="text" name="phone" class="" aria-label="Default select example" placeholder="আপনার পার্সোনাল মোবাইল নাম্বার" style="border: 1px solid blue">
                               {{-- ------Input Fild Two-------- --}}
                             <label> <h4>আপনার সম্পূর্ন ঠিকানা</h4></label>
                             <input type="text" name="address" class="" aria-label="Default select example" placeholder="গ্রাম /এলাকা , থানা ,জেলা " style="border: 1px solid blue">

                            {{-- ------Input Fild One-------- --}}
                            <label> <h4>ডেলিভারি এলাকা নির্বাচন করুন</h4></label>
                            <select class="form-select" name="type" aria-label="Default select example" id="deliveryOption" style="border: 1px solid blue">
                                <option value="0" selected>যেকোনো একটি নির্বাচন করুন----</option>
                                <option value="inside">1. ঢাকার ভিতর</option>
                                <option value="outside">2. ঢাকার বাহির</option>
                            </select>


                        <button class="cart-calculate btn btn-style1-order-now" style="margin-top: 10px">অর্ডার কনফার্ম করুন</button>
                    </form>
                    </div>
                    <div class="shop-total" >
                        <article class="card-body border-top total_section" style="border: 1px solid rgb(39, 39, 39)">
                            <div class="row">
                              <div class="col-md-6 col-6"><p class="h6 text-dark">Subtotal:</p></div>
                              <div class="col-md-6 col-6"><p class="h6 text-dark" id="subtotal">{{ $subtotal }}</p></div>
                              <div  class="col-md-6 col-6"><p class="h6 text-dark">Delivery charge: </p></div>
                              <div class="col-md-6 col-6"><p class="h6 text-danger delivery_charge" id="deliveryCharge">0</p></div>
                              <div style="width: 80%;height: 1px;background-color: rgb(39, 39, 39);margin-bottom: 7px;"></div>
                              <div class="col-md-6 col-6"><p class="h6 text-dark">Total:</p></div>
                              <div class="col-md-6 col-6"><p class="h6 text-dark total" id="totalAmount">{{  $product->sale_price*session('qty'); }}</p></div>


                            </div>

                          </article>
                    </div>


                </div>
            </div>
            <div class="col-xl-8 col-xs-12 col-sm-12 col-md-12 col-lg-7">

                <div class="cart-area">
                    <div class="cart-details">
                        <div class="cart-item">
                            <span class="cart-head" style="color: rgb(235, 44, 44)"><span style="color: black">NOTE :</span> সম্পূর্ণ ক্যাশ অন ডেলিভারিতে পণ্য পাঠানো হবে </span>
                            {{-- <span class="c-items">4 item</span> --}}
                        </div>

                    </div>
                </div>
                 {{-- ---------------Item Start----------- --}}

                <div class="cart-area">
                    <div class="cart-details">
                        <div class="cart-all-pro">
                            <div class="cart-pro">
                                <div class="cart-pro-image">
                                    <a href="product.html"><img src="{{ asset($product->image) }}" style="border-radius: 5px" width="100" class="img-fluid" alt="image"></a>
                                </div>
                                <div class="pro-details">
                                    <h4><a href="product.html">{{ Str::limit($product->name, 30) }}</a></h4>

                                    @if (session()->has('qty'))
                                    <span class="pro-size"><span class="size">Quantity:</span> {{ session('qty') }} PS</span>
                                    @endif
                                    @if (session()->has('atr_Colors'))
                                    <span class="pro-size"><span class="size">Colors:</span> {{ session('atr_Colors') }}</span>
                                    @endif
                                    @if (session()->has('atr_Wide'))
                                    <span class="pro-size"><span class="size">Wide:</span> {{ session('atr_Wide') }}</span>
                                    @endif
                                    @if (session()->has('atr_Weight'))
                                    <span class="pro-size"><span class="size">Weight:</span> {{ session('atr_Weight') }}</span>
                                    @endif
                                    @if (session()->has('atr_Size'))
                                    <span class="pro-size"><span class="size">Size:</span> {{ session('atr_Size') }}</span>
                                    @endif
                                    @if (session()->has('atr_Dimension'))
                                    <span class="pro-size"><span class="size">Dimension:</span> {{ session('atr_Dimension') }}</span>
                                    @endif
                                    @if (session()->has('atr_Height'))
                                    <span class="pro-size"><span class="size">Height:</span> {{ session('atr_Height') }}</span>
                                    @endif
                                    @if (session()->has('atr_Pieces'))
                                    <span class="pro-size"><span class="size">Pieces:</span> {{ session('atr_Pieces') }}</span>
                                    @endif
                                    @if (session()->has('atr_Material'))
                                    <span class="pro-size"><span class="size">Material:</span> {{ session('atr_Material') }}</span>
                                    @endif




                                </div>
                            </div>
                            <div class="qty-item">

                                <div class="center">
                                    <div class="plus-minus">
                                        <span>
                                            {{-- <a href="javascript:void(0)" class="minus-btn text-black">-</a> --}}
                                            <input type="text" readonly name="name" value="{{ session('qty') }} PS">
                                            {{-- <a href="javascript:void(0)" class="plus-btn text-black">+</a> --}}
                                        </span>
                                    </div>
                                    {{-- <button href="{{ route('cheakout',['product_id'=>$product_id]) }}" class="pro-remove">Update</button> --}}
                                </div>
                            </div>
                            <div class="all-pro-price">
                                <span>৳{{  $product->sale_price*session('qty'); }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- ---------------Item End----------- --}}





            </div>
        </div>
    </div>
</section>
<!-- cart end -->




@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        // Delivery charges for different options
        const insideDhakaCharge = 80;  // Delivery charge for inside Dhaka
        const outsideDhakaCharge = 150; // Delivery charge for outside Dhaka
        const subtotal = {{ $subtotal }}; // Initial subtotal amount from the database

        // Event listener for the select field
        $('#deliveryOption').change(function () {
            // Get the selected option
            let selectedOption = $(this).val();
            let deliveryCharge = 0;

            // Determine the delivery charge based on the selected option
            if (selectedOption === 'inside') {
                deliveryCharge = insideDhakaCharge;
            } else if (selectedOption === 'outside') {
                deliveryCharge = outsideDhakaCharge;
            }

            // Update the delivery charge <p> tag
            $('#deliveryCharge').text(deliveryCharge);

            // Calculate the new total amount
            let totalAmount = subtotal + deliveryCharge;

            // Update the total amount <p> tag
            $('#totalAmount').text(totalAmount.toFixed(2));
        });
    });
</script>
{{-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get references to the select element and the <p> tag
        const selectElement = document.getElementById('optionSelect');
        const dynamicContent = document.getElementById('dynamicContent');
        const totalAmount = document.getElementById('totalAmount');

        // let totalAmount = parseFloat(totalAmount.textContent) || 0;
        let sum = selectElement + totalAmount;
        // Add event listener to detect changes in the select dropdown
        selectElement.addEventListener('change', function () {
            // Change the content of the <p> tag based on the selected option
            dynamicContent.textContent = `${selectElement.value}`;
            totalAmount.textContent = `${sum.value}`;

            // const sum = selectElement.value + totalAmount;
            // totalAmount.textContent = sum.toFixed(2);


        });
    });
</script> --}}
@endsection

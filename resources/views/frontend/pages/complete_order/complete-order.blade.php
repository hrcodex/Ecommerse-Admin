@extends('frontend.master_layout.layout')
@section('title','complete-order-page')
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/responsive.css">
@endsection
@section('content')
@php
$order = DB::table('orders')->where('id', $order_id)->first();
$order_address = DB::table('order_addresses')->where('order_id', $order_id)->first();
@endphp
<!-- Order complete start -->
<section class="section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="order-area">
                    <div class="order-price">
                        <ul class="total-order">
                            <li>
                                <span class="order-no">Order no. {{ $order->code }}</span>
                                <span class="order-date">{{ $order->created_at }}</span>
                            </li>
                            <li>
                                <span class="total-price">Order total</span>
                                <span class="amount">৳ {{ $order->amount }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="order-details">
                        <span class="text-success order-i"><i class="fa fa-check-circle"></i></span>
                        <h4>Thank you for order</h4>
                        <span class="order-s">Your order will ship within few hours</span>


                        <a href="{{ route('home') }}" class="cart-calculate btn btn-style1-order-now" style="margin-top: 10px">Back To Home</a>
                    </div>
                    <div class="order-delivery">
                        <ul class="delivery-payment">
                            <li class="delivery">
                                <h5>Delivery address</h5>
                                <p>{{ $order_address->address }}</p>

                                <span class="order-span">Mobile no : {{ $order_address->phone }}</span>
                            </li>
                            <li class="pay">
                                <h5>Payment summary</h5>
                                <p class="transition">Order No no : {{ $order->code }}</p>
                                <span class="order-span p-label">
                                    <span class="n-price">Price</span>
                                    <span class="o-price">৳ {{ $order->sub_total }}</span>
                                </span>
                                <span class="order-span p-label">
                                    <span class="n-price">Shipping charge</span>
                                    <span class="o-price">৳ {{ $order->shipping_amount }}</span>
                                </span>
                                <span class="order-span p-label">
                                    <span class="n-price">Order Total</span>
                                    <span class="o-price">৳ {{ $order->amount }}</span>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Order complete end -->
@endsection
@section('script')

@endsection

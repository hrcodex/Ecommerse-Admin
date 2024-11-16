@extends('backend.layout.layout')
@section('title','invoice-details')
@section('style')

@endsection
@section('content')
<div class="container-xxl">

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <!-- Logo & title -->
                    <div class="clearfix pb-3 bg-info-subtle p-lg-3 p-2 m-n2 rounded position-relative">
                        <div class="float-sm-start">
                            <div class="auth-logo">
                                <img class="logo-dark me-1" src="{{ asset('images/assets/front-logo.png') }}" alt="logo-dark" height="24" />
                            </div>
                            <div class="mt-4">
                                <h4>Decor Impression</h4>
                                <address class="mt-3 mb-0">
                                   {{ $generalSettings->address }} <br>
                                    <abbr title="Phone">Phone:</abbr> {{ $generalSettings->phone }}
                                </address>
                            </div>
                        </div>
                        <div class="float-sm-end">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="p-0 pe-5 py-1">
                                                <p class="mb-0 text-dark fw-semibold"> Invoice : </p>
                                            </td>
                                            <td class="text-end text-dark fw-semibold px-0 py-1">{{ $order->code }}</td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 pe-5 py-1">
                                                <p class="mb-0">Order Date: </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0 py-1">{{ $order->created_at->format('d M Y') }} </td>
                                        </tr>

                                        <tr>
                                            <td class="p-0 pe-5 py-1">
                                                <p class="mb-0">Amount : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0 py-1">{{ $order->amount }} TK</td>
                                        </tr>
                                        <tr>
                                            <td class="p-0 pe-5 py-1">
                                                <p class="mb-0">Status : </p>
                                            </td>
                                            <td class="text-end px-0 py-1">@if($order->deliverd==1)<span class="badge bg-success text-white  px-2 py-1 fs-13">Paid</span>@else<span class="badge bg-warning text-white  px-2 py-1 fs-13">Unpaid</span>@endif</td>
                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <div class="position-absolute top-100 start-50 translate-middle">
                            <img src="{{ asset('backend/assets') }}/images/check-2.png" alt="" class="img-fluid">
                        </div> --}}
                    </div>

                    <div class="clearfix pb-3 mt-4">
                        <div class="float-sm-start">
                            <div class="">
                                <h4 class="card-title">Issue From :</h4>
                                <div class="mt-3">
                                    <h4>Decor Impression</h4>
                                    <p class="mb-2">{{ $generalSettings->address }}</p>
                                    <p class="mb-2"><span class="text-decoration-underline">Phone :</span> {{ $generalSettings->phone }}</p>
                                    <p class="mb-2"><span class="text-decoration-underline">Email :</span>{{ $generalSettings->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="float-sm-end">
                            <div class="">
                                <h4 class="card-title">Issue For :</h4>
                                <div class="mt-3">
                                    <h4>{{ $orderAddresse->name }}</h4>
                                    <p class="mb-2">{{ $orderAddresse->address }}</p>
                                    <p class="mb-2"><span class="text-decoration-underline">Phone :</span> {{ $orderAddresse->phone }}</p>
                                    <p class="mb-2"><span class="text-decoration-underline">Email :</span> {{ $orderAddresse->email }}</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive table-borderless text-nowrap table-centered">
                                <table class="table mb-0">
                                    <thead class="bg-light bg-opacity-50">
                                        <tr>
                                            <th class="border-0 py-2">Product Name</th>
                                            <th class="border-0 py-2">Quantity</th>
                                            <th class="border-0 py-2">Price</th>


                                        </tr>
                                    </thead> <!-- end thead -->
                                    <tbody>

                                        {{-- ------item start --}}
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="rounded bg-light avatar d-flex align-items-center justify-content-center">
                                                        <img src="{{ asset('backend/assets') }}/images/product/p-5.png" alt="" class="avatar">
                                                    </div>
                                                    <div>
                                                        <a href="#!" class="text-dark fw-medium fs-15">Dark Green Cargo Pent</a>
                                                        @isset($orderProduct->atr_Colors)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Color : </span>{{ $orderProduct->atr_Colors }}</p>
                                                        @endisset
                                                        {{-- --------- --}}
                                                        @isset($orderProduct->atr_Wide)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Wide : </span>{{ $orderProduct->atr_Wide }}</p>
                                                        @endisset
                                                        {{-- --------- --}}
                                                        @isset($orderProduct->atr_Size)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>{{ $orderProduct->atr_Size }}</p>
                                                        @endisset
                                                        {{-- --------- --}}
                                                        @isset($orderProduct->atr_package)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Package : </span>{{ $orderProduct->atr_package }}</p>
                                                        @endisset
                                                        {{-- --------- --}}
                                                        @isset($orderProduct->atr_Dimension)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Dimension : </span>{{ $orderProduct->atr_Dimension }}</p>
                                                        @endisset
                                                        {{-- --------- --}}
                                                        @isset($orderProduct->atr_Height)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Height : </span>{{ $orderProduct->atr_Height }}</p>
                                                        @endisset
                                                        {{-- --------- --}}
                                                        @isset($orderProduct->atr_Weight)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Weight : </span>{{ $orderProduct->atr_Weight }}</p>
                                                        @endisset
                                                        {{-- --------- --}}
                                                        @isset($orderProduct->atr_Names)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Names : </span>{{ $orderProduct->atr_Names }}</p>
                                                        @endisset
                                                        {{-- --------- --}}
                                                        @isset($orderProduct->atr_Material)
                                                        <p class="text-muted mb-0 mt-1 fs-13"><span>Material : </span>{{ $orderProduct->atr_Material }}</p>
                                                        @endisset
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{ $orderProduct->qty }}</td>
                                            <td>{{ $orderProduct->price }} TK</td>


                                        </tr>



                                          {{-- ------item start --}}



                                    </tbody> <!-- end tbody -->
                                </table> <!-- end table -->
                            </div> <!-- end table responsive -->
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                    <div class="row justify-content-end">
                        <div class="col-lg-5 col-6">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr class="">
                                            <td class="text-end p-0 pe-5 py-2">
                                                <p class="mb-0"> Sub Total : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium  py-2">{{ $order->sub_total }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-end p-0 pe-5 py-2">
                                                <p class="mb-0">Delivery Charge : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium  py-2">{{ number_format($order->shipping_amount) }}</td>
                                        </tr>

                                        <tr class="border-top">
                                            <td class="text-end p-0 pe-5 py-2">
                                                <p class="mb-0 text-dark fw-semibold">Total Amount : </p>
                                            </td>
                                            <td class="text-end text-dark fw-semibold  py-2">{{ $order->amount }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->


                    <div class="mt-3 mb-1">
                        <div class="text-end d-print-none">
                            <a href="javascript:window.print()" class="btn btn-info width-xl">Print</a>
                            {{-- <a href="javascript:void(0);" class="btn btn-outline-primary width-xl">Submit</a> --}}
                        </div>
                    </div>

                </div> <!-- end card body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>


@endsection
@section('script')

@endsection

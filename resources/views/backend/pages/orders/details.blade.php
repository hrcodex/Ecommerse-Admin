@extends('backend.layout.layout')
@section('title','orders-details')
@section('style')

@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
         <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">Order Details</h4>
                    <a href="{{ route('admin.orders.list') }}" class="btn btn-sm btn-blue">
                        Back <i class="fa-solid fa-backward mr-2"></i>
                    </a>
               </div>
            </div>
              <div class="row">
                   <div class="col-lg-12">
                        <div class="card">
                             <div class="card-body">
                                  <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                                       <div>
                                            <h4 class="fw-medium text-dark d-flex align-items-center gap-2">#{{ $order->code }}
                                                {{-- @if ($order->deliverd ==1)
                                                <span class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Paid</span>
                                                @else
                                                <span class="badge bg-warning-subtle text-secondary  px-2 py-1 fs-13">UnPaid</span>
                                                @endif --}}

                                                @if ($order->unconfirmed == 1)
                                               <span class="badge border border-warning text-secondary  px-2 py-1 fs-13">Unconfirmed</span>
                                               @endif
                                               @if ($order->confirmed == 1)
                                               <span class="badge border border-blue text-success  px-2 py-1 fs-13">Confirmed</span>
                                               @endif
                                               @if ($order->painding == 1)
                                               <span class="badge border border-warning text-warning  px-2 py-1 fs-13">Painding</span>
                                               @endif
                                               @if ($order->deliverd == 1)
                                               <span class="badge border border-success text-success  px-2 py-1 fs-13">Deliverd</span>
                                               @endif
                                               @if ($order->return == 1)
                                               <span class="badge border border-danger text-danger  px-2 py-1 fs-13">Return</span>
                                               @endif
                                               @if ($order->return_accepted == 1)
                                               <span class="badge border border-danger text-danger  px-2 py-1 fs-13">Return Received</span>
                                               @endif
                                            </h4>
                                            <p class="mb-0">Order ID / {{ $order->code }}</p>
                                            <p class="mb-0">{{ $order->created_at->format('D , M-d') }}, {{ $order->created_at->format('Y') }} at {{ $order->created_at->format('h:i') }}</p>
                                       </div>

                                       <div>

                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary">  @if ($order->unconfirmed == 1)
                                                Unconfirmed
                                                @endif
                                                @if ($order->confirmed == 1)
                                                Confirmed
                                                @endif
                                                @if ($order->painding == 1)
                                                Painding
                                                @endif
                                                @if ($order->deliverd == 1)
                                                Deliverd
                                                @endif
                                                @if ($order->return == 1)
                                                Return
                                                @endif
                                                @if ($order->return_accepted == 1)
                                                Return Received
                                                @endif</button>
                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false"></button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{ route('admin.orders.change.status',['id'=>$order->id,'sl_id'=>'6']) }}">Unconfirmed</a></li>
                                                <li><a class="dropdown-item" href="{{ route('admin.orders.change.status',['id'=>$order->id,'sl_id'=>'1']) }}">Confirmed</a></li>
                                                <li><a class="dropdown-item" href="{{ route('admin.orders.change.status',['id'=>$order->id,'sl_id'=>'2']) }}">Painding</a></li>
                                                <li><a class="dropdown-item" href="{{ route('admin.orders.change.status',['id'=>$order->id,'sl_id'=>'3']) }}">Deliverd</a></li>
                                                <li><a class="dropdown-item" href="{{ route('admin.orders.change.status',['id'=>$order->id,'sl_id'=>'4']) }}">Return</a></li>
                                                <li><a class="dropdown-item" href="{{ route('admin.orders.change.status',['id'=>$order->id,'sl_id'=>'5']) }}">Return Received</a></li>


                                            </ul>
                                        </div>

                                       </div>

                                  </div>

                                  <div class="mt-4">
                                       <h4 class="fw-medium text-dark">Progress</h4>
                                  </div>
                                  <div class="row row-cols-xxl-5 row-cols-md-2 row-cols-1">
                                       {{-- <div class="col">
                                            <div class="progress mt-3" style="height: 10px;">
                                                 <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                 </div>
                                            </div>
                                            <p class="mb-0 mt-2">Order Confirming</p>
                                       </div>
                                       <div class="col">
                                            <div class="progress mt-3" style="height: 10px;">
                                                 <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                 </div>
                                            </div>
                                            <p class="mb-0 mt-2">Payment Pending</p>
                                       </div> --}}
                                       <div class="col">
                                            <div class="progress mt-3" style="height: 10px;">
                                                 <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:
                                                 @if ($order->unconfirmed == 1)
                                                 20%
                                                 @elseif ($order->confirmed == 1)
                                                 40%
                                                 @elseif ($order->painding == 1)
                                                 60%
                                                 @elseif ($order->deliverd == 1)
                                                 100%
                                                 @elseif ($order->return == 1)
                                                 50%
                                                 @elseif ($order->return_accepted == 1)
                                                 0%
                                                 @endif" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                 </div>
                                            </div>
                                            <div class="d-flex align-items-center gap-2 mt-2">
                                                 <p class="mb-0">Processing</p>
                                                 <div class="spinner-border spinner-border-sm text-warning" role="status">
                                                      <span class="visually-hidden">Loading...</span>
                                                 </div>
                                            </div>
                                       </div>
                                       {{-- <div class="col">
                                            <div class="progress mt-3" style="height: 10px;">
                                                 <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                 </div>
                                            </div>
                                            <p class="mb-0 mt-2">Shipping</p>
                                       </div>
                                       <div class="col">
                                            <div class="progress mt-3" style="height: 10px;">
                                                 <div class="progress-bar progress-bar  progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 0%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                                 </div>
                                            </div>
                                            <p class="mb-0 mt-2">Delivered</p>
                                       </div> --}}
                                  </div>
                             </div>
                             <div class="card-footer d-flex flex-wrap align-items-center justify-content-between bg-light-subtle gap-2">
                                  <p class="border rounded mb-0 px-2 py-1 bg-body"><i class='bx bx-arrow-from-left align-middle fs-16'></i> Estimated shipping date : <span class="text-dark fw-medium">Between 3-4 Days</span></p>
                                  <div>
                                       <a href="#!" class="btn btn-primary">Make As Ready To Ship</a>
                                  </div>
                             </div>
                        </div>
                        <div class="card">
                             <div class="card-header">
                                  <h4 class="card-title">Product</h4>
                             </div>
                             <div class="card-body">
                                  <div class="table-responsive">
                                       <table class="table align-middle mb-0 table-hover table-centered">
                                            <thead class="bg-light-subtle border-bottom">
                                                 <tr>
                                                      <th>Product Name & Size</th>
                                                      {{-- <th>Status</th> --}}
                                                      <th>Quantity</th>
                                                      <th>Price</th>
                                                      <th>Delivery Charge</th>
                                                      <th>Total Amount</th>
                                                 </tr>
                                            </thead>
                                            <tbody>
                                                 <tr>
                                                      <td>
                                                           <div class="d-flex align-items-center gap-2">
                                                                <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                     <img src="{{ asset($orderProduct->product_image) }}" alt="" class="avatar-md " style="border-radius: 5px">
                                                                </div>
                                                                <div>
                                                                     <a href="#!" class="text-dark fw-medium fs-15">{{ $orderProduct->name }}</a>
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

                                                      {{-- <td>
                                                           <span class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Ready</span>
                                                      </td> --}}
                                                      <td>( {{ $orderProduct->qty }} ) PS</td>
                                                      <td>{{ $orderProduct->price }} TK</td>
                                                      <td>{{ number_format($order->shipping_amount) }} TK</td>
                                                      <td>
                                                        {{ $order->amount }} TK
                                                      </td>
                                                 </tr>


                                                 {{-- <tr>
                                                      <td>
                                                           <div class="d-flex align-items-center gap-2">
                                                                <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                     <img src="{{ asset('backend') }}/assets/images/product/p-5.png" alt="" class="avatar-md">
                                                                </div>
                                                                <div>
                                                                     <a href="#!" class="text-dark fw-medium fs-15">Dark Green Cargo Pent</a>
                                                                     <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>M</p>
                                                                </div>
                                                           </div>

                                                      </td>

                                                      <td>
                                                           <span class="badge bg-light text-dark  px-2 py-1 fs-13">Packaging</span>
                                                      </td>
                                                      <td> 3</td>
                                                      <td>$330.00</td>
                                                      <td> $4.00</td>
                                                      <td>
                                                           $334.00
                                                      </td>
                                                 </tr>

                                                 <tr>
                                                      <td>
                                                           <div class="d-flex align-items-center gap-2">
                                                                <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                     <img src="{{ asset('backend') }}/assets/images/product/p-8.png" alt="" class="avatar-md">
                                                                </div>
                                                                <div>
                                                                     <a href="#!" class="text-dark fw-medium fs-15">Men Dark Brown Wallet</a>
                                                                     <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S</p>
                                                                </div>
                                                           </div>

                                                      </td>

                                                      <td>
                                                           <span class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Ready</span>
                                                      </td>
                                                      <td> 1</td>
                                                      <td>$132.00</td>
                                                      <td> $5.00</td>
                                                      <td>
                                                           $137.00
                                                      </td>
                                                 </tr>

                                                 <tr>
                                                      <td>
                                                           <div class="d-flex align-items-center gap-2">
                                                                <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                                     <img src="{{ asset('backend') }}/assets/images/product/p-10.png" alt="" class="avatar-md">
                                                                </div>
                                                                <div>
                                                                     <a href="#!" class="text-dark fw-medium fs-15">Kid's Yellow T-shirt</a>
                                                                     <p class="text-muted mb-0 mt-1 fs-13"><span>Size : </span>S </p>
                                                                </div>
                                                           </div>

                                                      </td>

                                                      <td>
                                                           <span class="badge bg-light text-dark  px-2 py-1 fs-13">Packaging</span>
                                                      </td>
                                                      <td> 2</td>
                                                      <td>$220.00</td>
                                                      <td> $3.00</td>
                                                      <td>
                                                           $223.00
                                                      </td>
                                                 </tr> --}}
                                            </tbody>
                                       </table>
                                  </div>
                             </div>
                        </div>
                        <div class="card">
                             <div class="card-header">
                                  <h4 class="card-title">Order Timeline</h4>
                             </div>
                             <div class="card-body">
                                  <div class="position-relative ms-2">
                                       <span class="position-absolute start-0  top-0 border border-dashed h-100"></span>
                                       <div class="position-relative ps-4">
                                            <div class="mb-4">
                                                 <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle">
                                                      <div class="spinner-border spinner-border-sm text-warning" role="status">
                                                           <span class="visually-hidden">Loading...</span>
                                                      </div>
                                                 </span>
                                                 <div class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                      <div>
                                                           <h5 class="mb-1 text-dark fw-medium fs-15">The Processing has been started</h5>
                                                           <p class="mb-0">Confirmed by {{ Auth::user()->name }}</p>
                                                      </div>
                                                      {{-- <p class="mb-0">April 23, 2024, 09:40 am</p> --}}

                                                 </div>
                                            </div>
                                       </div>
                                       {{-- <div class="position-relative ps-4">
                                            <div class="mb-4">
                                                 <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                      <i class='bx bx-check-circle'></i>
                                                 </span>
                                                 <div class="ms-2 d-flex flex-wrap gap-2  align-items-center justify-content-between">
                                                      <div>
                                                           <h5 class="mb-1 text-dark fw-medium fs-15">The Invoice has been sent to the customer</h5>
                                                           <p class="mb-2">Invoice email was sent to <a href="#!" class="link-primary">hello@dundermuffilin.com</a></p>
                                                           <a href="#!" class="btn btn-light">Resend Invoice</a>
                                                      </div>
                                                      <p class="mb-0">April 23, 2024, 09:40 am</p>

                                                 </div>
                                            </div>
                                       </div> --}}
                                       <div class="position-relative ps-4">
                                            <div class="mb-4">
                                                 <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                      <i class='bx bx-check-circle'></i>
                                                 </span>
                                                 <div class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                      <div>
                                                           <h5 class="mb-1 text-dark fw-medium fs-15">The Invoice has been created</h5>
                                                           <p class="mb-2">Invoice created by {{ Auth::user()->name }}</p>
                                                           <a href="{{ route('admin.invoice.generate.pdf',['id'=>$order->id]) }}" class="btn btn-primary">Download Invoice</a>
                                                      </div>
                                                      {{-- <p class="mb-0">April 23, 2024, 09:40 am</p> --}}

                                                 </div>
                                            </div>
                                       </div>
                                       {{-- <div class="position-relative ps-4">
                                            <div class="mb-4">
                                                 <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                      <i class='bx bx-check-circle'></i>
                                                 </span>
                                                 <div class="ms-2 d-flex flex-wrap gap-2 align-items-center justify-content-between">
                                                      <div>
                                                           <h5 class="mb-1 text-dark fw-medium fs-15">Order Payment</h5>
                                                           <p class="mb-2">Using Master Card</p>
                                                           <div class="d-flex align-items-center gap-2">
                                                                <p class="mb-1 text-dark fw-medium">Status :</p>
                                                                <span class="badge bg-success-subtle text-success  px-2 py-1 fs-13">Paid</span>
                                                           </div>
                                                      </div>
                                                      <p class="mb-0">April 23, 2024, 09:40 am</p>

                                                 </div>
                                            </div>
                                       </div>
                                       <div class="position-relative ps-4">
                                            <div class="mb-2">
                                                 <span class="position-absolute start-0 avatar-sm translate-middle-x bg-light d-inline-flex align-items-center justify-content-center rounded-circle text-success fs-20">
                                                      <i class='bx bx-check-circle'></i>
                                                 </span>
                                                 <div class="ms-2 d-flex flex-wrap gap-2  align-items-center justify-content-between">
                                                      <div>
                                                           <h5 class="mb-2 text-dark fw-medium fs-15">4 Order conform by Gaston Lapierre</h5>
                                                           <a href="#!" class="badge bg-light text-dark fw-normal  px-2 py-1 fs-13">Order 1</a>
                                                           <a href="#!" class="badge bg-light text-dark fw-normal  px-2 py-1 fs-13">Order 2</a>
                                                           <a href="#!" class="badge bg-light text-dark fw-normal  px-2 py-1 fs-13">Order 3</a>
                                                           <a href="#!" class="badge bg-light text-dark fw-normal  px-2 py-1 fs-13">Order 4</a>
                                                      </div>
                                                      <p class="mb-0">April 23, 2024, 09:40 am</p>

                                                 </div>
                                            </div>
                                       </div> --}}
                                  </div>
                             </div>
                        </div>
                        {{-- <div class="card bg-light-subtle">
                             <div class="card-body">
                                  <div class="row g-3 g-lg-0">
                                       <div class="col-lg-3 border-end">
                                            <div class="d-flex align-items-center gap-3 justify-content-between px-3">
                                                 <div>
                                                      <p class="text-dark fw-medium fs-16 mb-1">Vender</p>
                                                      <p class="mb-0">Catpiller</p>
                                                 </div>
                                                 <div class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                      <iconify-icon icon="solar:shop-2-bold-duotone" class="fs-35 text-primary"></iconify-icon>
                                                 </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-3 border-end">
                                            <div class="d-flex align-items-center gap-3 justify-content-between px-3">
                                                 <div>
                                                      <p class="text-dark fw-medium fs-16 mb-1">Date</p>
                                                      <p class="mb-0">April 23 , 2024</p>
                                                 </div>
                                                 <div class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                      <iconify-icon icon="solar:calendar-date-bold-duotone" class="fs-35 text-primary"></iconify-icon>
                                                 </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-3 border-end">
                                            <div class="d-flex align-items-center gap-3 justify-content-between px-3">
                                                 <div>
                                                      <p class="text-dark fw-medium fs-16 mb-1">Paid By</p>
                                                      <p class="mb-0">Gaston Lapierre</p>
                                                 </div>
                                                 <div class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                      <iconify-icon icon="solar:user-circle-bold-duotone" class="fs-35 text-primary"></iconify-icon>
                                                 </div>
                                            </div>
                                       </div>
                                       <div class="col-lg-3">
                                            <div class="d-flex align-items-center gap-3 justify-content-between px-3">
                                                 <div>
                                                      <p class="text-dark fw-medium fs-16 mb-1">Reference #IMEMO</p>
                                                      <p class="mb-0">#0758267/90</p>
                                                 </div>
                                                 <div class="avatar bg-light d-flex align-items-center justify-content-center rounded">
                                                      <iconify-icon icon="solar:clipboard-text-bold-duotone" class="fs-35 text-primary"></iconify-icon>
                                                 </div>
                                            </div>
                                       </div>
                                  </div>
                             </div>
                        </div> --}}
                   </div>
              </div>
         </div>
         <div class="col-xl-3 col-lg-4">
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title">Order Summary</h4>
                   </div>
                   <div class="card-body">
                        <div class="table-responsive">
                             <table class="table mb-0">
                                  <tbody>
                                       <tr>
                                            <td class="px-0">
                                                 <p class="d-flex mb-0 align-items-center gap-1"> Sub Total : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0">{{ $order->sub_total }} TK</td>
                                       </tr>
                                       {{-- <tr>
                                            <td class="px-0">
                                                 <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:ticket-broken" class="align-middle"></iconify-icon> Discount : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0">-$60.00</td>
                                       </tr> --}}
                                       <tr>
                                            <td class="px-0">
                                                 <p class="d-flex mb-0 align-items-center gap-1">Delivery Charge : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0">{{ number_format($order->shipping_amount) }} TK</td>
                                       </tr>
                                       {{-- <tr>
                                            <td class="px-0">
                                                 <p class="d-flex mb-0 align-items-center gap-1"><iconify-icon icon="solar:calculator-minimalistic-broken" class="align-middle"></iconify-icon> Estimated Tax (15.5%) : </p>
                                            </td>
                                            <td class="text-end text-dark fw-medium px-0">$20.00</td>
                                       </tr> --}}

                                  </tbody>
                             </table>
                        </div>
                   </div>
                   <div class="card-footer d-flex align-items-center justify-content-between bg-light-subtle">
                        <div>
                             <p class="fw-medium text-dark mb-0">Total Amount</p>
                        </div>
                        <div>
                             <p class="fw-medium text-dark mb-0">{{ $order->amount }} TK</p>
                        </div>

                   </div>
              </div>
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title">Payment Information</h4>
                   </div>
                   <div class="card-body">
                        <div class="d-flex align-items-center gap-3">
                             {{-- <div class="rounded-3 bg-light avatar d-flex align-items-center justify-content-center">
                                  <img src="{{ asset('backend') }}/assets/images/card/mastercard.svg" alt="" class="avatar-sm">
                             </div> --}}
                             <div>
                                  <p class="mb-1 text-dark fw-medium">Cash On Delivery</p>
                                  {{-- <p class="mb-0 text-dark">xxxx xxxx xxxx 7812</p> --}}
                             </div>
                             <div class="ms-auto">
                                  <iconify-icon icon="solar:check-circle-broken" class="fs-22 text-success"></iconify-icon>
                             </div>
                        </div>
                        {{-- <p class="text-dark mb-1 fw-medium">Transaction ID : <span class="text-muted fw-normal fs-13"> #IDN768139059</span></p>
                        <p class="text-dark mb-0 fw-medium">Card Holder Name : <span class="text-muted fw-normal fs-13"> Gaston Lapierre</span></p> --}}

                   </div>
              </div>
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title">Customer Details</h4>
                   </div>
                   <div class="card-body">
                        <div class="d-flex align-items-center gap-2">
                             <img src="https://static.vecteezy.com/system/resources/thumbnails/000/439/863/small/Basic_Ui__28186_29.jpg" alt="" class="avatar rounded-3 border border-light border-3">
                             <div>
                                  <p class="mb-1">{{ $orderAddresse->name }}</p>
                                  <a href="#!" class="link-primary fw-medium">{{ $orderAddresse->email }}</a>
                             </div>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                             <h5 class="">Contact Number</h5>
                             <div>
                                  {{-- <a href="#!"><i class='bx bx-edit-alt fs-18'></i></a> --}}
                             </div>
                        </div>
                        <p class="mb-1">{{ $orderAddresse->phone }}</p>

                        <div class="d-flex justify-content-between mt-3">
                             <h5 class="">Shipping Address</h5>
                             <div>
                                  {{-- <a href="#!"><i class='bx bx-edit-alt fs-18'></i></a> --}}
                             </div>
                        </div>

                        <div>
                            {{ $orderAddresse->address }}
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                             <h5 class="">Billing Address</h5>
                             <div>
                                  {{-- <a href="#!"><i class='bx bx-edit-alt fs-18'></i></a> --}}
                             </div>
                        </div>

                        <p class="mb-1">Same as shipping address</p>
                   </div>
              </div>
              {{-- <div class="card">
                   <div class="card-body">
                        <div class="mapouter">
                             <div class="gmap_canvas"><iframe class="gmap_iframe rounded" width="100%" style="height: 418px;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1980&amp;height=400&amp;hl=en&amp;q=University%20of%20Oxford&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
                        </div>
                   </div>
              </div> --}}
         </div>
    </div>
</div>

@endsection
@section('script')

@endsection

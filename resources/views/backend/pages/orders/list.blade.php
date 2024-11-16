@extends('backend.layout.layout')
@section('title','orders-list')
@section('style')

@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
         <div class="col-md-6 col-xl-3">
              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                             <div>
                                  <h4 class="card-title mb-2">Payment Refund</h4>
                                  <p class="text-muted fw-medium fs-22 mb-0">490</p>
                             </div>
                             <div>
                                  <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                       <iconify-icon icon="solar:chat-round-money-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
         </div>
         <div class="col-md-6 col-xl-3">
              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                             <div>
                                  <h4 class="card-title mb-2">Order Cancel</h4>
                                  <p class="text-muted fw-medium fs-22 mb-0">241</p>
                             </div>
                             <div>
                                  <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                       <iconify-icon icon="solar:cart-cross-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
         </div>

         <div class="col-md-6 col-xl-3">
              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                             <div>
                                  <h4 class="card-title mb-2">Order Shipped</h4>
                                  <p class="text-muted fw-medium fs-22 mb-0">630</p>
                             </div>
                             <div>
                                  <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                       <iconify-icon icon="solar:box-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
         </div>

         <div class="col-md-6 col-xl-3">
              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                             <div>
                                  <h4 class="card-title mb-2">Order Delivering</h4>
                                  <p class="text-muted fw-medium fs-22 mb-0">170</p>
                             </div>
                             <div>
                                  <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                       <iconify-icon icon="solar:tram-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
         </div>

         <div class="col-md-6 col-xl-3">
              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                             <div>
                                  <h4 class="card-title mb-2">Pending Review</h4>
                                  <p class="text-muted fw-medium fs-22 mb-0">210</p>
                             </div>
                             <div>
                                  <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                       <iconify-icon icon="solar:clipboard-remove-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
         </div>
         <div class="col-md-6 col-xl-3">
              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                             <div>
                                  <h4 class="card-title mb-2">Pending Payment</h4>
                                  <p class="text-muted fw-medium fs-22 mb-0">608</p>
                             </div>
                             <div>
                                  <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                       <iconify-icon icon="solar:clock-circle-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
         </div>
         <div class="col-md-6 col-xl-3">
              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                             <div>
                                  <h4 class="card-title mb-2">Delivered</h4>
                                  <p class="text-muted fw-medium fs-22 mb-0">200</p>
                             </div>
                             <div>
                                  <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                       <iconify-icon icon="solar:clipboard-check-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
         </div>
         <div class="col-md-6 col-xl-3">
              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                             <div>
                                  <h4 class="card-title mb-2">In Progress</h4>
                                  <p class="text-muted fw-medium fs-22 mb-0">656</p>
                             </div>
                             <div>
                                  <div class="avatar-md bg-primary bg-opacity-10 rounded">
                                       <iconify-icon icon="solar:inbox-line-broken" class="fs-32 text-primary avatar-title"></iconify-icon>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
         </div>
    </div>

    <div class="row">
         <div class="col-xl-12">
              <div class="card">
                   <div class="d-flex card-header justify-content-between align-items-center">
                        <div>
                             <h4 class="card-title">All Order : {{ $total_orders->count() }}</h4>
                        </div>
                        <div class="dropdown">
                             <a href="#" class="dropdown-toggle btn btn-sm btn-outline-light rounded" data-bs-toggle="dropdown" aria-expanded="false">
                                Recent
                             </a>
                             <div class="dropdown-menu dropdown-menu-end">
                                  <!-- item-->
                                  <a href="#!" class="dropdown-item">Recent</a>
                                  <!-- item-->
                                  <a href="#!" class="dropdown-item">This Month</a>
                                  <!-- item-->
                                  <a href="#!" class="dropdown-item">This Year</a>
                             </div>
                        </div>
                   </div>
                   <div class="card-body p-0">
                        <div class="table-responsive">
                             <table class="table align-middle mb-0 table-hover table-centered">
                                  <thead class="bg-light-subtle">
                                       <tr>

                                            <th>Order Status</th>
                                            <th>Created at</th>
                                            <th>Customer</th>
                                            <th>Phone</th>
                                            <th>Total</th>
                                            <th>Payment Status</th>
                                            <th>Items</th>
                                            <th>Delivery Number</th>
                                            <th>Order ID</th>
                                            <th>Action</th>
                                       </tr>
                                  </thead>
                                  <tbody>
                                    @isset($orders)
                                    @foreach ($orders as $order)
                                    @php
                                        $orderAddresses = DB::table('order_addresses')->where('order_id',$order->id)->first();
                                    @endphp


                                        <tr>
                                            <td>
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
                                               <span class="badge border border-danger text-danger  px-2 py-1 fs-13">return Received</span>
                                               @endif

                                            </td>

                                            <td>{{ $order->created_at->format('d-M-Y') }}</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">{{ $orderAddresses->name }}</a>
                                            </td>
                                            <td><a href="tel:{{ $orderAddresses->phone }}">{{ $orderAddresses->phone }}</a> </td>
                                            <td>{{ $order->amount }}৳</td>
                                            <td>
                                                @if ($order->deliverd == 0)
                                                <span class="badge bg-light text-dark  px-2 py-1 fs-13">Unpaid</span>
                                                @else
                                                <span class="badge bg-success text-light  px-2 py-1 fs-13">Paid</span>
                                                @endif
                                              </td>
                                            <td> 4</td>
                                            <td>Null</td>
                                            <td>
                                                {{ $order->code }}
                                            </td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="{{ route('admin.orders.details',['id'=>$order->id]) }}" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="{{ route('admin.orders.destroy',['id'=>$order->id]) }}" onclick="confirmation(event)" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>
                                       @endforeach

                                       @endisset

                                       {{-- <tr>
                                            <td>
                                                 #456754/80
                                            </td>
                                            <td>Apr 20 , 2024</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">Jung S. Ayala</a>
                                            </td>
                                            <td> Normal</td>
                                            <td> $987.00</td>
                                            <td> <span class="badge bg-success text-light  px-2 py-1 fs-13">Paid</span></td>
                                            <td> 2</td>
                                            <td> -</td>
                                            <td> <span class="badge border border-warning text-warning  px-2 py-1 fs-13">Packaging</span></td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>
                                       <tr>
                                            <td>
                                                 #578246/80
                                            </td>
                                            <td>Apr 19 , 2024</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">David A. Arnold</a>
                                            </td>
                                            <td> High</td>
                                            <td> $1,478.00</td>
                                            <td> <span class="badge  bg-success text-light px-2 py-1 fs-13">Paid</span></td>
                                            <td> 5</td>
                                            <td> #D-57837678</td>
                                            <td> <span class="badge border border-success text-success  px-2 py-1 fs-13">Completed</span></td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>

                                       <tr>
                                            <td>
                                                 #348930/80
                                            </td>
                                            <td>Apr 04 , 2024</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">Cecile D. Gordon</a>
                                            </td>
                                            <td> Normal</td>
                                            <td> $720.00</td>
                                            <td> <span class="badge bg-light text-dark  px-2 py-1 fs-13">Refund</span></td>
                                            <td> 4</td>
                                            <td> -</td>
                                            <td> <span class="badge border border-danger text-danger  px-2 py-1 fs-13">Canceled</span></td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>


                                       <tr>
                                            <td>
                                                 #391367/80
                                            </td>
                                            <td>Apr 02 , 2024</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">William Moreno</a>
                                            </td>
                                            <td> Normal</td>
                                            <td> $1,909.00</td>
                                            <td><span class="badge  bg-success text-light px-2 py-1 fs-13">Paid</span></td>
                                            <td> 6</td>
                                            <td> #D-89734235</td>
                                            <td> <span class="badge border border-success text-success  px-2 py-1 fs-13">Completed</span></td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>


                                       <tr>
                                            <td>
                                                 #930447/80
                                            </td>
                                            <td>March 28 , 2024</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">Alphonse Roy</a>
                                            </td>
                                            <td> High</td>
                                            <td> $879.00</td>
                                            <td><span class="badge  bg-success text-light px-2 py-1 fs-13">Paid</span></td>
                                            <td> 4</td>
                                            <td> #D-35227268</td>
                                            <td><span class="badge border border-success text-success  px-2 py-1 fs-13">Completed</span></td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>

                                       <tr>
                                            <td>
                                                 #462397/80
                                            </td>
                                            <td>March 20 , 2024</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">Pierpont Marleau</a>
                                            </td>
                                            <td> High</td>
                                            <td> $1,230.00</td>
                                            <td> <span class="badge bg-light text-dark  px-2 py-1 fs-13">Refund</span></td>
                                            <td> 2</td>
                                            <td> -</td>
                                            <td> <span class="badge border border-danger text-danger  px-2 py-1 fs-13">Canceled</span></td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>

                                       <tr>
                                            <td>
                                                 #472356/80
                                            </td>
                                            <td>March 12 , 2024</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">Madeleine Gervais</a>
                                            </td>
                                            <td> Normal</td>
                                            <td> $1,264.00</td>
                                            <td> <span class="badge bg-success text-light  px-2 py-1 fs-13">Paid</span></td>
                                            <td> 3</td>
                                            <td> #D-74922656</td>
                                            <td> <span class="badge border border-success text-success  px-2 py-1 fs-13">Completed</span></td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>

                                       <tr>
                                            <td>
                                                 #448226/80
                                            </td>
                                            <td>March 02 , 2024</td>
                                            <td>
                                                 <a href="#!" class="link-primary fw-medium">Satordi Gaillou</a>
                                            </td>
                                            <td> High</td>
                                            <td> $1,787.00</td>
                                            <td> <span class="badge bg-success text-light  px-2 py-1 fs-13">Paid</span></td>
                                            <td> 4</td>
                                            <td> -</td>
                                            <td> <span class="badge border border-warning text-warning  px-2 py-1 fs-13">Packaging</span></td>
                                            <td>
                                                 <div class="d-flex gap-2">
                                                      <a href="#!" class="btn btn-light btn-sm"><iconify-icon icon="solar:eye-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="#!" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr> --}}


                                  </tbody>
                             </table>
                        </div>
                        <!-- end table-responsive -->
                   </div>
                   <div class="card-footer border-top">
                    {{ $orders->links('vendor.pagination.custom') }}
               </div>
              </div>
         </div>

    </div>

</div>

@endsection
@section('script')
{{-- //Delet confarmation  --}}
{{--  <a></a> tag er modde ai ta dite hove ------- onclick="confirmation(event)"--}}
<script>
    //delet btn click korle ai funtion ta active hove
    function confirmation(ev){
      //btn click korle ai tar karone kono kicu hove nah
      ev.preventDefault();
      //A tag er modde href er modde jei route ta ase ,href er value ta ai variable er sstore korve
      var urlToRedirect = ev.currentTarget.getAttribute('href');
      //pop up model asve delet korvo ki korvonah ask korve btn takve yes/no
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {//delet btn e click korle href e taka route ta kaj kove and success message asve delete hoye jave
          if (result.isConfirmed) {
            window.location.href = urlToRedirect;
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                     )
          }
        })




    }

  </script>
@endsection

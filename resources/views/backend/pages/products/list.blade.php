@extends('backend.layout.layout')
@section('title','product-list')
@section('style')

@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
         <div class="col-xl-12">
              <div class="card">
                {{-- @php
                    foreach ($product as $key => $value) {
                       echo $value->name;
                       echo $value->images;
                    //    foreach ($value->images as $key=>$image) {
                    //     echo $image;
                    //    }
                    }
                @endphp --}}

                   <div class="card-header d-flex justify-content-between align-items-center gap-1" >
                        <h4 class="card-title flex-grow-1">Product : {{ $products_count }}</h4>
                        <a href="{{ route('admin.products.create') }}" class="btn btn-sm btn-primary">
                            Create <i class="fa-solid fa-plus"></i>
                       </a>
                   </div>
                   <div class="card-header border-0">
                    <div class="search-bar me-3 mb-1">
                         <span><i class="bx bx-search-alt"></i></span>
                         <input type="search" class="form-control"  id="filter" placeholder="Search ...">
                    </div>
               </div>
                   <div>
                        <div class="table-responsive" >
                             <table class="table align-middle mb-0 table-hover table-centered" id="example-table">
                                  <thead class="bg-light-subtle">
                                       <tr>

                                            <th>SL</th>
                                            <th>Products</th>
                                            <th>Price</th>
                                            <th>Best Selling</th>
                                            <th>Orders</th>
                                            <th>Created AT</th>
                                            <th>Status</th>
                                            <th>Action</th>

                                       </tr>
                                  </thead>
                                  <tbody >

                                    @foreach ($products as $key=>$product)
                                        {{-- StartProduct --}}
                                       <tr>
                                            <td>
                                                {{ ++$key }}
                                            </td>
                                            <td>
                                                 <div class="d-flex align-items-center gap-2">
                                                      <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                           <img src="{{ asset($product->image) }}" alt="" class="avatar-md" style="border-radius: 5px">
                                                      </div>
                                                      <div>
                                                           <a href="#!" class="text-dark fw-medium fs-15">{{ Str::limit($product->name, 10) }}</a>
                                                      </div>
                                                 </div>

                                            </td>
                                            <td>{{ $product->sale_price }} TK</td>

                                            <td>
                                                @if ($product->is_featured == 1)
                                                <h4><span class="badge bg-success">Active</span></h4>
                                                @else
                                                <h4><span class="badge bg-warning">InActive</span></h4>
                                                @endif

                                           </td>


                                            <td> <p>{{ $product->order }}</p></td>
                                            <td> <p>{{ $product->created_at->format('d-M-Y'); }}</p></td>
                                            <td>
                                                @if ($product->status == 'Published')
                                                <h4><span class="badge bg-success">{{ $product->status }}</span></h4>
                                                @else
                                                <h4><span class="badge bg-warning">{{ $product->status }}</span></h4>
                                                @endif

                                           </td>

                                            <td>
                                                 <div class="d-flex gap-2">

                                                      <a href="{{ route('admin.products.edit',['id'=>$product->id]) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="{{ route('admin.products.destroy',['id'=>$product->id]) }}" onclick="confirmation(event)" class="btn btn-soft-danger btn-sm"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>
                                        {{-- EndProduct --}}
                                        @endforeach

                                  </tbody>
                             </table>
                        </div>
                        <!-- end table-responsive -->
                   </div>
                   <div class="card-footer border-top">
                    {{ $products->links('vendor.pagination.custom') }}
               </div>
              </div>
         </div>

    </div>

</div>


@endsection
@section('script')
<script>
    //Search using javascript
  $(function() {
  $("#filter").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#example-table > tbody > tr").filter(function() {      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

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

@extends('backend.layout.layout')
@section('title','category-list')
@section('style')

@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
         <div class="col-xl-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">Categorys : {{ $brands->count() }}</h4>

                    <a href="{{ route('admin.brand.create') }}" class="btn btn-sm btn-primary">
                         Create <i class="fa-solid fa-plus"></i>
                    </a>


               </div>
                   <div>
                        <div class="table-responsive">
                             <table class="table align-middle mb-0 table-hover table-centered">
                                  <thead class="bg-light-subtle">
                                       <tr>

                                            <th>Brands</th>
                                            <th>Slug</th>
                                            <th>Website</th>
                                            <th>Orders</th>
                                            <th>Products</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                       </tr>
                                  </thead>
                                  <tbody>


                                    @foreach ($brands as $brand)
                                       <tr>
                                            <td>
                                                 <div class="d-flex align-items-center gap-2">
                                                      <div class="rounded bg-light avatar-md d-flex align-items-center justify-content-center">
                                                           <img src="{{ asset($brand->logo) }}" alt="" class="avatar-md" style="border-radius: 5px">
                                                      </div>
                                                      <div>
                                                           <p class="text-dark fw-medium fs-15 mb-0">{{ $brand->name }}</p>
                                                      </div>
                                                 </div>
                                            </td>
                                            <td>{{ $brand->slug }}</td>
                                            <td>
                                                @if(is_null($brand->website))
                                                <h4><span class="badge bg-secondary">No Links
                                                </span></h4>
                                                @else
                                                <h4><span class="badge bg-info">Official Links
                                               </span></h4>
                                               @endif
                                            </td>
                                            <td >{{ $brand->order }}</td>
                                            <td >{{ $brand->products }}</td>
                                            <td>
                                                 @if ($brand->status == 'Published')
                                                 <h4><span class="badge bg-success">{{ $brand->status }}</span></h4>
                                                 @else
                                                 <h4><span class="badge bg-warning">{{ $brand->status }}</span></h4>
                                                 @endif

                                            </td>
                                            <td>
                                                 <div class="d-flex gap-2">

                                                      <a href="{{ route('admin.brand.edit',['id'=>$brand->id]) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="{{ route('admin.brand.destroy',['id'=>$brand->id]) }}"  class="btn btn-soft-danger btn-sm" onclick="confirmation(event)"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>

                                       @endforeach


                                  </tbody>
                             </table>
                        </div>
                        <!-- end table-responsive -->
                   </div>
                   <div class="card-footer border-top">
                        {{ $brands->links('vendor.pagination.custom') }}
                   </div>
              </div>
         </div>
    </div>

</div>


@endsection
@section('script')
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

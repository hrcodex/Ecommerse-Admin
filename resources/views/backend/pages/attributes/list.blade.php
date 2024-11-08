@extends('backend.layout.layout')
@section('title','attributes-list')
@section('style')

@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
         <div class="col-xl-12">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">Attribute : {{ $attributes->count() }}</h4>

                    <a href="{{ route('admin.attributes.create') }}" class="btn btn-sm btn-primary">
                         Create <i class="fa-solid fa-plus"></i>
                    </a>


               </div>
                   <div>
                        <div class="table-responsive">
                             <table class="table align-middle mb-0 table-hover table-centered">
                                  <thead class="bg-light-subtle">
                                       <tr>

                                            <th>SL</th>
                                            <th>Varient</th>
                                            <th>Value</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                       </tr>
                                  </thead>
                                  <tbody>

                                     {{-- --------------------Start------------- --}}

                                     @foreach ($attributes as $key=>$attribute)

                                       <tr>
                                            <td>{{ ++$key }}</td>
                                            <td>{{ $attribute->atr_varient }}</td>
                                            <td>
                                                @foreach ($attribute->atr_value as $atr_value)
                                                
                                                <span class="text-primary" style="border: 1px solid gray;border-radius: 2px;padding: 2px;margin-top: 3px;margin-bottom: 3px">{{ $atr_value }}</span>

                                                @endforeach
                                            </td>
                                            <td>
                                                @if ($attribute->status == 'Published')
                                                <h4><span class="badge bg-success">{{ $attribute->status }}</span></h4>
                                                @else
                                                <h4><span class="badge bg-warning">{{ $attribute->status }}</span></h4>
                                                @endif

                                           </td>

                                            <td>
                                                 <div class="d-flex gap-2">
                                                    <a href="{{ route('admin.attributes.edit',['id'=>$attribute->id]) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                    <a href="{{ route('admin.attributes.destroy',['id'=>$attribute->id]) }}"  class="btn btn-soft-danger btn-sm" onclick="confirmation(event)"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                 </div>
                                            </td>
                                       </tr>

                                       @endforeach

                                    {{-- --------------------End------------- --}}

                                  </tbody>
                             </table>
                        </div>
                        <!-- end table-responsive -->
                   </div>
                   <div class="card-footer border-top">
                    {{ $attributes->links('vendor.pagination.custom') }}
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

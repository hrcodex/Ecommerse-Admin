@extends('backend.layout.layout')
@section('title','category-list')
@section('style')

@endsection
@section('content')

<div class="container-xxl">
    <div class="row">
         <div class="col-12">
              <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">FAQS : {{ $faqs->count() }}</h4>

                    <a href="{{ route('admin.faq.create') }}" class="btn btn-sm btn-primary">
                         Create <i class="fa-solid fa-plus"></i>
                    </a>
               </div>
              </div>


              @foreach ($faqs as $key=>$faq )
             {{-- ---Start --}}

              <div class="card">
                   <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <iconify-icon icon="solar:black-hole-bold-duotone" class="fs-28 @if ($faq->status =='Published') text-success @else text-warning @endif "></iconify-icon>
                             <h3 class="mb-0 ms-2 position-relative">{{ $faq->title }}</h3>
                        </div>
                        <p class="mb-0">{!! $faq->description !!}</p>
                        <div class="row justify-content-end g-2 mt-2">

                            <div class="col-lg-2">

                                <a href="{{ route('admin.faq.edit',['id'=> $faq->id]) }}" class="btn btn-sm btn-warning">
                                   <i class="add-folder-linear" ></i> Edit 🛠
                               </a>
                                <a href="{{ route('admin.faq.destroy',['id'=> $faq->id]) }}" onclick="confirmation(event)" class="btn btn-sm btn-danger">
                                    <i class="fa-sharp-duotone fa-solid fa-trash"></i>
                               </a>

                            </div>
                       </div>
                   </div>
              </div>


               {{-- ---End--}}
               @endforeach

               <div class="card-footer border-top">
                {{ $faqs->links('vendor.pagination.custom') }}
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
        });




    }

  </script>
@endsection

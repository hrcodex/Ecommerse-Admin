@extends('backend.layout.layout')
@section('title','profile-list')
@section('style')

@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
         <div class="col-xl-12">
              <div class="card">
                   <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">Admins : {{ count($admins) }}</h4>

                        <a href="{{ route('admin.profile.create') }}" class="btn btn-sm btn-primary">
                             Create
                        </a>

                   </div>
                   <div>
                        <div class="table-responsive">
                             <table class="table align-middle mb-0 table-hover table-centered">
                                  <thead class="bg-light-subtle">
                                       <tr>

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                       </tr>
                                  </thead>
                                  <tbody>

                                    @foreach ( $admins as $key=>$admin )

                                       <tr>
                                         <td>
                                                 <div class="d-flex align-items-center gap-2">
                                                      <div class="d-flex justify-content-center">
                                                           <img class="rounded-circle" width="32" src="{{ asset('backend') }}/assets/images/hrcodex/avater.png" alt="avatar-3">
                                                      </div>
                                                      <div>
                                                           <a href="#" class="text-dark fw-medium fs-15">{{ $admin->name }}</a>
                                                             </div>
                                                 </div>
                                            </td>
                                            <td>{{ $admin->email }}</td>
                                            <td>
                                                 <p class="mb-1 text-muted"><span class="text-dark fw-medium"></span>Admin</p>
                                            </td>
                                            <td>
                                                 <div class="d-flex gap-2">

                                                      <a href="{{ route('admin.profile.edit',['id'=>$admin->id]) }}" class="btn btn-soft-primary btn-sm"><iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18"></iconify-icon></a>
                                                      <a href="{{ route('admin.profile.destroy',['id'=>$admin->id]) }}"  class="btn btn-soft-danger btn-sm" onclick="confirmation(event)"><iconify-icon icon="solar:trash-bin-minimalistic-2-broken" class="align-middle fs-18"></iconify-icon></a>
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
                    {{ $admins->links('vendor.pagination.custom') }}
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

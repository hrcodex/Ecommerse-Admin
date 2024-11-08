@extends('backend.layout.layout')
@section('title','profile-edit')
@section('style')

@endsection
@section('content')

<div class="container-xxl">

    <div class="row">



         <div class="col-xl-12 col-lg-12 ">
            <form action="{{ route('admin.profile.update',['id'=>$admin->id]) }}" method="post">
                @csrf
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title">Edit Admin User</h4>
                   </div>
                   <div class="card-body">
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="product-name" class="form-label">Name</label>
                                            <input type="text" id="product-name" class="form-control" name="name" placeholder="Your Name" value="{{ $admin->name }}">
                                       </div>

                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="product-name" class="form-label">Email</label>
                                            <input type="text" id="product-name" class="form-control" name="email" placeholder="Email" value="{{ $admin->email }}">
                                       </div>

                             </div>

                        </div>
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="product-name" class="form-label">Password</label>
                                            <input type="text" id="product-name" name="password" class="form-control" placeholder="********" >
                                       </div>

                             </div>


                        </div>

                   </div>
              </div>

              <div class="p-3 bg-light mb-3 rounded">
                   <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                             <button type="submit" class="btn btn-primary w-100">Update</button>
                        </div>
                   </div>
              </div>
            </form>
         </div>

    </div>

</div>

@endsection
@section('script')

@endsection

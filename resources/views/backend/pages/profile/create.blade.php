@extends('backend.layout.layout')
@section('title','profile-create')
@section('style')

@endsection
@section('content')
<div class="container-xxl">

    <div class="row">

        <form method="POST" action="{{ route('admin.profile.store') }}" class="needs-validation" novalidate>
            @csrf

         <div class="col-xl-12 col-lg-12 ">

              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title">Personal Information</h4>
                   </div>
                   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                   <div class="card-body">
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="validationCustom01" class="form-label">Name</label>
                                            <input type="text" id="validationCustom01" class="form-control" placeholder="Full Name" value="{{ old('name') }}" name="name" required>
                                            @error('name')
                                            <div class="invalid-feedback">
                                               {{ $message }}
                                            </div>
                                            @enderror

                                       </div>

                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Email</label>
                                            <input type="text" id="validationCustom02" class="form-control" placeholder="Full Name" value="{{ old('email') }}" name="email" required>
                                            @error('email')
                                            <div class="invalid-feedback">
                                               {{ $message }}
                                            </div>
                                            @enderror
                                       </div>

                             </div>

                        </div>
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Password</label>
                                            <input type="text" id="validationCustom03" class="form-control" placeholder="Full Name" name="password" required>
                                            @error('password')
                                            <div class="invalid-feedback">
                                               {{ $message }}
                                            </div>
                                            @enderror
                                       </div>

                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="validationCustom04" class="form-label">Confarm Password</label>
                                            <input type="text" id="validationCustom04" class="form-control" placeholder="Full Name"  name="password_confirmation" required>
                                            @error('password_confirmation')
                                            <div class="invalid-feedback">
                                               {{ $message }}
                                            </div>
                                            @enderror
                                       </div>

                             </div>

                        </div>
                        {{-- <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                        <label for="validationCustom05" class="form-label">Status</label>
                                        <select class="form-select" id="validationCustom05" required name="choices-single-groups">
                                            <option selected disabled value="">Choose...</option>
                                             <option value="1" selected>Published</option>
                                             <option value="0">Unpublished</option>

                                        </select>
                                        <div class="invalid-feedback">
                                            Please select a valid state.
                                        </div>
                                       </div>

                             </div>


                        </div> --}}

                   </div>
              </div>

              <div class="p-3 bg-light mb-3 rounded">
                   <div class="row justify-content-end g-2">

                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary w-100">Insert</button>
                        </div>
                   </div>
              </div>
         </div>
        </form>
    </div>

</div>


@endsection
@section('script')
<script>

</script>
@endsection

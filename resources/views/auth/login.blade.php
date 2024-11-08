@extends('auth.layout.layout')
@section('title','admin-login')
@section('style')

@endsection
@section('content')
<div class="row h-100">
    <div class="col-xxl-7">
         <div class="row justify-content-center h-100">
              <div class="col-lg-6 py-lg-5">
                   <div class="d-flex flex-column h-100 justify-content-center">
                        <div class="auth-logo mb-4">
                             <a href="index.html" class="logo-dark">
                                  <img src="{{ asset('backend') }}/assets/images/hrcodex/logo-blue.png" height="35" alt="logo dark">
                             </a>

                             <a href="index.html" class="logo-light">
                                  <img src="{{ asset('backend') }}/assets/images/hrcodex/logo-blue.png" height="35" alt="logo light">
                             </a>
                        </div>

                        <h2 class="fw-bold fs-24">Sign In</h2>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif




                        <div class="mb-5">
                             <form action="{{ route('login') }}" method="post" class="authentication-form">
                                @csrf
                                  <div class="mb-3">
                                       <label class="form-label" for="example-email">Email</label>
                                       <input type="email" id="example-email" name="email" class="form-control bg-" value="{{ old('email') }}" placeholder="Enter your email">

                                  </div>
                                  <div class="mb-3">
                                       <label class="form-label" for="example-password">Password</label>
                                       <input type="text" id="example-password" name="password" class="form-control" placeholder="Enter your password">
                                  </div>
                                  <div class="mb-3">
                                       <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="remember" id="checkbox-signin">
                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                       </div>
                                  </div>

                                  <div class="mb-1 text-center d-grid">
                                       <button class="btn btn-soft-primary" type="submit">Sign In</button>
                                  </div>
                             </form>




                        </div>
                   </div>
              </div>
         </div>
    </div>

    <div class="col-xxl-5 d-none d-xxl-flex">
         <div class="card h-100 mb-0 overflow-hidden">
              <div class="d-flex flex-column h-100">
                   <img src="{{ asset('assets/backend') }}/images/small/img-10.jpg" alt="" class="w-100 h-100">
              </div>
         </div>
    </div>
</div>
@endsection
@section('script')

@endsection

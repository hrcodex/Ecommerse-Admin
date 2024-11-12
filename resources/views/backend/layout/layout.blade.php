<!DOCTYPE html>
<html lang="en">
    @php
    $metaManagement = DB::table('meta_management')->where('id',1)->first();
@endphp

<!-- Mirrored from techzaa.in/larkon/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 19:06:24 GMT -->
<head>
    @if (isset($metaManagement->meta_start))
    {!! $metaManagement->meta_start !!}
    @endif

     <!-- Title Meta -->
  @include('backend.includes.meta')
     <title>@yield('title')</title>


     @include('backend.includes.style')
     @yield('style')

     @if (isset($metaManagement->meta_end))
     {!! $metaManagement->meta_end !!}
     @endif


</head>

<body>
    @if (isset($metaManagement->body_start))
    {!! $metaManagement->body_start !!}
    @endif
     <!-- START Wrapper -->
     <div class="wrapper">

          <!-- ========== Topbar Start ========== -->
          @include('backend.includes.header')

          <!-- Activity Timeline -->
          @include('backend.includes.activity-sidebar')

          <!-- Right Sidebar (Theme Settings) -->
          @include('backend.includes.theme-sidebar')
          <!-- ========== Topbar End ========== -->

          <!-- ========== App Menu Start ========== -->
          @include('backend.includes.sidebar')
          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

            <!-- Start Container Fluid -->
            @yield('content')
            <!-- End Container Fluid -->

            <!-- ========== Footer Start ========== -->
            @include('backend.includes.footer')
            <!-- ========== Footer End ========== -->

        </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

     @include('backend.includes.script')
     @yield('script')

     @if (Session::has('messege'))
     <script>
        var type = "{{ Session::get('alert-type','info') }}"
        switch(type){
          case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
          case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
          case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
          case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
        }
      </script>
       @endif

</body>


<!-- Mirrored from techzaa.in/larkon/admin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Oct 2024 19:07:11 GMT -->
</html>

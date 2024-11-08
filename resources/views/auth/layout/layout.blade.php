<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
     <!-- Title Meta -->
     @include('backend.includes.meta')

     <title>@yield('title','admin-login')</title>

     {{-- style --}}
     @include('backend.includes.style')

</head>

<body class="h-100">
     <div class="d-flex flex-column h-100 p-3">
          <div class="d-flex flex-column flex-grow-1">
             {{-- Content --}}
             @yield('content')
             {{-- Content --}}
          </div>
     </div>

     {{-- script --}}
     @include('backend.includes.script')

</body>
</html>



    <!-- App favicon -->
     <link rel="shortcut icon" href="{{ asset('backend/assets') }}/images/hrcodex/favicon-logo.png">

     <!-- Vendor css (Require in all Page) -->
     <link href="{{ asset('backend/assets') }}/css/vendor.min.css" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="{{ asset('backend/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />

     <!-- App css (Require in all Page) -->
     <link href="{{ asset('backend/assets') }}/css/app.min.css" rel="stylesheet" type="text/css" />
     <link href="{{ asset('backend/assets') }}/css/hrcodex.css" rel="stylesheet" type="text/css" />

         {{-- Jquery CSS --}}
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

     <!-- Theme Config js (Require in all Page) -->
     <script src="{{ asset('backend/assets') }}/js/config.js"></script>

     {{-- Toaster --}}

     <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet" type="text/css"/>
     {{-- Sweet Alert --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.11/sweetalert2.min.css" integrity="sha512-t00UpSiOSq/o/rWkM0Fv+aD9FjlOzEEc4qLqvGqh0Do1RgvMEKmUYYo5Yb8Te77ux9wkTdoDVD0vwQLJMRLZCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     {{-- Text Area Editor --}}
     <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.js"></script>

     {{-- Font Aowsome icon --}}
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">


    {{-- CSRF Token For Ajax POST Request--}}
    <meta name="_token" content="{{ csrf_token() }}">



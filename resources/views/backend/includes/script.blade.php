<!-- Vendor Javascript (Require in all Page) -->
<script src="{{ asset('backend/assets') }}/js/vendor.js"></script>

<!-- App Javascript (Require in all Page) -->
<script src="{{ asset('backend/assets') }}/js/app.js"></script>

<!-- Vector Map Js -->
<script src="{{ asset('backend/assets') }}/vendor/jsvectormap/js/jsvectormap.min.js"></script>
<script src="{{ asset('backend/assets') }}/vendor/jsvectormap/maps/world-merc.js"></script>
<script src="{{ asset('backend/assets') }}/vendor/jsvectormap/maps/world.js"></script>

<!-- Dashboard Js -->
<script src="{{ asset('backend/assets') }}/js/pages/dashboard.js"></script>

{{-- Toaster Alert CSS --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

{{-- Sweet Alert --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- Text-area Editor One  --}}
<script>
    //  Editor One
    $('#summernote').summernote({
      placeholder: 'Type/Past Yout Content Here',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
    // Editor Two
    $('#summernoteTwo').summernote({
      placeholder: 'Type/Past Yout Content Here',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>


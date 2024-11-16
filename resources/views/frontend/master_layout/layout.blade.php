<!DOCTYPE html>
@php
$metaManagement = DB::table('meta_management')->where('id',1)->first();
@endphp
<html lang="en">
<head>
    @if (isset($metaManagement->meta_start))
    {!! $metaManagement->meta_start !!}
    @endif
        @include('frontend.includes.meta')
        <!-- title -->
        <title>@yield('title')</title>

       @include('frontend.includes.style')
       @yield('style')
       @if (isset($metaManagement->meta_end))
       {!! $metaManagement->meta_end !!}
       @endif
    </head>
    <body>
        @if (isset($metaManagement->body_start))
        {!! $metaManagement->body_start !!}
        @endif
    @include('frontend.includes.header')




        @yield('content')

       @include('frontend.includes.footer')
        <!-- back to top start -->
        <a href="javascript:void(0)" class="scroll" id="top">
            <span><i class="fa fa-angle-double-up"></i></span>
        </a>
        <!-- back to top end -->
        <div class="mm-fullscreen-bg"></div>
        <!-- jquery -->
        @include('frontend.includes.script')
        @yield('script')
    </body>
</html>

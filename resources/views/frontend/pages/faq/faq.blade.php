@extends('frontend.master_layout.layout')
@section('title','home-page')
@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/style.css">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend') }}/css/responsive.css">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@endsection
@section('content')
<!-- breadcrumb start -->

<!-- breadcrumb end -->
<!-- faq's collapse start -->
<section class="faqs-area section-tb-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="faq-title">
                    <h1>About Us</h1>
                    <p>Below are frequently asked questions, you may find the answer for yourself</p>
                </div>
                <div class="faq-box">
                    @isset($faqs)


                    <ul class="faq-ul">

                        @foreach ($faqs as $key=>$faq)


                        <li class="faq-li">
                            <h3><span>{{ ++$key }}.</span> {{ $faq->title }}</h3>
                            <span class="faq-desc">{!! $faq->description !!}</span>
                        </li>
                        @endforeach

                    </ul>
                    @endisset

                </div>
            </div>
        </div>

    </div>
    <div class="list-all-page">

        <div class="page-number">
            @isset($faqs)
            {{ $faqs->links('vendor.pagination.custom') }}
            @endisset

        </div>
    </div>
</section>
<!-- faq's collapse end -->





@endsection
@section('script')

@endsection

@extends('backend.layout.layout')
@section('title','product-list')
@section('style')

@endsection
@section('content')
<div class="container-fluid">

<form action="{{ route('admin.store') }}" method="post" enctype="multipart/form-data">
@csrf
<div class="card">
    <div class="card-header">
         <h4 class="card-title">Pricing Details</h4>
    </div>
    <div class="card-body">
         <div class="row">
             <div class="col-lg-4">

                 <label for="product-tex" class="form-label">Input Test</label>
                 <div class="input-group mb-3">

                      <input type="file" id="product-name" name="image" class="form-control">
                 </div>

             </div>
             <div class="row justify-content-end g-2">
                <div class="col-lg-2">
                    <button class="btn btn-primary w-100">Insert</button>
                </div>
           </div>


         </div>
    </div>
</div>
</form>


@endsection
@section('script')

@endsection

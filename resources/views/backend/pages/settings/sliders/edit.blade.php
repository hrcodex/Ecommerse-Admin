@extends('backend.layout.layout')
@section('title','product-create')
@section('style')
<style>
    #preview {
       width: 200px;
       height: 90px;
    }
 </style>
@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
        <div class="col-xl-12 col-lg-12 ">

            <form action="{{ route('admin.settings.slider.update',['id'=>$slider->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                {{-- Header Section --}}
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">Edit Slider</h4>
                        <a href="{{ route('admin.settings.slider.list') }}" class="btn btn-sm btn-blue">
                            Back <i class="fa-solid fa-backward mr-2"></i>
                        </a>
                    </div>
                </div>

                {{-- Timeline Image Section --}}
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">Slider Image <i class="fa fa-star text-blue" aria-hidden="true"></i></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="mb-3">

                                    <input type="file" name="image" onchange="previewImage(event)" class="form-control">
                                    <div class="dz-message needsclick">
                                        <h4 class="mt-3">Select New For Replacement, Or <span class="text-primary">Drop Here</span></h4>
                                        <span class="text-muted fs-13">
                                            700 x 354 Recommended ( jpeg, jpg, png, svg ).
                                        </span>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6">
                            <div class="mb-3">

                                <img id="preview" class="rounded" src="{{ asset($slider->image) }}" alt="Preview Image">

                             </div>
                            </div>
                            </div>
                        </div>
                        </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Information</h4>
                    </div>
                    <div class="card-body">
                        {{-- Name And Category Section --}}
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Slider Name<i
                                            class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                    <input type="text" name="name" class="form-control" placeholder="Name"
                                        value="{{ $slider->name }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="product-brand" class="form-label">Status <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                   <select class="form-control" name="status" >
                                    <option value="" disabled>---Select Status---</option>
                                    <option value="Published" @if ($slider->status =='Published') selected @endif>Published</option>
                                    <option value="Unpublished" @if ($slider->status =='Unpublished') selected @endif>Unpublished</option>
                               </select>
                               </div>

                            </div>
                        </div>

                        {{-- //Attribute Section --}}

                        {{-- //Description Section --}}
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3" id="ckeditor">
                                    <label for="description" class="form-label">Description <i
                                            class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                    <textarea class="form-control bg-light-subtle summernote" id="summernoteTwo"
                                        name="description" rows="7" placeholder="Type description">{!! $slider->description !!}</textarea>
                                </div>
                            </div>
                        </div>
                        {{-- //Youtube Video Link --}}

                    </div>
                </div>
                {{-- Pricing  Section --}}

                {{-- Button Section --}}
                <div class="p-3 bg-light mb-3 rounded">
                    <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button class="btn btn-primary w-100">Update</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    function previewImage(event) {
       var input = event.target;
       var image = document.getElementById('preview');
       if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function(e) {
             image.src = e.target.result;
          }
          reader.readAsDataURL(input.files[0]);
       }
    }
 </script>
@endsection

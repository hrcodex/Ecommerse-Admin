@extends('backend.layout.layout')
@section('title','product-create')
@section('style')
<script>
    document.addEventListener("DOMContentLoaded", function () {
    const container = document.getElementById("container");
    const cloneButton = document.getElementById("clone-button");

    function cloneElement() {
        const elementToClone = document.querySelector(".clone-me");
        const clonedElement = elementToClone.cloneNode(true);
        container.appendChild(clonedElement);
    }
    cloneButton.addEventListener("click", cloneElement);
});
</script>
@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
         <div class="col-xl-12 col-lg-12 ">
            <form action="{{ route('admin.products.store') }}" method="post"  enctype="multipart/form-data">
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
                        <h4 class="card-title flex-grow-1">Create Product</h4>
                        <a href="{{ route('admin.products.list') }}" class="btn btn-sm btn-blue">
                            Back <i class="fa-solid fa-backward mr-2"></i>
                        </a>
                   </div>
                </div>

                {{-- Timeline Image Section --}}
                <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center gap-1">
                            <h4 class="card-title flex-grow-1">Timeline Image <i class="fa fa-star text-blue" aria-hidden="true"></i></h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="mb-3">
                                        <input type="file" name="image" class="form-control" >
                                        <div class="dz-message needsclick">
                                            <h4 class="mt-3">Select, Or <span class="text-primary">Drop Here</span></h4>
                                            <span class="text-muted fs-13">
                                                1000 x 1000 (1:1) Recommended.
                                            </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                    </div>

                    {{-- Multiple Image Section --}}
                    <div class="card">
                        <div class="card-body" style="border: 1px solid black">
                            <div class="row">
                                <div class="col-lg-6">
                                <div class="mb-3">
                                        <input type="file" name="images[]" multiple class="form-control" >
                                        <div class="dz-message needsclick">
                                            <h4 class="mt-3">Select Multiple <span class="text-primary">Image Or Drop Here</span></h4>
                                            <span class="text-muted fs-13">
                                                1000 x 1000 (1:1) Recommended.
                                            </span>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>




              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title">Product Information</h4>
                   </div>
                   <div class="card-body">

                        {{-- Name And Category Section --}}
                         <div class="row">
                             <div class="col-lg-6">
                                       <div class="mb-3">
                                            <label for="product-name" class="form-label">Product Name <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                            <input type="text" id="product-name" name="name" class="form-control" placeholder="Product Name" value="{{ old('name') }}" >
                                       </div>
                                  </div>
                                    <div class="col-lg-6">

                                       <label for="product-categories" class="form-label">Product Categories</label>
                                       <select class="form-control" name="category_id" id="product-categories" data-choices data-choices-groups data-placeholder="Select Categories" name="category_id">
                                            <option value="">Choose a categories</option>

                                            @foreach ($categories as $category )

                                            <option value="{{ $category->id }}">{{ $category->name }}</option>

                                            @endforeach

                                       </select>
                                    </div>
                            </div>



                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="product-brand" class="form-label">Status <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                            <select class="form-control" id="choices-single-no-search"  name="status" data-choices data-choices-search-false >
                                                <option value="Published" selected>Published</option>
                                                <option value="Unpublished">Unpublished</option>
                                           </select>
                                       </div>

                             </div>
                             <div class="col-lg-6">

                                <label for="product-categories" class="form-label">Product Brand</label>
                                <select class="form-control" name="brand_id" id="product-categories" data-choices data-choices-groups data-placeholder="Select Categories" name="category_id">
                                     <option value="">Choose a categories</option>

                                     @foreach ($brands as $brand )

                                     <option value="{{ $brand->id }}">{{ $brand->name }}</option>

                                     @endforeach

                                </select>
                             </div>


                        </div>

                         {{-- //Attribute Section --}}
                        <div class="row mb-4">

                            @foreach ($attributes as $attribute)
                             <div class="col-lg-4">
                                  <div class="mt-3">
                                       <h5 class="text-dark fw-medium">{{ $attribute->atr_varient }} :</h5>
                                       <div class="d-flex flex-wrap gap-2" role="group" aria-label="Basic checkbox toggle button group">
                                        {{-- //Portion Start --}}

                                        @foreach ($attribute->atr_value as $value)
                                       <div class="form-check form-check-inline">
                                            <input type="checkbox" class="form-check-input" value="{{ $value }}" name="{{ $attribute->atr_varient }}[]">
                                            <label class="form-check-label" for="customCheck4">{{ $value }}</label>
                                       </div>
                                       @endforeach
                                       {{-- //Portion End --}}
                                       </div>
                                  </div>
                             </div>
                             @endforeach
                        </div>


                         {{-- //Content Section --}}
                        <div class="row">
                             <div class="col-lg-12">
                                  <div class="mb-3" id="ckeditor">
                                       <label for="description" class="form-label">Content <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                       <textarea class="form-control bg-light-subtle summernote" id="summernote" name="content" rows="7" placeholder="Type description"></textarea>
                                  </div>
                             </div>
                        </div>
                         {{-- //Description Section --}}
                        <div class="row">
                             <div class="col-lg-12">
                                  <div class="mb-3" id="ckeditor">
                                       <label for="description" class="form-label">Description <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                       <textarea class="form-control bg-light-subtle summernote" id="summernoteTwo" name="description" rows="7" placeholder="Type description"></textarea>
                                  </div>
                             </div>
                        </div>
                         {{-- //Youtube Video Link --}}
                        <div class="row">
                             <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Video Link </label>
                                    <input type="text" id="product-name" name="video_link" class="form-control" value="{{ old('video_link') }}" placeholder="Link...................">
                               </div>
                             </div>
                        </div>

                   </div>
              </div>
              {{-- Pricing  Section --}}
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title">Pricing Details</h4>
                   </div>
                   <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4">

                                <label for="product-tex" class="form-label">Standard Price <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                <div class="input-group mb-3">
                                     <span class="input-group-text fs-20"><i class='bx bxs-file-txt'></i></span>
                                     <input type="number" name="price" id="product-tex" class="form-control" placeholder="000" >
                                </div>

                            </div>
                             <div class="col-lg-4">

                                       <label for="product-price" class="form-label">Sale Price <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                       <div class="input-group mb-3">
                                            <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                            <input type="number" id="product-price" name="sale_price" class="form-control" placeholder="000" >
                                       </div>

                             </div>
                             <div class="col-lg-4">

                                       <label for="product-discount" class="form-label">Buy price <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                       <div class="input-group mb-3">
                                            <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                            <input type="number" id="product-discount" name="buy_price" class="form-control" placeholder="000" >
                                       </div>

                             </div>

                        </div>
                   </div>
              </div>
              {{-- Meta section Start --}}
              <div class="card">
                <div class="card-header">
                     <h4 class="card-title">Meta Options (SEO)</h4>
                </div>
                <div class="card-body">
                     <div class="row">
                          <div class="col-lg-6">

                                    <div class="mb-3">
                                         <label for="meta-title" class="form-label">Meta Title</label>
                                         <input type="text" id="meta-title" value="{{ old('meta_title') }}" name="meta_title" class="form-control" placeholder="Enter Title">
                                    </div>

                          </div>
                          <div class="col-lg-6">

                                    <div class="mb-3">
                                         <label for="meta-tag" class="form-label">Meta Tag Keyword</label>
                                         <input type="text" id="meta-tag" value="{{ old('meta_Keyword') }}"  name="meta_keyword" class="form-control" placeholder="Enter word">
                                    </div>

                          </div>
                          <div class="col-lg-12">
                               <div class="mb-0">
                                    <label for="description" class="form-label">Meta Description</label>
                                    <textarea class="form-control bg-light-subtle" name="meta_description" rows="6" placeholder="Type description"></textarea>
                               </div>
                          </div>
                     </div>
                </div>
           </div>
              {{-- Meta section End --}}
              {{-- Button Section --}}
              <div class="p-3 bg-light mb-3 rounded">
                   <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                            <button class="btn btn-primary w-100">Insert</button>
                        </div>
                   </div>
              </div>
            </form>
         </div>
    </div>
</div>


@endsection
@section('script')
<script>
    // Snow theme
var quill = new Quill('#snow-editor', {
     theme: 'snow',
     modules: {
          'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'], [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], ['direction', { 'align': [] }], ['link', 'image', 'video'], ['clean']]
     },
});
</script>
@endsection

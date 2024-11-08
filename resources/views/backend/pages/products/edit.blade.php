@extends('backend.layout.layout')
@section('title','product-create')
@section('style')
<style>
    #preview {
       width: 100px;
       height: 100px;
    }
 </style>

@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
         <div class="col-xl-12 col-lg-12 ">
            <form action="{{ route('admin.products.update',['id'=>$product->id]) }}" method="post"  enctype="multipart/form-data">
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
                        <h4 class="card-title flex-grow-1">Edit Product</h4>
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

                                        <input type="file" name="image" onchange="previewImage(event)" class="form-control">
                                        <div class="dz-message needsclick">
                                            <h4 class="mt-3">Select New For Replacement, Or <span class="text-primary">Drop Here</span></h4>
                                            <span class="text-muted fs-13">
                                                1000 x 1000 (1:1) Recommended.
                                            </span>
                                    </div>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <div class="mb-3">

                                    <img id="preview" class="rounded" src="{{ asset($product->image) }}" alt="Preview Image">

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

                                {{-- -----------Image Deleted section--------start --}}
                                <div class="col-lg-6">
                                    @foreach ($product_Images as $product_Image)
                                    {{-- section start --}}
                                    <div style="margin-bottom: 5px">
                                        <img src="{{ asset($product_Image->image) }}" alt="image" class="img-fluid rounded" width="80"  />
                                        <a href="{{ route('admin.products.image.delete',['id'=>$product_Image->id]) }}" class="btn btn-primary btn-sm" ><i class="bx bx-trash"></i></a>
                                    </div>
                                      {{-- section end --}}
                                      @endforeach
                                </div>
                                 {{-- -----------Image Deleted section--------start --}}

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
                                            <input type="text" accept="image/*" id="product-name" name="name" class="form-control" placeholder="Product Name" value="{{ $product->name }}" >
                                       </div>
                                  </div>
                                  <div class="col-lg-6">

                                    <label for="product-categories" class="form-label">Product Categories</label>
                                    <select class="form-control" name="category_id"   >
                                         <option value="">Choose a categories</option>

                                         @foreach ($categories as $category )

                                         <option value="{{ $category->id }}" @if ($category->id == $product->category_id)selected

                                         @endif>{{ $category->name }}</option>

                                         @endforeach

                                    </select>
                                 </div>
                            </div>



                        <div class="row">
                             <div class="col-lg-4">

                                       <div class="mb-3">
                                            <label for="product-brand" class="form-label">Status <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                           <select class="form-control" name="status" >
                                            <option value="" disabled>---Select Status---</option>
                                            <option value="Published" @if ($product->status =='Published') selected @endif>Published</option>
                                            <option value="Unpublished" @if ($product->status =='Unpublished') selected @endif>Unpublished</option>
                                       </select>
                                       </div>

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
                                            <input type="checkbox" class="form-check-input" value="{{ $value }}" name="{{ $attribute->atr_varient }}[]"
                                            {{-- -----------atr_Colors----------- --}}
                                             @if(is_null($product->atr_Colors))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Colors')
                                            @foreach ($product->atr_Colors as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- --------------------atr_Wide------- --}}
                                            @if(is_null($product->atr_Wide))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Wide')
                                            @foreach ($product->atr_Wide as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- ---------------atr_Pieces- --}}
                                            @if(is_null($product->atr_Size))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Size')
                                            @foreach ($product->atr_Size as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- ---------------atr_package- --}}
                                            @if(is_null($product->atr_package))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_package')
                                            @foreach ($product->atr_package as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- ---------------atr_Dimension- --}}
                                            @if(is_null($product->atr_Dimension))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Dimension')
                                            @foreach ($product->atr_Dimension as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- ---------------atr_Height- --}}
                                            @if(is_null($product->atr_Height))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Height')
                                            @foreach ($product->atr_Height as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- ---------------atr_Weight- --}}
                                            @if(is_null($product->atr_Weight))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Weight')
                                            @foreach ($product->atr_Weight as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- ---------------atr_Pieces- --}}
                                            @if(is_null($product->atr_Pieces))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Pieces')
                                            @foreach ($product->atr_Pieces as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- ---------------atr_Names- --}}
                                            @if(is_null($product->atr_Names))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Names')
                                            @foreach ($product->atr_Names as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- ---------------atr_Material- --}}
                                            @if(is_null($product->atr_Material))

                                            @else
                                            @if ($attribute->atr_varient == 'atr_Material')
                                            @foreach ($product->atr_Material as $atr_name)
                                            @if ($atr_name == $value)
                                            checked
                                            @endif
                                            @endforeach
                                            @endif
                                            @endif
                                            {{-- --------------------------- --}}
                                            >

                                            {{-- ---------------------- --}}

                                            <label class="form-check-label" >{{ $value }}</label>
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
                                       <textarea class="form-control bg-light-subtle summernote" id="summernote" name="content" rows="7" placeholder="Type description">{!! $product->content !!}</textarea>
                                  </div>
                             </div>
                        </div>
                         {{-- //Description Section --}}
                        <div class="row">
                             <div class="col-lg-12">
                                  <div class="mb-3" id="ckeditor">
                                       <label for="description" class="form-label">Description <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                       <textarea class="form-control bg-light-subtle summernote" id="summernoteTwo" name="description" rows="7" placeholder="Type description">{!! $product->description !!}</textarea>
                                  </div>
                             </div>
                        </div>
                         {{-- //Youtube Video Link --}}
                        <div class="row">
                             <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="product-name" class="form-label">Video Link </label>
                                    <input type="text" id="product-name" name="video_link" class="form-control" value="{{ $product->video_link }}" placeholder="Link...................">
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
                                     <input type="number" name="price" id="product-tex" class="form-control" value="{{ $product->price }}" placeholder="000" >
                                </div>

                            </div>
                             <div class="col-lg-4">

                                       <label for="product-price" class="form-label">Sale Price <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                       <div class="input-group mb-3">
                                            <span class="input-group-text fs-20"><i class='bx bx-dollar'></i></span>
                                            <input type="number" id="product-price" name="sale_price" value="{{ $product->sale_price }}" class="form-control" placeholder="000" >
                                       </div>

                             </div>
                             <div class="col-lg-4">

                                       <label for="product-discount" class="form-label">Buy price <i class="fa fa-star text-blue" aria-hidden="true"></i></label>
                                       <div class="input-group mb-3">
                                            <span class="input-group-text fs-20"><i class='bx bxs-discount'></i></span>
                                            <input type="number" value="{{ $product->buy_price }}" id="product-discount" name="buy_price" class="form-control" placeholder="000" >
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
                                         <input type="text" id="meta-title" value="{{ $meta->title }}" name="meta_title" class="form-control" placeholder="Enter Title">
                                    </div>

                          </div>
                          <div class="col-lg-6">

                                    <div class="mb-3">
                                         <label for="meta-tag" class="form-label">Meta Tag Keyword</label>
                                         <input type="text"  value="{!! $meta->Keyword !!}"  name="meta_keyword" class="form-control" placeholder="Enter word">
                                    </div>

                          </div>
                          <div class="col-lg-12">
                               <div class="mb-0">
                                    <label for="description" class="form-label">Meta Description</label>
                                    <textarea class="form-control bg-light-subtle" name="meta_description" rows="6" placeholder="Type description">{!! $meta->Description !!}</textarea>
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

<script>
    // Snow theme
var quill = new Quill('#snow-editor', {
     theme: 'snow',
     modules: {
          'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'], [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], ['direction', { 'align': [] }], ['link', 'image', 'video'], ['clean']]
     },
});
//view input image

  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };

</script>
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

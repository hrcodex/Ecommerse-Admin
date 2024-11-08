@extends('backend.layout.layout')
@section('title','category-create')
@section('style')

@endsection
@section('content')

<div class="container-xxl">

    <div class="row">


         <div class="col-xl-12 col-lg-12 ">
            <form action="{{ route('admin.category.update',['id'=>$category->id]) }}" method="post" enctype="multipart/form-data" >
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
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center gap-1">
                        <h4 class="card-title flex-grow-1">Edit Category</h4>

                        <a href="{{ route('admin.category.list') }}" class="btn btn-sm btn-blue">
                           Back <i class="fa-solid fa-backward mr-2"></i>
                        </a>


                   </div>
              <div class="card-body">
                <div class="row">
                     <div class="col-lg-6">

                               <div class="mb-3">
                                    <input type="file" id="category-image" name="image" class="form-control" >
                                    <div class="dz-message needsclick">

                                        <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
                                        <span class="text-muted fs-13">
                                             1000 x 1000 (1:1) recommended. PNG, JPG and JPEG files are allowed
                                        </span>
                                   </div>
                               </div>
                     </div>
                </div>
             </div>
           </div>
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title">Category Information</h4>
                   </div>
                   <div class="card-body">
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="category-title" class="form-label">Category Title</label>
                                            <input type="text" id="category-title" name="name" value="{{ $category->name }}" class="form-control" >
                                       </div>

                             </div>

                             <div class="col-lg-6">

                                       <label for="crater" class="form-label">Status</label>
                                       <select class="form-control" name="status" id="crater" data-choices data-choices-groups data-placeholder="Select Crater">
                                            <option value="" disabled>Select Status</option>
                                            <option value="Published" @if ($category->status =='Published') selected @endif>Published</option>
                                            <option value="Unpublished" @if ($category->status =='Unpublished') selected @endif>Unpublished</option>
                                       </select>

                             </div>


                             <div class="col-lg-12">
                                  <div class="mb-0" id="ckeditor">
                                       <label for="description" class="form-label">Description</label>
                                       <textarea class="form-control bg-light-subtle summernote" id="summernote" name="description" rows="7" placeholder="Type description">{!! $category->description !!}</textarea>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>
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
                                            <input type="text" id="meta-tag" value="{!! $meta->Keyword !!}"  name="meta_keyword" class="form-control" placeholder="Enter word">
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
              <div class="p-3 bg-light mb-3 rounded">
                   <div class="row justify-content-end g-2">
                        <div class="col-lg-2">
                             <button type="submit" class="btn btn-primary w-100">Update</button>
                        </div>

                   </div>
              </div>
            </form>
         </div>
    </div>

</div>

@endsection
@section('script')

@endsection

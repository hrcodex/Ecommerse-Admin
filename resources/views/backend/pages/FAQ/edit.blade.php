@extends('backend.layout.layout')
@section('title','category-create')
@section('style')

@endsection
@section('content')

<div class="container-xxl">

    <div class="row">


         <div class="col-xl-12 col-lg-12 ">
            <form action="{{ route('admin.faq.update',['id'=>$Faq->id]) }}" method="post" >
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
                    <h4 class="card-title flex-grow-1">FAQ Edit</h4>

                    <a href="{{ route('admin.faq.list') }}" class="btn btn-sm btn-blue">
                        Back <i class="fa-solid fa-backward mr-2"></i>
                    </a>


               </div>
                   <div class="card-body">
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="category-title" class="form-label">FAQ Title</label>
                                            <input type="text" id="category-title" name="title" value="{{ $Faq->title }}" class="form-control" >
                                       </div>

                             </div>

                             <div class="col-lg-6">

                                       <label for="crater" class="form-label">Status</label>
                                       <select class="form-control" name="status" id="crater" data-choices data-choices-groups data-placeholder="Select Crater">
                                        <option value="" disabled>Select Status</option>
                                        <option value="Published" @if ($Faq->status =='Published') selected @endif>Published</option>
                                        <option value="Unpublished" @if ($Faq->status =='Unpublished') selected @endif>Unpublished</option>
                                       </select>

                             </div>


                             <div class="col-lg-12">
                                  <div class="mb-0" id="ckeditor">
                                       <label for="description" class="form-label">Description</label>
                                       <textarea class="form-control bg-light-subtle summernote" id="summernote" name="description" rows="7" placeholder="Type description">{!! $Faq->description !!}</textarea>
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

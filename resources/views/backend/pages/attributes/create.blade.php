@extends('backend.layout.layout')
@section('title','attributes-create')
@section('style')

@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
         <div class="col-lg-12">

            <form action="{{ route('admin.attributes.store') }}" method="post">
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
                    <h4 class="card-title flex-grow-1">Create Attribute </h4>

                    <a href="{{ route('admin.attributes.list') }}" class="btn btn-sm btn-blue">
                        Back <i class="fa-solid fa-backward mr-2"></i>
                    </a>


               </div>
                   <div class="card-body">
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="variant-name" class="form-label text-dark">Attribute Variant</label>
                                            <select class="form-control" id="choices-single-no-search" name="atr_varient" data-choices data-choices-search-false >
                                                <option value="atr_Colors">Colors</option>
                                                <option value="atr_Wide">Wide</option>
                                                <option value="atr_Brand">Brand</option>
                                                <option value="atr_Material">Material</option>
                                                <option value="atr_Pieces">pieces</option>
                                                <option value="atr_Size">Size</option>
                                                <option value="atr_package">package</option>
                                                <option value="atr_Dimension">Dimension</option>
                                                <option value="atr_Height">Height</option>
                                                <option value="atr_Weight">Weight</option>
                                                <option value="atr_Names">Names</option>
                                           </select>
                                       </div>

                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="value-name" class="form-label text-dark">Attribute Value</label>
                                            <input class="form-control" name="atr_value" id="choices-text-remove-button" data-choices data-choices-limit="7" data-choices-removeItem type="text" value="{{ old('atr_value') }}"
                                            data-choices data-choices-limit="Required Limit" data-choices-removeItem />
                                       </div>

                             </div>
                             <div class="col-lg-6">
                                <form>
                                     <div class="">
                                          <label for="option" class="form-label">Status</label>
                                          <select class="form-control" id="option" name="status" data-choices data-choices-groups data-placeholder="Select Option">
                                                <option value="" disabled>---Select One---</option>
                                            <option value="Published" selected>Published</option>
                                            <option value="Unpublished">Unpublished</option>
                                          </select>
                                     </div>
                                </form>
                           </div>


                        </div>
                   </div>
                   <div class="card-footer border-top">
                        <button class="btn btn-primary">Insert</button>
                   </div>
              </div>
            </form>

         </div>
    </div>

</div>


@endsection
@section('script')

@endsection

@extends('backend.layout.layout')
@section('title','attributes-edit')
@section('style')

@endsection
@section('content')
<div class="container-xxl">

    <div class="row">
         <div class="col-lg-12">
            <form action="{{ route('admin.attributes.update',['id' => $attribute->id]) }}" method="post">
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
                    <h4 class="card-title flex-grow-1">Edit Attribute</h4>

                    <a href="{{ route('admin.attributes.list') }}" class="btn btn-sm btn-blue">
                       Back <i class="fa-solid fa-backward mr-2"></i>
                    </a>


               </div>
                   <div class="card-body">
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="variant-name" class="form-label text-dark">Attribute Variant</label>
                                            <input type="text" id="variant-name" name="atr_varient" class="form-control" placeholder="Enter Name" value="{{ $attribute->atr_varient }}">
                                       </div>

                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="value-name" class="form-label text-dark">Attribute Value</label>
                                            {{-- <input class="form-control" name="atr_value" id="choices-text-remove-button" data-choices data-choices-limit="7" data-choices-removeItem type="text" value="@foreach ($attribute->atr_value as $value) {{ $value.',' }}@endforeach"
                                            data-choices data-choices-limit="Required Limit" data-choices-removeItem /> --}}

                                            <input class="form-control" name="atr_value" id="choices-text-remove-button" data-choices data-choices-limit="7" data-choices-removeItem type="text" value="@foreach ($attribute->atr_value as $value) {{ $value }}  @if( !$loop->last),
                                            @endif @endforeach"
                                            data-choices data-choices-limit="Required Limit" data-choices-removeItem />


                                       </div>

                             </div>

                             <div class="col-lg-6">

                                       <div class="">
                                            <label for="option" class="form-label">	Option</label>
                                            <select class="form-control" id="option" name="status" data-choices data-choices-groups data-placeholder="Select Option">
                                                <option value="" disabled>Select Status</option>
                                                <option value="Published" @if ($attribute->status =='Published') selected @endif>Published</option>
                                                <option value="Unpublished" @if ($attribute->status =='Unpublished') selected @endif>Unpublished</option>
                                            </select>
                                       </div>

                             </div>
                        </div>
                   </div>
                   <div class="card-footer border-top">
                    <button type="submit" class="btn btn-primary">Update</button>

                   </div>
              </div>
              </form>
         </div>
    </div>
</div>


@endsection
@section('script')

@endsection

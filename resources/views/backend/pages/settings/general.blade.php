@extends('backend.layout.layout')
@section('title','category-create')
@section('style')

@endsection
@section('content')

<div class="container-xxl"fd>

    <form action="{{ route('admin.settings.general.update') }}" method="POST">
        @csrf
    <div class="row">
         <div class="col-lg-12">
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:settings-bold-duotone" class="text-primary fs-20"></iconify-icon>General Settings</h4>
                   </div>
                   <div class="card-body">
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="meta-name" class="form-label">Meta Title</label>
                                            <input type="text" id="meta-name" name="meta_title" value="{{ $meta->title }}" class="form-control" placeholder="Meta Title...">
                                       </div>

                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="meta-tag" class="form-label">Meta Tag Keyword</label>
                                            <input type="text" id="meta-tag" name="meta_keyword" value="{{ $meta->Keyword }}" class="form-control" placeholder="Meta Keyword...">
                                       </div>

                             </div>

                             <div class="col-lg-12">
                                  <div class="">
                                       <label for="description" class="form-label">Description</label>
                                       <textarea class="form-control bg-light-subtle" id="description" rows="4" name="meta_description" placeholder="Meta description...">{{ $meta->Description }}</textarea>
                                  </div>
                             </div>
                        </div>
                   </div>
              </div>

         </div>
    </div>

    <div class="row">
         <div class="col-lg-12">
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:shop-2-bold-duotone" class="text-primary fs-20"></iconify-icon>Store Settings</h4>
                   </div>
                   <div class="card-body">
                        <div class="row">
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="store-name" class="form-label">Store Name</label>
                                            <input type="text" id="store-name" class="form-control" name="shop_name" placeholder="Enter name" value="{{ $setting->shop_name }}">
                                       </div>

                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="owner-name" class="form-label">Store Owner Full Name</label>
                                            <input type="text" id="owner-name" class="form-control" name="shop_owner_name" placeholder="Full name" value="{{ $setting->shop_owner_name }}">
                                       </div>

                             </div>
                             <div class="col-lg-6">
                                  <div class="mb-3">
                                       <label for="schedule-number" class="form-label">Owner Phone number</label>
                                       <input type="number" name="phone" id="schedule-number" class="form-control" placeholder="Number" value="{{ $setting->phone }}">
                                  </div>
                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="schedule-email" class="form-label">Email</label>
                                            <input type="email" id="schedule-email" name="email" class="form-control" placeholder="Email" value="{{ $setting->email }}">
                                       </div>

                             </div>
                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="schedule-email" class="form-label">Business Email</label>
                                            <input type="email" id="schedule-email" name="business_email" class="form-control" placeholder="Business Email" value="{{ $setting->business_email }}">
                                       </div>

                             </div>

                             <div class="col-lg-12">
                                  <div class="mb-3">
                                       <label for="address" class="form-label">Full Address</label>
                                       <textarea class="form-control bg-light-subtle" id="address" rows="3" name="address" placeholder="Type address">{!! $setting->address !!}</textarea>
                                  </div>
                             </div>
                             <div class="col-lg-4">

                                       <div class="mb-3">
                                            <label for="your-zipcode" class="form-label">Zip-Code</label>
                                            <input type="number" name="zip_code" id="your-zipcode" class="form-control" placeholder="zip-code" value="{{ $setting->zip_code }}">
                                       </div>

                             </div>
                             <div class="col-lg-4">

                                       <div class="mb-3">
                                            <label for="choices-city" class="form-label">City</label>
                                            <select class="form-control" id="choices-city" data-choices data-choices-groups data-placeholder="Select City" name="city">
                                                 <option value="">Choose a city</option>

                                                      <option value="Chittagong" @if ($setting->city == "Chittagong")
                                                          selected
                                                      @endif>Chittagong</option>
                                                      <option value="Dhaka" @if ($setting->city == "Dhaka")
                                                        selected
                                                    @endif>Dhaka</option>

                                            </select>
                                       </div>

                             </div>
                             <div class="col-lg-4">

                                       <label for="choices-country" class="form-label">Country</label>
                                       <select class="form-control" id="choices-country" data-choices data-choices-groups data-placeholder="Select Country" name="country">
                                            <option value="">Choose a country</option>
                                                 <option value="Bangladesh" @if ($setting->country == "Bangladesh")
                                                    selected
                                                @endif>Bangladesh</option>
                                       </select>

                             </div>
                        </div>
                   </div>
              </div>
         </div>
    </div>

    <div class="row">
         <div class="col-lg-12">
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:compass-bold-duotone" class="text-primary fs-20"></iconify-icon>Localization Settings</h4>
                   </div>
                   <div class="card-body">
                        <div class="row">

                             <div class="col-lg-6">

                                       <div class="mb-3">
                                            <label for="choices-language" class="form-label">Language</label>
                                            <select class="form-control" id="choices-language" data-choices data-choices-groups data-placeholder="Select language" name="language">
                                                 <option value="English" @if ($setting->language == "English" )
                                                     selected
                                                 @endif>English</option>
                                                      <option value="Bangla" @if ($setting->language == "Bangla" )
                                                        selected
                                                    @endif>Bangla</option>
                                            </select>

                                       </div>

                             </div>
                             <div class="col-lg-6">

                                     <div class="mb-3">
                                          <label for="themes" class="form-label">Currency</label>
                                          <select class="form-control" id="themes" data-choices data-choices-groups data-placeholder="Select Themes" name="currency">
                                               <option value="Taka"  @if ($setting->currency == "Taka" )
                                                selected
                                            @endif>(৳) Taka</option>
                                               <option value="Doller" @if ($setting->currency == "Doller" )
                                                selected
                                            @endif>($) Doller</option>
                                               <option value="Euro"  @if ($setting->currency == "Euro" )
                                                selected
                                            @endif>(€) Euro</option>
                                          </select>
                                     </div>

                           </div>

                        </div>
                   </div>
              </div>
         </div>
    </div>

    <div class="row">
         <div class="col-lg-3">
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:box-bold-duotone" class="text-primary fs-20"></iconify-icon>Best Selling</h4>
                   </div>
                   <div class="card-body">



                             <div class="mb-1 pb-1">
                                  <label for="items-par-page" class="form-label">Pagination</label>
                                  <input type="number" id="items-par-page" class="form-control" name="best_selling_per_page" placeholder="Number of Products" value="{{ $setting->best_selling_per_page }}">
                             </div>

                   </div>
              </div>
         </div>
         <div class="col-lg-3">
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:box-bold-duotone" class="text-primary fs-20"></iconify-icon>Shop Page</h4>
                   </div>
                   <div class="card-body">



                             <div class="mb-1 pb-1">
                                  <label for="items-par-page" class="form-label">Pagination</label>
                                  <input type="number" id="items-par-page" class="form-control" name="shop_selling_per_page" placeholder="Number of Products" value="{{ $setting->shop_selling_per_page }}">
                             </div>

                   </div>
              </div>
         </div>

    </div>

    <div class="row">
         <div class="col-lg-12">
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:users-group-two-rounded-bold-duotone" class="text-primary fs-20"></iconify-icon>Show/Hide</h4>
                   </div>
                   <div class="card-body">
                        <div class="row justify-content-between g-3">
                             <div class="col-lg-2 border-end">
                                  <p>Home Top Bar</p>
                                  <div class="d-flex gap-2 align-items-center">
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="home_top_bar" value="1" id="flexRadioDefault9" @if ($setting->home_top_bar == 1 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault9">
                                                 Yes
                                            </label>
                                       </div>
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="home_top_bar" value="0" id="flexRadioDefault10" @if ($setting->home_top_bar == 0 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault10">
                                                 No
                                            </label>
                                       </div>
                                  </div>
                             </div>
                             <div class="col-lg-2 border-end">
                                  <p>Sliders</p>
                                  <div class="d-flex gap-2 align-items-center">
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="slider" value="1" id="flexRadioDefault11"  @if ($setting->slider == 1 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault11">
                                                 Yes
                                            </label>
                                       </div>
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="slider" value="0" id="flexRadioDefault12"  @if ($setting->slider == 0 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault12">
                                                 No
                                            </label>
                                       </div>
                                  </div>
                             </div>
                             <div class="col-lg-2 border-end">
                                  <p>Brand</p>
                                  <div class="d-flex gap-2 align-items-center">
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="brand" value="1" id="flexRadioDefault13" @if ($setting->brand == 1 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault13">
                                                 Yes
                                            </label>
                                       </div>
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="brand" value="0" id="flexRadioDefault14" @if ($setting->brand == 0 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault14">
                                                 No
                                            </label>
                                       </div>
                                  </div>
                             </div>
                             <div class="col-lg-2 border-end">
                                  <p>Shop Filters</p>
                                  <div class="d-flex gap-2 align-items-center">
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shop_filter" value="1" id="flexRadioDefault15" @if ($setting->shop_filter == 1 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault15">
                                                 Yes
                                            </label>
                                       </div>
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="shop_filter" value="0" id="flexRadioDefault16" @if ($setting->shop_filter == 0 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault16">
                                                 No
                                            </label>
                                       </div>
                                  </div>
                             </div>
                             <div class="col-lg-2">
                                  <p>Category</p>
                                  <div class="d-flex gap-2 align-items-center">
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" value="1" id="flexRadioDefault17" @if ($setting->category == 1 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault17">
                                                 Yes
                                            </label>
                                       </div>
                                       <div class="form-check">
                                            <input class="form-check-input" type="radio" name="category" id="flexRadioDefault17" value="0" @if ($setting->category == 0 )
                                            checked=""
                                            @endif>
                                            <label class="form-check-label" for="flexRadioDefault18">
                                                 No
                                            </label>
                                       </div>
                                  </div>
                             </div>
                        </div>

                   </div>
              </div>
         </div>
    </div>

    <div class="text-end">
         <button type="submit" class="btn btn-success">Save Change</button>
    </div>
</form>
</div>


@endsection
@section('script')

@endsection

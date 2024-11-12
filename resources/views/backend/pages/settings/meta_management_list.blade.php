@extends('backend.layout.layout')
@section('title','category-create')
@section('style')

@endsection
@section('content')

<div class="container-xxl"fd>

    <form action="{{ route('admin.settings.custom.update') }}" method="POST">
        @csrf


    <div class="row">
         <div class="col-lg-12">
              <div class="card">
                   <div class="card-header">
                        <h4 class="card-title d-flex align-items-center gap-1"><iconify-icon icon="solar:compass-bold-duotone" class="text-primary fs-20"></iconify-icon>Custom Codes</h4>
                   </div>
                   <div class="card-body">
                        <div class="row">

                             <div class="col-lg-12">

                                       <div class="mb-3">
                                        <ul class="nav nav-tabs nav-justified">
                                            <li class="nav-item">
                                                {{-- -----Meta Start--------- --}}
                                                <a href="#homeTabsJustified" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                    <span class="d-block d-sm-none">Meta Start</span>
                                                    <span class="d-none d-sm-block">Meta Start</span>
                                                </a>
                                            </li>
                                              {{-- -----Meta End--------- --}}
                                            <li class="nav-item">
                                                <a href="#profileTabsJustified" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                    <span class="d-block d-sm-none">Meta End</span>
                                                    <span class="d-none d-sm-block">Meta End</span>
                                                </a>
                                            </li>
                                              {{-- -----Body Start--------- --}}
                                            <li class="nav-item">
                                                <a href="#messagesTabsJustified" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                    <span class="d-block d-sm-none">Body Start</span>
                                                    <span class="d-none d-sm-block">Body Start</span>
                                                </a>
                                            </li>
                                        </ul>

                                          {{-- -----Meta Start--------- --}}
                                        <div class="tab-content pt-2 text-muted">
                                            <div class="tab-pane" id="homeTabsJustified">
                                                <textarea class="form-control bg-light-subtle" rows="15" name="meta_start" placeholder="Top Meta Section"> @if (isset($metaManagement->meta_start)){!! $metaManagement->meta_start !!}
                                                    @endif</textarea>

                                            </div>
                                             {{-- -----Meta End--------- --}}
                                            <div class="tab-pane show active" id="profileTabsJustified">
                                                <textarea class="form-control bg-light-subtle" rows="15" name="meta_end" placeholder="End Meta Section">@if (isset($metaManagement->meta_end)){!! $metaManagement->meta_end !!}
                                                    @endif</textarea>
                                            </div>
                                             {{-- -----Body Start--------- --}}
                                            <div class="tab-pane" id="messagesTabsJustified">
                                                <textarea class="form-control bg-light-subtle" rows="15" name="body_start" placeholder="Starting Body Section">@if (isset($metaManagement->body_start)){!! $metaManagement->body_start !!}
                                                    @endif</textarea>
                                            </div>
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

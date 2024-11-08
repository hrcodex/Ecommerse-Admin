@extends('backend.layout.layout')
@section('title','product-list')
@section('style')

@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                {{-- @php
                    foreach ($product as $key => $value) {
                       echo $value->name;
                       echo $value->images;
                    //    foreach ($value->images as $key=>$image) {
                    //     echo $image;
                    //    }
                    }
                @endphp --}}

                <div class="card-header d-flex justify-content-between align-items-center gap-1">
                    <h4 class="card-title flex-grow-1">Sliders : {{ $sliders->count() }}</h4>
                    <a href="{{ route('admin.settings.slider.create') }}" class="btn btn-sm btn-primary">
                        Create <i class="fa-solid fa-plus"></i>
                    </a>
                </div>

                <div>
                    <div class="table-responsive">
                        <table class="table align-middle mb-0 table-hover table-centered" id="example-table">
                            <thead class="bg-light-subtle">
                                <tr>


                                    <th>Slider</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Created_AT</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($sliders as $key=>$slider)
                                {{-- StartProduct --}}
                                <tr>

                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <div
                                                class="rounded bg-light img-thumbnail d-flex align-items-center justify-content-center">
                                                <img src="{{ asset($slider->image) }}" alt="" class="avatar-md"
                                                    style="border-radius: 5px;height: 30px;width: 70px">
                                            </div>

                                        </div>

                                    </td>
                                    <td>{{ $slider->name }}</td>
                                    <td>{!! $slider->description !!}</td>
                                    <td>
                                        <p>{{ $slider->created_at->format('d-M-Y'); }}</p>
                                    </td>
                                    <td>
                                        @if ($slider->status == 'Published')
                                        <h4><span class="badge bg-success">{{ $slider->status }}</span></h4>
                                        @else
                                        <h4><span class="badge bg-warning">{{ $slider->status }}</span></h4>
                                        @endif

                                    </td>

                                    <td>
                                        <div class="d-flex gap-2">

                                            <a href="{{ route('admin.settings.slider.edit',['id'=>$slider->id]) }}"
                                                class="btn btn-soft-primary btn-sm">
                                                <iconify-icon icon="solar:pen-2-broken" class="align-middle fs-18">
                                                </iconify-icon>
                                            </a>
                                            <a href="{{ route('admin.settings.slider.destroy',['id'=>$slider->id]) }}"
                                                onclick="confirmation(event)" class="btn btn-soft-danger btn-sm">
                                                <iconify-icon icon="solar:trash-bin-minimalistic-2-broken"
                                                    class="align-middle fs-18"></iconify-icon>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                {{-- EndProduct --}}
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- end table-responsive -->
                </div>
                <div class="card-footer border-top">
                    {{ $sliders->links('vendor.pagination.custom') }}
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
@section('script')


{{-- //Delet confarmation  --}}
{{-- <a></a> tag er modde ai ta dite hove ------- onclick="confirmation(event)"--}}
<script>
    //delet btn click korle ai funtion ta active hove
    function confirmation(ev) {
        //btn click korle ai tar karone kono kicu hove nah
        ev.preventDefault();
        //A tag er modde href er modde jei route ta ase ,href er value ta ai variable er sstore korve
        var urlToRedirect = ev.currentTarget.getAttribute('href');
        //pop up model asve delet korvo ki korvonah ask korve btn takve yes/no
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((
        result) => { //delet btn e click korle href e taka route ta kaj kove and success message asve delete hoye jave
            if (result.isConfirmed) {
                window.location.href = urlToRedirect;
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    }
</script>
@endsection

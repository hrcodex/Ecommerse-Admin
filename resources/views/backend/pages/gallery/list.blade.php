@extends('backend.layout.layout')
@section('title','category-list')
@section('style')
<style>
    /* Container needed to position the button. Adjust the width as needed */
.container {
  position: relative;
  width: 100%;
}

/* Make the image responsive */
.container img {
  width: 100%;
  height: auto;
}

/* Style the button and place it in the middle of the container/image */
.container .btn {
  position: absolute;
  top: 15%;
  left: 85%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  /* background-color: #a70000; */
  color: white;
  font-size: 16px;
  padding: 5px 10px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.container .btn:hover {
  background-color: black;
}
.container{
    margin-top: 10px;
}
</style>
@endsection
@section('content')
<div class="container-xxl">


    <div class="row">

        <div class="card-body">
            <div class="row">


                 {{-- ------------------- --}}
                 <div class="col-lg-3 col-md-4 col-xl-3">
                    <div class="container">
                        <img src="{{ asset('backend') }}/assets/images/small/img-2.jpg" alt="now">
                        <a href="" class="btn bg-primary" ><i class="fa fa-download" aria-hidden="true"></i></a>
                      </div>
                  </div>
                 {{-- --------------------- --}}

                 
            </div>
        </div>
    </div>

</div>


@endsection
@section('script')

@endsection

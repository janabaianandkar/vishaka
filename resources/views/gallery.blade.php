@extends('header1')
@section('content')

<div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Gallery</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Gallery</p>
            </div>
        </div>
</div>

<div class="container-fluid pt-5">
  <div class="container">
    <div class="row">
        @foreach($data1 as $d)
        <div class="col-lg-3 col-md-6">
            <div class="team card position-relative overflow-hidden border-0 mb-5">
                <img class="card-img-top" src="admin/img/{{$d->img}}" alt="" height="200" width="200">
            </div>
        </div>
        @endforeach
                                <!-- <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img2.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img3.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img1.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img2.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img3.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img1.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img2.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img3.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img1.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img2.jpg" alt="" height="200" width="200">
                    </div>
                </div>
                                <div class="col-lg-3 col-md-6">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="../vishakadashboard/pages/forms/images/img3.jpg" alt="" height="200" width="200">
                    </div>
                </div> -->
    </div>    
  </div>
</div>

@endsection
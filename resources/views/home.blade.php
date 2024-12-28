@extends('header1')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5" style="background-image:url('{{asset('admin/img/img1.jpg')}}');">
        <div class="container text-center py-5">
            <h1 class="text-white mb-4">Vishaka Textiles</h1>
            <h1 class="text mb-4" style="color:orange;">DOBBY BORDER TOWEL</h1>
            
        </div>
    </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="{{asset('template/img/aboutimg.png')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <h6 class="text text-uppercase font-weight-bold" style="color:purple;">About Us</h6>
                    <h1 class="mb-4">We're provide modern and high quality towels</h1>
                    <p class="mb-4">Vishaka Industries Part of reputed business “kodam Group”, has grown manifold since its inception in the year 1968, having production capacity of 800 tons of Terry Towel & Toweling cloth annually.
                    <br><br>
                    Our journey began 50 years ago in the years 1968 as Solapur sizing works a grey cloth manufacturing unit. Then after shifted our product range towards world famous Solapur Jacquard chaddars (Bedsheets) in the year 1973...</p>
                    <button class="btn" data-toggle="modal" style="background-color:purple; color:white;"><a href="/aboutus" style="color:white;">Read more...</a></button>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <h6 class="text text-uppercase font-weight-bold" style="color:purple;">Awesome Work</h6>
                <h1 class="mb-4" style="color:gray;">Our product gallery</h1>
            </div>
            <div class="row">
                @foreach($data as $d)
                <div class="col-lg-4 col-md-3">
                    <div class="team card position-relative overflow-hidden border-0 mb-5">
                        <img class="card-img-top" src="admin/img/{{$d->img}}" alt="" width=200 height=200>
                        <div class="card-body text-center p-0">
                            <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                <h5 class="font-weight-bold">{{$d->name}}</h5>
                            </div>
                           
                            <div class="team-social d-flex align-items-center justify-content-center bg" style="background-color:purple;">
                                <a class="btn btn-outline-secondary btn-social mr-2" href="product_details1/{{$d->id}}"><i class="fa fa-arrow-right" style=" color:orange;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
                
                
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection
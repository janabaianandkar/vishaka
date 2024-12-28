@extends('header1')
@section('content')

<div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">About Us</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">About Us</p>
            </div>
        </div>
</div>

<div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="admin/img/abouttowel.jpg" alt="">
                    <!--<div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">25+ Years Experience</h3>
                    </div>-->
                </div>
                <div class="col-lg-7">
                    <!--<h5 class="text text-uppercase font-weight-bold" style="color:purple;">About Us</h5>-->
                    <h3 class="mb-4" style="color:purple;">Welcome to Vishaka Tex</h3>
                    <p class="mb-4">Vishaka Industries Part of reputed business “kodam Group”, has grown manifold since its inception in the year 1968, having production capacity of 800 tons of Terry Towel &amp; Toweling cloth annually.
                       Our journey began 50 years ago in the years 1968 as Solapur sizing works a grey cloth manufacturing unit. Then after shifted our product range towards world famous Solapur Jacquard chaddars (Bedsheets) in the year 1973.
                       Entered into the cotton yarn business in the year 2001. Now our State of the art technology weaving facility includes Smit Textiles (Italy) weaving machines with Staubli (France) Jacquard machines. We at Vishaka Industries use (BCI) Best Cotton Initiative Certified cotton yarn as per our customers requirement. Our innovating designs meet the customers need. We are committed to improve every single loop so that the best quality reaches our customer.
                       Product Range:- We are specialized in manufacturing Jacquard Beach Towel (velour wash finished), Jacquard Fouta towels (One side terry), Piece dyed Jacquard border terry bath towels, Institutional Towels (with logo’s of hospitality institutions)</p>
                    <div class="d-flex align-items-center pt-2">
                        <!--<button type="button" class="btn" data-toggle="modal" style="background-color:purple; color:white;">Read more...
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                            <span></span> 
                        </button>-->
                        <!--<h5 class="font-weight-bold m-0 ml-4">Play Video</h5>-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Modal -->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            
            <div class="owl-carousel testimonial-carousel owl-dot">
                <div class="position bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text position-absolute" style="top: -6px; right: 0; color:purple;"></i>
                    <div class="d-flex align-items-center mb-4" >
                        <i class=" fa fa-binoculars fa-lg" style="font-size:50px; background-color:white; color:purple;"></i>
                        
                    </div>
                    <center><h4 class="font-weight-semi-bold m-0">Our Vision</h4></center><br>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                </div>
                <div class="position bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text position-absolute" style="top: -6px; right: 0; color:purple;"></i>
                    <div class="d-flex align-items-center mb-3">
                    <i class=" fa fa-bullseye fa-lg" style="font-size:50px; background-color:white; color:purple;"></i>
                        
                    </div>
                    <center><h4 class="font-weight-semi-bold m-0">Our Mission</h4></center><br>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                </div>
                <div class="position bg-secondary p-4">
                    <i class="fa fa-3x fa-quote-right text position-absolute" style="top: -6px; right: 0; color:purple;"></i>
                    <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-check fa-lg" style="font-size:50px; background-color:white; color:purple;"></i>
                        
                    </div>
                    <center><h4 class="font-weight-semi-bold m-0">Our Values</h4></center><br>
                    <p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


@endsection
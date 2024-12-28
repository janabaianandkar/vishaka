<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Vishaka Textiles Template testing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{asset('template/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('template/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('template/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+91 217 2656377 / +91 217 2656378</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@vishakatex.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
            <a href="/home" class="navbar-brand ml-lg-3">
                <h1 class="m-0 display-5 text-uppercase text-primary">
                <img src="{{asset('template/img/vishakatextlogo.jpg')}}" style="height:55px; float:left;">
                </h1>
                <p style="color:balck;"><b><u>Vishaka</u></b> 
                <strong style="color:purple;"><u>Industries</u></strong><br>
                <span style="font-size:18px;">Rise of an innovation</span>
            </p>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav m-auto py-0">
                    <a href="/home" class="nav-item nav-link">Home</a>
                    <a href="/aboutus" class="nav-item nav-link">About Us</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Products</a>
                        
                        <div class="dropdown-menu rounded-0 m-0">
                        @foreach($data as $d)
                            <a href="/product_details1/{{$d->id}}" class="dropdown-item">{{$d->name}}</a>    
                        @endforeach
                        </div>
                       
                    </div>
                    <a href="/gallery1" class="nav-item nav-link">Gallery</a>
                    <a href="/contactus" class="nav-item nav-link">Contact Us</a>
                    <a href="/feedback1" class="nav-item nav-link">FeedBack</a>
                    <a href="/enquiry1" class="nav-item nav-link">Enquiry</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('content')

    <!-- Footer Start -->
    
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy;  All Rights Reserved Vishaka Tex.
				
				
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
            Design & Developed by Vertex Technosy
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn back-to-top" style="background-color: purple; color: white; display: inline;"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('template/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('template/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('template/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('template/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('template/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('template/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('template/js/main.js')}}"></script>
</body>

</html>
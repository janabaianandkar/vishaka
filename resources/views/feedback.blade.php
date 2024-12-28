@extends('header1')
@section('content')

<!-- Header Start -->
<div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-3">Feedback</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Feedback</p>
            </div>
        </div>
    </div>
    <!-- Header End -->

 <!-- Feedback Start -->
 <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <!-- <div class="bg text text-center p-4" style="background-color:purple;">
                        <h6 class="m-0" style="color:white;"><i class="fa fa-map-marker-alt text-white mr-4"></i>D-7/2, MIDC, Akkalkot Road, Solapur - 413 006, Maharashtra, India</h6>
                    </div>
                    <iframe style="width: 100%; height: 470px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                        frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
                        
                    <img class="img-fluid w-100" src="/admin/img/feedbackimg.png" alt="">
                </div>
                <div class="col-lg-7">
                    <!-- <h6 class="text text-uppercase font-weight-bold" style="color:purple;">Contact Us</h6> -->
                    <h3 class="mb-4" style="color:purple;">Feedback</h3>
                    <div class="contact-form bg-secondary" style="padding: 30px;">
                        <div id="success"></div>
                        <form method="post" enctype="multipart/form-data" action="{{route('feed.store')}}">
                            @csrf
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" placeholder="Name"
                                    name="name" required="required" data-validation-required-message="Please enter your name" pattern="[a-z A-Z]+" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" placeholder="Email"
                                    name="eml" required="required" data-validation-required-message="Please enter your email" pattern="^[\w-\.]+([\w-]+\.)+[\w-]{2,4}$" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="mobile" placeholder="Mobile No"
                                    name="mob" required="required" data-validation-required-message="Please enter a mobile no" pattern="[0-9]+" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="address" placeholder="Address"
                                    name="addr" required="required" data-validation-required-message="Please enter a address" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="3" id="description" placeholder="Description"
                                    name="desc" required="required"
                                    data-validation-required-message="Description"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn py-3 px-4" type="submit" id="sendMessageButton" style="background-color:purple; color:white;" name="btn">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feedback End -->

@endsection
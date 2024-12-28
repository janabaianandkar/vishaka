@extends('header')
@section('content')

<!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
            <!-- Count Start -->
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Product 
                    </h2>
                    <h4 class="mb-5">{{$productcount}}</h4>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Gallery 
                    </h2>
                    <h4 class="mb-5">{{$gallerycount}}</h4>
          
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Contact 
                    </h2>
                    <h4 class="mb-5">{{$contactcount}}</h4>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">FeedBack 
                    </h2>
                    <h4 class="mb-5">{{$feedbackcount}}</h4>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">Enquiry 
                    </h2>
                    <h4 class="mb-5">{{$enquirycount}}</h4>
                    
                  </div>
                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <div class="card-body">
                    <img src="{{asset('admin/assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h2 class="font-weight-normal mb-3">MultipleImage 
                    </h2>
                    <h4 class="mb-5">{{$multipleimagecount}}</h4>
                    
                  </div>
                </div>
              </div>
            </div>
            <!-- Count End -->
            
            
            
          </div>
          <!-- content-wrapper ends -->
@endsection
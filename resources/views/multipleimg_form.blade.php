@extends('header')
@section('content')

<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Form </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Default form</h4> -->
                    <!-- <p class="card-description"> Basic form layout </p> -->
                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('upload.store')}}">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputUsername1">Image</label><br>
                        <input type="file" name="img[]" multiple>
                      </div>
                      <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                      <button type="reset" class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
    </div>
<!-- content-wrapper ends -->

@endsection
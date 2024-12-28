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
                    <form class="forms-sample" method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputUsername1">Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="product name"
                        required="required" name="pname">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" class="form-control" id="exampleInputUsername" placeholder="Title"
                        required="required" name="tit">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Materials</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="materials"
                        required="required" name="mate">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Quality</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Quality"
                        required="required" name="qual">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Use</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Use"
                        required="required" name="us">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Sizes</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Sizes"
                        required="required" name="siz">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">GMS</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Gms"
                        required="required" name="gm">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Colors</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Colors"
                        required="required" name="colr">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUsername1">Image</label><br>
                        <input type="file" name="img">
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
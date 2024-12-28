@extends('header')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Product Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Bordered table</h4> -->
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <table class="table table-bordered">
                        <tr>
                        <th>ID</th>
                        <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Image</th>
                            <td><img src="/admin/img/{{$data->img}}" alt="imgs"></td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Title</th>
                            <td>{{$data->title}}</td>
                        </tr>
                        <tr>
                            <th>Materials</th>
                            <td>{{$data->mat}}</td>
                        </tr>
                        <tr>
                            <th>Quality</th>
                            <td>{{$data->qua}}</td>
                        </tr>
                        <tr>
                            <th>Use</th>
                            <td>{{$data->use}}</td>
                        </tr>
                        <tr>
                            <th>Sizes</th>
                            <td>{{$data->size}}</td>
                        </tr>
                        <tr>
                            <th>Gms</th>
                            <td>{{$data->gms}}</td>
                        </tr>
                        <tr>
                            <th>Colors</th>
                            <td>{{$data->color}}</td>
                        </tr>
                        </table>
                  </div>
                </div>
             </div>
            </div>
          </div>

@endsection
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
            <button class="btn btn-primary mr-2"><a href="{{route('product.create')}}" style="color:white;">Add</a></button><br><br>
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!-- <h4 class="card-title">Bordered table</h4> -->
                    <!-- <p class="card-description"> Add class <code>.table-bordered</code> -->
                    </p>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Image</th>
                          <th>Name</th>
                          <th>Title</th>
                          <!-- <th>Materials</th> -->
                          <!-- <th>Quality</th> -->
                          <!-- <th>Use</th>
                          <th>Sizes</th>
                          <th>Gms</th>
                          <th>Colors</th> -->
                          <th>Show</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $d)
                        <tr>
                          <td>{{$d->id}}</td>
                          <td><img src="/admin/img/{{$d->img}}" alt="imgs"></td>
                          <td>{{$d->name}}</td>
                          <td>{{$d->title}}</td>
                          <!-- <td>{{$d->mat}}</td> -->
                          <!-- <td>{{$d->qua}}</td> -->
                          <!-- <td>{{$d->use}}</td>
                          <td>{{$d->size}}</td>
                          <td>{{$d->gms}}</td>
                          <td>{{$d->color}}</td> -->
                          <td><button class="btn btn-warning mr-2"><a href="{{route('product.show',$d->id)}}" style="color:white;">Show</a></button></td>
                          <td><button class="btn btn-success mr-2"><a href="{{route('product.edit',$d->id)}}" style="color:white;">Update</a></button></td>
                          <td>
                            <form action="{{route('product.destroy',$d->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mr-2">Delete</button>
                            </form>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
             </div>
            </div>
          </div>

@endsection
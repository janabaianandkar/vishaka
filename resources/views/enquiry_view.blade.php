@extends('header')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Feedback</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <!-- <button class="btn btn-primary mr-2"><a href="{{route('gallery.create')}}" style="color:white;">Add</a></button><br><br> -->
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
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Address</th>
                          <th>Description</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($enq as $e)
                        <tr>
                          <td>{{$e->id}}</td>
                          <td>{{$e->name}}</td>
                          <td>{{$e->email}}</td>
                          <td>{{$e->mobile}}</td>
                          <td>{{$e->address}}</td>
                          <td>{{$e->description}}</td>
                          <td>
                            <form action="{{route('enqu.destroy',$e->id)}}" method="post">
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
@extends('header')
@section('content')

<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Multiple Images </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <button class="btn btn-primary mr-2"><a href="{{route('upload.create')}}" style="color:white;">Add</a></button><br><br>
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
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $d)
                        <tr>
                          <td>{{$d->id}}</td>
                          <td>
                          @php
                          $imgnames = json_decode($d->img, true);
                          @endphp
                                                
                          @if(is_array($imgnames) && count($imgnames)>0)
                            @foreach($imgnames as $imgname)
                            <img src="{{asset('/admin/img/'.$imgname)}}" alt="imgs">
                            @endforeach
                            @else
                            <p>No images available</p>
                          @endif
                        </td>
                          <td><button class="btn btn-success mr-2"><a href="{{route('upload.edit',$d->id)}}" style="color:white;">Update</a></button></td>
                          <td>
                            <form action="{{route('upload.destroy',$d->id)}}" method="post">
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
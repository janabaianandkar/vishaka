@extends('header1')
@section('content')

<div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-white display-4">{{$data_code->name}}</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">{{$data_code->name}}</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="/admin/img/{{$data_code->img}}" alt="" width="100" height="100">
                    <!--<div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">25+ Years Experience</h3>
                    </div>-->
                 </div>
                <div class="col-lg-7">
                    <h1>{{$data_code->name}}</h1>
                     <table cellpadding="9">
                        <tbody><tr>
                        <th>Title</th>
                        <td>{{$data_code->title}}</td>    
                        </tr>
                        <tr>
                        <th>Materials</th>
                        <td>{{$data_code->mat}}</td>    
                        </tr>
                        <tr>
                        <th>Quality</th>
                        <td>{{$data_code->qua}}</td>    
                        </tr>
                        <tr>
                        <th>Use</th>
                        <td>{{$data_code->use}}</td>    
                        </tr>
                        <tr>
                        <th>Sizes</th>
                        <td>{{$data_code->size}}</td>    
                        </tr>
                        <tr>
                        <th>Gms</th>
                        <td>{{$data_code->gms}}</td>    
                        </tr>
                        <tr>
                        <th>Colors</th>
                        <td>{{$data_code->color}}</td>    
                        </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>

@endsection
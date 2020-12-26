@extends('dashboard.layouts.master')

@section('content')

<div class="row">
    <div class="col-sm-1" style="background-color: #2d3748;">

        <div class="form-group" style="text-align: center; margin-top:20px; padding-top: 8px" >
            <p style="text-align: center">
            <h4 >
                <a class="btn btn-light"  data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Categories
                </a>
            </h4>
            </p>

            <div class="collapse" id="collapseExample1">
                <a href="{{route('categories.create')}}" class="btn btn-info btn-sm">Create New</a>
                <br><br>
                <a href="{{route('categories.index')}}" class="btn btn-success">Show</a>
            </div>
        </div>

        <hr>
        <div class="form-group" style="text-align: center; padding-top: 8px">
            <p style="text-align: center">
                <a class="btn btn-light" data-toggle="collapse" href="#collapseExample2" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Products
                </a>
            </p>

            <div class="collapse" id="collapseExample2">
                <a href="{{route('products.create')}}" class="btn btn-info btn-sm">Create New</a>
                <br><br>
                <a href="{{route('products.index')}}" class="btn btn-success">Show</a>
            </div>
        </div>

        <hr>
        <div class="form-group" style="text-align: center; padding-top:  8px">
            <p style="text-align: center">
                <a class="btn btn-light" data-toggle="collapse" href="#collapseExample3" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Orders
                </a>
            </p>

            <div class="collapse" id="collapseExample3">
                <a href="{{route('orders.index')}}" class="btn btn-success">Show</a>
            </div>
        </div>
        <hr>
        <div class="form-group" style="text-align: center; padding-top: 8px">
            <p style="text-align: center">
                <a class="btn btn-light" data-toggle="collapse" href="#collapseExample4" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Users
                </a>
            </p>
            <div class="collapse" id="collapseExample4">
                <a href="#" class="btn btn-info btn-sm">Create</a>
                <br><br>
                <a href="#" class="btn btn-success ">Show</a>
            </div>
        </div>
        <hr>
        </div>
        <div class="col-sm-11">
            @yield('content2')
        </div>
    </div>

@endsection
@extends('dashboard.layouts.sidebar')

@section('content2')

    <table class="table">

        <thead class="thead-dark">
        @if($errors)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">
                    {{$error}}
                </div>
            @endforeach
        @endif


        @if (session()->has('msg'))
            <div class="alert alert-success">
                {{session()->get('msg')}}
            </div>
        @endif

        <tr>
            <th scope="col">Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Image</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->details as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->product->name}}</td>

                <td><img src="/uploades/{{$item->product->image}}" alt="" height="75px" width="75px"></td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->price}}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    <div class="card">
        <div class="card-header">
           <h3 style="color: red"> User Information </h3>
        </div>
        <div class="card-body">
            <h5 class="card-title">Name : {{$order->user->name}}</h5>
            <h5 class="card-title">Email : {{$order->user->email}}</h5>
            <h5 class="card-title">Address : {{$order->address}}</h5>
            Total Price : <span style="color: blue">{{$order->total_price}} $</span>
        </div>
    </div>

@endsection
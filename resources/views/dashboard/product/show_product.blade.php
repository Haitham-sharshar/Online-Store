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
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
            <th scope="col">Description</th>
            <th scope="col">Category Name</th>
            <th scope="col">Ops</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product )
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->price}} $</td>
            <td><img src="/uploades/{{$product->image}}" alt="" width="75px" height="75px"></td>
            <td>{{$product->description}}</td>
            <td>{{$product->category->name}}</td>
            <td>
            <a href="{{route('products.edit',$product->id)}}" class="btn btn-sm btn-success">Edit</a>

            {{Form::open(['route'=>['products.destroy',$product->id],'method'=>'DELETE'])}}
            {{Form::button('Delete',['type'=>'submit','class'=>'btn btn-sm btn-danger ti-trash','onclick'=>'return confirm("are you sure to delete this category ?")'])}}
            {{Form::close()}}

            </td>
        </tr>
          @endforeach

        </tbody>
    </table>


@endsection
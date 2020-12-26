@extends('dashboard.layouts.sidebar')



@section('content2')

    <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
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

        @csrf

        <div class="form-group">
            <label for="price">Name</label>
            <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="Enter Price">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" >
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description"  id="description" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="category">Category :</label>
        <select name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
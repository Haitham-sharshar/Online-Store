@extends('dashboard.layouts.sidebar')



@section('content2')

    <form action="{{route('categories.update',$category->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <ul>
            @foreach($errors->all() as $error)
                <li class="alert alert-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>

        <ul>
            @if (session()->has('msg'))
                <div class="alert alert-success">
                    {{session()->get('msg')}}
                </div>
            @endif
        </ul>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$category->name}}" class="form-control" id="name"  >
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
@extends('dashboard.layouts.sidebar')



@section('content2')

    <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
        @csrf
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
            <input type="text" name="name" class="form-control" id="name"  placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" class="form-control" id="image" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endsection
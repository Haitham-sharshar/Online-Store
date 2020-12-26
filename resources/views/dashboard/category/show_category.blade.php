@extends('dashboard.layouts.sidebar')

@section('content2')
   <ul>
       @foreach($errors->all() as $error)
           <div class="alert alert-warning">
               {{$error}}
           </div>
           @endforeach
   </ul>

   <ul>
       @if (session()->has('msg'))
           <div class="alert alert-success">
               {{session()->get('msg')}}
           </div>
        @endif
   </ul>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Created_at</th>
            <th scope="col">Updated_at</th>
            <th scope="col">Ops</th>
        </tr>
        </thead>
        <tbody>
          @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td><img src="/uploades/{{$category->image}}" alt="" width="75px" height="75px"></td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
            <td>
                <a href="{{route('categories.edit',$category->id)}}" class="btn btn-sm btn-success">Edit</a>

                    {{Form::open(['route'=>['categories.destroy',$category->id],'method'=>'DELETE'])}}
                    {{Form::button('Delete',['type'=>'submit','class'=>'btn btn-sm btn-danger ti-trash','onclick'=>'return confirm("are you sure to delete this category ?")'])}}
                    {{Form::close()}}

            </td>
        </tr>
          @endforeach
        </tbody>
    </table>


@endsection
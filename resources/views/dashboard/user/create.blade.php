@extends('dashboard.layouts.sidebar')



@section('content2')

    <form action="" method="">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name"  placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email"  placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password"  placeholder="Enter Password">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" id="type">
                <option value="admin">admin</option>
                <option value="client">client</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
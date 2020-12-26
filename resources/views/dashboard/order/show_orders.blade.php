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
            <th scope="col">Order Date</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Ops</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order )
            <tr>
                <th scope="row">{{$order->id}}</th>
                <td>{{$order->user->name}}</td>
                <td>{{$order->order_date}}</td>
                <td>{{$order->address}}</td>
                <td>
                    {{--@foreach($order->id as $orders)--}}
                    <select name="status" id="status" >
                        @foreach($status as $statuses)
                        <option value="{{$statuses}}  {{$statuses == $order->status ? 'selected' : ''}}" data-id={{$order->id}}  id="st" >{{$statuses}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <a href="{{route('orders.show',$order->id)}}" class="btn btn-sm btn-success">Show</a>

                </td>
            </tr>

        @endforeach

        </tbody>
    </table>


@endsection

@section('script')
<script>
 $('#status').change(function(){
     var data = {};
     data.status = $(this).find('option:selected').val();
     data.order_id = $('#st').data('id');
     data._token = "{{csrf_token()}}";
     $.ajax({
         url : 'update-status',
         method : 'post',
         data : data,
         success : function (data){

         }
     });
 })
</script>


    @endsection

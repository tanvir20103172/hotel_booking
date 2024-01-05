@extends('admin.master')
@section('content')
<h1>Booking List</h1>

<a href="{{route('booking.list.print')}}" class="btn btn-success">Print</a>

<br>
<table class="table">

    <thead>
        <tr align="center">
            <th scope="col">Si</th>
            <th scope="col">User Id</th>
            <th scope="col">Name</th>
            <th scope="col">Phone No</th>
            <th scope="col">Adults</th>
            <th scope="col">Children</th>
            
            <th scope="col">Checkin</th>
            <th scope="col">Checkout</th>
            <th scope="col">Status</th>
            <th scope="col">Payment Status</th>
            <th scope="col">Transaction ID</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    @foreach ($bookings as $key=>$booking)
    <tbody align="center">
        <th scope="row">{{$key+1}}</th>
        <td>{{$booking->user_id}}</td>
        <td>{{$booking->name}}</td>
        <td>{{$booking->phone}}</td>
        <td>{{$booking->adults}}</td>
        <td>{{$booking->children}}</td>
       
        <td>{{$booking->checkin}}</td>
        <td>{{$booking->checkout}}</td>
        <td>{{$booking->status}}</td>
        <td>{{$booking->payment_status }}</td>
        <td>{{$booking->transaction_id }}</td>

        @if($booking->status=='pending')
        <td>

            <a href="{{route('booking.accept',$booking->id)}}" class="btn btn-success">Accept</a>
            <a href="{{route('booking.reject',$booking->id)}}" class="btn btn-danger">Reject</a>
        </td>
        @endif
    </tbody>
    @endforeach
</table>
@endsection
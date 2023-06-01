@extends('customers.layout')
@section('content')
<h1>Edit page</h1>

<div class="card">
    <div class="card-header"> Some Page</div>
    <div class="card-body">
        <form action="{{url('customer/'.$customers->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" /> 
            <label> First Name</label></br>
            <input type="text" name="firstname" id="firstname" value="{{$customers->firstname}}" class="form-control"></br>
            <label>Last Name</label></br>
            <input type="text" name="lastname" id="lastname" value="{{$customers->lastname}}" class="form-control"></br>
            <label>Address</label></br>
            <input type="text" name="address" id="address" value="{{$customers->address}}" class="form-control"></br>
            <label> Email</label></br>
            <input type="text" name="email" id="email" value="{{$customers->email}}" class="form-control"></br>
            <label> Telephone</label></br>
            <input type="text" name="telephone" id="telephone" value="{{$customers->telephone}}" class="form-control"></br>
        
            <input type="submit" value="Update" class="btn btn-success"></br>
        
{{-- issues are here wipe all and start again --}}
        </form>
    </div>
</div>
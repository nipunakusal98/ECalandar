@extends('customers.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Customers Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Last Name : {{ $customers->lastname }}</h5>
        <h4 class="card-title">First Name: {{$customers->firstname}}</h4>
        <p class="card-text">Address : {{ $customers->address }}</p>
        <p class="card-text">Email : {{ $customers->email }}</p>
        <p class="card-text">Mobile : {{ $customers->telephone }}</p>
       


  </div>
       
    </hr>
  
  </div>
</div>
@extends('employees.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employees->name }}</h5>
        <p class="card-text">Email : {{ $employees->email }}</p>
        <p class="card-text">Mobile : {{ $employees->mobile }}</p>
        <p class="card-text">Password : {{ $employees->password }}</p>
        <p class="card-text">Emplyee Type : {{ $employees->emp_type }}</p>


  </div>
       
    </hr>
  
  </div>
</div>
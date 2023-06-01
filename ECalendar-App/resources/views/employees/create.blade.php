@extends('employees.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" class="form-control"></br>
        <label>Employee Type</label></br>
        <input type="text" name="emp_type" id="emp_type" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
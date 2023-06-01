@extends('customers.layout')
@section('content')
<h1>Edit page</h1>

<div class="card">
    <div class="card-header"> Some Page</div>
    <div class="card-body">
        <form action="{{url('customer/'.$customer->id)}}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$customer->id}}" id="id" /> 
        
{{-- issues are here wipe all and start again --}}
        </form>
    </div>
</div>
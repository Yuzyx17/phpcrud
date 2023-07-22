@extends('users.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Create New Users</div>
  <div class="card-body">
       
      <form action="{{ url('users') }}" method="post">
        {!! csrf_field() !!}
        <label>Username</label></br>
        <input type="text" name="username" id="username" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="email" name="useremail" id="useremail" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="tel" name="userphone" id="userphone" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  </div>
</div>
  
@stop
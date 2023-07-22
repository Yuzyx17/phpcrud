@extends('users.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit User</div>
  <div class="card-body">
       
      <form action="{{ url('users/' .$users->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Username</label></br>
        <input type="text" name="username" id="username" value="{{$users->username}}" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="email" name="useremail" id="useremail" value="{{$users->useremail}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="tel" name="userphone" id="userphone" value="{{$users->userphone}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop
@extends('Users.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Users Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Username : {{ $users->username }}</h5>
        <p class="card-text">Email Address : {{ $users->useremail }}</p>
        <p class="card-text">Phone : {{ $users->userphone }}</p>
  </div>
    </hr>
  </div>
</div>
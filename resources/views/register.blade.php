@extends('master')
@section('content')
<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 offset-sm-4">
        <form action="/register" method="POST">
            @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" class="form-control"  name="name"  placeholder="Enter User Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"  name="email"  placeholder="Enter email">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"  name="password" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary mt-2">Login</button>
</form>
        </div>
    </div>
</div>
@endsection
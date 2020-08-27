@extends('admin/layouts.app')
@section('content')
  <div class="container"> 
<div class="content-wrapper">

	<div class="main-container">	
	<form method="POST" action="{{route('users_store')}}">
    @csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" name='name' aria-describedby="emailHelp" placeholder="Enter name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" name='email' placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password1" name='password' placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
</div>
</div>
</div>
@endsection
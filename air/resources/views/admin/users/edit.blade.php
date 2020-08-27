@extends('admin/layouts.app')
@section('content')
<div class="content-wrapper">
	<div class="container">	
	<div class="main-container">	
	<form method="POST" action="{{route('users_update')}}">
    @csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Name</label>
    <input type="text" value="<?php echo $user['name']?>" class="form-control" id="name" name='name' aria-describedby="emailHelp" placeholder="Enter name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email"  value="<?php echo $user['email']?>" class="form-control" id="email1" aria-describedby="emailHelp" name='email' placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password1" name='password' placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="hidden" name="id"  value="<?php echo $user['id']?>">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection
@extends('admin/layouts.app')
@section('content')
  <div class="container"> 
<div class="content-wrapper">

	<div class="main-container">	
	<form method="POST" action="{{route('posts_store')}}" enctype="multipart/form-data"
>
    @csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="name" name='title' aria-describedby="emailHelp" placeholder="Enter Title" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea  class="form-control" id="email1" aria-describedby="emailHelp" name='description' placeholder="Enter Description" required></textarea> 

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Img</label>
    <input type="file" class="form-control-file" id="password1" name='image' placeholder="Img" required>
  </div>

  <button type="submit" class="btn btn-primary">Create</button>
</form>
</div>
</div>
</div>
@endsection
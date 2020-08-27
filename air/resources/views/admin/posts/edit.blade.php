@extends('admin/layouts.app')
@section('content')
<div class="content-wrapper">
	<div class="container">	
	<div class="main-container">	
	<form method="POST" action="{{route('posts_update')}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group" >
    <label for="exampleInputEmail1">Title</label>
    <input type="text" value="<?php echo $posts['title']?>" class="form-control" id="name" name='title' aria-describedby="emailHelp" placeholder="Enter Title" required>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <textarea   value="" class="form-control" id="email1" aria-describedby="emailHelp" name='description' placeholder="Enter Description"  required> <?php echo $posts['description']?></textarea>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Img</label>
    <input type="file" class="form-control-file"  name='image' required >
  </div>
  <input type="hidden" name="id"  value="<?php echo $posts['id']?>">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
@endsection


@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<title><?php echo $post['title'] ?></title>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}


</style>
<body class="w3-light-grey w3-content" style="max-width:1600px">

<!-- Sidebar/menu -->

<div class="container">
  <div class="blog-post blog-single-post">
    <div class="single-post-title">
      <h2><?php echo $post['title'] ?></h2>
    </div>
    <div class="single-post-content">
      <p><?php echo $post['description'] ?></p>
    </div>
    <div class="single-post-content">
      <img class="map1" src='{{ asset("/images/") }}/<?php echo $post['img'] ?>' alt="" usemap="#Map1" />
      <map name="Map1" id="Map1">
          <area alt="" title="" href="#" shape="rect" coords="50,50,450,450" />
      </map>
    </div>
  </div>
</div>
<footer class="w3-center w3-black w3-padding-16">
  <p>&copy; 2020 All Right Reserved</p>
</footer>


  


</body>
</html>

@endsection




@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<title>Hex Architects</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->


<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="https://payload.cargocollective.com/1/4/159426/2272022/7_utec_IB_1340_c.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>Hex</b></span> <span class="w3-hide-small w3-text-light-grey">Architects</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Projects</h3>
  </div>

  <div class="w3-row-padding">
                    <?php foreach ($posts as $key => $value) {
                      if($key<4 || $key%4!=0 || $key%8==0){
                ?>
                <a href='{{ url("/post/") }}/<?php echo $value['id'] ?>'>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding"><?php echo $value['title'] ?></div>
        <img src='{{ asset("/images/") }}/<?php echo $value['img'] ?>' alt="House" style="    width: 300px;">
      </div>
    </div>
        </a>
 <?php }
else  {
  

  ?>
  <div class="w3-row-padding"></div>
  <?php  
}


}?>
  </div>




  <!-- About Section -->

  <!-- Contact Section -->

  
<!-- Image of location/map -->
<div class="w3-container">
  <img src="/w3images/map.jpg" class="w3-image" style="width:100%">
</div>

<!-- End page content -->
</div>


<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p>&copy; 2020 All Right Reserved <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
</footer>

</body>
</html>
@endsection

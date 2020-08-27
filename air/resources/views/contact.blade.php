@extends('layouts.app')
<title>Contact Us</title>
@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch and talk about your next project.</p>
    <form  target="_blank">
      <input class="w3-input w3-border" id='e' type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" id='e' type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border"  id='e'type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border"  id='e' type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit" onclick="yo();">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
<footer class="w3-center w3-black w3-padding-16">
  <p>&copy; 2020 All Right Reserved <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p>
</footer>
@endsection
<script type="text/javascript">
  function yo(){
    document.getElementById('e').value="";
    alert("Thank you for Message!")
  }
</script>

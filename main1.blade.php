<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
  
  <title>LOGIN & REGISTER</title> 
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style_anil.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/button.css')}}">
  
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity= 
  "sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <script src="javascript.js"></script>
 
</head>

<body>
  <div class="container-fluid  r1">
    <div class="col-sm-4 col-md-4 col-xs-4 col-lg-4"><img src="#" alt="Logo here"></div>
    <div class="col-sm-8 col-md-8 col-xs-8 col-lg-8"><span style="color:orange; font-size:60px;">E-</span> <span class="over" style="font-size: 60px">Spices</span></div>
  </div>
    

    <div class="topnav" id="myTopnav">
    <a href="main1.php" class="active">Home</a>
    <a href="logout.php" class="login">Logout
    <?php
     echo $_SESSION['mail'];
    ?>  
    </a>
    <a href="contact_us.php">Contact</a>
    <a href="about.php">About</a>
    <a href="search">Search</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fas fa-bars"></i>
    </a>
  </div>

 <div class="col-sm-12">
   <img src="mass14.jpg" width="100%" height="auto">
</div>




<div class="col-sm-12">
  <img src="mass13.jpg" width="102.4%" height="600px" style="margin-left: -15px;">
</div>

@include('footer')
</body>
</html>

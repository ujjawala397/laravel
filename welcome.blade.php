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
  @include('header')

  <div class="container-fluid c3 col-sm-12 col-md-12 col-xs-12 col-lg-12" style="background-image: url('wall.jpg');">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>



</script>
  <div class="container-fluid" >

<div id="id01" class="modal">
  <form class="modal-content animate" action="login.php" method="GET" >
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="container-fluid">
      <label for="uname"><b>Username</b></label>
      <input type="email" placeholder="Enter E-Mail" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pass" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container-fluid" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>


<div class="container-fluid" >
<div id="id02" class="modal">
  <form class="modal-content animate" action="/form" method="post">
    {{csrf_field()}}
    <div class="imgcontainer">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container-fluid">
      <label for="uname"><b>Full name</b></label>
      <input type="text" name="name" placeholder="Enter Your Name" required="Please Enter Name"><br>
      <label for="email"><b>E-mail</b></label>
      <input type="email" name="email" placeholder="Enter E-mail" required="Please Enter E-mail"><br>
      <label for="text"><b>Phone number</b></label>
      <input type="number" name="phno" placeholder="Enter Phone Number" required="Please Enter Your Number"><br>
      
      <label for="psw"><b>Password</b></label>
      <input type="password" name="pass" placeholder="Enter password" required="Please set your Password"><br>
      
      <input type="password" name="pass1" placeholder="Confirm password" required="Please verify you password"><br>      
      <button type="submit">Sign Up</button>
      <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container-fluid" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
<script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <div class="box col-sm-4" style="height: auto;"><span onclick="document.getElementById('id01').style.display='block'"> Login</span></div>
    <div class="col-sm-4" style="height: auto;">
    </div>
    <div class="box1 col-sm-4" style="height: auto;" ><span onclick="document.getElementById('id02').style.display='block'">Register Now</span></div><br><br>
    </div>
  </div>
</div>
<div class="col-sm-12">
  <img src="about.jpg" width="102.4%" height="600px" style="margin-left: -15px;">
</div>

@include('footer')
</body>
</html>
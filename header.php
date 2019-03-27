<?php
$connect = mysqli_connect("localhost", "root", "", "try");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.navbar-inverse{
    margin-bottom: 0;}
#white a:hover{
    background-color: black;
}
#white a{
color:white;
font-size:15px;
}
</style>
</head>
<body>
<!-- header-->
<nav style="margin-bottom:0px;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">D' Pizza</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        
        <li><a href="c.php">Order online</a></li>
        <li><a href="storelocator.php">store locator</a></li>
        <li><a href="feedback.php">feedback</a></li>
      </ul>
     <ul class="nav navbar-nav navbar-right">
       <?php  if (isset($_SESSION['username'])) : ?>
         <li style="width:200px; class="dropdown">
 <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b><?php echo $_SESSION['username']; ?></b> <span class="caret"></span></a>
  <ul style="background-color:black;width:200px;" class="dropdown-menu">
 <li id="white" ><a href="login.php" >Logout</a></li>
</ul>
</li>
	 <?php endif ?>
      
      </ul>
    </div>
  </div>
</nav>
 
</body>
</html>

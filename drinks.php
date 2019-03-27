<?php
session_start();
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
 <link rel="stylesheet" type="text/css" href="css/icons.css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Footer-with-button-logo.css">


      <style>
.pizzaro-secondary-navigation{
background-color:maroon;
}
.secondary-navigation{
display:block;
}
.pizzaro-secondary-navigation a{
color:white
}
.fax-ice-cream:before {
  content: "\1f368";}
.navbar-inverse{
    margin-bottom: 0;}
.button {
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
  background-color: #99081f;

}
  #white a:hover{
    background-color: black;
}
#white a{
color:white;
font-size:15px;
} 
.hover-area{
display: flex; justify-content: center; 
}
.icon-cupcake:before {
  content: "\e900";
}
.icon-chicken:before {
  content: "\e901";
}
.fax-slice-of-pizza:before {
 content: "\1f355";
}
.fax-burrito:before {
 content: "\1f32f";
}
.fax-taco:before {
 content: "\1f32e";
}
.fax-poultry-leg:before {
 content: "\1f357";
}
.fax-tropical-drink:before {
 content: "\1f379";
}
.fa-user-circle-o{
color:white;
}
@media screen and (max-width: 500px) {
.menu li{
 float: none;
    display: block;
}
}
</style>
 
</head>
<body>
<!-- header-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" >D' Pizza</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="home.php">Home</a></li>
        
        <li  class="active"><a href="c.php">Order online</a></li>
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
<div class="pizzaro-secondary-navigation">

<nav class="navbar navbar-inverse" style="height:auto;background-color:maroon;align:center">
 
    <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbara">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
    </div>
 <div class="collapse navbar-collapse" id="myNavbara">

 <nav class="secondary-navigation" >

    <ul class="nav navbar-nav"  >
    <ul class="menu" style="list-style-type:none" >
  <li class="menu-item" ><a href="c.php"><i class="fa fax-slice-of-pizza"></i>Pizza</a></li>

                        
                        <li class="menu-item" ><a href="taco.php"><i class="fa fax-taco"></i>Tacos</a></li>
                        <li class="menu-item"><a href="wraps.php"><i class="fa fax-burrito"></i>Wraps</a></li>
                        <li class="menu-item" ><a href="sides.php"><i class="fa fax-poultry-leg"></i>Sides</a></li>
                        <li class="menu-item" ><a href="deserts.php"><i class="fa fax-ice-cream"></i>Deserts</a></li>
                        <li class="menu-item" ><a href="drinks.php"><i class="fa fax-tropical-drink"></i>Drinks</a></li>
	</ul>
</ul>
<ul class="nav navbar-nav navbar-right">
<ul class="menu" style="list-style-type:none">
<li class="menu-item" ><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
</ul>
</ul>
 

</nav>
</div>
</nav>
</div>
<br>
			<?php
						$query = "SELECT * FROM drinks ORDER BY id ASC";
						$result = mysqli_query($connect, $query);
						if(mysqli_num_rows($result) > 0)
						{
							 while($row = mysqli_fetch_assoc($result)) {
							
							?>


 		<div class="col-md-4">
			<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">
			<div class="product-outer">
				<div class="product-inner">
         				<div class="product-image-wrapper">
                                        	<a class="hover-area">
                                       		<img src="<?php echo $row["image"]; ?>" class="img-responsive" alt="">
                                       		</a>
                                    	  <h3 class="hover-area"><?php echo $row["name"]; ?></h3>
                                          <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
                                          
                                         <div class="hover-area">
						
						<input type="number" name="quantity" value="1" step="1" class="form-control" style="width:50%;border-radius:20px;" />
					</div>
						<div>
						<br>
                                           <h3 class="hover-area"><?php echo $row["price"]; ?></h3>
				           <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
				           </div>
                                     <div class="hover-area">
                                         <button name="add" class="button" style="align:center;"><i class="fa fa-check-circle-o" style="font-size:20px"></i> Add to cart</button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
</div>
</div>
</form>

 <?php
	}	
	}
	?>
  
 </body>
</html>
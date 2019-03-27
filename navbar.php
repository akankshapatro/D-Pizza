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

 <link rel="stylesheet" type="text/css" href="icons.css" media="all" />
    
	
<style>
.secondary-navigation{
display:block;
}
.fax-ice-cream:before {
  content: "\1f368";}
.pizzaro-secondary-navigation a{
color:white
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
.menu-item li{
float:left;
}

</style>
</head>
<body>

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

</body>
</html>

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
 <link rel="stylesheet" type="text/css" href="icons.css" media="all" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="Footer-with-button-logo.css">


<link rel="stylesheet" href="radio.css">
<script type="text/javascript">	
  $(document).ready(function(){
        $("input[type='radio']").click(function(){
        	var radioValue = $("input[name='size']:checked").val();
		
		a=radioValue.split(",");
		
            if(a[1]=="small"){
		 k=parseInt(a[0])+0;
               document.getElementById('HH').innerHTML = ("&#8377;"+k);
            }
	 if(a[1]=="medium"){
		 k=parseInt(a[0])+150;
                document.getElementById('HH').innerHTML = ("&#8377;"+k);
            }
	 if(a[1]=="large"){
		 k=parseInt(a[0])+300;
                document.getElementById('HH').innerHTML = ("&#8377;"+k);
            }
	document.getElementById('hey').value = k;
        });
    });
</script>

      <style>
.pizzaro-secondary-navigation{
background-color:maroon;
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
</style>
 
</head>
<body>
<body>
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
        <li><a ><b>@<?php echo $_SESSION['username']; ?></b></a></li>
	 <?php endif ?>
      </ul>
    </div>
  </div>
</nav>
<div class="pizzaro-secondary-navigation">
                  <nav class="secondary-navigation"  aria-label="Secondary Navigation">
                     <ul  class="menu">
                        <li class="menu-item" style="float: left;left:20px;"><a href="c.php"><i class="fa fax-slice-of-pizza"></i>Pizza</a></li>
                        
                        
                        <li class="menu-item" style="float: left;left:20px;"><a href="taco.php"><i class="fa fax-taco"></i>Tacos</a></li>
                        <li class="menu-item" style="float: left;left:20px;"><a href="wraps.php"><i class="fa fax-burrito"></i>Wraps</a></li>
                        <li class="menu-item" style="float: left;left:20px;"><a href="sides.php"><i class="fa fax-poultry-leg"></i>Sides</a></li>
                        <li class="menu-item" style="float: left;left:20px;"><a href="deserts.php"><i class="fa fax-ice-cream"></i>Deserts</a></li>
                        <li class="menu-item" style="float: left;left:20px;"><a href="drinks.php"><i class="fa fax-tropical-drink"></i>Drinks</a></li>
			<li class="menu-item" style="position:absolute;right:20px;"><a href="cart.php"><i class="fa fa-shopping-cart"></i>Cart</a></li>
                     </ul>
                  </nav>
                  <!-- #secondary-navigation -->
               </div>
<?php
						$h=$_GET['id'];
						$query = "SELECT * FROM products where id=$h";
						$result = mysqli_query($connect, $query);
						
						if(mysqli_num_rows($result) > 0)
						{
							$row = mysqli_fetch_array($result)

   
							
							?>
					<form method="post" action="shop.php?action=add&id=<?php echo $row["id"]; ?>">


	
		
                	<div class="images" style="float:left";>
                        	<a>
                        	<img width="600" height="600" src="<?php echo $row["image"]; ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="" />
                        	</a>
                        </div>
               
<!-- /.product-images-wrapper -->  
	        <div style="margin-top:50px;float:right">
                 <div >
                        <h1><?php echo $row["name"]; ?><span class="food-type-icon"><i class="po po-veggie-icon"></i></span></h1>
                        <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>">
		  </div>
                
                  <p style="display:inline"><i>Mouth watering pepperoni, cabanossi,mushroom, capsicum, black olives and stretchy mozzarella,</i></p>
		    <p><i>   seasoned with garlic and oregano.</i></p>
                
                                                 	<!-- AddToAny END -->
                 <form >
                     <form  method="post">
 				
<div>
<label>Select the size</label>

<label class="styleradio"> Small<input type="radio" name="size" value="<?php echo $row['price'] ?>,small" required> <span class="checkmark"></span></label>
<label class="styleradio"> Medium<input type="radio" name="size" value="<?php echo $row['price'] ?>,medium" ><span class="checkmark"></span></label>
<label class="styleradio"> Large<input type="radio" name="size" value="<?php echo $row['price'] ?>,large"> <span class="checkmark"></span></label>


</div>

                                    <div>
                                       <div>
						 <label>Price:</label>
					
						 <h3 id="HH" ></h3>
					
						<input type="hidden" name="hidden_price" id="hey" value="">
                                          <span></span>
                                       </div>
                                    </div>
                                
</form>

                                 <div >
                                    <label>Quantity</label>
                                    <div >
                                      <input type="number" name="quantity" value="1" step="1" min="1" class="form-control" style="width:18.5%;border-radius:20px;" />
                                    </div>
                                 </div>
                                <br>
                             <button name="add" class="button" style="align:center;"><i class="fa fa-check-circle-o" style="font-size:20px"></i> Add to cart</button>
                              </form>
                           </div>
                           <!-- .summary -->
                       

                        <!-- /.single-product-wrapper -->
</form>

<?php
		
	}

	?>
    

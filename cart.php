<?php
session_start();
$connect = mysqli_connect("localhost", "root");
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://transvelo.github.io/pizzaro-html/assets/css/font-awesome.min.css" media="all" />
 <link rel="stylesheet" type="text/css" href="https://transvelo.github.io/pizzaro-html/assets/css/font-pizzaro.css" media="all" />
 <link rel="stylesheet" type="text/css" href="https://transvelo.github.io/pizzaro-html/assets/css/style.css" media="all" />
      <link rel="stylesheet" type="text/css" href="https://transvelo.github.io/pizzaro-html/assets/css/colors/red.css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css">
      <style>
          
#white a:hover{
    background-color: black;
}
#white a{
color:white;
font-size:15px;
} 
.well{
font-size:17px;}
          #abc{
              margin:0;
              padding:100px;
            text-align:right;
            background-image:url("images/cart.jpg");
              background-size:cover;
                background-position:center;
              
          }
          h1{
              
              font-size: 200px;
              font-family: cursive;
              font-feature-settings: normal;
              font-style: oblique;
              font-weight: 300;
              
          }
.new{
 background-color:#99081f;
 font-size: 13px;
 color: white;
  padding: 10px 10px;
border-radius:100px;
  
}
.navbar-inverse{
    margin-bottom: 0;}
body {
    background-color:white;
}
          #left{
              background-color:#99081f;
              color:#ffffff;
          }
          #right{
              background-color:#99081f;
              color:#ffffff;
          }
.aa {
    background-color: #0c517d;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
  border-radius:30px;
  
}          
</style>
 
</head>
<body>
<?php include 'header.php';?>

<div class="jumbotron-fluid" id="abc">
    <h1>Your Cart is ready!</h1>
    <h4>...Enjoy your pizza meal...</h4>
</div>
    <br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-12">
            <div class="well">
                <div class="header">
                    <h3>Shopping Cart</h3>
                </div>
   	  	        <hr>
        <div class="card-body">
   	        <div class="table table-responsive w-100 d-block d-md-table">
                <table>
                    <tbody>
                        <tr class="main-heading">	  	      	
		 			          <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Order Total</th>
                                <th>Action</th>  		 			 	
                         </tr>		
            <?php
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td align="center"><?php echo $values["item_quantity"] ?></td>
            <td> &#8377;<?php echo $values["product_price"]; ?></td>
            <td> &#8377;<?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
            <td><a href="shop.php?action=delete&id=<?php echo $values["product_id"]; ?>"><button class="new">Remove</button></a></td>
            </tr>
            <?php 

			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		?>
	
          <tr>
        <td colspan="3" align="right"> Grand Total</td>
        <td align="right"><b>&#8377; <?php echo number_format($total, 2); ?></b></td>
        <td></td>
        </tr>
        <?php
	}
	?>
            </tbody>
 </table>
</div>
                </div>
                <div class="card-footer">
                    <ul class="pager">
                    <li class="previous"><a href="c.php" title="Continue shopping" class="aa" id="left">Continue shopping</a></li>
                    <li class="next"><a title="Checkout" class="aa" style="float:right;" onclick="f()" id="right">Checkout</a></li>
                    </ul>
                   

<script>
function f(){
<?php if(!empty($_SESSION["cart"]) ) : 
?>
window.open("address.php","_self");
<?php endif ?>
<?php if(empty($_SESSION["cart"]) ) : ?>
alert('Your cart is empty');
<?php endif
?>
}
</script>
                </div>
    </div>

        </div>
    </div>
</div>
<div>
<?php include 'footer.php';?>    
</div>

    </body>
</html>
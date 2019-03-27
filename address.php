<?php
session_start();
$connect = mysqli_connect("localhost", "root");
?>
<html>
    <head>
    <title>Address</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <style>
	    #white a:hover{
    background-color: black;
	}
	#white a{
	color:white;
	font-size:15px;
	} 
            .btn{
                background-color: #99081f;
                color:#ffffff;
            }
            #heading{
                text-align: center;
                font-family: 'sofia';
                font-size: 44px;
            }
            
        </style>
    </head>
    <body>
<?php include 'header.php';?>
        <br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-xs-12 col-md-6">
                    <div class="well">
                        <form action="payment.php">
                        <div class="form-group">
                            <label>Address</label><br><br>
                            <input type="text" name="flat_no" class="form-control" placeholder="Flat no." required/><br>
                            <input type="text" name="street_no" class="form-control" placeholder="street no." required/><br>
                            <input type="text" name="area" class="form-control" placeholder="area" required/><br>
                        </div>
                            <div class="form-group">
                                <label>Landmark</label><br>
                                <input type="text" name="landmark" class="form-control" placeholder="Any landmark"><br>
                            </div>
                            <div class="form-group">
                                <label>City</label><br>
                                <input type="text" name="city" class="form-control" placeholder="City" required/><br>
                            </div>
                            <div class="form-group">
                                <label>State</label>
                                <input type="text" name="state" class="form-control" placeholder="state" required/><br>
                            </div>
                            <div class="form-group">
                                <label>ZIP Code:</label>
                                <input type="text" name="zip" class="form-control" placeholder="Zip-code" pattern="^[1-9][0-9]{5}$" /><br>
                            </div>  
                            <div class="form-group">
                                <label>Mobile no.</label>
                                <input type="text" class="form-control" name="mobile_no" placeholder="mobile_no" pattern="^[7-9][0-9]{9}$" required/><br>
                            </div>
                            <div class="form-group">
                                <label>Order Notes:</label>:
                                <textarea type="text" name=order_notes class="form-control" placeholder="any extra notes for order" rows="5"></textarea>
                            </div>
                            <button class="btn btn-block" type="submit">Place Order!</button>
                        </form>
                    </div>  
                </div>
                <div class="col-lg-6 col-xs-12 col-md-6">
                    <div class="well">
                        <h2 id="heading">Your Order</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
                                <tr>
                                    <td><?php echo $values["item_name"]; ?></td>
                                    <td><?php echo $values["item_quantity"] ?></td>
                                    <td><?php echo $values["product_price"]; ?></td>
                                </tr>
                                <br>
                                 <?php
	}
}
?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
        <?php include 'Footer.php';?>
        </div>
    </body>
</html>
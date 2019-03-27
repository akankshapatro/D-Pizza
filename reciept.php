<?php
session_start();
$connect = mysqli_connect("localhost", "root");
?>
<html>
    <head>
        <style>
            header{
                text-align: center;
                font-size: 35px;
                font-family: "Sofia"
            }
        </style>
        <title>receipt</title>
        
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
   <body onload=display_ct();>
        <div>
            <?php include 'header.php';?>
        </div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8 col-xs-12 col-md-12">
                <div class="well well-lg">
                        <div class="row">
                            <div class="col-xs-6">
                                <?php  if (isset($_SESSION['username'])) : ?>
			                         <p>Name: <strong><?php echo $_SESSION['username']; ?></strong></p>
			                         <p>Email: <strong><?php echo $_SESSION['email']; ?></strong></p>
                                    <?php endif ?>
			                         <abbr title="Phone">P:</abbr> (213) 484-6829
                            </div>
                            <div class="col-xs-6 text-right">
                                <p>
                                    <em>Date:</em>
                                    <em id="ct"></em>
                                </p>
                                <p>
                                    <em>Receipt #: 34522677W</em>
                                </p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <header>Receipt</header>
                            <br><hr>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                    <tbody>
  <?php
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
                       
                                    <tr>
                                        <td ><em><?php echo $values["item_name"]; ?></em></td>
                                        <td ><?php echo $values["item_quantity"] ?></td>
                                        <td ><?php echo $values["product_price"]; ?></td>
                                        <td><?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></td>
                                    </tr>
			   <?php 

			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		?>

	                               <tr>
                                       <td class="text-left"><h4><strong>Total:</strong></h4></td>
                                       <td>&nbsp;</td>
                                       <td>&nbsp;</td>
                                       <td><h4><strong><?php echo number_format($total, 2); ?></strong></h4></td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div>
			<a href="feedback.php">
                         <button style="background-color:#99081f;color:white;" class="btn btn-block" onclick="un()">DONE!!!</button></a>
                    </div>
                     </div>
 <?php
	}
?>
                <div class="col-lg-2"></div>
            </div>
        </div>
        <div>
           
        </div>
        <script>
            function srvTime(){
    try {
        xmlHttp = new XMLHttpRequest();
    }
    catch (err1) {
        //IE
        try {
            xmlHttp = new ActiveXObject('Msxml2.XMLHTTP');
        }
        catch (err2) {
            try {
                xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
            }
            catch (eerr3) {
                alert("AJAX not supported");
            }
        }
    }
    xmlHttp.open('HEAD',window.location.href.toString(),false);
    xmlHttp.setRequestHeader("Content-Type", "text/html");
    xmlHttp.send('');
    return xmlHttp.getResponseHeader("Date");
}


function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var st = srvTime();
var x = new Date(st);                       //new Date()
document.getElementById('ct').innerHTML = x;
tt=display_c();
}
</script>
    </body>
</html>
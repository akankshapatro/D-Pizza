<?php
session_start();
$connect = mysqli_connect("localhost", "root");
?>
<html lang="en">
<head>
    <title>payment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #left{
            background-color:#99081f;
            color:#ffffff;
        }
        #right{
            background-color:#99081f;
            color:#ffffff;
        }
        .btn{
            background-color:#99081f;
            color:#ffffff;
            border-radius: 30px;
        }
        well{
           color:#000000;
        }
        li{
            list-style-type:none;
        }
        @media(min-width:786px){
            .well{
                margin-left:25%;
                margin-right:25%;
            }
        }
        h4{
            font-language-override: normal;
            font-family:fantasy;
        }
        h1{
            text-align: center;
            text-decoration-style:dashed;
            font-family:"Allura",fantasy;
            color:#ffffff;
            font-size-adjust: auto;
            font-size:350%;
              
        }
        #cod{
           background-color: aliceblue;
        }
        body{
            background-image:url("https://clockwise.software/img/blog/payment-gateway-comparison/header-background.jpg");
            background-size:cover;
            background-repeat: no-repeat
        }
        .form-group{
            opacity:1.0;
        }
        .black{
            background-color:rgba(245,245,245,0.7) 
        }
    </style>
</head>
<body>
<div class="container">
    <h1>PAYMENT</h1>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-xs-12 col-lg-6">
            <ul class="nav nav-tabs nav-fill justified" role="tablist">
                <li class="nav-item">
            <a class="nav-link active" id="c_o_d" data-toggle="pill" href="#cod1" aria-controls="cod" aria-selected="false">
             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpVNCRD2lPCRN7ey6H2YPKaTrUjGouTX7EakMXuBu3gJyrgqd_-g" class="img-responsive2" width=60px height=40px>      
            </a>
        </li>
                <li class="nav-item">
            <a class="nav-link active" id="d_c" data-toggle="pill" href="#dc1" aria-controls="dc" aria-selected="true"><img src="data:image/png;base64,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" alt="cash on delivery" class="img.responsive2" width=60px height=40px></a>
        </li>
                <li class="nav-item">
            <a class="nav-link active" id="c_c" data-toggle="pill" href="#cc1" aria-controls="cc" aria-selected="false">
                <img src="https://movingcanvas.com.au/wp-content/uploads/2015/06/MCard-2.png" class="img.responsive2" width=60px height=40px>        
            </a>
        </li>
            </ul>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<br>
<br>
<br>
<div class="tab-content">
    <div class="container tab-pane fade" id="cod1" role="tabpanel" aria-labelledby="cod">
            <div class="well black">
                <h4>Your Address</h4>
                <form action="reciept.php">
                    <div class="form-group">
                        <label>Flat no.:</label>
                        <input type="text" class="form-control" id="flat_no" placeholder="A-16/4" required/>
                    </div>
                    <div class="form-group">
                        <label>Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="Government colony" required/>
                    </div>
                    <div class="form-group">
                        <label>Landmark:</label>
                        <input type="text" class="form-control" id="landmark" placeholder="Near health care centre" required/>
                    </div>
                    <div class="form-group">
                        <label>City:</label>
                        <input type="text" class="form-control" id="city" placeholder="Mumbai" required/>
                    </div>
                    <div class="form-group">
                        <a href="address.php" class="btn" >Want to go back?</a>
                        <button type="submit" class="btn" style="float:right"  >Continue to checkout</button>
                    </div>
                </form>
            </div>
        </div>
    <div class="container tab-pane active" id="dc1" role="tabpanel" aria-labelledby="dc">
        <div class="well black">
            <h4>Debit Card Information</h4>
            <br>
            <form action="reciept.php">
                <div class="form-group">
                    <label>Name on Card:</label>
                    <input type="text" class="form-control" id="cardholder_name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label>Card Number</label>
                    <input type="text" class="form-control" id="card_number" placeholder="0000-0000-0000-0000" required/>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label>Month</label>
                            <select class="form-control" id="month" placeholder="january" required>
                                        <option>Jan</option>
                                        <option>Feb</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>Aug</option>
                                        <option>Sept</option>
                                        <option>Oct</option>
                                        <option>Nov</option>
                                        <option>Dec</option>
                                </select>                
                        </div>
                        <div class="col-xs-3">
                            <label>Year</label>
                            <select class="form-control" id="year" required>
                                        <option value="">Select Year</option>
                                    </select>    
                        </div>
                        <div class="col-xs-6">
                            <label>CVV number</label>
                            <input type="number" id="cvv" class="form-control" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button onclick="location.href='address.php'" class="btn">Want to go back?</button>
                    <button type="submit" class="btn" style="float:right">Continue to checkout</button>

                </div>                            
            </form>
        </div>
    </div>
    <div class="container tab-pane fade" id="cc1" role="tabpanel" aria-labelledby="cc">
        <div class="well black">
            <h4>Personal Information</h4>
            <br>
            <form>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" id="cmail" placeholder="name@domail.com" required/>
                </div>
            </form>
            <br>
            <h4>Credit Card Information</h4>
            <br>
            <form action="reciept.php">
                 <div class="form-group">
                    <label>Name on Card:</label>
                    <input type="text" class="form-control" id="cardholder_name" placeholder="Name" required/>
                </div>
                <div class="form-group">
                    <label>Card Number</label>
                    <input type="text" class="form-control" id="card_number" placeholder="0000-0000-0000-0000" required/>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-xs-3">
                            <label>Month</label>
                            <select class="form-control" id="month" placeholder="january" required>
                                        <option>Jan</option>
                                        <option>Feb</option>
                                        <option>March</option>
                                        <option>April</option>
                                        <option>May</option>
                                        <option>June</option>
                                        <option>July</option>
                                        <option>Aug</option>
                                        <option>Sept</option>
                                        <option>Oct</option>
                                        <option>Nov</option>
                                        <option>Dec</option>
                                </select>                
                        </div>
                        <div class="col-xs-3">
                            <label>Year</label>
                            <select class="form-control" id="year1" required>
                                        <option value="">Select Year</option>
                                    </select>    
                        </div>
                        <div class="col-xs-6">
                            <label>CVV number</label>
                            <input type="number" id="cvv" class="form-control" placeholder="" required/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button onclick="location.href='address.php'" class="btn">Want to go back?</button>
                    <button type="submit" class="btn" style="float:right">Continue to checkout</button>
                </div>             
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    for(y=2000;y<=2500;y++){
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;
        if (y == 2015) {
            optn.selected = true;
        }
        
        document.getElementById('year').options.add(optn);
    }
    for(y=2000;y<=2500;y++){
        var optn = document.createElement("OPTION");
        optn.text = y;
        optn.value = y;
        if (y == 2015) {
            optn.selected = true;
        }
        
        document.getElementById('year1').options.add(optn);
    }
</script>
</body>
</html>
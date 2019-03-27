<?php
session_start();
$connect = mysqli_connect("localhost", "root","","try");
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Changa One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Changa' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ceviche One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Ceviche' rel='stylesheet'>
<style>
    .p1{
        font-family:"Changa";
        font-size: 20px;
        color:#ffffff;
    }
.navbar-inverse{
    margin: 0px;
    position: absolute;
}
    #carousel-example{
        max-height: 600px;
        margin-top: 0px;
    }
  .pizzaro-secondary-navigation{
background-color:#c00000;
}
.fax-ice-cream:before {
  content: "\1f368";}

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
    #h{
    font-family:"Changa One";
        font-size:40px;
    }
    #para{
        font-family:"Changa";
        font-size:25px;
    }
    #j{
        background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSyh2ofzTfmxoV-URHC1b6CkrIPggZgmTL9MUIg9xF6W4wi3-fIew");
        font-family: "Ceviche One";
        padding: 40px;
    }
    #h1{
        font-size:50px;
        text-align: center;
        color:#ffffff;
        padding-top: 30px;
    }
    .c{
        text-align: center;
        align-content: center;
        align-items: center;
        padding: 30px;
    }
    img{
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
    .b{
        font-family: "Changa";
        text-align: center;
    }
</style>
</head>
<body>

<?php include 'header.php';?>
<div id="carousel-example" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example" data-slide-to="1"></li>
    <li data-target="#carousel-example" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner">
    <div class="item active">
      <a href="#"><img src="http://www.baltana.com/files/wallpapers-5/Pizza-HD-Desktop-Wallpaper-15280.jpg" style="width:1600px;max-height:600px"/></a>
    
    </div>
    <div class="item">
      <a href="#"><img src="http://www.baltana.com/files/wallpapers-2/Food-Widescreen-Wallpapers-04869.jpg" style="width:1600px;max-height:600px"/></a>
      
    </div>
    <div class="item">
      <a href="#"><img src="images/home1.jpg" style="width:1600px;max-height:600px"/></a>
      >
    </div>
  </div>

  <a class="left carousel-control" href="#carousel-example" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
 <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div>
                    <h1 id="h">ABOUT</h1>
                    <br>
                    <p id="para">
                        Get mesmerized with our all new freshly baked, hand tossed, mouth-watery and cheesyy pizzas.
                        Compliment your pizzas with refreshing cool bevarages along with desserts....
                    </p>
                </div>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-4">
                <div class="thumbnail">
                    <img id="i" src="http://farinellabakery.vaesite.net/__data/57d695843c473f5ad2475c94eb5419bf.jpg" class="img-responsive">
                </div>
                 </div>
        </div>
        <br>
        <br>
        <br>
    </div>
    <div class="jumbotron-fluid" id="j">
        <b><h1 id="h1">Why to choose our Pizza?</h1></b>
        <br><br>
        <div class="row">
            <div class="col-lg-4 c">
                <img src="https://panterasofallon.com/wp-content/uploads/2018/03/cheeseicon-70x60.png" class="img-responsive">
                <br><br>
                <p class="p1">We only use the finest 100% whole milk mozzarella cheese to finish off your favorite pizza.</p>
            </div>
            <div class="col-lg-4 c">
                <img src="https://panterasofallon.com/wp-content/uploads/2018/03/doughicon-70x70.png" class="img-responsive">
                <br>
                <br>
                <p class="p1">D'Pizza's dough is made fresh throughout the day from scratch.</p>
            </div>
            <div class="col-lg-4 c">
                <img src="https://panterasofallon.com/wp-content/uploads/2018/03/vegetableicon-70x70.png" class="img-responsive">
                <br><br>
                <p class="p1">All our vegetables are cut fresh daily to enchance their flavors on the pizza.</p>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="jumbotron-fluid">
        <h1 style="font-family:'Changa One';text-align:center">Founders</h1>
        <hr>
        <br><br>
        <div class="row">
            <div class="col-lg-4 b">
                <h2>Mahima K Patel</h2>
                <h4>Roll no. : 8026</h4>
                <h4>TE IT</h4>
            </div>
            <div class="col-lg-4 b">
                <h2>Akanksha Patro</h2>
                <h4>Roll no. : 8028</h4>
                <h4>TE IT</h4>
            </div>
            <div class="col-lg-4 b">
                <h2>Richa Shukla</h2>
                <h4>Roll no. : 8037</h4>
                <h4>TE IT</h4>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div>
        <?php include "Footer.php" ?>
    </div>
</body>
</html>

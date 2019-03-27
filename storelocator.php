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
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
     <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
    
<style>
#white a:hover{
    background-color: black;
}
#white a{
color:white;
font-size:15px;
}

    .vertical-menu a{
        background-color:#eee;
        color:#000000;
        display:block;
        padding:12px;
        text-decoration: none;
        }
    .vertical-menu a:hover{
        background-color: #ccc;
    }
    .vertical-menu a.active{
        background-color: #4CAF50;
        color:#ffffff
    }
    .sidebar{
        max-height:570px;
        transition-property: all;
        overflow-y: scroll;
        overflow-x: hidden;
        text-overflow: inherit;
        border-radius: 5%;
    }   
    .navbar-inverse{
        margin-bottom: 0;
    }
    .map_canvas{
        border-radius:5%
    }
    
</style>
</head>
<body>
<?php include 'header.php';?>
    <br>
    <div class="row">
        <div class="container-fluid">
            <div class="col-lg-9 col-xs-12">
                <div id="map_canvas" class="map_canvas">
                </div>
            </div>
            <div class="col-lg-3 col-xs-12">
                <div class="vertical-menu sidebar">
                    <a href="javascript:triggerClick(0)">
                        <h4>D'Pizza</h4>
                        <h5>Prabhadevi</h5>
                        <p>Shop No. 3-4,
                        Kohinoor Building,
                        Swatantrya Veer Savakar Marg,
                        Opposite Siddhi Vinayak Temple,
                        Prabhadevi, Mumbai, 
                        Maharashtra 400028,
                        India
                        </p>
                    </a>
                    <a href="javascript:triggerClick(1)">
                        <h4>D'Pizza</h4>
                        <h5>Bandra West</h5>
                        <p>Shop No. 1,
                        Ground Floor,Mangal Bhavan,
                        Plot No. 614, 
                        14th Road, Khar, 
                        Bandra West, Mumbai, 
                        Maharashtra 400052,
                        India
                        </p>
                    </a>
                    <a href="javascript:triggerClick(2)">
                        <h4>D'Pizza</h4>
                        <h5>Andheri East</h5>
                        <p>124, Kapadia Industrial Estate,
                        Near Sangam Theatre,
                        Andheri-Kurla Road, 
                        Chakala, MIDC,
                        Andheri East, Mumbai,
                        Maharashtra 400059,
                        India
                        </p>
                    </a>
                    <a href="javascript:triggerClick(3)">
                        <h4>D'Pizza</h4>
                        <h5>Juhu</h5>
                        <p>406, S.V. Road, 
                        Next to Pawan Hans,
                        Vile Parle West,
                        Airport Area, Juhu,
                        Mumbai, Maharashtra 400056, 
                        India
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <br>
    </div>
    <script src="map.js">
    </script>
     <script>
        $(window).resize(function () {
    var h = $(window).height(),
        offsetTop = 70;

    $('#map_canvas').css('height', (h - offsetTop));
}).resize();
    </script>
<?php include 'footer.php';?>
</body>
</html>

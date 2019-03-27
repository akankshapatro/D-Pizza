<?php session_start();
 unset($_SESSION["cart"]);  ?>
<html>
<head>
<title>Feedback Form</title>
<link rel="stylesheet"type="text/css"href="css/feedback.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.navbar-inverse{
    margin-bottom: 0;
    text-align:left;
}
   
#white a:hover{
    background-color: black;
}
#white a{
color:white;
font-size:15px;
} 

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 

</style>
</head>
<body>

<?php include 'header.php';?>
<div class="container" id="feedback-title">
  <h1>We value your feedback!</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6 col-xs-12">           
            <div class="feedback-form">
                <form id="feedback-form" method="post" >
                    <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
                    <input name="email" type="email" class="form-control" placeholder="Your Email" required><br>
		<h4 align="left" ><strong>Rate Your Experience</strong></h4>
<fieldset class="rating">
    <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
    <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
    <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
                    <textarea name="suggestions" type="text" class="form-control" placeholder="Suggestions" rows="4" required></textarea>
                    <input type="submit" class="form-control submit" value="SUBMIT" onclick="myf()">
                </form>
</div>
 
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</body>
<script>
function myf(){
alert("Thank you for your feedback");
}
</script>
 
<?php include 'footer.php';?>
</html>

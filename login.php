<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/login1.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>
@media screen and (max-width: 500px)
{
body{
background-attachment:fixed;
background-size:cover;
}
.header{
width:88%;
}
form, .content {
width:88%;
}
}
</style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" autocomplete="off" required>
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password" autocomplete="off" required>
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p class="white">
  		Not yet a member? <a style="color:white" href="register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>
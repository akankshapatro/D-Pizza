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
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php" class="content" >
  	<?php?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" autocomplete="off" value="<?php echo $username; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" autocomplete="off" value="<?php echo $email; ?>" required>
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p class="white">
  		Already a member? <a style="color:white" href="login.php">Log in</a>
  	</p>
  </form>
</body>
</html>
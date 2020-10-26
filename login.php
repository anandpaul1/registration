<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label style="color:white">Username</label>
  		<input type="text" name="username">
  	</div>
  	<div class="input-group">
  		<label style="color:white">Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<center><button type="submit" class="btn" name="login_user">Login</button></center>
  	</div>
  	<p style="color:white">
  		Not yet registered? <a href="register.php"style="color:white">Sign up</a>
  	</p>
  </form>
</body>
</html>
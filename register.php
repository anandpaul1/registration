<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<marquee><h2>Welcome to Registration Page</h2></marquee>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label style="color:white">Username</label>
  	  <input type="text" name="username"id="name" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="color:white">Email</label>
  	  <input type="email" name="email"id="name" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label style="color:white">Password</label>
  	  <input type="password" name="password_1"id="name">
  	</div>
  	<div class="input-group">
  	  <label style="color:white">Confirm password</label>
  	  <input type="password" name="password_2"id="name">
  	</div>
  	<div class="input-group">
  	  <center><button type="submit" class="btn" name="reg_user"id="submit">Register</button></center>
  	</div>
  	<p style="color:white">
  		Already Registered? <a href="login.php"style="color:white">Sign in</a>
  	</p>
  </form>
</body>
</html>

  
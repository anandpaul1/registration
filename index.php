
<?php 
  session_start(); 
if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>YOUR PROFILE</h2>
</div>
<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
    <?php  if (isset($_SESSION['username'])) : ?>
    	<center><h1 style="color:white;">Welcome  <?php echo $_SESSION['username']; ?></h1>
        <p style="color:white">click below to update your profile details</p>

   <a href="registration.php.php"style="color:white;font-size:30px;">update</a>
    <?php endif ?>
</div>
<div>
  <form>
<center>
  <button><a href="index.php?logout='1'" style="color:red;text-decoration:none;font-size:30px;">logout</a></button>
</center>
</form>
</div>
</body>
</html>
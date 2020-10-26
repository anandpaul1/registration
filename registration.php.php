<?php
require_once('config.php.php');
?>
<!doctype html>
<html>
<head>
<title>register page</title>
<link rel="stylesheet"href="css/bootstrap.min.css">
</head>
<body>
	<div>
	<?php
     if(isset($_POST["ok"])){

     	$age=$_POST['age'];
     	$dob=$_POST['dob'];
     	$mobilenumber=$_POST['mobilenumber'];
     	$gender=$_POST['gender'];
     	$hobbies=$_POST['hobbies'];
     	$skills=$_POST['skills'];
     	

     	$sql="INSERT INTO users(age,dob,mobilenumber,gender,hobbies,skills)VALUES(?,?,?,?,?,?)";
     	$stmtinsert=$db->prepare($sql);
     	$result=$stmtinsert->execute([$age,$dob,$mobilenumber,$gender,$hobbies,$skills]);
     	if($result){
     		echo "updated successfully";
     	}else{
     		echo"errors while saving";
     	}
     	
     }
	?>
</div>
<div>
<form action="registration.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
		<h1>Update your profile</h1>
		<p>Kindly fill the details given below</p>
		<hr class="mb-3">
<label><b>age</b></label>
<input class="form-control" type="number"name="age"required>
<label><b>dob</b></label>
<input class="form-control" type="date"name="dob"required>
<label><b>mobilenumber</b></label>
<input class="form-control" type="number"name="mobilenumber"required>
<label><b>gender</b></label>
<input  type="radio"name="gender"required>male
<input  type="radio"name="gender"required>female
<hr class="mb-3">
<label><b>hobbies</b></label>
<input class="form-control" type="text"name="hobbies">
<label><b>skills</b></label>
<input class="form-control" type="text"name="skills">
<hr class="mb-3">
<input class="btn btn-primary" type="submit"id="reg" value="update"name="ok">
<a href="index.php?logout='1'" style="color: white;background-color:red;font-size:20px;border-radius:5px;text-decoration:none;">logout</a>
</div>
</div>
</div>
</form>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript">
	$(function(){
		
		Swal.fire('Thank you!',
        'You updated successfully!',
         'success')
});
</script>
</body>
</html>
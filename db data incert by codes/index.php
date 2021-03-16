

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>



<?php

/**
 * User data send to users 
 */

if(isset($_POST['click'])){

// FORM VALUE GET

$name = $_POST['name'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$location = $_POST['location'];


if(empty($name) || empty($email) || empty($cell)){

$msg = "<p class='alert alert-danger'role='alert'>All fields are required!!<button class='colse' data-dismiss='alert'>&times;</button></p>";
}
else{

	$connection = new mysqli('localhost','root','','b129');

	$sql = "INSERT INTO users (name, age, cell ) VALUES ('$name','$email','$cell')";
	
	$connection -> query($sql);

	$msg = "<p class='alert alert-info'role='alert'>Data send to database successfully!!<button class='colse' data-dismiss='alert'>&times;</button></p>";
	
}



// each field check

if(empty($name)){

$err['name'] = "<p style='color:red;'>** REQUIRED</p>";

}

if(empty($email)){

    $err['email'] = "<p style='color:red;'>** REQUIRED</p>";



}

if(empty($cell)){

    $err['cell'] = "<p style='color:red;'>** REQUIRED</p>";



}
if(empty($location)){

    $err['location'] = "<p style='color:red;'>** REQUIRED</p>";



}



}


?>


	
	

	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
              
              <?php
			  
			 if(isset($msg)){

              echo $msg;


			 }
			 
			 
			 
			 ?>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input name="name" class="form-control" type="text">

                        <?php
                        
                        if(isset($err['name'])){


                         echo $err['name'];

						}
                        
                        
                        ?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input name="email" class="form-control" type="text">

                        <?php
                        
                        if(isset($err['email'] )){

                      echo $err['email']; 


						}
                        
                        
                        ?>

					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input name="cell" class="form-control" type="number">
                        <?php
                        
                        if(isset( $err['cell'])){

                       echo $err['cell'];


						}
                        
                        
                        ?>

					</div>
					<div class="form-group">
						<label for="">Area</label>
						<input name="location" class="form-control" type="text">

                        <?php
                        
                        if(isset($err['location'] )){


                         echo $err['location']; 

						}
                        
                        
                        ?>

					</div>
					<div class="form-group">
						<input name="click" class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>


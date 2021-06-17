<!DOCTYPE html>
<html>
<head>
<title>signup</title>

<!----Google font  -->
<link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>

<link rel='stylesheet' href='bootstrap.css'>
<link rel='stylesheet' href='style.css'>


<style>


</style>
</head>
<body  style=" font-family: 'Almarai'; ">
	<div class="login">
		<div class="container-fluid ">
			<div class="row justify-content-center">
				<div class="col-md-12 header pl-5">
                <h1 class="pt-2 font-weight-bolder" style=" font-family: 'Akronim';font-size: 70px; pl-5" ><span style="color:black; font-size:70px;">G</span>ood<span style="color:black; font-size:70px;">B</span>ook</h1>

				</div>
				<?php
				if(isset($_POST['submit'])){
					include "config.php";
					$user_id = $_GET['id'];
					$fname = $_POST['firstname'];
					$lname = $_POST['lastname'];
					$email = $_POST['email'];
					$pass = $_POST['password'];
					$no = $_POST['number'];

					

				$sql = "UPDATE signup SET first_name = '{$fname}' , last_name = '{$lname}' , email = '{$email}' ,password = '{$pass}' , mobile_no = '{$no}' WHERE user_id = {$user_id}";

					if(mysqli_query($db ,$sql)){
						
						header("Location:shawuser.php");
					}else{
						echo 'record id not updated' . mysqli_error($db);
					}		

					


					mysqli_close($db);
					}
					?>
                
				<div class="login-header col-md-12 ">
					<h2 class="pl-5 pb-3 pt-5">Upadate The Details...</h2>
				</div>
				<div class="col-md-12 pl-5 j">

				<?php
					include 'config.php';
					$user_id = $_GET['id'];
					$sql = "SELECT * FROM signup WHERE user_id = {$user_id}";
					
					$result = mysqli_query($db, $sql) or die("Query failed.");

					if(mysqli_num_rows($result)>0){
						if($row = mysqli_fetch_assoc($result)){

					

				?>
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="text" id="fname" class="form-control" name="firstname" value = "<?php  echo $row['first_name']; ?>" placeholder="enter firstname" required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="text" id="lname" class="form-control" name="lastname" value = "<?php  echo $row['last_name']; ?>" placeholder="enter lastname" required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="email" id="email" class="form-control" name="email" value = "<?php  echo $row['email']; ?>" placeholder="enter email" required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="password" id="password"class="form-control" name="password" value = "<?php  echo $row['password']; ?>" placeholder="create password" required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="tel" id="number" class="form-control" name="number" value = "<?php  echo $row['mobile_no']; ?>" placeholder="enter mobile no." required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="submit" id="submit" class="form-control"name="submit" value="UPDATE" required>
						</div>
					</form>
				</div>
				<?php 
					}
				}
				?>
            
			</div>
		</div>
	</div>
</body>
</html>
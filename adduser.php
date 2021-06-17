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
                <h1 class="pt-2 font-weight-bolder" style=" font-family: 'Akronim';font-size: 70px; " ><span style="color: black ; font-size : 100px ">G</span>ood<span style="color:black; font-size:70px;">B</span>ook</h1>

                </div>
                
				<div class="login-header col-md-12 ">
					<h2 class="pl-5 pb-3 pt-5">Please Add Here..</h2>
				</div>
				<div class="col-md-12 pl-5 j">
					<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="text" id="fname" class="form-control" name="firstname" placeholder="enter firstname" required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="text" id="lname" class="form-control" name="lastname" placeholder="enter lastname" required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="email" id="email" class="form-control" name="email" placeholder="enter email" required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="password" id="password"class="form-control" name="password" placeholder="create password" required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="tel" id="number" class="form-control"name="number" placeholder="enter mobile no." required>
						</div>
						<div class="col-lg-4 col-sm-8 form-group">
							<input type="submit" id="submit" class="form-control"name="submit" value="ADD" required>
						</div>
					</form>
                </div>
            
			</div>
		</div>
	</div>
</body>
</html>


<?php

if(isset($_POST['submit'])){

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $no = $_POST['number'];

  include "config.php";

  $sql = "INSERT INTO signup(first_name ,last_name , email , password , mobile_no)
        values('$fname','$lname','$email','$pass','$no')";

  if(mysqli_query($db ,$sql)){
    echo 'recored successfully added';
    header("Location:admin.php");
  }else{
	  echo 'record id not added' . mysqli_error($db);
  }		

  $img_name = mysqli_insert_id($db);


  mysqli_close($db);
}
?>



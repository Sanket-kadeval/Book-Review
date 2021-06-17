
<?php

    if(isset($_POST['submit'])){
		/*$conn = mysqli_connect("$server" , "$username" , "$password" ,"$dbname");
		if(!$conn){
			die("connection faild!!") . mysqli_connect_error();
		}else{
			
		}*/
		include "config.php";
		$email = $_POST['email'];
		$password = $_POST['password'];

		$sql = "select * from signup where email = '{$email}' AND password = '{$password}' ";
		$result = mysqli_query($db , $sql) or die("Query fail");
		
		if(mysqli_num_rows($result)){
			while($row = mysqli_fetch_assoc($result)){
				session_start();
				$_SESSION['name'] = $row['first_name'];
				$_SESSION["user_id"] = $row['user_id'];
				$_SESSION["email"] = $row['email'];
				
				header("Location:index.php");	
			}
		}else{
			// header("Location:modallogin.php");
			echo "email and password ara not match!!";
		}
	}

	?>

</body>
</html>


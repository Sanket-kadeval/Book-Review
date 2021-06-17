


<?php

if(isset($_POST['submit'])){

  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $no = $_POST['number'];
  include "config.php";
  $sql = "INSERT INTO signup(first_name ,last_name , email , password , mobile_no)
        values('$fname','$lname','$email','$pass',$no)";
  if(mysqli_query($db ,$sql)){
		header("Location:index.php");
  }else{
    echo 'record id not added' . mysqli_error($db);
    
  }	
  mysqli_close($db);
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
  
</script>



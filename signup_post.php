<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "goodbook";


/*$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mob = $_POST['mobile'];
$email=$_POST['email'];
$pass = $_POST['password'];
$bdate = $_POST['bdate'];
$gender=$_POST['gender'];
$s_a1=$_POST['question1'];
$add = $_POST['address'];
$dac = date("yy/m/d");
$laa= $dac;




// Create connection   "localhost","root","","psw"
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

//$sql = "INSERT INTO login (first_name, last_name,user_email,user_password,user_mobile,user_bdate,user_type,user_gender,security_q1,security_a1,user_address,user_dac,user_laa)
//VALUES ('$fname', '$lname', '$email','$pass','$mob','$bdate','1','$gender','What is your favourite food?','$s_a1','$add','$dac','$laa')";

//if(mysqli_query($conn, $sql)) {
//  echo '<script>alert("Record Added Sucessfully")</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/




/*
//Get highest user_id number from the table in order to assign it to image name of the user 

$sql = "SELECT MAX(user_id) as uid FROM login";

$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
   $row = mysqli_fetch_assoc($result);
   $img_name = $row['uid'] + 1;
  
} else {
  echo "0 results";
}
*/

$img_name = mysqli_insert_id($conn);

mysqli_close($conn);




if(is_uploaded_file($_FILES['file']['tmp_name']))
{

if( strstr($_FILES['file']['name'],".exe"))
	die("It must not be .exe file");

//if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg"))  && ($_FILES["file"]["size"] < 2000000)) 
	
if($_FILES["file"]["type"] == "image/jpeg" )
{
    
    
   
    if (file_exists("img/profile_photos/" . $img_name . ".jpg"))
      {
      echo '<script>alert("File Already Exists")</script>';
      }
    else
      {
      //move_uploaded_file 
	  copy($_FILES["file"]["tmp_name"],"img/profile_photos/" . $img_name . ".jpg");
      header("Location:index.php?insert=yes&file=yes");
 //       header("Location:index.php");
      }
}
else
  {
  
   echo '<script>alert("Only jpg File can be uploaded")</script>';
  }
}
else
  echo '<script>alert("File is not selected/uploded")</script>';
  



?> 
</body>
</html>


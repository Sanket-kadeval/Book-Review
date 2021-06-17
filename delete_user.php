

<?php  

include 'config.php';
$userid = $_GET['id'];
$sql = "DELETE FROM signup WHERE user_id = {$userid}";
if(mysqli_query($db, $sql)){
    header("Location:shawuser.php");
}else{
    echo "Can't delete the user record.";
}

mysqli_close($db);
?>
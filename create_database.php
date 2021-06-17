<?php

$server = "localhost";
$username = "root";
$password = "";

// create connection
$conn = mysqli_connect("$server" , "$username" , "$password");

// check connection

if(!$conn){
    die("connectoin faild!") . mysqli_connect_error();
}
else{
    echo "connection successfully!!";
}


// create database 

$sql = "create database goodbook";

if(mysqli_query($conn , $sql)){
    echo "successfully create database!!";
}else{
    echo "not create database!! " .mysqli_error($conn);
}

mysqli_close(($conn));
?>
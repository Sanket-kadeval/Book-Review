<?php
include "config.php";

$sql = "create table signup(
    user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL, 
    last_name VARCHAR(40) NOT NULL,
    email VARCHAR(30) NOT NULL,
    password VARCHAR(20) NOT NULL,
    mobile_no INT(10) NOT NULL
    )";


$book_detail = "create table book_detail(
    book_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    book_name VARCHAR(50) NOT NULL,
    book_author VARCHAR(50) NOT NULL,
    book_category VARCHAR(50) NOT NULL,
    book_publisher VARCHAR(50) NOT NULL,
    book_description VARCHAR(500) NOT NULL,
    my_timestamp timestamp not null default current_timestamp on update current_timestamp,
    img VARCHAR(100) NOT NULL

    )";
$book_review = "create table book_review(
    book_review_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    book_id INT(11) NOT NULL,
    user_id INT(11) NOT NULL,
    book_rating INT(5) NOT NULL,
    my_timestamp timestamp not null default current_timestamp on update current_timestamp,
    book_review_review VARCHAR(500) NOT NULL
    )";
if ($db->query($sql) === TRUE) {
     echo "Table MyGuests created successfully";
    } 
else {
    echo "Error creating table: " . $db->error;
}
if ($db->query($book_detail) === TRUE) {
    echo "Table MyGuests created successfully";
   } 
else {
   echo "Error creating table: " . $db->error;
}
if ($db->query($book_review) === TRUE) {
    echo "Table MyGuests created successfully";
   } 
else {
   echo "Error creating table: " . $db->error;
}




?>
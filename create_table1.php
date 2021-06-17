<?php
include 'config.php';

$book_review = "create table book_review(
    book_review_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    book_id INT(11) NOT NULL,
    user_id INT(11) NOT NULL,
    book_review_review VARCHAR(500) NOT NULL
    )";

    if(mysqli_query($db , $book_review)){
        echo "successfully added table in database!!";
    }else{
        echo "not added table";
    }
?>

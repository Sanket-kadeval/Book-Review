


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GoodBook</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="GoodBook" name="keywords">
        <meta content="GoodBook" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        
        <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <style>
              body{
                font-size: 20px;
                

            }
            input[type="submit"]:hover{
                background-color:#FF6F61 ;
                color: white;
            }
            .addbook{
                background-image: url("img/book5.jpg");
                background-size: cover;
                background-repeat: repeat;
            }
            
        </style>
    </head>
<body>
<?php 
    include "header.php";
?>
<div class="addbook">
<div class="container">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6 pt-5 pb-3">
                    <h2 >Add Book Here...</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6 ">
                    <form method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="bname"> Book Name:</label>
                            <input type="text" name="bookname" placeholder="Book Name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="author"> Book Author:</label>
                            <input type="text" name="bookauthor" placeholder="Book Author Name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="category"> Category:</label>
                            <select class="form-control" name="bookcategory">
                                <option value="fiction">Fiction</option>
                                <option value="romantic">Romantic</option>
                                <option  value="self_help">Self Help</option>
                                <option value="autobiography">autobiography</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="author"> Book Publisher:</label>
                            <input type="text" name="bookpublisher" placeholder="Book Publisher Name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="image"> Book Image:</label>
                            <input type="file" name="bookimage"   placeholder="Book Image" class="form-control" value="">
                        </div>

                        <div class="form-group">
                            <lable for="">Book Description:</lable>
                            <textarea class="form-control" rows="5" cols="50" name="bookdescription"></textarea>
                        </div>
                        <div class="form-group">
                                    
                            <input type="submit" class="form-control" value="Submit Book" name="submit" >
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
      
<?php
    include 'footer.php';
?>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

<?php

    if(isset($_POST['submit'])){
        $name = $_POST['bookname'];
        $author = $_POST['bookauthor'];
        $category = $_POST['bookcategory'];
        $publihser = $_POST['bookpublisher'];
        $img = $_FILES['bookimage'];
        $description = $_POST['bookdescription'];
        $img_name = $img['name'];
        $img_tmp = $img['tmp_name'];
        include "config.php";
        
        $target = 'img/'.$img_name;
        move_uploaded_file($img_tmp,$target);
        
        $sql  = "INSERT INTO book_detail(book_name, book_author ,book_category ,book_publisher,book_description,img)
            values('$name' , '$author' , '$category' ,'$publihser','$description','$target')";
    

        if(mysqli_query($db , $sql)){
            //echo "record added successful!! ";
           # header("Location:index.php");
        
        }else{
            echo "not record added!!" . mysqli_error($db); 
        }

    #mysqli_close($db);
    }
?>

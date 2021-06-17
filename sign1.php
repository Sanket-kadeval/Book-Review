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
       <style>
           *{
            color: white;
           }
           
           
           .signup{
               background-image: url("img/book9.jpg");
               background-repeat: no-repeat;
               background-size: cover;
               
           }
          .sign{
              background: rgba(255, 255, 255, 0.6);
          }
          .form-control{
              background:transparent;
            
          }
          .hover:hover{
              background: aquamarine;
          }
       </style>

    </head>
<body>
<?php  include "header.php"; ?>


    <div class="container-fluid">
        <div class="row signup" >
        
                <div class="col-md-1 sign"></div>
                <div class="col-md-4 sign">
                    
                        <h2 class="text-center pt-5 ">Sign Up</h2>
                        <form action="">
                            <div class="form-group">
                                <input type="text" name="fname" id="fname" class="form-control one" placeholder="Enter First Name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Create Password" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" name="number" id="number" class="form-control" placeholder="Enter Mobile No." autocomplete="off">
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-control hover" value="Sign Up">
                            </div>
                        </form>
                    
                </div>
                <div class="col-md-7 sign"></div>
            
          
        </div>
    </div>



<?php include 'footer.php'; ?>
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

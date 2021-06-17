<?php session_start(); ?>   
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>GoodBook</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="GoodBook" name="keywords">
        <meta content="GoodBook" name="description">

        <!--================================================ Favicon =====================================-->
        <link href="img/favicon.ico" rel="icon">

        <!--======================================== Google Fonts =========================================-->
        
        <link href='https://fonts.googleapis.com/css?family=Almarai' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Akronim' rel='stylesheet'>

        <!--================================================= CSS Libraries ================================-->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!--========================================================= jquery  =============================-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
        <script src="lib/slick/slick.js"></script>

        <!--============================ Template Stylesheet ===============================================-->
        <link href="css/style.css" rel="stylesheet">
 
    </head>

<body style=" font-family: 'Almarai';">
<!--============================================== Brand Start ============================================-->
<div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="b-logo">
                        
                                <h1 class="pt-2 font-weight-bolder" style=" font-family: 'Akronim';font-size: 70px;"><span style="color:#FF6F61; font-size:70px;">G</span>ood<span style="color:#FF6F61; font-size:70px;">B</span>ook</h1>
                            
                        </div>
                    </div>
                   
                   
                </div>
            </div>
        </div>
<!--=============================================== Brand End ================================================-->

<!--========================================== Nav Bar Start =================================================-->
        <div class="nav-bar" >
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark text-center">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between clearflix" id="navbarCollapse">
                        <div class="navbar-nav mr-auto float-left">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown">Category</a>
                                <div class="dropdown-menu">
                                    <a href="category.php?id=fiction" class="dropdown-item">Fiction</a>
                                    <a href="category.php?id=romantic" class="dropdown-item">Romantic</a>
                                    <a href="category.php?id=self_help" class="dropdown-item">Self Help</a>
                                    <a href="category.php?id=autobiography" class="dropdown-item">Auto Biography</a>
                                </div>
                            </div>
                            
                            <div class="nav-item dropdown">
                               
                                <?php
                                    if(isset($_SESSION['name'])){
                                     echo ' <a href="my_book.php" class="nav-link" id="open">My Book</a>';  
                                    }else{
                                        echo "";
                                    }
                                ?>
                               
                            </div>
                            <?php 
                            
                            if(isset($_SESSION['user_id'])){
                                echo ' <a href="add.php" class="nav-item nav-link">Add Book</a>';
                            }else{
                                echo ' <a href="add.php" class="nav-item nav-link" id="add">Add Book</a>
                                <script>
                                $(document).ready(function(){
                                    $("#add").click(function(){
                                        alert("Please First Logins");
                                        
                                    });
                                });
                                </script>';
                                
                             
                            }
                            
                            ?>
                           
                            <a href="" class="nav-item nav-link">About Us</a>
                        </div>
                        <div class="navbar-nav mr-auto ml-5 float-right">
                        <p id="log" class="pt-1 pr-3 text-black" style="font-size: 20px; font-family:Almarai;">
                            <?php 
                                if(isset($_SESSION['name'])){
                                    echo $_SESSION['email'];
                                    
                                }else{
                                    echo " ";
                                }
                                ?>
                            </p>
                            <?php
                            if(isset($_SESSION['name'])){
                                echo '<a href="logout.php" class="nav-item nav-link" id="log1">LogOut</a>';
                            }else{
                                echo '<a href="" class="nav-item nav-link" data-toggle="modal" data-target="#mymodal1" >LogIn</a>';
                                 include 'modallogin.php'; 
                            
                                 echo '<a href="" class="nav-item nav-link" data-target="#mymodal" data-toggle="modal"  >SignUp</a>';
                                include 'modalsign.php'; ;
                            }
                            ?>
                            
                           
                           
                       </div>
                    </div>
                </nav>
            </div>
        </div>
<!--============================================ Nav Bar End =======================================================-->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

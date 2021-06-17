

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
       
<!---===========================================header start=================================---> 
        <?php
            include 'header.php';
        ?>
<!---========================================= header end ====================================--->

<!--========================================= main body Start==================================-->
        <?php  
            include 'config.php';
            $id = $_SESSION['user_id'];
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="mt-3 mb-3">Review Books</h3>
                </div>
            </div>
        </div>
        
        <div class="books">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <?php 
                        $sql = "SELECT * FROM book_detail WHERE book_detail.book_id IN ( SELECT book_review.book_id FROM book_review WHERE user_id = '".mysqli_real_escape_string($db,$id)."')  ORDER BY my_timestamp DESC ";
                        $result  = mysqli_query($db , $sql)  or die("query faild");
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="box">
                            <img src="<?php echo $row['img']; ?>" alt="" class="img-fluid" >
                            <div class="caption "> 
                            <a class="formtitellink" href="single.php?id=<?php echo $row['book_id']; ?>"  ><?php echo $row['book_name'];  ?></a>
                                <p><a href="img/book5.jpg" download=""><i class="fa fa-download" aria-hidden="true"></i></a></p>
                            </div>
                        </div>
                        <?php } } ?>
                    </div>
                    
                </div>
                
            </div>
        </div>
        </div>
 
<!--========================================= main body Start==================================-->


<!-- =======================================footer start==================================================== -->
       <?php

            include 'footer.php';
       ?>
<!-- =======================================footer end==================================================== -->

<!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!--=============================== JavaScript Libraries ==================================================-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        <script src="lib/slick/slick.js"></script>
<!--================================== Template Javascript ========================================-->
        <script src="js/main.js"></script>
    </body>
</html>
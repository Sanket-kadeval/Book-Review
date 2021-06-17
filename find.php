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
    </head>
<body>
<?php 
    include "header.php";
?>
<?php 

?>
<div class="container pb-5">
            <div class="row">
                <div class="col-md-12 pt-3 mb-0">
                    <h3 class="mb-0 pt-4 border-bottom"><?php echo $id; ?></h3>
                </div>
                <?php
                   
                        include "config.php";
                        $result = $db->query(
                        "select * FROM book_detail WHERE book_name like ='".mysqli_real_escape_string($db,$id)."' ORDER BY RAND() ")
                        or die($db->error);
                       
                ?>
                    <?php  while($row = mysqli_fetch_assoc($result)){ 
                       $id=$row['book_id'];
                        ?> 
                    <div class="col-md-8">
    `                   <div class="mainbook bg-light p-2 shadow">
                                    
                            <div class="img col-md-4">
                                <a class="formtitellink" href="single.php?id=<?php echo $id; ?>"  ><h3><?php echo $row['book_name'];  ?></h3></a>
                                <img src="<?php echo $row['img']; ?>"  class="img-fluid">
                            </div>
                            <div class="discription pt-3 pl-3" style="font-size: 17px;">
                                <h5 >description</h5>
                                <p ><?php echo $row['book_description'];  ?> </p>
                                <p class="text-right">-  <?php echo $row['book_author'];  ?></p>  

                            </div>
                            
                        </div>
                    
                    </div>
                    <?php }    ?>
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
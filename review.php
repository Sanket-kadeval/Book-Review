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
                color: white;

            }
            input[type="submit"]:hover{
                background-color:#FF6F61 ;
                color: white;
            }
            .review{
                background-image: url("img/book6.jpg");
                background-size:cover;
            }
        </style>
    </head>

    <body style=" font-family: 'Almarai';">
       
<!------------header start----------> 
        <?php
            include 'header.php';
        ?>
<!-------     header end ---  --------------->
        <div class="review pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center pt-3">
                        <h1 class="text-white">Reader Reviews</h1>
                    </div>
                    <div class="col-md-12">
                        <p></p>
                    </div>
                    
                </div>
                <div class="row">
               
                    <div class="col-lg-5 col-sm-7">
                        <form action="" method="">
                            <div class="form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" name="name" placeholder="Your Name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email"> Your Email:</label>
                                <input type="email" name="email" placeholder="Your Email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="name"> Where are from?(optionl)</label>
                                <textarea class="form-control" rows="1" cols="50" name="views"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="rate"> Rate this Book:</label>
                                <select class="form-control">
                                    <option>0 - No Opinion</option>
                                    <option>1 - Very Poor</option>
                                    <option>2 - Poor</option>
                                    <option>3 - Average</option>
                                    <option>4 - Good</option>
                                    <option>5 - Very Good</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Reviews:</label>
                                <textarea class="form-control" rows="5" cols="50" name="views"></textarea>
                            </div>
                            <div class="form-group">
                                
                                <input type="submit" class="form-control" value="Submit Review" >
                            </div>

                        </form>
                    </div>
                    <div class="col-md-7">
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
<!-------footer start------------------------------------------->

<?php include 'footer.php'; ?>

<!------------------footer end---------------------------------->

    </body>
</html>
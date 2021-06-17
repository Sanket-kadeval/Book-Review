
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
            input[type="submit"]:hover{
                background-color:#FF6F61 ;
                color: white;
            }
            .view{
                height: 100px;
                overflow: hidden;
            }
        </style>
    </head>

<body>
       
<!--=============================== header part start ====================================  -->
<?php include "header.php"; ?>
<!--=============================== header part end ====================================  -->

<!-- =========================== single page start ======================================== -->
<div class="container">
    <div class="row">
        <?php
            $id=$_GET['id'];
            include "config.php";
            $q = $db->query(
            "select * FROM book_detail WHERE book_id='".mysqli_real_escape_string($db,$id)."'")
            or die($db->error);
            $result = mysqli_fetch_assoc($q);
        ?>
        <div class="col-md-8  pt-5 ">
            <div class="row"  style="box-shadow: 1px 2px 2px 2px black;">
                <div class="col-md-3 col-4">
                    <img src="<?php echo $result['img']; ?>"  class="img-fluid pb-2 pt-2" style="width: 200px; height: 230px; ">
                </div>
                <div class="col-md-9 col-5 pt-2">
                    <h3><?php echo $result['book_name'];  ?></h3>
                    <p> By. <?php echo $result['book_author'];  ?></p>
                    <div class="discription" style="font-size: 17px;">
                        <h5  style="font-weight: bolder;"></h5>
                        <p class="view" id="veiwmore"><?php echo $result['book_description'];  ?> </p>
                        <button class="btn btn-outline-success mb-2" id="more">Read More</button>                 
                    </div>
                </div>
            </div>
        
<!--=================== Rrview Writting =================================== -->
            <?php 
            if(isset($_SESSION['name'])){
                echo '<div class="row"  style="box-shadow: 1px 2px 2px 2px black; margin-top: 20px; padding: 20px;" >
                <form method="post" class="col-md-12">
                    <div class="form-group">
                        <lable for="">Enter your review:</lable>
                        <textarea class="form-control" rows="5" cols="50" name="bookreview" ></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control save" value="submit" name="submit" >
                    </div>
                </form>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $(".save").on("click",function(){
                            location.reload();
                            location.reload();
                        });
                    });
                </script>';
            }else{
                echo '
                <div class="row"  style="box-shadow: 1px 2px 2px 2px black; margin-top: 20px; padding: 20px;" >
                <form method="post" class="col-md-12">
                    <div class="form-group">
                        <lable for="">Enter your review:</lable>
                        <textarea class="form-control" rows="5" cols="50" name="bookreview" ></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control save" value="submit" name="submit"  >
                    </div>
                </form>
            </div>
                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                <script>
                    $(document).ready(function(){
                        $(".save").on("click", function(event){
                            event.preventDefault();
                            alert("Pleas LogIn First ");
                        });
                    });
                </script>';
            }
            ?>        
 <!--=================== Rrview Writting =================================== -->     

 </div>    
            <!-- =====side part start ================ -->
            <div class="col-md-3 ml-5 mt-5 d-md-block d-none" style="box-shadow: 1px 2px 2px 2px black; height:400px;">
                <div class="other">
                    <h4 class="text-center pt-2 font-weight-bold">Other Category</h4>
                </div>
                <hr>
                <div class="">
                    <p><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i><a href="category.php?id=fiction">Fiction Book</a></p>
                    <p><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i><a href="category.php?id=romantic">Romantic Book</a></p>
                    <p><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i><a href="category.php?id=self_help">Self Help Book</a></p>
                    <p><i class="fa fa-arrow-right pr-2" aria-hidden="true"></i><a href="category.php?id=autobiography">Auto Biography Book</a></p>
                </div>
            </div>
             <!-- =====side part start ================ -->
    </div>
    <div class="row pb-3">
           <!-- PRINTING OF REVIEW -->
           <div class="col-md-12" style="box-shadow: 1px 2px 2px 2px black; margin-top: 20px; padding: 20px;">
            <h3>Reviews</h3>
                <?php
                    $review = $db->query(
                    "SELECT signup.email,book_review.book_review_review FROM book_review INNER JOIN signup ON book_review.user_id=signup.user_id WHERE book_id = '".mysqli_real_escape_string($db,$id)."'")
                    or die($db->error);
                    while($row_review = mysqli_fetch_assoc($review)){
                ?>
                
                <div class="col-md-12" >
                    <div class="row" style="box-shadow: 1px 2px 2px 2px black; margin-top: 20px; padding: 20px;">
                            <div class="review" >
                                <p class="email font-weight-bold p-0" style="font-size: 20px; " ><?php echo $row_review['email']; ?></p>
                                <p class="" style="font-size: 18px;"><?php echo $row_review['book_review_review']; ?></p>
                            </div>
                    </div>
                </div>
                <?php } ?>
        </div>
    </div>

</div>

<!-- =========================== single page end ================================================ -->

<!--======================================== footer start ========================================-->

<?php  include 'footer.php';   ?>

<!--======================================== footer end ========================================-->
<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!--======================================== JavaScript Libraries ========================================-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/slick/slick.min.js"></script>

<!--======================================== Template Javascript ========================================-->
<script src="js/main.js"></script>
    </body>
</html>

<!-- ======================================== book review submite script ======================================== -->
<?php
    if(isset($_POST['submit'])){
        $book_id = $id;
        print_r($book_id);
        $user = $_SESSION['user_id'];
        $review = $_POST['bookreview'];
        $sql = "INSERT INTO book_review(book_id,user_id,book_review_review) values('$book_id','$user','$review')";
            if(mysqli_query($db , $sql)){
                //echo "record added successful!! ";
                # header("Location:index.php");
                                    
            }else{
                echo "not record added!!" . mysqli_error($db); 
            }
    }
    
?>
<!-- ========================================book review submite script ======================================== -->

<!-- ======================================== View more button script ======================================== -->
<script>
    $(document).ready(function(){
        $("#more").on("click" ,function(){
            $("#veiwmore").toggleClass("view");

            var vartext = $("#veiwmore").hasClass("view") ? "Read More" : "Read Less";
            $(this).text(vartext);
        })
    });
</script>
<!-- ======================================== View more button script ======================================== -->

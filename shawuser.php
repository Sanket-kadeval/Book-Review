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

    <body style=" font-family: 'Almarai';">
       
<!------------header start----------> 
       <!------------header start----------> 
      
<div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="b-logo">
                        
                                <h1 class="pt-2 font-weight-bolder" style=" font-family: 'Akronim';font-size: 50px; pl-5"><span style="color:#FF6F61; font-size:50px;">G</span>ood<span style="color:#FF6F61; font-size:50px;">B</span>ook</h1>
                            
                        </div>
                    </div>
                   
                    <div class="col-lg-3 offset-lg-5 offset-md-3  col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar" >
            <div class="container">
                <nav class="navbar  navbar-expand-sm bg-dark navbar-dark text-center">
                
                    <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#id2">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="id2">
                        <div class="navbar-nav mr-auto">
                            
                            <a href="index.php" class="nav-link nav-item">Home</a>
                            <a href="" class="nav-link nav-item">Show user</a>
                            <a href="adduser.php" class="nav-link nav-item">Add User</a>
                       
                        </div>
                       
                      
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->
    

 </div>
<!--- header end------>
<!----------------header end-------->

    <div class="container">
        <div class="row" style="font-size: 18px;">
            <div class="col-md-12 pt-5 pb-5">

            <?php  
                include 'config.php';

                $sql = "select * from signup ORDER BY user_id ";
                $result = mysqli_query($db , $sql) or die("Query Failed.");

                if(mysqli_num_rows($result) > 0){
            ?>
                <table class="table table-striped table-hover table-responsive ">
                    
                    <thead class="thead-dark">
                        <tr>    
                            <th>User Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email Id</th>
                            <th>Password</th>
                            <th>Mobile No</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)){  ?> 
                        <tr>
                            <td><?php echo $row['user_id'];  ?></td>
                            <td><?php echo $row['first_name'];  ?></td>
                            <td><?php echo $row['last_name'];  ?></td>
                            <td><?php echo $row['email'];  ?></td>
                            <td><?php echo $row['password'];  ?></td>
                            <td><?php echo $row['mobile_no'];  ?></td>
                            <td><a href='update_user.php?id=<?php echo $row["user_id"]; ?>'><i class="fa fa-edit"></i></a></td>
                            <td><a href='delete_user.php?id=<?php echo $row["user_id"]; ?>'><i class="fas fa-trash-alt"></i></a></td>
                        </tr>
                        <?php   } ?>
                    </tbody>
                    
                </table>
                <?php } ?>
            </div>
        </div>
    </div>


<!--------------------footer start-------------->
<?php include 'footer.php'; ?>

<!----------------footer end--------------------->
    </body>
</html>
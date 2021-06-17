<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
       .modal-header{
           background-color: rgba(255, 111, 97, 1);
       }
       .modal-body{
           
       }
       
       .hover:hover{
           background: rgba(255, 111, 97, 1);
           color: black;
           font-weight: bolder;
       }
       .modal-content{
           width: 500px;
           height: 400px;
           border: 2px solid black;
           border-radius: 10px;
           margin-top: 180px;
       }
       .close:hover{
           background: black;
           color: white;
       }

   </style>


</head>
<body>
<div class="modal" id="mymodal1">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header text-center">
                    <h3 class="" >Log In</h3>
                    <button type="button" class="close" data-dismiss="modal"> &times;</button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
						<div class=" form-group">
							<input type="email" id="email" class="form-control" name="email" placeholder="enter email" required>
						</div>
						<div class=" form-group">
							<input type="password" id="password"class="form-control" name="password" placeholder="enter password" required>
						</div>
						<div class=" form-group"> 
							<input type="submit" id="submit" class="form-control hover" name="submit" value="submit" required>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>


</body>
</html>






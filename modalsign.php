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
<div class="modal" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header text-center">
                    <h3 class="" >Sign Up</h3>
                    <button type="button" class="close" data-dismiss="modal"> &times;</button>
                </div>
                <div class="modal-body">
                    <form action="signup.php" method="post" enctype="multipart/form-data" onsubmit="return validation()" >
                        <div class=" form-group">
                            <input type="text" id="fname" class="form-control" name="firstname" placeholder="Enter First Name" required>
                        </div>
                        <div class=" form-group">
                            <input type="text" id="lname" class="form-control" name="lastname" placeholder="Enter Last Name" required>
                        </div>
                        <div class=" form-group">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Enter Email" required>
                        </div>
                        <div class=" form-group">
                            <input type="password" id="password"class="form-control" name="password" placeholder="Ereate Password" required>
                        </div>
                        <div class=" form-group">
                            <input type="text" id="number" class="form-control" name="number" placeholder="Enter Mobile No.">
                            <span id="error"></span>
                        </div>
                        <div class=" form-group">
                            <input type="submit" id="submit" class="form-control hover" name="submit" value="submit" required>
                        </div>
                    </form>
                </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
   function validation(){
    var mobile_no = document.getElementById("number").value;
                if(mobile_no == ""){
                    document.getElementById("span").innerHTML="Please fill the mobile number.";
                    return false;
                }
                if(isNaN(mobile_no)){
                    document.getElementById("span").innerHTML="Only write digit not character.";
                    return false;
                }
                if(mobile_no.length!=10){
                    document.getElementById("span").innerHTML="mobile number must be 10 digits only.";
                    return false;
                }
   }
</script>
</body>
</html>



<?php include("loginSession.php");?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
        <?php
            if(isset($_POST['register_submit'])){
                //Insert data
                $mysqli->query("insert into users (username, password_hash, mobile,email) values('".$_POST['username']."','".md5($_POST['password'])."','','".$_POST['email']."')");
                // Print auto-generated id
                $mysqli -> close();
                $message = "<span class='text-success' style='color:green'>Registration completed successfully</span>";
            }
        ?>          
        <?php include("menu.php");?> 
          <div class="container">
            <h1>SignUp</h1>
            <form name="register" method="post" action="signup.php" >
                <label for="username"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="username" required>

                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" required>
        
                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <label for="confirm_password"><b>Password Confirmation</b></label>
                <input type="password" placeholder="Confirm Password" name="confirm_password" required>
                <br>
                <button value="Save" type="submit" name="register_submit" class="btn-save">
                            Signup
                        </button>
                <a href="./login.php">login</a>
                <br>
            </form>   
         
          </div>
        
</body>
</html>
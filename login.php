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
<?php include("menu.php");?>

    
          <div class="container">
            <h1>Login</h1>
            <form name="login" method="post" action="index.php" >
                <label for="username"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="username" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br>
                <button class="btn-book1 btn" name="login_submit" >Login</button>
                <hr>
                <a href="./signup.php">signup</a>
            </form>
          </div>
        
</body>
</html>
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
 
<div class="home-body">
    <div class="intro">
        <h2 class="welcome">Welcome to Conusltly!</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, at! Aliquam a eaque sapiente ratione illum inventore minus eveniet. Asperiores!</p>
        <?php if(!isset($_SESSION['userDetails'])){ ?>
            <button class="signup">
            <a  href="signup.php" style="color:white; text-decoration:none" >Signup</a>
            </button>
        <?php }else{?>
            <button class="signup">
            <a  href="meetings.php" style="color:white; text-decoration:none" >Meetings</a>
            </button>
            <button class="signup">
            <a  href="new-session.php" style="color:white; text-decoration:none" >Create Meeting</a>
            </button>
        <?php }?>
    </div>
    <hr>
    <div>
        <div>
            <h4>Become a pro in no time</h4>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Doloribus ea, neque, eos ducimus recusandae blanditiis odit nulla itaque inventore, tenetur sunt! Dolorum, sed ducimus culpa nesciunt totam laborum laudantium. Modi veritatis eum consequuntur cupiditate! Alias accusantium nihil fugit quas quae! Earum eius minima praesentium veritatis ex placeat debitis exercitationem in!</p></div>
    </div>
    <div>
        <img src="images/comp.jpg" alt="computer" width="400px" />
    </div>
    </div>
</div>

</body>
</html>
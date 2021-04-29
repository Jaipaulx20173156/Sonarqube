<?php include("loginSession.php");?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php include("menu.php");?>

    <div class="first-meeting">
        <h2>First Meeting</h2>
        <hr>
        <h3>Comments</h3>
        <form>
            <textarea rows="4" cols="50" name="comment">
                Enter text here...</textarea>
            <button>Cancel comments</button>
           
        </form>
    </div>
</body>
</html>
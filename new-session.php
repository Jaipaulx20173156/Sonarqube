<?php include("loginSession.php");?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/main.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php 
     if(isset($_POST['create_meeting'])){
        $data = [
            "name"              => $_POST['name'],
            "start_datetime"    => date("Y-m-d H:i:s",strtotime($_POST['start_datetime'])),
            "end_datetime"      => date("Y-m-d H:i:s",strtotime($_POST['end_datetime']))
        ];
        echo "<pre>";print_r($data);
     }
?>
    <?php include("menu.php");?>


    <h2>Schedule a New Session</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, iste!</p>
    <div class="new-session">
        <h2>Meeting Information</h2>
        <hr>
       <form action="" method="post" >
        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>

        <label for="starttime">Start Time:</label>
        <input type="datetime-local" id="starttime" name="start_datetime"><br /><br />

        <label for="endtime">End Time:</label>
        <input type="datetime-local" id="endtime" name="end_datetime"><br />
        <center>
        <input type="submit" value="Create Meeting" name="create_meeting" class="signup"/>
        </center>
       </form>
    </div>
</body>
</html>
<?php 
	session_start();
	//Database connection
	$mysqli = new mysqli("localhost","root","","consultly");
        
	// Check connection
	if ($mysqli -> connect_errno) {
		$message = "<span class='text-danger' style='color:red'>Failed to connect to MySQL: " . $mysqli -> connect_error."</span>"; 
	}  
	$message = "";
	if(isset($_POST['login_submit'])){
        $result = $mysqli->query("select * from  users where email = '".$_POST['username']."' and password_hash ='".md5($_POST['password'])."'");
        $userDetails = $result->fetch_assoc();
		if($result->num_rows){
			$_SESSION['userDetails'] = $userDetails;
			$message = "<span class='text-success' style='color:green'>Logged in successfully</span>";
		}else{
			$message = "<span class='text-danger' style='color:red'>Invalid user/ password</span>";
		}
    }
    
?>
<?php
	session_start();
	include('conn.php');
	
	$username=$_POST['Username'];
	$password=$_POST['password'];
	
	$query=mysqli_query($conn,"INSERT INTO user(username,pass) VALUES ('$username','$password')");
	
	if (mysqli_num_rows($query)<1){
		$_SESSION['message']="Login Error. Please Try Again";
		header('location:login.php');
	}
	else{
		$row=mysqli_fetch_array($query);
		$_SESSION['userid']=$row['userid'];
		header('location:login.php');
	}

?>
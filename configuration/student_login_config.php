<?php
	session_start();
	require '../include/db.php';
	
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	
	$sql = "SELECT id FROM student WHERE email = '$email' AND password = '$pass' ";
	
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die(mysqli_error($conn));
	}
	
	$row = mysqli_num_rows($result);
	if($row > 0 ){
		echo 'Ok';
	}
	else{
		header('location: ../home.php');
	}
	
	
?>
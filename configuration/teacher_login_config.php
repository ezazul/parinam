<?php
	session_start();
	require 'include/db.php';
	if(isset($_POST['login_btn'])){
		
		$login_error = "<div class=\"alert alert-success\"><strong>Welcome</strong></div>";
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$type = $_POST['designation'];
		
		$sql = "SELECT id, department FROM $type WHERE email = '$email' AND password = '$pass' ";
		
		$result = mysqli_query($conn, $sql);
		if(!$result){
			die(mysqli_error($conn));
		}
		
		$row = mysqli_num_rows($result);
		if($row > 0 ){
			$_SESSION['t_email'] = $email;
			$row = mysqli_fetch_assoc($result);
			$_SESSION['t_dep'] = $row['department'];
			header ('location: home.php');
		}
		else{
			$login_error = "<div class=\"alert alert-danger\"><strong>Invalid email or password</strong></div>";
		}
	}
	
?>
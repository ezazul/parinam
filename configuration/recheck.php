<?php
	
	session_start();
	require '../include/db.php';
	$email = $_GET['email'];
	$id = $_GET['id'];
	$semester = $_GET['sem'];
	
	$sql = "INSERT INTO `reports`(`student_id`, `subject_id`, `semester`, `status`) VALUES ( '$email', '$id', $semester, 0) ";
	
	mysqli_query($conn, $sql) or die("Request not sent");
	echo 'Request successfully sent';
?>
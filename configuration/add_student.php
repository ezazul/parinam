<?php
	
	require '../include/db.php';
	$email = $_GET['email'];
	$name = $_GET['name'];
	$branch = $_GET['branch'];
	$semester = $_GET['semester'];
	$reg_num = $_GET['reg_num'];
	$roll_num = $_GET['roll_num'];
	$mother = $_GET['mother'];
	$father = $_GET['father'];
	$dob = $_GET['dob'];
	
	$sql = "SELECT id FROM student WHERE email = '$email' ";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die(mysqli_error($conn));
	}
	
	$row = mysqli_num_rows($result);
	if($row > 0){
		die("Student already registered");
	}
	
	
	$sql = "INSERT INTO `student`(`email`, `name`, `department`, `semester`, `reg_num`, `roll_num`, `mother`, `father`, `dob`) VALUES ( '$email', '$name', '$branch', '$semester', '$reg_num', '$roll_num', '$mother', '$father', '$dob' )";
	
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	
	echo "Ok";
?>
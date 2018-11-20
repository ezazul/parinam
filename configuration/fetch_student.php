<?php
	require '../include/db.php';
	$q = $_GET['q'];
	$sql = "SELECT email, name, department, semester, reg_num, roll_num FROM student WHERE reg_num = '$q' OR roll_num = '$q'";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die(mysqli_error($conn));
	}
	
	$row = mysqli_num_rows($result);
	if($row == 1){
		$row = mysqli_fetch_assoc($result);
		echo $row['email'].";".$row['name'].";".$row['department'].";".$row['semester'].";".$row['reg_num'].";".$row['roll_num'],";";
	}
	else{
		echo 404;
	}

?>
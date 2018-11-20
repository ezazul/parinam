<?php
	require '../include/db.php';
	$student_id = $_GET['s_email'];
	$sub_id = $_GET['subject'];
	$marks = $_GET['marks'];
	$sem = $_GET['semester'];
	
	$sql = "SELECT id FROM student WHERE email = '$student_id'";
	$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$row = mysqli_num_rows($result);
	if($row == 0){
		die("Student not registered");
	}
	
	$sql = "INSERT INTO marks (semester, student_id, subject_id, marks, max_mark, passing_marks) VALUES ('$sem','$student_id', '$sub_id', $marks, 100, 30 )";	
	
	mysqli_query($conn, $sql) or die("Result not entered");
	echo "Ok";
?>
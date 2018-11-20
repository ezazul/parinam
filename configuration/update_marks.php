<?php
	require '../include/db.php';
	$student_id = $_GET['s_email'];
	$sub_id = $_GET['subject'];
	$marks = $_GET['marks'];
	$sem = $_GET['semester'];

	
	$sql = "UPDATE marks SET marks = $marks WHERE subject_id = '$sub_id' AND student_id = '$student_id' ";
	mysqli_query($conn, $sql) or die("Result not entered");
	echo "Ok";
?>
<?php
	session_start();
	require 'include/db.php';
	$sem = $_GET['sem'];
	$email = $_GET['email'];
	
	$sql = "SELECT email, name, department, semester, reg_num, roll_num, father, mother FROM student WHERE email = '$email' ";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die(mysqli_error($conn));
	}
	
		$row = mysqli_fetch_assoc($result);
		$reg_num = $row['reg_num'];
		$roll_num = $row['roll_num'];
		$name = $row['name'];
		$father = $row['father'];
		$mother = $row['mother'];
	
	
	
	
	$sql = "SELECT student.name, student.department, student.semester, student.reg_num, student.roll_num, student.mother, student.father, marks.marks, subject.sub_id, subject.sub_name FROM student, marks, subject WHERE student.email = marks.student_id AND marks.subject_id = subject.sub_id AND marks.semester = student.semester AND student.email = '$email' AND student.semester = $sem";
	
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die(mysqli_error($conn));
	}
	
?>
<!DOCTYPE html>
<html>
     <head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <meta charset="utf-8" />
         <meta name="viewport" content="width=device-width, initial-scale=1.0" />
         <meta name="description" content="" />
         <meta name="author" content="DCTM Team" />

         <link rel="shortcut icon" href="assets/images/logo.png" />

		<title>Student Panel | Parinam</title>
	
         <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
         <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

         <script src="../assets/js/modernizr.min.js"></script>
		<script src="assets/js/js.js"></script>

     </head>

</head>


             <!-- ============================================================== -->
             <!-- Start right Content here -->
             <!-- ============================================================== -->
     <div class="content-page">
         <div class="col-lg-6 col-xl-12" align="center">
                                 
									 <br><Br>
									<table  border="0" class="row data-table" style="width:90%" align="center">
									<Td colspan="4" align="center">
									<img src="img/logo.png"></center> <br><font color="red"size="5"><b>RESULT - 2018</b></font>
										</td></tr>
									
									
									 
									<td width="18%">  <h5>Registration No.</h5></td> 	
									<td width="30%"><h5 class="m-t-0 header-title"><font color="blue"><?php echo $reg_num; ?></font></h5> </td> 
									<td width="18%"><b><h5>Roll No.</h5> </b></td> 
									<td width="18%"> <h5 class="m-t-0 header-title"><font color="blue"><?php echo $roll_num; ?></font></h5> </td> 
									</tr>
									
									<td >  <h5 >Student Name</h5></td> 	
									<td><h5 class="m-t-0 header-title"><font color="blue"><?php echo $name; ?></font></h5> </td> 
									<td><b><h5>Father's Name</h5> </b></td> 	
									<td><h5 class="m-t-0 header-title"><font color="blue"><?php echo $father; ?></font></h5> </td> 
									</tr>
									
									<td >  <h5 >Semester</h5></td> 		
									<td><h5 class="m-t-0 header-title"><font color="blue"><?php echo $sem; ?></font></h5> </td> </tr>
									<td >  <h5 >Course Name</h5></td> 	
									<td><h5 class="m-t-0 header-title"><font color="blue"><?php echo $_SESSION['t_dep']; ?></font></h5> </td> 
								
									</tr>
									 
									 </table>
									<Br><br> 
									
									<table  border="1"  width="80%"  align="center" cellspacing="0" cellpadding="0" >
									
									
									
									<TR> 
									<Td><h5>Subject Code</h5></td> 
									<Td><h5>Subject Name</h5></td> 
									<Td><h5>Marks</h5></td>
									<Td><h5>Report</h5></td>
									</TR>
									
									<?php
										$row = mysqli_num_rows($result);
										if($row < 1){
											die("Not Result Found");
										}
										while($row = mysqli_fetch_assoc($result) ){
											echo "
												<TR>
													<Td><h5>".$row['sub_id']."</h5></td> 
													<Td><h5>".$row['sub_name']."</h5></td> 
													<Td><h5>".$row['marks']."</h5></td>  
													<Td><h5><p id='recheck' onclick=\"recheck('$email', '".$row['sub_id']."', $sem )\">Recheck</p> </h5></td>  
												</TR>
											";
										}
									
									?>
								
									</table>
									 </table>
									
									 
									 							
                             </div>
            
         </div>
        


  <!-- jQuery  -->
         <script src="assets/js/jquery.min.js"></script>
         <script src="../assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
         <script src="../assets/js/bootstrap.min.js"></script>
         <script src="../assets/js/detect.js"></script>
         <script src="../assets/js/fastclick.js"></script>
       
       

         <script src="assets/js/jquery.app.js"></script>
</html>

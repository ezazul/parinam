<?php
	session_start();
	require "include/db.php";
	$student_id = $_GET['email'];
	$sem = $_GET['sem'];
	$sub_id = $_GET['sub_id'];
	$sql = "SELECT email, name,department, semester, reg_num, roll_num FROM student WHERE email = '$student_id' ";
	$result = mysqli_query($conn, $sql);
	if(!$result){
		die(mysqli_error($conn));
	}
	$row = mysqli_fetch_assoc($result);
	$reg_num = $row['reg_num'];
	$roll_num = $row['roll_num'];
	$name = $row['name'];
	$department = $row['department'];
	
	function fetch_sub($sub_id){
		require 'include/db.php';
		$sql = "SELECT * FROM subject WHERE sub_id = '$sub_id' ";
		$result = mysqli_query($conn, $sql);

		if(!$result){
			echo(mysqli_error($conn));
		}
		else{
			$row = mysqli_fetch_assoc($result);
			echo '<option value="'.$row['sub_id'].'">'.$row['sub_name'].'</option>';
			
		}
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

		<title>PARINAM | DASHBOARD</title>
	
         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

         <script src="assets/js/modernizr.min.js"></script>
		 <script src="assets/js/js.js"></script>
	
     </head>


     <body class="fixed-left">

         <!-- Begin page -->
         <div id="wrapper">

             <!-- Top Bar Start -->
          <?php require 'nav.php';?>  
		  <!-- Top Bar End -->


             <!-- ========== Left Sidebar Start ========== -->

             <div class="left side-menu">
                 <div class="sidebar-inner slimscrollleft">
                     <!--- Divider -->
                     <div id="sidebar-menu">
                       
<?php require 'menu.php';?>   					   
					   <div class="clearfix"></div>
                     </div>
                     <div class="clearfix"></div>
                 </div>
             </div>
             <!-- Left Sidebar End -->



             <!-- ============================================================== -->
             <!-- Start right Content here -->
             <!-- ============================================================== -->
          <div class="content-page">
                 <!-- Start content -->
                 <div class="content">
                     <div class="container-fluid">

                         <!-- Page-Title -->
                         <div class="row">
                             <div class="col-sm-12">
                                 

                                 <h4 class="page-title">Result / <small>Compose </small></h4>
                                 <p class="text-muted page-title-alt"> </p>
                             </div>
                         </div>

                          <div class="row">
                             <div class="col-md-12">
						       
							 <div class="card-box">
<div class="alert alert-success">
                                                 <strong>New Record Saved</strong> 
                                             </div>                                                   
							 <h4 class="m-t-0 header-title"><b>Compose</b></h4>
                                     <p class="text-muted m-b-30 font-13">
                                        
                                     </p>

                                     <form method="post" action="#" id="compose_form" onsubmit="return update_result()">
                                         <div>
                                             
                                             <section>
                                                 <div class="form-group clearfix">
                                                     <label class="control-label " for="userName">Registration ID <font color="red">*</font></font> </label>
                                                     <div class="">
                                                         <input class="form-control required" onkeyup="fetch_student(this.value)" id="s_reg" value="<?php echo $reg_num; ?>"   name="reg_num" type="text" required />
														 <p id="note"></p>
                                                     </div>
                                                 </div>
                                                 <div class="form-group clearfix">
                                                     <label class="control-label " for="password"> Roll No. <font color="red">* </font></label>
                                                     <div class="">
                                                         <input  name="roll_num" type="text" value="<?php echo $roll_num; ?>" onkeyup="fetch_student(this.value)" id="s_roll" class="required form-control" required />

                                                     </div>
                                                 </div>
												 <div class="form-group clearfix">
                                                     <label class="control-label " for="password"> Email <font color="red">*</font></label>
                                                     <div class="">
                                                         <input  name="s_email" type="text" value="<?php echo $student_id; ?>" id="s_email" class="required form-control" required  readonly />

                                                     </div>
                                                 </div>
												 <div class="form-group clearfix">
                                                     <label class="control-label " for="password"> Name <font color="red">*</font></label>
                                                     <div class="">
                                                         <input  name="name" type="text" id="s_name" value="<?php echo $name; ?>" class="required form-control" required  readonly />

                                                     </div>
                                                 </div>
												 <div class="form-group clearfix">
                                                     <label class="control-label " for="password"> Branch  <font color="red">*</font></label>
                                                     <div class="">
                                                         <input  name="branch" type="text" id="s_branch" value="<?php echo $department; ?>"  class="required form-control" required  readonly />

                                                     </div>
                                                 </div>
												 
												<div class="form-group clearfix">
                                                     <label class="control-label " for="password">Semester  <font color="red">*</font></label>
                                                     <div class="">
                                                        <input  name="semester" type="text" id="s_semester" value="<?php echo $sem; ?>" class="required form-control" required  readonly />

                                                     </div>
                                                 </div>
												 
												 <div class="form-group clearfix">
                                                     <label class="control-label " for="password"> Subject <font color="red">*</font></label>
                                                     <div class="">
                                                         <select  name="subject"  class="required form-control" required  />
																<?php  fetch_sub($sub_id); ?>
														 </select>

                                                     </div>
                                                 </div>
												 <div class="form-group clearfix">
                                                     <label class="control-label " for="password"> Marks <font color="red">*</font></label>
                                                     <div class="">
                                                         <input  name="marks" type="text" class="required form-control" required />

                                                     </div>
                                                 </div>
												 
                                                  <center><button type="submit" class="btn btn-success btn-rounded waves-effect waves-light">Update</button>  &nbsp;&nbsp;&nbsp;
												  <input type="reset" class="btn btn-danger btn-rounded waves-effect waves-light" value="Cancel"> 
												  </center>

                                             </section>
                                            
                                            
                                            
                                            
                                         </div>
                                     </form>

                                 </div>
                             </div>
                         </div>



						 </div>
                         <!-- end row -->




                     </div>  <!-- container -->

                 </div>  <!-- content -->

                 <?php require 'footer.php';?>    
             </div>


             <!-- ============================================================== -->
             <!-- End Right content here -->
             <!-- ============================================================== -->



         </div>
         <!-- END wrapper -->




         <!-- jQuery  -->
         <script src="assets/js/jquery.min.js"></script>
         <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="assets/js/detect.js"></script>
         <script src="assets/js/fastclick.js"></script>
       
       

         <script src="assets/js/jquery.app.js"></script>

     </body>
 </html>
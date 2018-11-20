<?php
	session_start();
	require "include/db.php";
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
                                 

                                 <h4 class="page-title">Student / <small>Reports </small></h4>
                                 <p class="text-muted page-title-alt"> </p>
                             </div>
                         </div>

                          <div class="row">
						  <div class="">
						  
							 
							</div> 
							 
                             <div class="col-md-12">
                                 <div class="card-box">
								<div class="container">
								
					<div class="row justify-content-around">
                                         <div class="col-sm-2">
                                             <h4 class="header-title m-t-0"> <input type="text" placeholder="Search Students..." class="form-control"   /> </h4>
                                          
                                         </div>
<div class="col-sm-5">
                                             <h4 class="header-title m-t-0"> <select class="form-control"   /> 
											 <option >All</option>
											 <option value="pending">Pending</option>
											 <option value="approved">Approved</option>
											 <option value="reject">Rejected</option>
											 </select></h4>
                                          
                                         </div>
										 
                                         
                                     </div>
                                			
<div class="row data-table">
<table class="table">
  <thead>
    <tr>
      <th width="8%" valign="top">Sr. No.</th>
      <th width="22%" valign="top">Student Name</th>
      <th width="10%" valign="top">Semester</th>
      <th width="22%" valign="top">Subject</th>
      <th width="18%" valign="top">Action</th>
      
    </tr>
  </thead>
  <tbody>
	<?php
		
		$sql = "select reports.* from reports,subject,teachers where teachers.email=subject.teacher_id and reports.subject_id=subject.sub_id and teachers.email= '".$_SESSION['t_email']."';";
		$result = mysqli_query($conn, $sql);
		$i = 1;
		while($row = mysqli_fetch_assoc($result) ){
			echo "
				<tr>
				  <td>$i</td>
				  <td>".$row['student_id']."</td>
				  <td>".$row['semester']."</td>
				  <td>".$row['subject_id']."</td>
				  <td>
				  <button class=\"btn btn-danger btn-rounded waves-effect waves-light\">Reject</button> &nbsp;&nbsp;
				  <a href='update_result.php?email=".$row['student_id']."&sem=".$row['semester']."&sub_id=".$row['subject_id']."' class=\"btn btn-success btn-rounded waves-effect waves-light\">Update</a>
				  </td>
				</tr>
			";
		}
		
	?>
 

  </tbody>
</table>
</div>
</div>
<style type="text/css">
.data-table{width:auto; overflow-x: scroll; overflow-y: hidden; }
</style>
                                    

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
<?php
	session_start();
	function fetch_student(){
		require 'include/db.php';
		$sql = "SELECT * FROM student WHERE department = '".$_SESSION['t_dep']."'";
		$result = mysqli_query($conn, $sql);

		if(!$result){
			echo(mysqli_error($conn));
		}
		else{
			$i = 1;
			while($row = mysqli_fetch_assoc($result)){
				echo '
					<tr>
					  <td>'.$i++.'</td>
					  <td>'.$row['name'].'</td>
					  <td>'.$row['semester'].' Sem</td>
					  <td>1st sem result<br>2nd sem <br>3rd sem</td>
					  <td><a href="compose.php"><big><font color="blue" size="5"><i class=" md-add-box" title="Click Here For New Result"></i></font></a></td>
					</tr>
				';
			}
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
                                 

                                 <h4 class="page-title">Student / <small>Filter List </small></h4>
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
											 <option >Select Semester</option>
											 <option value="1">1st Sem</option>
											 <option value="2">2nd Sem</option>
											 </select></h4>
                                          
                                         </div>
										 
                                         
                                     </div>
                                			
<div class="row data-table">
<table class="table">
  <thead>
    <tr>
      <th>Sr. No.</th>
      <th>Student Name</th>
      <th>Semester</th>
      <th>Result</th>
      <th>Create New Result</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
		fetch_student();
	
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
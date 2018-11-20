<?php
	error_reporting(0);
	require 'configuration/teacher_login_config.php';
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

		<title>Faculty Login</title>
	
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
          
		  <!-- Top Bar End -->




             <!-- ============================================================== -->
             <!-- Start right Content here -->
             <!-- ============================================================== -->
     <div class="account-pages"></div>
         <div class="clearfix"></div>
         <div class="wrapper-page">
             <div class="card-box">
                 <div class="panel-heading">
                     <h4 class="text-center"> Sign In to  <strong class="text-custom">Parinam </strong></h4>
                 </div>


                 <div class="p-20">
				 
                                                 <?php echo $login_error;  ?> 
                                             
                     <form class="form-horizontal m-t-20" method="POST" onsubmit="return login()" action="<?php echo $_SERVER['PHP_SELF']; ?>" >

                         <div class="form-group ">
                             <div class="col-12">
                                 <input class="form-control" name="email" type="email" required="" placeholder="Username" />
                             </div>
                         </div>

                         <div class="form-group">
                             <div class="col-12">
                                 <input class="form-control" type="password" name="password" required="" placeholder="Password" />
                             </div>
                         </div>
						<div class="form-group">
                             <div class="col-12">
                                 <select class="form-control" name="designation" required=""  />
									 <option value="teachers">Teacher</option>
									 <option value="students">Student</option>
								 </select>
                             </div>
                         </div>
                         <div class="form-group ">
                             <div class="col-12">
                                 <div class="checkbox checkbox-primary">
                                     <input id="checkbox-signup" type="checkbox" />
                                     <label for="checkbox-signup">
                                        Remember me
                                     </label>
                                 </div>

                             </div>
                         </div>

                         <div class="form-group text-center m-t-40">
                             <div class="col-12">
                                 <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" name="login_btn" type="submit">Log In
                                 </button>
                             </div>
                         </div>

                         <div class="form-group m-t-30 m-b-0">
                             <div class="col-12">
                                 <a href="forgotpsw.php" class="text-dark"> Forgot
                                    your password? </a>
                             </div>
                         </div>
                     </form>

                 </div>
             </div>
           
            
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
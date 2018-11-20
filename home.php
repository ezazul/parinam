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
                                 

                                 <h4 class="page-title">Dashboard </h4>
                                 <p class="text-muted page-title-alt"> </p>
                             </div>
                         </div>

                         <div class="row">
                             <div class="col-md-6 col-lg-6 col-xl-3">
                                 <div class="widget-bg-color-icon card-box fadeInDown animated">
                                     <div class="bg-icon bg-icon-info pull-left">
                                         <i class="md md-attach-money text-info"></i>
                                     </div>
                                     <div class="text-right">
                                         <h3 class="text-dark"><b class="counter">31,570 </b></h3>
                                         <p class="text-muted mb-0">Total Revenue </p>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-6 col-xl-3">
                                 <div class="widget-bg-color-icon card-box">
                                     <div class="bg-icon bg-icon-pink pull-left">
                                         <i class="md md-add-shopping-cart text-pink"></i>
                                     </div>
                                     <div class="text-right">
                                         <h3 class="text-dark"><b class="counter">280 </b></h3>
                                         <p class="text-muted mb-0">Today's Sales </p>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-6 col-xl-3">
                                 <div class="widget-bg-color-icon card-box">
                                     <div class="bg-icon bg-icon-purple pull-left">
                                         <i class="md md-equalizer text-purple"></i>
                                     </div>
                                     <div class="text-right">
                                         <h3 class="text-dark"><b class="counter">0.16 </b>% </h3>
                                         <p class="text-muted mb-0">Conversion </p>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </div>

                             <div class="col-md-6 col-lg-6 col-xl-3">
                                 <div class="widget-bg-color-icon card-box">
                                     <div class="bg-icon bg-icon-success pull-left">
                                         <i class="md md-remove-red-eye text-success"></i>
                                     </div>
                                     <div class="text-right">
                                         <h3 class="text-dark"><b class="counter">64,570 </b></h3>
                                         <p class="text-muted mb-0">Today's Visits </p>
                                     </div>
                                     <div class="clearfix"></div>
                                 </div>
                             </div>
                         </div>

                         <div class="row">

                             
                             <div class="col-lg-12 col-xl-12">
                                 <div class="card-box">
									 <h4 class="text-dark header-title m-t-0">Notifications </h4>
									 <div class="text-center">
										 <ul class="list-inline chart-detail-list">
											 <li class="list-inline-item">
												 <h5><i class="fa fa-circle m-r-5" style="color: #5fbeaa;"></i>Desktops </h5>
											 </li>
											 <li class="list-inline-item">
												 <h5><i class="fa fa-circle m-r-5" style="color: #5d9cec;"></i>Tablets </h5>
											 </li>
											 <li class="list-inline-item">
												 <h5><i class="fa fa-circle m-r-5" style="color: #dcdcdc;"></i>Mobiles </h5>
											 </li>
										 </ul>
									 </div>
									 <div id="morris-bar-stacked" style="height: 310px;"></div>
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
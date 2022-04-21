<?php
ob_start();
session_start();

if(!$_SESSION["user_mail"]){
	header("Location:login.php");
	exit();
};
$page = "home";
?>
<!DOCTYPE html>
<html lang="en">
 
<?php include("assets/head.php"); ?>
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
	
  <!-- Header -->
  <?php include("assets/header.php"); ?>
  <!-- Header END -->

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <?php include("assets/aside.php"); ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h3>
	  <?php echo $admin_title; ?>
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
			<div class="col-md-12">

			  <!-- Carousel Slider Only Slide -->
			  
				
					<div id="carousel-example-generic-Controls" class="carousel slide" data-ride="carousel">                  
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item">
						  <img src="https://www.excessreklam.com/admin-slides/slide1.jpg" alt="slide-1">
						</div>
						<div class="item">
						  <img src="https://www.excessreklam.com/admin-slides/slide2.jpg" alt="slide-2">
						</div>
						<div class="item active">
						  <img src="https://www.excessreklam.com/admin-slides/slide3.jpg" alt="slide-3">
						</div>
					  </div>
					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic-Controls" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic-Controls" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					  </a>
					</div>               
				
			  
			  <!-- /.box -->

			</div>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <!-- Footer -->
  <?php include("assets/footer.php"); ?>
  <!-- Footer END -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Cross Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Cross Admin for demo purposes -->
	<script src="js/main.js"></script>
	

</body>

</html>

<?php
ob_start();
session_start();

if(!$_SESSION['user_mail']){
	header("Location:login.php");
	exit();
}
$treeview="home";
$page="slider";
?>

<!DOCTYPE html>
<html lang="en">

<?php include("assets/head.php"); ?>
<body class="hold-transition skin-blue sidebar-mini">
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
        Slider Ekle
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
			<form action="assets/process.php" method="post" enctype="multipart/form-data">
				
				<!-- Slider Picture -->
				<div class="form-group">
					<label>Slider Resim | <small>Resim genişliği en az 1920px. Olmalıdır!</small></label>
					<input type="file" name="slider_pic" required>
				</div>
				
				<!-- Slider Title -->
				<div class="col-md-12" style="padding: 0">
				  <h3>Slider Başlık</h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_1" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_2" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_1">
						<input type="text" class="form-control" name="title_tr" placeholder="Türkçe Slider Başlığını Girin" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_2">
						<input type="text" class="form-control" name="title_en" placeholder="İngilizce Slider Başlığını Girin" required>
					  </div>
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				
				<!-- Slider Text -->
				<div class="col-md-12" style="padding: 0">
				  <h3>Kısa Yazı</h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_3" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_4" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_3">
						<input class="form-control" type="text" name="text_tr" placeholder="Türkçe Yazıyı Girin" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_4">
						<input class="form-control" type="text" name="text_en" placeholder="İngilizce Yazıyı Girin" required>
					  </div>
					  <!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				
				<a href="sliderlist.php" class="btn btn-danger"><i class="fa fa-arrow-circle-o-left"></i> Vazgeç</a>
				<button type="submit" name="add_slider" class="btn btn-success"><i class="fa fa-plus"></i> Yeni Slider Ekle</button>
			</form>
		</div>
		<!-- /.box-body -->
		
		  
		<?php
		  if(isset($_SESSION['status']) && $_SESSION['status'] !='')
		  { ?>
		  <script type="text/javascript">
			 swal({
				 title: "<?php echo $_SESSION['title']; ?>",
				 text: "<?php echo $_SESSION['status']; ?>",
				 icon: "<?php echo $_SESSION['icon']; ?>",
			 });
		  </script> 
		  <?php
		   unset($_SESSION['status']);
		   unset($_SESSION['title']);
		   unset($_SESSION['icon']);
		  }
		  
		  
			if($_SESSION['user_mail']!= $get_user['user_mail']){
			unset($_SESSION['user_mail']);
			header("Location:login.php");
			exit();
			}
		?>
		
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
	
	<!-- CKeditor -->
	<script src="assets/vendor_plugins/ckeditor/ckeditor.js"></script>
	
	<!-- Cross Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Cross Admin for demo purposes -->
	<script src="js/main.js"></script>
	

</body>

</html>

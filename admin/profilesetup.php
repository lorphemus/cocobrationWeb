<?php
ob_start();
session_start();

if(!$_SESSION['user_mail']){
	header("Location:login.php");
	exit();
}
$page = "profile";
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
        Profil Ayarları
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-body">
			<form action="assets/process.php" method="post" enctype="multipart/form-data">
				<div class="form-group col-md-12">
					<?php
					if(empty($get_user['user_pic'])){?>
					<img src="img/no-pic.png" alt="">
					<?php }else{ ?>
					<img src="<?php echo $get_user['user_pic']; ?>" class="img-thumbnail" style="max-width: 250px;">
					<?php } ?>
				</div>
				<div class="form-group">
					<label>Profil Resmi</label>
					<input type="file" name="user_pic" placeholder="<?php echo $get_user["user_pic"]; ?>">
				</div>
				
				<div class="form-group">
					<button type="submit" name="picupdate" class="btn btn-success"><i class="fa fa-check"></i> Resim Güncelle</button>
				</div>
				
				<div class="form-group">
					<label>Ad Soyad / Kurum Adı</label>
					<input type="text" class="form-control" name="user_name" placeholder="Adınız Soyadınız" value="<?php echo $get_user['user_name']; ?>" required>
				</div>
				<div class="form-group">
					<label>E-Mail</label>
					<input type="email" class="form-control" name="user_mail" placeholder="E-Mail Adresiniz" value="<?php echo $get_user['user_mail']; ?>" required>
				</div>
				<input type="hidden" name="user_id" value="<?php echo $get_user['id']; ?>">
				<input type="hidden" name="unlink" value="<?php echo $get_user['user_pic']; ?>">
				
				
				<a href="home.php" class="btn btn-danger"><i class="fa fa-arrow-circle-o-left"></i> Vazgeç</a>
				<button type="submit" name="infoupdate" class="btn btn-success"><i class="fa fa-check"></i> Güncelle</button>
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
	
	<!-- Cross Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Cross Admin for demo purposes -->
	<script src="js/main.js"></script>
	

</body>

</html>

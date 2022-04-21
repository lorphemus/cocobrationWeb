<?php
ob_start();
session_start();

if(!$_SESSION['user_mail']){
	header("Location:login.php");
	exit();
}
$treeview="home";
$page="down-slider";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <meta name="author" content="Batuhan Nihat KILIÇ | Excess Reklam">
    <link rel="icon" href="img/favicon.ico">

    <title>Excess Reklam - Yönetim Paneli</title>
  
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/vendor_components/font-awesome/css/font-awesome.min.css">

	<!-- Ionicons -->
	<link rel="stylesheet" href="assets/vendor_components/Ionicons/css/ionicons.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="css/master_style.css">

	<!-- Cross Admin skins -->
	<link rel="stylesheet" href="css/skins/_all-skins.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	
	<!-- Sweet Alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
</head>
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
        Slider Alt Alan
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
	<?php 
	$query=$db->prepare("SELECT * FROM slider_down WHERE id=?");
	$query->execute(array(0));
	$get_data=$query->fetch(PDO::FETCH_ASSOC);
	?>
      <!-- Default box -->
      <div class="box">
        <div class="box-body">
			
			<!-- Title -->
			<form action="assets/process.php" method="post">
				<div class="col-md-12" style="padding: 0">
				  <h3>Slogan</h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_1" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_2" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					  <li><a href="#tab_3" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
					  <li><a href="#tab_4" data-toggle="tab">Sırpça <img src="img/sr.png"></a></li>
					  <li><a href="#tab_5" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_1">
						<input type="text" class="form-control" name="slogan_tr" value="<?php echo $get_data["slogan_tr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_2">
						<input type="text" class="form-control" name="slogan_en" value="<?php echo $get_data["slogan_en"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_3">
						<input type="text" class="form-control" name="slogan_ger" value="<?php echo $get_data["slogan_ger"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_4">
						<input type="text" class="form-control" name="slogan_sr" value="<?php echo $get_data["slogan_sr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_5">
						<input style="direction: rtl;" type="text" class="form-control" name="slogan_ar" value="<?php echo $get_data["slogan_ar"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				<button type="submit" name="slogan_update" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
			</form>
			
			<!-- Description -->
			<form action="assets/process.php" method="post">
				<div class="col-md-12" style="padding: 0">
				  <h3>Başlık</h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_6" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_7" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					  <li><a href="#tab_8" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
					  <li><a href="#tab_9" data-toggle="tab">Sırpça <img src="img/sr.png"></a></li>
					  <li><a href="#tab_10" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_6">
						<input type="text" class="form-control" name="title_tr" value="<?php echo $get_data["title_tr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_7">
						<input type="text" class="form-control" name="title_en" value="<?php echo $get_data["title_en"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_8">
						<input type="text" class="form-control" name="title_ger" value="<?php echo $get_data["title_ger"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_9">
						<input type="text" class="form-control" name="title_sr" value="<?php echo $get_data["title_sr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_10">
						<input style="direction: rtl;" type="text" class="form-control" name="title_ar" value="<?php echo $get_data["title_ar"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				<button type="submit" name="slider_down_title_update" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
			</form>
			
			<!-- Keywords -->
			<form action="assets/process.php" method="post">
				<div class="col-md-12" style="padding: 0">
				  <h3>Kısa Yazı</h3>
				  <!-- Custom Tabs -->
				  <div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
					  <li class="active"><a href="#tab_11" data-toggle="tab">Türkçe <img src="img/tr.png"></a></li>
					  <li><a href="#tab_12" data-toggle="tab">İngilizce <img src="img/gb.png"></a></li>
					  <li><a href="#tab_13" data-toggle="tab">Almanca <img src="img/de.png"></a></li>
					  <li><a href="#tab_14" data-toggle="tab">Sırpça <img src="img/sr.png"></a></li>
					  <li><a href="#tab_15" data-toggle="tab">Arapça <img src="img/ar.png"></a></li>
					</ul>
					<div class="tab-content">
					  <div class="tab-pane active" id="tab_11">
						<input type="text" class="form-control" name="short_text_tr" value="<?php echo $get_data["short_text_tr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_12">
						<input type="text" class="form-control" name="short_text_en" value="<?php echo $get_data["short_text_en"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_13">
						<input type="text" class="form-control" name="short_text_ger" value="<?php echo $get_data["short_text_ger"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_14">
						<input type="text" class="form-control" name="short_text_sr" value="<?php echo $get_data["short_text_sr"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					  <div class="tab-pane" id="tab_15">
						<input style="direction: rtl;" type="text" class="form-control" name="short_text_ar" value="<?php echo $get_data["short_text_ar"]; ?>" required>
					  </div>
					  <!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				<button type="submit" name="short_text_update" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
			</form>
			
			<!-- Footer -->
			<form action="assets/process.php" method="post">
				<div class="col-md-12" style="padding: 0">
				  <h3>Video Link</small></h3>
				  <!-- Custom Tabs -->
				  <div class="form-group">
				  	<input type="text" name="video_link" class="form-control" value="<?php echo $get_data["video_link"]; ?>" required>
				  </div>
				  <!-- nav-tabs-custom -->
				</div>
				<button type="submit" name="down_slider_video" class="btn btn-success"><i class="fa fa-refresh"></i> Güncelle</button>
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

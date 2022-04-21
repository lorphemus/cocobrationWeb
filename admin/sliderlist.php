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
        Slider Ayarları
      </h3>
    </section>

    <!-- Main content -->
    <section class="content">
	
      <!-- Default box -->
      <div class="box">
            
            <div class="box-body">
			  <div style="float:right; margin-bottom: 10px;"><a href="add-slider.php" class="btn btn-primary"><i class="fa fa-plus"></i> Slider Ekle</a></div>
              <table id="example" class="table table-bordered table-hover display nowrap margin-top-10">
				<thead>
					<tr>
						<th style="vertical-align: middle; text-align: center;">Slider Sıra</th>
						<th style="vertical-align: middle; text-align: center;">Slider Resim</th>
						<th style="vertical-align: middle; text-align: center;">Slider Başlık</th>
						<th style="vertical-align: middle; text-align: center;">İşlemler</th>
					</tr>
				</thead>
				<tbody  class="sortable" style="vertical-align: middle; text-align: center; cursor: move;">
					<?php 
					$slider_query=$db->prepare("SELECT * FROM slider ORDER BY slider_rank");
					$slider_query->execute();
					$sliders=$slider_query->fetchAll();
					$i=1;
					foreach($sliders as $slider){
					?>
					<tr id="rank-<?php echo $slider["id"]; ?>">
						<td><?php echo $i; ?></td>
						<td><img src="../<?php echo $slider["pic_url"]; ?>" width="200px;" height="auto;"></td>
						<td><?php echo $slider["title_tr"]; ?></td>
						<td>
							<a href="edit-slider.php?id=<?php echo $slider["id"]; ?>" class="btn btn-success"><i class="fa fa-pencil"></i> Düzenle</a>
							<input type="hidden" class="delete_id_val" value="<?php echo $slider["id"]; ?>">
							<input type="hidden" class="delete_pic" value="<?php echo $slider["pic_url"]; ?>">
							<a href="javascript:void(0)" name="slideDel" class="delete_sld btn btn-danger"><i class="fa fa-trash"></i> Sil</a>
						</td>
					</tr>
					<?php $i++; } ?>
				</tbody>
			</table>

              
            </div>
            <!-- /.box-body -->
          </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	
	
	
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
	
	<!-- jQuery UI -->
	<script src="assets/vendor_components/jquery-ui/jquery-ui.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="assets/vendor_components/fastclick/lib/fastclick.js"></script>
	
	<!-- Cross Admin App -->
	<script src="js/template.js"></script>
	
	<!-- Cross Admin for demo purposes -->
	<script src="js/main.js"></script>
	
<script type="text/javascript">
/* Slider Silme */
$(document).ready(function(){
	$('.delete_sld').click(function(e){
	e.preventDefault();
		var deleteid = $(this).closest('tr').find('.delete_id_val').val();
		var unlink = $(this).closest('tr').find('.delete_pic').val();
		
		swal({
		  title: "Slider Silinecek!",
		  text: "Silme işlemini onaylarsanız seçilen slider ilgili tüm bilgiler silinecek.",
		  icon: "warning",
		  buttons: ["Vazgeç", "Evet Sil!"],
		  dangerMode: true,
		})
		.then((willDelete) => {
		  if (willDelete) {

			 $.ajax({
				type: "POST",
				url: "assets/process.php",
				data: {
					"delete_slider":1,
					"delete_id": deleteid,
					"unlink": unlink,
				},
				success: function (reponse){

					swal("Slider Başarılı bir şekilde Silindi!", {
						icon: "success",
					}).then((result) => {
						location.reload();
					});
				}
			 }); 

		  } 
		});

	});				  
});

/* Slider Sıralama */
$(document).ready(function(){
	$(".sortable").sortable();
	
	$(".sortable").on("sortupdate", function(event, ui){
		var data = $(this).sortable("serialize");
		var url  = "assets/process.php";
		
		$.post(url,{data:data}, function(response){
			swal("Sıralama Başarılı bir şekilde düzenlendi!", {
				icon: "success",
			}).then((result) => {
				location.reload();
			});
		});
	});
});
</script>

</body>

</html>

<?php
ob_start();
session_start();
include('assets/connect.php');
$qry=$db->prepare("SELECT * FROM users WHERE user_token=:token");
$qry->execute(array('token'=>$_GET['token']));
$user=$qry->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<?php include("assets/head.php"); ?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="login.php"><b>Cocobration</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Yeni Şifre Oluştur</p>
	
	<!-- Alerts -->
	<?php
	if(@$_GET['status']=='notequal'){
		echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                Girdiğiniz Şifreler Aynı Olmalı!!
              </div>';
	}
	?>
	<?php
	$token=$user['user_token'];
	$get_token=$_GET['token'];
	if($token==$get_token){?>  
    <form action="assets/process.php" method="post" class="form-element">
      <div class="form-group has-feedback">
		<input type="hidden" name="user_token" value="<?php echo $user['user_token'] ?>">
        <input type="hidden" name="user_id" value="<?php echo $user['user_id'] ?>">
        <input type="password" name="pass" class="form-control" placeholder="Yeni Şifre" required>
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="pass_control" class="form-control" placeholder="Şifre Tekrar" required>
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12 text-center">
          <button type="submit" name="newpass" class="btn btn-info btn-block btn-flat margin-top-10">Yeni Şifre Oluştur</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
	<?php }else{header('Location:login.php');} ?>
	  
    <div class="margin-top-30 text-center">
		<p><i class="ion ion-home"></i> Anasayfaya <a href="../index.php" class="text-info m-l-5">Geri Dön</a></p>
    	<p>Yazılım <a href="https://www.excessreklam.com" class="text-info m-l-5" target="_blank">Excess Reklam</a></p>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- Modal Box Starts -->
<div class="modal fade" id="modal-default">
  <div class="modal-dialog">
	  <form action="assets/process.php" method="post">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">E-Mail Adresinizi Girin!</h4>
		  </div>
		  <div class="modal-body">
			<div class="form-group has-feedback">
				<input class="form-control" type="email" name="remail" placeholder="Email Adresiniz..." required>
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Kapat</button>
			<button type="submit" class="btn btn-success" name="repass">Mail Gönder</button>
		  </div>
		</div>
	  </form>
	<!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

	<!-- jQuery 3 -->
	<script src="assets/vendor_components/jquery/dist/jquery.min.js"></script>
	
	<!-- Bootstrap 3.3.7 -->
	<script src="assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>

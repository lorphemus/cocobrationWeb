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
    <p class="login-box-msg">Yönetim Paneli Giriş</p>
	
	<!-- Alerts -->
	<?php 
	if(@$_GET['status']=='restrict'){
	echo '<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> Hata!</h4>
			Sistemde Kayıtlı Böyle Bir Kullanıcı Yok.
		  </div>';
	}
	if(@$_GET['status']=='repassfail'){
		echo '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Hata!</h4>
                Hatırlatma Şifresi İçin Girdiğiniz Mail Adresi Yanlış.
              </div>';
	}
	if(@$_GET['status']=='mailsentfail'){
		echo '<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> Hata!</h4>
			Mail Gönderirken Bir Hata Oluştu. Lütfen Daha Sonra Tekrar Deneyin.
		  </div>';
	}
	  if(@$_GET['status']=='passchangefail'){
		echo '<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<h4><i class="icon fa fa-ban"></i> Hata!</h4>
			Şifre Değiştirilirken bir Hata Oluştu Lütfen Daha Sonra Tekrar Deneyin.
		  </div>';
	}
	if(@$_GET['status']=='exit'){
		echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Başarılı!</h4>
                Başarıyla Çıkış Yaptınız.
              </div>';
	}
	if(@$_GET['status']=='mailsent'){
		echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Başarılı!</h4>
                Mail Gönderildi Lütfen Kontrol Edin!
              </div>';
	}
	if(@$_GET['status']=='passchanged'){
		echo '<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Başarılı!</h4>
                Şifreniz Başarıyla Değiştirildi.
              </div>';
	}  
	?>
	  
    <form action="assets/process.php" method="post" class="form-element">
      <div class="form-group has-feedback">
        <input type="email" name="user_mail" class="form-control" placeholder="Mail Adresiniz" required>
        <span class="ion ion-email form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="user_pass" class="form-control" placeholder="Şifreniz" required>
        <span class="ion ion-locked form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
         <div class="fog-pwd">
          	<a href="#" data-toggle="modal" data-target="#modal-default"><i class="ion ion-locked"></i> Şifremi Unuttum</a><br>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-12 text-center">
          <button type="submit" name="login" class="btn btn-info btn-block btn-flat margin-top-10">GİRİŞ</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

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

<?php
include('assets/connect.php');
$user_query=$db->prepare('SELECT * FROM users WHERE user_mail=:mail');
$user_query->execute(array('mail' => $_SESSION['user_mail']));
$get_user=$user_query->fetch(PDO::FETCH_ASSOC);
?>
<header class="main-header"> 
  <!-- Logo --> 
  <a href="index.php" class="logo"> 
  <!-- mini logo --> 
  <span class="logo-mini"><b>IAM</b></span> 
  <!-- logo for regular state and mobile devices --> 
  <span class="logo-lg"><b>I AM </b>BEAUTY</span> </a> 
  <!-- Header Navbar -->
  <nav class="navbar navbar-static-top"> 
    <!-- Sidebar toggle button--> 
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button"> <span class="sr-only">Toggle navigation</span> </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account -->
        <li class="dropdown user user-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
			<?php if(empty($get_user["user_pic"])){ ?><img src="img/no-pic.png" class="user-image"><?php }else{ ?>
			<img src="<?php echo $get_user["user_pic"]; ?>" class="user-image"><?php } ?> </a>
          <ul class="dropdown-menu scale-up">
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left"> 
				  <a href="profilesetup.php" class="btn btn-default btn-flat">Profil Ayarları</a> 
			  </div>
              <div class="pull-right"> 
				  <a href="logout.php" class="btn btn-default btn-flat">Çıkış</a> 
			  </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

<aside class="main-sidebar"> 
  <!-- sidebar-->
  <section class="sidebar"> 
    <!-- Sidebar user panel -->
    <div class="user-panel">
		<?php 
		if(empty($get_user["user_pic"])){
		?>
      <div class="image"> <img src="img/no-pic.png" class="img-circle" alt="User Image"></div>
		<?php }else{ ?>
	  <div class="image"> <img src="<?php echo $get_user["user_pic"]; ?>" class="img-circle" alt="User Image"></div>
		<?php } ?>
      <div class="info">
        <p><?php echo $get_user["user_name"]; ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
    </div>
 
    <!-- sidebar menu: -->
    <ul class="sidebar-menu" data-widget="tree">
 
	  <!--Sayfa Ayarları-->
      <li class="header">Sayfa Ayarları</li>
      <li class="treeview <?php if($treeview=="home"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-home"></i> <span>Anasayfa Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          <li <?php if($page=='slider'){ echo 'class="active"'; } ?>><a href="sliderlist.php"><i class="fa fa-image"></i> Slider Ayarları</a></li>
		  <li <?php if($page=='down-slider'){ echo 'class="active"'; } ?>><a href="slider-down.php"><i class="fa fa-newspaper-o"></i> Slider Alt Alan Ayarları</a></li>
		  <li <?php if($page=='counter'){ echo 'class="active"'; } ?>><a href="counter-setup.php"><i class="fa fa-clock-o"></i> Sayaç Ayarları</a></li>
		  <li <?php if($page=='card'){ echo 'class="active"'; } ?>><a href="card-setup.php"><i class="fa fa-caret-square-o-right"></i> Kart Ayarları</a></li>
        </ul>
      </li>
      <li class="treeview <?php if($treeview=="about"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-files-o"></i> <span>Hakkımızda Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          <li <?php if($page=='aboutbg'){ echo 'class="active"'; } ?>><a href="about-bg-setup.php"><i class="fa fa-image"></i> Sayfa Başlık Resmi</a></li>
		  <li <?php if($page=='aboutpage'){ echo 'class="active"'; } ?>><a href="about-setup.php"><i class="fa fa-list-alt"></i> Sayfa İçerik</a></li>
		</ul>
      </li>
      <li class="treeview <?php if($treeview=="services"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-id-card-o"></i> <span>Hizmetlerimiz Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          	<li <?php if($page=='servicebg'){ echo 'class="active"'; } ?>><a href="service-bg-setup.php"><i class="fa fa-image"></i> Sayfa Başlık Resmi</a></li>
			<li <?php if($page=='servicelist'){ echo 'class="active"'; } ?>><a href="serviceslist.php"><i class="fa fa-cubes"></i> Hizmetler</a></li>
        </ul>
      </li>
	  <li class="treeview <?php if($treeview=="contact"){echo 'active';} ?>"> <a href="#"> <i class="fa fa-address-card"></i> <span>İletişim Sayfa Ayarları</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
			<li <?php if($page=='contactbg'){ echo 'class="active"'; } ?>><a href="contact-bg-setup.php"><i class="fa fa-image"></i> Sayfa Başlık Resmi</a></li>
          	<li <?php if($page=='form'){ echo 'class="active"'; } ?>><a href="form-setup.php"><i class="fa fa-comment"></i> Form Yazıları</a></li>
        </ul>
      </li>
		
      <!--Genel Ayarlar-->
	  <li class="header">Genel Ayarlar</li>
	  <li <?php if($page=='generalsetup'){ echo 'class="active"'; } ?>><a href="generalsetup.php"> <i class="fa fa-line-chart"></i> <span>SEO Ayarları</span></a></li>
	  <li <?php if($page=='contactsetup'){ echo 'class="active"'; } ?>><a href="contactsetup.php"> <i class="fa fa-phone"></i> <span>İletişim Ayarları</span></a></li>
	  <li <?php if($page=='socialsetup'){ echo 'class="active"'; } ?>><a href="socialmediasetup.php"> <i class="fa fa-thumbs-up"></i> <span>Sosyal Medya Ayarları</span></a></li>
	  <li><a href="#"> <i class="fa fa-envelope"></i> <span>SMTP Ayarları</span></a></li>
      
	  <li class="header">Siteye Gİt</li>
	  <li><a href="../index.php" target="_blank"><i class="fa fa-home text-aqua"></i> <span>Siteyi Görüntüle</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->

</aside>

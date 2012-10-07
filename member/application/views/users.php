<?php
	if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}
	if(isset($_SESSION['profil_data'])){
		$profil_data=$_SESSION['profil_data'];
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<title>Portfolio PURE DESIGN</title>
<link href="<?php echo base_url()?>assets/users/css/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/users/css/menu.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/users/css/form.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url()?>assets/users/css/ui/jquery-ui-1.8.23.custom.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/users/css/colorbox.css">

</head>
<body>
<div class="main">
<div class="sidebar">
	<div class="sidebar_content">
			<div class="userpanel">
				<img style="float:left" src="<?php if(isset($session['picture']['pic_square'])) echo $session['picture']['pic_square'] ?>" width="35"/>
				<?php if(isset($session['profile']['name'])) echo $session['profile']['name'] ?>
				<div class="logout"><a href="<?php echo $_SESSION['logout'] ?>">Logout</a></div>
				<div class="clear"></div>
			</div>
			<div class="logotip">
				<img border="0" id="img-logo" class="lazy" data-original="<?php if(isset($profil_data['logo_thumb'])) echo $profil_data['logo_thumb']?>" src="<?php echo base_url()?>assets/users/images/noimage.jpg">
			<label><a href="<?php echo base_url()?>getphoto" class="button-blue2" id="edit-logo">Edit Logo</a></label>
			<div class="info"><?php if(isset($profil_data['name'])) echo $profil_data['name']?>
			<label><a href="http://<?php if(isset($profil_data['subdomain'])) echo $profil_data['subdomain']?>.numpangjualan.com" target="_blank" /><?php if(isset($profil_data['subdomain'])) echo $profil_data['subdomain']?>.numpangjualan.com</a></label>
			
			</div>
			</div>			
		<div class="widget_nav_menu">
			<h2 class="widgettitle">PRODUK</h2>
			<div class="menu-services-container">
				<ul class="menu" id="menu-services">
					<li class="menu-item menu-item-type-post_type menu-item-76 <?php if(isset($activeMenu) and ($activeMenu=='category')) echo 'current_page_item'?>" id="menu-item-76"><a href="<?php echo base_url()?>category">Kategori Produk</a></li>
					<li class="menu-item menu-item-type-post_type menu-item-76 <?php if(isset($activeMenu) and ($activeMenu=='product')) echo 'current_page_item'?>" id="menu-item-76"><a href="<?php echo base_url()?>itemproduct">Produk Item</a></li>
					<li class="menu-item menu-item-type-post_type menu-item-76 <?php if(isset($activeMenu) and ($activeMenu=='order')) echo 'current_page_item'?>" id="menu-item-76"><a href="#">Order</a></li>
				</ul>
			</div>
			<h2 class="widgettitle">PENGATURAN</h2>
			<div class="menu-services-container">
				<ul class="menu" id="menu-services">
					<li class="menu-item menu-item-type-post_type menu-item-76 <?php if(isset($activeMenu) and ($activeMenu=='profile')) echo 'current_page_item'?> " id="menu-item-76"><a href="<?php echo base_url()?>profile">Profil</a></li>
					<li class="menu-item menu-item-type-post_type menu-item-76 <?php if(isset($activeMenu) and ($activeMenu=='template')) echo 'current_page_item'?>" id="menu-item-76"><a href="<?php echo base_url()?>template">Template</a></li>
				</ul>
			</div>			
		</div>
	</div>
</div>

<div class="wrapper">
		<div class="wrapper_content">
		<div class="search_topmenu">
			<div class="logo_top">
			<img src="<?php echo base_url()?>assets/users/images/logo.png" alt="numpangjualan.com">
			</div>
<div class="topmenu">
	<div id="pixopoint_menu1_wrapper">
		<div id="pixopoint_menu1">
			<ul id="suckerfishnav" class="sf-menu">
				<li class="main_page_link"><a href="<?php echo base_url()?>home">Home</a></li>
				<li class="message"><a href="<?php echo base_url()?>home">Pesan</a></li>
				
			</ul>
		</div>
	</div>
</div>
</div>
	<div class="post">
		<div class="entry">
			<h1 class="title_post">
							<?php 
								if(isset($title1)){
									echo $title1;
								}
							?>
			</h1>
						<?php
							if(isset($content)){
									echo $content;
								}
							?>
		<div class="clear"></div>
		</div>
	
	</div>
		<div class="footer"><a href="http://www.numpangjualan.com">numpangjualan.com</a></div>
</div>
</div>
</div>

<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/jquery-1.7.1.min.js"></script> 
<script src="<?php echo base_url()?>assets/users/js/jquery-ui-1.8.23.custom.min.js"></script>
<script src="<?php echo base_url()?>assets/users/js/jquery.lazyload.min.js"></script>
<script src="<?php echo base_url()?>assets/users/js/jquery.colorbox-min.js"></script>
<!--Notification-->
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/noty/layouts/center.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/noty/layouts/bottomRight.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/noty/themes/default.js"></script>
<!-- End Notif-->
<script src="<?php echo base_url()?>assets/users/js/script.js"></script>
<script type="text/javascript">
<?php
	if(isset($_SESSION['notif'])){
?>
  $(document).ready(function() {
		getNotif('<?php echo $_SESSION['notif']['msg'] ?>','<?php echo $_SESSION['notif']['type'] ?>',<?php echo $_SESSION['notif']['modal'] ?>,'<?php echo $_SESSION['notif']['layout'] ?>','<?php echo $_SESSION['notif']['timeout'] ?>');
  });
<?php	
unset($_SESSION['notif']);
	}
?>
$(document).ready(function() {
	$("img.lazy").lazyload({ 
		effect : "fadeIn"
	});
});
</script>	

<?php
if(isset($footer)){
		echo $footer;
	}
?>
<div id="galery-logo" style="display:none" title="PILIH PHOTO"></div>
</body>
</html>
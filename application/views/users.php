<?php
	 if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>demo.com</title>
<meta charset="utf-8">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<link rel="stylesheet" href="<?php echo base_url()?>assets/users/css/style.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/users/css/ui/jquery-ui-1.8.23.custom.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/popup.css">
<script src="<?php echo base_url()?>assets/users/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo base_url()?>assets/users/js/superfish.js"></script>

<script src="<?php echo base_url()?>assets/users/js/jtip.js"></script>
<script src="<?php echo base_url()?>assets/users/js/jquery-ui-1.8.23.custom.min.js"></script>
<!--Notification-->
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/noty/jquery.noty.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/noty/layouts/center.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/noty/layouts/bottomRight.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/noty/themes/default.js"></script>
<!-- End Notif-->
<script src="<?php echo base_url()?>assets/users/js/forms.js"></script>	
<script src="<?php echo base_url()?>assets/users/js/script.js"></script>
<script src="<?php echo base_url()?>assets/users/js/jquery.lazyload.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url()?>assets/users/css/colorbox.css">
<script src="<?php echo base_url()?>assets/users/js/jquery.colorbox-min.js"></script>

<!--[if lt IE 8]>
      <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
          <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
       </a>
     </div>
    <![endif]-->
<!--[if lt IE 9]>
   		<script src="<?php echo base_url()?>assets/users/js/html5.js"></script>
  		<link rel="stylesheet" href="<?php echo base_url()?>assets/users/css/ie.css"> 
	<![endif]-->
</head>

<body id="page1">
	<!-- header -->
	<header>
		<div class="row-1">
			<div class="row-1-1"></div>
			<div class="container_24">

				<nav>
				<img src="<?php if(isset($session['picture']['pic_square'])) echo $session['picture']['pic_square'] ?>" width="35"/>
				<span class="profile-name" style="margin-top:55px;"><?php if(isset($session['profile']['name'])) echo $session['profile']['name'] ?></span>
					<ul class="sf-menu">
						<li class="active"><a href="<?php echo base_url()?>user/home">Home</a></li>
						<li><a href="<?php echo base_url()?>user/profile">Profil</a></li>
						<li><a href="<?php echo base_url()?>user/product">Produk</a>
							<ul>
								<li><a href="<?php echo base_url()?>user/category">Kategori Produk</a></li>
								<li><a href="<?php echo base_url()?>user/itemproduct">Produk item</a></li>
								<li><a href="<?php echo base_url()?>user/product">Ongkos kirim</a>
									<ul>
										<li><a href="more.html">business</a></li>
										<li><a href="more.html">personal</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li><a href="index-3.html">Order</a></li>
						<li><a href="index-4.html">Konfirmasi</a></li>
						<li><a href="index-5.html">Pesan</a></li>
						<li><a href="<?php echo $_SESSION['logout'] ?>">Logout</a></li>
					</ul>
					
					<div class="clear"></div>	
				</nav>
			</div>
		</div>
		<div class="container_24">
			<div class="wrapper">
				<h1 class="desktop"><a href="index.html">&nbsp;</a></h1>
					<div class="slogan-ident">
						<div class="slogan">
							<?php 
								if(isset($title1)){
									echo $title1;
								}
							?>
						</div>
					</div>
			</div>
		</div>
	</header><!-- end header -->
	
	<!-- content -->
	<section id="content">
		<?php 
			if(isset($content)){
				echo $content;
			}
		?>
	</section><!-- end content -->
	
	<div class="container_24">
		<div class="wrapper">
			<!-- footer -->
			<footer>
				<div class="footer-block-1">
					<ul class="footer-menu fleft">
						<li><a class="active-2" href="<?php echo base_url()?>">Home</a></li>
						<li><a href="index-1.html">Works</a></li>
						<li><a href="index-2.html">About Us</a></li>
						<li><a href="index-3.html">Services</a></li>
						<li><a href="index-4.html">FAQs</a></li>
						<li><a href="index-5.html">Contact us</a></li>
					</ul>
					
					<div class="fright ident-right-2">
						<ul class="soc-list fleft">
							<li><a href="#"><img src="<?php echo base_url()?>assets/users/images/soc-icon-1.jpg" alt="" /></a></li>
							<li><a href="#"><img src="<?php echo base_url()?>assets/users/images/soc-icon-2.jpg" alt="" /></a></li>
						</ul>
					</div>
					<div class="clear"></div>
				</div>
				<div class="policy fright">numpangjualan.com &copy; 2012 | <a href="index-6.html">Privacy Policy</a><div><!--{%FOOTER_LINK} --></div></div>
				<div class="clear"></div>
			</footer><!-- end footer -->
		</div>
	</div>

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

</body>
</html>
<?php 
//$this->output->enable_profiler(TRUE);
?>

<?php
	if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"><head>
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
<title>Portfolio PURE DESIGN</title>
<link href="<?php echo base_url()?>assets/users/css/style.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/users/css/form.css" type="text/css" rel="stylesheet">

</head>
<body>
<div class="main2">
<div class="wrapper2">
<div class="wrapper_content">
		<div class="search_topmenu2">
		<div class="userpanel2">
				<img style="float:left" src="<?php if(isset($session['picture']['pic_square'])) echo $session['picture']['pic_square'] ?>" width="35"/>
				<?php if(isset($session['profile']['name'])) echo $session['profile']['name'] ?>
				<div class="logout"><a href="<?php echo $_SESSION['logout'] ?>">Logout</a></div>
				<div class="clear"></div>
			</div>
		
			<div class="logo_top2">
			<img src="<?php echo base_url()?>assets/users/images/logo.png" alt="numpangjualan.com">
			</div>
			<div class="clear"></div>
		<h1 class="title_post">
							<?php 
								if(isset($title1)){
									echo $title1;
								}
							?>
			</h1>	
			
		</div>
	<div class="post">
		<div class="entry">
						<?php
							if(isset($content)){
									echo $content;
								}
							?>
		<div class="clear"></div>
		</div>
	</div>
</div>
	<div class="footer"><a href="http://www.numpangjualan.com">numpangjualan.com</a></div>
</div>
</div>
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/jquery-1.7.1.min.js"></script> 
<script src="<?php echo base_url()?>assets/users/js/jquery.lazyload.min.js"></script>
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
</body>
</html>
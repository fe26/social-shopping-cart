<?php
	 if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}

	 // echo "<pre>";
	 // print_r($session);
	 // echo "<pre>";
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  	<title>numpang.com</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <script src="<?php echo base_url()?>assets/js/jquery-1.7.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/script.js"></script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="<?php echo base_url()?>assets/js/html5.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/ie.css"> 
<![endif]-->
<!--script src="http://connect.facebook.net/en_US/all.js"></script-->
<script>
  // window.fbAsyncInit = function() {
    // FB.init({
      // appId      : '383489811716543', // App ID
      // status     : true, // check login status
      // cookie     : true, // enable cookies to allow the server to access the session
      // xfbml      : true  // parse XFBML
    // });


	// }
		// function loginFB(){
			// FB.login(function(response) {
			// if (response.authResponse){
					// window.location.reload(true);
				// }
			// }, {scope: 'email,user_likes'});
		// };
  // Load the SDK Asynchronously
  // (function(d){
     // var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     // if (d.getElementById(id)) {return;}
     // js = d.createElement('script'); js.id = id; js.async = true;
     // js.src = "//connect.facebook.net/en_US/all.js";
     // ref.parentNode.insertBefore(js, ref);
   // }(document));

</script>
</head>
<body id="page1">

<!-- Header -->
<header>
	<div class="bg-1">
    	<div class="bg-2">
        	<div class="container_12">
            	<div class="">
                	<article class="grid_4">
                    	<div class="logo"><a href="index.html">tobasco</a></div>
                    </article>
                    <article class="grid_8">
                        <nav>
                            <ul class="menu">
                                <li><a class="active" href="index.html">Home<span></span></a></li>
                                <li><a href="index-1.html">About<span></span></a>
                                </li>
                                <li><a href="index-2.html">Services<span></span></a></li>
                                <li><a href="index-3.html">projects<span></span></a></li>
                                <li><a href="index-4.html">blog<span></span></a></li>
                                <li><a href="index-5.html">contacts<span></span></a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </article>
                	<div class="clear"></div>
                </div>
            </div>
            <div class="box-1_wrap">
            	<div class="box-1">
                	<div class="container_12">
                    	<div class="wrapper">
                        	<article class="grid_12">
                                <div class="box-1_indent">
                                    <!--div class="title-1"></div-->
                                    <div class="title-2">CIPTAKAN</div>
									<div class="title-2">TOKO ONLINE ANDA</div>
                                    <div class="title-2">GRATIS</div>
									<!--div class="fb-login-button" data-show-faces="true" data-width="300" data-max-rows="1"></div-->
									<?php
									if($session['profile']['id']){
										echo '<a href="'.$_SESSION['logout'].'">Logout</a>';  
									}else{
										echo '<a href="'.$_SESSION['login'].'"><img src=" '.base_url().'assets/images/connect-with-facebook.png" /></a>';
										//echo '<a href="javascript:void(0)" onclick="loginFB()"><img src=" '.base_url().'images/connect-with-facebook.png" /></a>';
										//echo $session['loginUrl'];
									}
									?>									
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Content -->
<section>
	<div class="container_12 margin-bot">
    	<div class="">
        	<article class="grid_12">
            	<h1>TOKO YANG SUDAH BERGABUNG</h1>
				<div class="rel">
					<div class="carousel">
						<ul>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img1.jpg" alt=""><figcaption>Pellen tesque sed dolor</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img2.jpg" alt=""><figcaption>Fermentum nisluris</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img3.jpg" alt=""><figcaption>Inuctor ut ligulliquam</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img4.jpg" alt=""><figcaption>Vestibul umsed antenecc</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img5.jpg" alt=""><figcaption>Vestibul umsed antenecc</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img6.jpg" alt=""><figcaption>Vestibul umsed antenecc</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img7.jpg" alt=""><figcaption>Vestibul umsed antenecc</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img1.jpg" alt=""><figcaption>Pellen tesque sed dolor</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img2.jpg" alt=""><figcaption>Fermentum nisluris</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img3.jpg" alt=""><figcaption>Inuctor ut ligulliquam</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img4.jpg" alt=""><figcaption>Vestibul umsed antenecc</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img5.jpg" alt=""><figcaption>Vestibul umsed antenecc</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img6.jpg" alt=""><figcaption>Vestibul umsed antenecc</figcaption></figure><a href="more.html" class="button-2">more</a></li>
                        	<li><figure><img src="<?php echo base_url() ?>assets/images/page1_img7.jpg" alt=""><figcaption>Vestibul umsed antenecc</figcaption></figure><a href="more.html" class="button-2">more</a></li>
						</ul>
						<div class="clear"></div>
					</div>
					<a href="#" class="prev car_btn" data-type="prevPage"></a>
					<a href="#" class="next car_btn" data-type="nextPage"></a>
                </div>
            </article>
            <div class="clear"></div>
        </div>
    </div>
   
</section>
<!-- Footer -->
<footer>
	<div class="container_12">
    	<div class="wrapper">
        	<article class="grid_12">
            	<div>Tobasco &copy; 2012  <a href="index-6.html">Privacy Policy</a></div>
                <div><!--{%FOOTER_LINK} --></div>
            </article>
        </div>
    </div>
</footer>
</body>
</html>
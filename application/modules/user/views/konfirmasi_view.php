<?php
	if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}
	 // echo "<pre>";
	 // print_r($session);
	 // echo "<pre>";
?>
		<div class="container_24">
		
			<div class="block-4 ident-left-1 ident-bot-8">
					<div class="block-4-border">
						<div>
						<div class="slogan-ident">
							<div class="slogan-1">Anda Login Sebagai...</div>
						</div>
							
							<div class="block-1">
								<img class="ident-bot-1" src="<?php if(isset($session['picture']['pic_big'])) echo $session['picture']['pic_big'] ?>" alt="">
								<h2 class="h2-color-1 ident-bot-2"><a href="more.html">
								<?php if(isset($session['profile']['name'])) echo $session['profile']['name'] ?></a></h2>
								<div class="ident-bot-5">
								Identitas profile facebok anda akan digunakan sebagai login Administrator toko online anda.
								Toko online anda akan selalu terhubung dengan profil facebook anda, sehingga anda dapat berbagi dan merekomendasikan toko online anda di facebook. 
								</div>
							</div>
						</div>
						<a class="button-3" href="<?php echo base_url()?>user/registrasi">Lanjutkan <span><img src="<?php echo base_url()?>assets/users/images/button-3-icon.png" alt=""></span></a>
						<div class="clear"></div>
					</div>
				</div>		
		</div>
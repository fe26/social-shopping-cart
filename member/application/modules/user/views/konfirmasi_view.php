<?php
	if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}
?>
<div class="konfirmasi">
<h2 class="title_post2">Anda Login Sebagai...</h2>
	<img class="ident-bot-1" src="<?php if(isset($session['picture']['pic_big'])) echo $session['picture']['pic_big'] ?>" alt="">
	<h2 class="title_post3">
		<?php if(isset($session['profile']['name'])) echo $session['profile']['name'] ?>
	</h2>
	<div class="konfirm_msg">
	Identitas profile facebok anda akan digunakan sebagai login Administrator toko online anda.
	Toko online anda akan selalu terhubung dengan profil facebook anda, sehingga anda dapat berbagi dan merekomendasikan toko online anda di facebook. 
	<br />
	<br />
	<a class="button-blue" href="<?php echo base_url()?>user/registrasi">Lanjutkan 
	<span><img src="<?php echo base_url()?>assets/users/images/button-3-icon.png" alt="" align="absmiddle"></span>
	</a>
	</div>

</div>
<div class="clear"></div>
					

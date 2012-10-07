<?php
	if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}
?>
<p>&nbsp;</p>
<form id="formregistrasi" action="<?php echo base_url()?>user/postRegistrasi" method="post">
	<label class="name">
		<span class="caption">Sub Domain </span>
		<input type="text" class="required subdomain" minlength="3" id="subdomain" value="<?php echo set_value('subdomain',isset($subdomain)? $subdomain : '') ?>" name="subdomain"> <label class="labelsubdomain">.numpangjualan.com</label>
		<div id="notifdomain"><?php echo form_error('subdomain')?></div>
	</label>
	<label class="name">
		<span class="caption">Nama Toko  
		</span>
		<input type="text" class="required" id="name" value="<?php echo set_value('name',isset($name)? $name : '') ?>" name="name">
		<?php echo form_error('name')?>
	</label>
	<label class="email">
	<span class="caption">Email 
	</span>
		<input type="text" class="required email" id="email" value="<?php echo set_value('email',isset($email)? $email : ''); ?>" name="email">
		<?php echo form_error('email')?>
	</label>
	<label class="phone">
	<span class="caption">No.Telepon 
	</span>
		<input type="text" class="required number medium" id="phone" value="<?php echo set_value('phone',isset($phone)? $phone : ''); ?>" name="phone">
		<?php echo form_error('phone')?>
	</label>
	<label class="deskripsi">
	<span class="caption">Alamat 				
	</span>
		<textarea name="address" class="required" id="address" ><?php echo set_value('address',isset($address)? $address : ''); ?></textarea>
		<?php echo form_error('address')?>
	</label>
	<label class="city">
	<span class="caption">Kota </span>
		<input type="text" class="required medium" id="city" value="<?php echo set_value('city',isset($city)? $city : ''); ?>" name="city" >
		<?php echo form_error('city')?>
	</label>
	<label class="deskripsi">
	<span class="caption">Deskripsi Toko Anda 						
	</span>
		<textarea name="description" class="required" id="description" ><?php echo set_value('description',isset($description)? $description : ''); ?></textarea>
	</label>
	<div class="btns">   
	<input type="submit" class="button-blue" value="Submit">
	</div>
	<div class="clear"></div>
</form>
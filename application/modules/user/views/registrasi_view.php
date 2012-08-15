<?php
	if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}
?>
		<div class="container_24">
		
			<div class="block-4 ident-left-1 ident-bot-8">
					<div class="block-4-border">
						<div>
							<div class="slogan"><span>FORM REGISTRASI</span></div>
							
							<div class="block-5">
								<div id="confirm">
									<form id="formregistrasi">
										<div class="success"> Contact form submitted! We will be in touch soon.</div>
										<fieldset>
											<label class="name">
												<span class="caption">Nama Toko : </span>
												<input type="text"  value="<?php if(isset($name)) echo 'Toko '.$name ?>" name="name">
												<span class="formInfo"><a rev="Nama Toko digunakan untuk identitas toko online anda" class="jTip" id="1" name="Field E-mail"> &nbsp;</a></span>
												<span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="email">
											<span class="caption">Email : </span>
												<input type="email" value="<?php if(isset($email)) echo $email ?>" name="email">
												<span class="formInfo"><a rev="Gunakan email yg valid karena akan digunakan untuk notifikasi pemesanan setiap ada yang memesan barang anda" class="jTip" id="2" name="Field Nama Toko"> &nbsp;</a></span>
												<span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="phone">
											<span class="caption">No.Telepon : </span>
												<input type="tel" value="" name="phone">
												<span class="formInfo">
													<a rev="Cantumkan No.Telepon anda untuk memudahkan dalam transaksi jual beli" class="jTip" id="3" name="Field No.Telepon"> &nbsp;</a>
												</span>
												<span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="message">
											<span class="caption">Alamat : </span>
												<textarea name="address"></textarea>
												<span class="formInfo">
													<a rev="Cantumkan Alamat anda dengan lengkap" class="jTip" id="4" name="Field Alamat"> &nbsp;</a>
												</span>
												
												<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="city">
											<span class="caption">Kota : </span>
												<input type="tel" value="" name="city">
												<span class="formInfo">
													<a rev="Selain untuk indentitas kota digunakan untuk memudahkan pencarian pembeli" class="jTip" id="5" name="Field Kota"> &nbsp;</a>
												</span>
												<span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="deskripsi">
											<span class="caption">Deskripsi Toko Anda : </span>
												<textarea name="description"></textarea>
												<span class="formInfo">
													<a rev="Selain untuk indentitas Deskripsi Toko anda akan memudahkan pencarian pembeli" class="jTip" id="6" name="Field Deskripsi Toko Anda"> &nbsp;</a>
												</span>
												<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
											</label>

											<div class="clear"></div>
											<div class="btns">   
											<a href="#" class="button-2" data-type="submit">Submit</a></div>
										</fieldset>
									</form>
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>		
		</div>
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
							<div class="slogan"><span>Anda Login Sebagai...</span></div>
							
							<div class="block-5">
								<div id="confirm">
									<form id="form1">
										<div class="success"> Contact form submitted! We will be in touch soon.</div>
										<fieldset>
											<label class="name">
												<input type="text" value="Nama Toko:">
												<span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="email">
												<input type="email" value="E-mail:">
												<span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="phone">
												<input type="tel" value="No.Telepon:">
												<span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="message">
												<textarea>Alamat:</textarea>
												<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="city">
												<input type="tel" value="Kota:">
												<span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
											</label>
											<label class="deskripsi">
												<textarea>Deskripsi Toko Anda :</textarea>
												<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
											</label>

											<div class="clear"></div>
											<div class="btns"><a href="#" class="button-2" data-type="reset">Clear</a>
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
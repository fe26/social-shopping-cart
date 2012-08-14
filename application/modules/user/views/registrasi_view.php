<?php
	if(isset($_SESSION['fb_data'])){
		$session=$_SESSION['fb_data'];
	}
	 // echo "<pre>";
	 // print_r($session);
	 // echo "<pre>";
?>
	 <div class="container_24">
			<div class="wrapper">
				<div class="grid_16">
					<div class="block-14">
						<h2 class="ident-bot-9">Contact Information</h2>
						<div class="fleft map-border">
							<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"> </iframe>
						</div>
						<div class="fleft inner-ident-3 extra-wrap">
							<p class="ident-bot-11 width-1"><strong>The Company Name Inc.</strong></p>
							<dl class="ident-bot-12 m-float m-right-1">
								<dt>8901 Marmora Road, <br>
								Glasgow, D04 89GR.</dt>
								<dd><span>+1 800 559 6580</span>Freephone:</dd>
								<dd><span>+1 800 603 6035</span>Telephone:</dd>
								<dd><span>+1 800 889 9898</span>FAX:</dd>
								<dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
							</dl>
							<dl class="m-float ident-bot-17">
								<dt>9863 - 9867 Mill Road,  <br>
								Cambridge, MG09 99HT.</dt>
								<dd><span>+1 800 559 6580</span>Freephone:</dd>
								<dd><span>+1 800 603 6035</span>Telephone:</dd>
								<dd><span>+1 800 889 9898</span>FAX:</dd>
								<dd>E-mail: <a href="#" class="link-1">mail@demolink.org</a></dd>
							</dl>
						</div>
					</div>
				</div>
				<div class="grid_8">
					<h2 class="ident-bot-18">FeedBack</h2>
					<!-- contact form -->
					<div id="confirm">
						<form id="form1">
							<div class="success"> Contact form submitted! We will be in touch soon.</div>
							<fieldset>
								<label class="name">
									<input type="text" value="Name:">
									<span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span>
								</label>
								<label class="email">
									<input type="email" value="E-mail:">
									<span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span>
								</label>
								<label class="phone">
									<input type="tel" value="Phone:">
									<span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span>
								</label>
								<label class="message">
									<textarea>Message:</textarea>
									<span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span>
								</label>
								<div class="clear"></div>
								<div class="btns"><a data-type="reset" class="button-2" href="#">Clear</a><a data-type="submit" class="button-2" href="#">Send</a></div>
							</fieldset>
						</form>
					</div><!-- end contact form -->
				</div>
			</div>
		</div>
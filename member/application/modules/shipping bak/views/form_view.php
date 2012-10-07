
<div id="confirm">
	<form id="formshipping" method="post" action="<?php if(isset($post)) echo $post?>">
		<div class="success" style="display:none;"> 
			<!--p>
				Data berhasil Disimpan
			</p-->
		</div>
	<input type="hidden" name="id" value="<?php if(isset($id)) echo $id ?>" />
		<fieldset>
			<label class="name">
				<span class="caption">Nama Kota : 
					<span class="formInfo"><a name="Field Nama Kota" id="1" class="jTip" rev="Tentukan nama kota"> &nbsp;</a></span>
				</span>
				<input type="text" class="required" name="city" value="<?php if(isset($city)) echo $city ?>" id="city" <?php if(isset($ro)) echo $ro ?>  >
				<input type="hidden" class="required" name="id_city" value="<?php if(isset($id_city)) echo $id_city ?>" id="id_city">
			</label>
			<label class="name">
				<span class="caption">Ongkos Kirim : 
					<span class="formInfo"><a name="Field Ongkos Kirim" id="2" class="jTip" rev="Tentukan ongkos kirim untuk pengiriman ke kota tersebut"> &nbsp;</a></span>
				</span>
				<input type="text" class="medium text-right required number" name="charge" value="<?php if(isset($charge)) echo $charge ?>">
			</label>
			<div class="clear"></div>
			<div class="btns"> 
			<input  type="submit" value="Submit" class="button-4"/>
			</div>
			<img src="<?php echo base_url()?>assets/users/images/loader.gif" class="loader" style="display:none" />
		</fieldset>
	</form>
</div>
<script type="text/javascript">
var jsonCity="";
$(document).ready(function(){
	$("#formshipping").validate({
	 submitHandler: function(form) {
	 $(".loader").show();
	 $(".btns").hide();
		 $.ajax({
		  url: $("#formshipping").attr('action'),
		  type:'POST',
		  data:$("#formshipping").serialize(),
		  success: function(data) {
			$(".loader").hide();
			$(".btns").show();
			if(data=="sukses"){
				window.location.reload();
			}else if(data=='failed'){
				getNotif('Ada kesalahan silahkan submit ulang','warning',false,'bottomRight');
			}else{
				getNotif(data,'warning',false,'bottomRight');
			}
		  }
		  });
	 }
	});
var jscity=<?php  if(isset($jsonCity)) echo $jsonCity; ?>;
		$( "#city" ).autocomplete({
			minLength:2,
			 source: jscity,
			focus: function( event, ui ) {
				$( "#id_city" ).val( ui.item.id );
				$( "#city" ).val( ui.item.label );
				return false;
			},
			select: function( event, ui ) {
				$( "#id_city" ).val( ui.item.id );
				$( "#city" ).val( ui.item.label );
				return false;
			}
		});
})
</script>
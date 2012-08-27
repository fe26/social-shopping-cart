<div class="container_24">
	<div class="block-5">
		<div id="confirm">
			<form id="formitemproduct">
				<div class="success" style="display: none;"> 
				</div>
				<fieldset>
					<label class="name">
						<span class="caption">Kategori Produk : </span>
							<?php echo form_dropdown('category_id', $categoryOpt, isset($category_id) ? $category_id : '','id="category_id"'  ); ?>
						<span class="formInfo"><a name="Field Nama Kategori" id="1" class="jTip" rev="Pilih Kategori Produk"> &nbsp;</a></span>
						<span class="empty" style="display: none;">*This field is required.</span>
					</label>
					<label class="name">
						<span class="caption">Nama Produk : </span>
						<input type="text" name="product_name" value="<?php if(isset($product_name)) echo $product_name ?>">
						<span class="formInfo"><a name="Field Nama Produk" id="2" class="jTip" rev="Isi nama produk dengan jelas"> &nbsp;</a></span>
						<span class="empty" style="display: none;">*This field is required.</span>
					</label>
					<label class="phone">
					<span class="caption">Harga Item Produk: </span>
						<input type="text" value="" class="medium text-right" name="price">
						<span class="formInfo">
							<a rev="diisi dengan angka jangan memnggunakan karakter titik (.) atau koma (,)  [ Contoh : 100000 ]" class="jTip" id="3" name="Field Harga Item Produk"> &nbsp;</a>
						</span>
						<span class="error">*This is not a valid number.</span> <span class="empty">*This field is required.</span>
					</label>
					<label class="deskripsi">
					<span class="caption">Deskripsi Produk : </span>
						<textarea name="description"></textarea>
						<span class="formInfo">
							<a name="Field Deskripsi" id="4" class="jTip" rev="Isi deskripsi produk anda dengan jelas"> &nbsp;</a>
						</span>
						 <span class="empty" style="display: none;">*This field is required.</span>
					</label>

				<div class="grid_6 col-1">
					<div class="block-1">
						<div class="ident-bot-1 img-block">
						<img alt="" src="https://fbcdn-photos-a.akamaihd.net/hphotos-ak-ash4/402103_1855622287455_641698878_a.jpg">
						</div>
						<a  id="kelola" href="<?php echo base_url()?>user/itemproduct/getphoto"  onclick="javascript:void(0)" class="button b-color-2" style="background-color: rgb(241, 241, 241);">Pilih Foto</a>
						
					</div>
				</div>
					
					
					<div class="clear"></div>
					
					<div class="btns">   
					<a data-type="submit" class="button-4" href="#">Submit</a></div>
				</fieldset>
			</form>
		</div>
	</div>	
</div>
<div id="divgaley" title="PILIH FOTO" style="display:none"></div>
<script type="text/javascript">
$(document).ready(function(){
	$('#formitemproduct').forms({ownerEmail:'#',mailHandlerURL:'postRegistrasi',redirectUrl:'<?php echo base_url()?>user/itemproduct'});
    $('#kelola').click(function(){
			var n = noty({
				text: '<h5 style="margin:0;padding:0">Sedang Memuat...</h5>',
				type:  'alert',
				layout: 'center',
				modal: true,
				dismissQueue: true,
				theme: 'default'
			});
		$.ajax({
		  url: $(this).attr('href'),
		  success: function(data) {
			n.close();
		  $("#divgaley").html(data)
		  .dialog({
				height: 420,
				width: 900,
				modal: true,
				dialogClass: 'dialogFixed'
				});
				$(".ui-dialog").css('position', 'Fixed');
		$('#formaddkategori').forms({mailHandlerURL:$("#formaddkategori").attr('action'),redirectUrl:'<?php echo base_url()?>user/category'});
		$("a.jTip")
		   .hover(function(){JT_show(this.rev,this.id,this.name)},function(){$('#JT').remove()})
           .click(function(){return false});	   
		  }
		});
		return false;
    }); 
}); 	
</script>	
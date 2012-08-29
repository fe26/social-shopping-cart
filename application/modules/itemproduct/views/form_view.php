<div class="container_24">
	<div class="block-5">
		<div id="confirm">
			<form id="formitemproduct" method="post" action="<?php if(isset($post))echo $post?>">
				<div class="success" style="display: none;"> 
				</div>
				<fieldset>
				<input type="hidden" name="product_id" id="product_id" value="<?php if(isset($product_id)) echo $product_id ?>" />
					<label class="selection">
						<span class="caption">Kategori Produk : 
						<span class="formInfo">
							<a name="Field Nama Kategori" id="1" class="jTip" rev="Pilih Kategori Produk"> &nbsp;</a>
						</span>
						</span>
							<?php echo form_dropdown('category_id', $categoryOpt, isset($category_id) ? $category_id : '','id="category_id" class="required"'  ); ?>
					</label>
					<label class="name">
						<span class="caption">Nama Produk : 
						<span class="formInfo"><a name="Field Nama Produk" id="2" class="jTip" rev="Isi nama produk dengan jelas"> &nbsp;</a></span>
						</span>
						<input type="text" name="product_name" class="required" value="<?php if(isset($product_name)) echo $product_name ?>" id="product_name" >
						
					</label>
					<label class="phone">
					<span class="caption">Harga Item Produk: 
						<span class="formInfo">
							<a rev="diisi dengan angka jangan memnggunakan karakter titik (.) atau koma (,)  [ Contoh : 100000 ]" class="jTip" id="3" name="Field Harga Item Produk"> &nbsp;</a>
						</span>
					</span>
						<input type="text" value="<?php if(isset($price)) echo $price ?>" class="medium text-right required number" name="price">
					</label>
					<label class="deskripsi">
					<span class="caption">Deskripsi Produk : 
						<span class="formInfo">
							<a name="Field Deskripsi" id="4" class="jTip" rev="Isi deskripsi produk anda dengan jelas"> &nbsp;</a>
						</span>					
					</span>
						<textarea name="description"><?php if(isset($description)) echo $description ?></textarea>
					</label>

				<div class="grid_6 col-1">
					<div class="block-1">
						<div class="ident-bot-1 img-block">
						<img class="lazy" alt="" id="formImg" src="<?php echo base_url()?>assets/users/images/noimage.jpg" data-original="<?php if(isset($photo_thumb)) echo $photo_thumb ?>">
						<input type="hidden" name="photo_thumb" id="photo_thumb" value="<?php if(isset($photo_thumb)) echo $photo_thumb ?>" />
						<input type="hidden" id="photo_big" name="photo_big" value="<?php if(isset($photo_big)) echo $photo_big ?>" />
						</div>
						<a  id="kelola" href="<?php echo base_url()?>user/itemproduct/getphoto"  onclick="javascript:void(0)" class="button b-color-2" style="background-color: rgb(241, 241, 241);">Pilih Foto</a>
					</div>
				</div>
					<div class="clear"></div>
					<input  type="submit" value="Submit" class="button-4"/>

				</fieldset>
			</form>
		</div>
	</div>	
</div>
<div id="divgaley" title="PILIH FOTO" style="display:none"></div>
<script src="<?php echo base_url()?>assets/users/js/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$("#formitemproduct").validate();
	//$('#formitemproduct').forms({ownerEmail:'#',mailHandlerURL:'<?php if(isset($post)) echo $post?>',redirectUrl:'<?php echo base_url()?>user/itemproduct'});
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
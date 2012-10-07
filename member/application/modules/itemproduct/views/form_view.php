
		<form id="formitemproduct" method="post" action="<?php if(isset($post))echo $post?>">
				<div class="success" style="display: none;"> 
				</div>
				<input type="hidden" name="product_id" id="product_id" value="<?php if(isset($product_id)) echo $product_id ?>" />
					<label class="selection">
						<span class="caption">Kategori Produk</span>
							<?php echo form_dropdown('category_id', $categoryOpt,set_value('category_id',isset($category_id)? $category_id : ''),'id="category_id" class="required"'  ); ?>
							<?php echo form_error('category_id')?>
					</label>
					<label class="name">
						<span class="caption">Nama Produk</span>
						<input type="text" name="product_name" class="required" value="<?php echo set_value('product_name',isset($product_name)? $product_name : '') ?>" id="product_name" >
						<?php echo form_error('product_name')?>
					</label>
					<label class="phone">
					<span class="caption">Harga Item Produk</span>
						<input type="text" value="<?php echo set_value('price',isset($price)? $price : '') ?>" class="medium text-right required number" name="price">
						<?php echo form_error('price')?>
					</label>
					<label class="deskripsi">
					<span class="caption left">Deskripsi Produk</span>
					<div class="photo_thumb" >
						<textarea name="description" id="description"><?php echo set_value('description',isset($description)? $description : '') ?></textarea>
						<?php echo form_error('description')?>
						</div>
						<div class="clear"></div>
					</label>
					<label class="" style="padding-left:5px">
					<span class="caption left">Foto Produk</span>
						<div class="photo_thumb" style="" >
						<img class="lazy" alt="" id="formImg" src="<?php echo base_url()?>assets/users/images/noimage.jpg" data-original="<?php echo set_value('photo_thumb',isset($photo_thumb)? $photo_thumb : base_url().'assets/users/images/noimage.jpg') ?>">
						<input type="hidden" name="photo_thumb" id="photo_thumb" value="<?php echo set_value('photo_thumb',isset($photo_thumb)? $photo_thumb : base_url().'assets/users/images/noimage.jpg') ?>" />
						<input type="hidden" id="photo_big" name="photo_big" value="<?php echo set_value('photo_big',isset($photo_big)? $photo_big : base_url().'assets/users/images/noimage.jpg') ?>" />
						<br />
						<br />
						<a  id="kelola" href="<?php echo base_url()?>itemproduct/getphoto"  onclick="javascript:void(0)" class="button-blue3" >Pilih Foto</a>
						</div>
						<div class="clear"></div>
					</label>
<div style="border-bottom:1px solid #DDDDDD"/> &nbsp;</div>					
						<div class="btns"> 
						<input type="submit" class="button-blue" value="Submit">
						</div>
						<div class="clear"></div>
			</form>
<div id="divgaley" title="PILIH FOTO" style="display:none"></div>

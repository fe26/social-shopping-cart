	<form id="formaddkategori" method="post" action="<?php if(isset($post)) echo $post?>">
		<div class="success" style="display:none;"> 
			<!--p>
				Data berhasil Disimpan
			</p-->
		</div>
	<input type="hidden" name="category_id" value="<?php if(isset($category_id)) echo $category_id ?>" />
			<label class="name">
				<span class="caption">Nama Kategori</span>
				<input type="text" class="required" name="category_name" value="<?php echo set_value('category_name',isset($category_name)? $category_name : '') ?>">
				<?php echo form_error('category_name')?>
			</label>
			<label class="deskripsi">
			<span class="caption">Deskripsi</span>
				<textarea name="description" class="required"><?php echo set_value('description',isset($description)? $description : '') ?></textarea>
				<?php echo form_error('description')?>
			</label>
			<div class="clear"></div>
			<div class="btns"> 
			<input  type="submit" value="Submit" class="button-blue"/>
			</div>
			<img src="<?php echo base_url()?>assets/users/images/loader.gif" class="loader" style="display:none" />
	</form>

<script type="text/javascript">
// $(document).ready(function(){
	// $("#formaddkategori").validate({
	 // submitHandler: function(form) {
	 // $(".loader").show();
	 // $(".btns").hide();
		 // $.ajax({
		  // url: $("#formaddkategori").attr('action'),
		  // type:'POST',
		  // data:$("#formaddkategori").serialize(),
		  // success: function(data) {
			// $(".loader").hide();
			// $(".btns").show();
			// if(data=="sukses"){
				// window.location.reload();
			// }else{
				// getNotif('Ada kesalahan silahkan submit ulang','warning',false,'bottomRight');
			// }
		  // }
		  // });
	 // }
	// });
// })
</script>
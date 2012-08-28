<div class="container_24">
	<div style="text-align:right">
		<a href="<?php echo base_url()?>user/itemproduct/add"  class="link"  id="add">TAMBAH PRODUK</a>
		<div class="clear"></div>
	</div>					
	<div class="wrapper2">
			<?php 
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";
				if(isset($data)){
					$i=0;
					if(count($data)==0){
						echo '<div class="block-1">Tidak ada data yang ditampilkan</center></div>';
					}
					foreach($data as $row){
					$i++;
					
						if($i % 4==0){
							$class='col-1-left-ident';
						}else{
							$class='';
						}
						echo '<div class="grid_6 col-1 '.$class.'" >
								<div class="block-1">
									<div class="gridImg2" style="background:#FFF url('.$row['photo_thumb'].') no-repeat 50% 50%;" >
									</div>
									<h2 class="h2-color-1 ident-bot-2 title-1">'.word_limiter(strip_tags($row['product_name'],''),2).'</h2>
									<p id=p'.$i.' class="teaser-1">'.word_limiter(strip_tags($row['description'],''),10 ).'</p>
									<br />
									<a href="'.base_url().'user/category/edit/'.$row['product_id'].'" class="buttonTool b-color-1 edit">Edit</a>
									<a href="'.base_url().'user/category/delete/'.$row['product_id'].'" class="buttonTool b-color-1 delete" onclick="return confirm(this)">Hapus</a>
								</div>
							</div>';
					}
				}
			?>	
		<div class="clear"></div>
		<div class="bx-pager">
		<?php 
			if(isset($pagging)){
				echo $pagging;
			}
		?>
		</div>
	</div>
</div>
<div id="FormKategory" style="display:none;" title="FORM KATEGORI PRODUK">
</div>
<script type="text/javascript">
$(document).ready(function() {
alert($(".block-1").width())
// //alert($('.title-1').height());
    // $('#add,.edit').click(function(){
		// $.ajax({
		  // url: $(this).attr('href'),
		  // success: function(data) {
		  // $("#FormKategory").html(data)
		  // .dialog({
				// height: 300,
				// width: 750,
				// modal: true
				// });
		// $('#formaddkategori').forms({mailHandlerURL:$("#formaddkategori").attr('action'),redirectUrl:'<?php echo base_url()?>user/category'});
		// $("a.jTip")
		   // .hover(function(){JT_show(this.rev,this.id,this.name)},function(){$('#JT').remove()})
           // .click(function(){return false});	   
		  // }
		// });
		// return false;
    // }); 
}); 	
</script>	
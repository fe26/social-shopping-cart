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
									<a class="color-box" href="'.$row['photo_big'].'" title="'.$row['product_name'].' <br />" >
									<div class="gridImg2" style="background:#FFF url('.$row['photo_thumb'].') no-repeat 50% 50%;" >
									</div>
									</a>
									<h5 class="h2-color-1 ident-bot-2 title-2">'.word_limiter(strip_tags($row['product_name'],''),3).'</h5>
									<p id=p'.$i.' class="teaser-1">'.word_limiter(strip_tags($row['description'],''),10 ).'</p>
									<h4 class="price">'.number_format($row['price'],0, ',', '.').'</h4>
									<br />
									<a href="'.base_url().'user/itemproduct/edit/'.$row['product_id'].'" class="buttonTool b-color-1 edit">Edit</a>
									<a href="'.base_url().'user/itemproduct/delete/'.$row['product_id'].'" class="buttonTool b-color-1 delete" onclick="return confirm(this)">Hapus</a>
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
$(document).ready(function(){
	$(".color-box").colorbox({rel:'color-box',width:"75%",height:"95%"});
}); 	
</script>	
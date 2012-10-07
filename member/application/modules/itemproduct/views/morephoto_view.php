<?php 
	if(isset($data)){
		if(count($data)>0){
			foreach($data as $row){
				echo '<div class="gridImg">
					   <a class="select" onclick=\'selectPhoto("'.$row['images']['6']['source'].'","'.$row['images']['0']['source'].'")\'>Pilih</a>
						<a class="color-box"  href="'.$row['images']['0']['source'].'">
							<div style="background:#FCFCFC url('.$row['images']['6']['source'].') no-repeat;width:150px;height:111px;">
							</div>
						</a>
					</div>';
			}
			
		}
	}
	echo '<div class="clear" id="clear"></div>';
	if(isset($page) and $page !=false){
		echo '<div class="btns" style="text-align:center;margin-top:10px" id="btns">
			<a  class="button-blue" rel="'.base_url().'itemproduct/getMorePhoto/'.$object_id.'/'.$page.'" onclick="getMore()" id="more">Load foto lebih banyak lagi</a>
			<img src="'.base_url().'assets/users/images/loader.gif" class="loader" style="display:none" />
			</div>
		</div>';				
	}
?>	
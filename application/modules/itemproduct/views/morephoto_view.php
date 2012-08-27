<?php 
	if(isset($data)){
		if(count($data)>0){
			foreach($data as $row){
				echo '<div class="gridImg">
					   <a class="select">Pilih</a>
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
			<a  class="button-4" rel="'.base_url().'user/itemproduct/getMorePhoto/'.$object_id.'/'.$page.'" onclick="getMore()" id="more">Load foto lebih banyak lagi</a></div>
		</div>';				
	}
?>	
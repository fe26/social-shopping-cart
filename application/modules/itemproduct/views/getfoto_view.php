<div class="pro_wrapper">
			<ul class="pro_layouts-menu">
				<li class="pro_portfolio3_capt"><a href="#"><span>Album</span></a></li>
				<li class="pro_portfolio3"><a href="#"><span>Upload</span></a></li>
			</ul>
</div>


<div class="pro_tab-content">
<div class="container_img" id="container_img">
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
			
		}else{
			echo '<div class="block-5" style="margin:10px;">Tidak ada satupun foto dalam album ini silahkan upload foto anda</div>';
		}
	}else{
		echo '<div class="block-5" style="margin:10px;">Tidak ada satupun foto dalam album ini silahkan upload foto anda</div>';
	}
	
	echo '<div class="clear" id="clear"></div>';
	if(isset($page) and $page !=false){
		echo '<div class="btns" style="text-align:center;margin-top:10px" id="btns">
			<a class="button-4" rel="'.base_url().'user/itemproduct/getMorePhoto/'.$object_id.'/'.$page.'" onclick="getMore()" id="more">Load foto lebih banyak lagi</a>
			<img src="'.base_url().'assets/users/images/loader.gif" id="loader" style="display:none" />
			</div>
		</div>';				
	}
?>			
</div>
<?php
	
?>
</div>
<div class="pro_tab-content">
	<div class="block-5" style="margin:10px;">
	<div id="confirm">
		<form id="formUpload" action="<?php echo base_url()?>user/itemproduct/getPost" method="post" enctype="multipart/form-data" >
			<fieldset>
					<label class="name">
						<span class="caption">Masukan Gambar  : </span>
						<input name="userfile" type="file" id="file"/>
					</label>
					<div class="btns">   
					<input type="submit" value="Submit" class="button-4"/>
					</div>
			</fieldset>
		</form>
	</div>
	</div>
</div>
<script src="<?php echo base_url()?>assets/users/js/jquery.tools.min.js"></script>
<script src="<?php echo base_url()?>assets/users/js/jquery.colorbox-min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/users/css/colorbox.css">

<script type="text/javascript">
$(document).ready(function(){
	$(".pro_layouts-menu").tabs(".pro_tab-content");
	$(".color-box").colorbox({rel:'color-box',width:"75%", height:"85%"});

$( '#formUpload' ).submit(function (e) {
    var data
	if($('#file').attr('value')==''){
		getNotif('Silahkan pilih foto untuk diupload','warning',false,'bottomRight',3000);
		return false;
	}
		var loadIng = noty({
			text: '<h5 style="margin:0;padding:0">Proses Upload...</h5>',
			type:  'alert',
			layout: 'center',
			modal: true,
			dismissQueue: true,
			theme: 'default'
		});
    data = new FormData();
    data.append( 'userfile', $( '#file' )[0].files[0] );	
    $.ajax({
        url: $(this).attr('action'),
        data: data,
		contentType: false,
        processData: false,
        type: 'POST',
        success: function (data) {
			loadIng.close();
			if(data=='success'){
				getNotif('Foto berhasil di upload','information',false,'bottomRight',3000);
				$('#file').attr({ value: '' }); 
			}else{
				getNotif(data,'error',false,'bottomRight');
			}
        }
    });
	e.preventDefault();
	
});
})

function getMore(){
$("#more").hide();
$("#loader").show();
	$.ajax({
        url: $("#more").attr('rel'),
        type: 'POST',
        success: function (data) {
			$("#btns").remove();
			$("#clear").remove();
			$('#container_img').append(data);
			$(".color-box").colorbox({rel:'color-box',width:"75%", height:"85%"});
        }
    });
}
function selectPhoto(path1,path2){
	$("#divgaley").dialog("close");
	$("#formImg").hide().attr("src",path1).fadeIn('slow');
	$("#photo_thumb").val(path1);
	$("#photo_big").val(path2);
}
</script>
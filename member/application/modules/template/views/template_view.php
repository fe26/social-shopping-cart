<form action="<?php if(isset($post)) echo $post ?>" method="post">
<div class="container_template" >
<?php 
	$template_name=(isset($template_name)?$template_name:'');
	foreach($template as $row){
		if($template_name==$row){
			$checked='checked="checked"';
		}else{
			$checked='';
		}
		echo '<div class="gridTpl">
				<div style="background:url('.base_url().'template/images/'.$row.'/thumb.jpg) no-repeat center center;">
				<a href="#" class="zoom">
				</a>
				</div>
				<span class="title">
				<input value="'.$row.'" type="radio" name="tpl" '.$checked.' />
				'.$row.'
				</span></div>';
	}
?>

<div class="clear"></div>
<?php echo form_error('tpl')?>
<div class="btns">   
		<input type="submit" value="Submit" class="button-blue">
		</div>
</div>
</form>
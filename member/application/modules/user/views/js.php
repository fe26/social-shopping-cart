<script type="text/javascript">
$(document).ready(function(){
	//$("#formregistrasi").validate();
	$("#subdomain").blur(function(){
		var subdomain=$("#subdomain").val();
		if($("#subdomain").val().length>=3){
			$.ajax({
			  url:"<?php echo base_url() ?>user/cekSubdomain/"+subdomain,
			  type:'POST',
			  success: function(data) {
				if(data==false){
					//alert(data);
					
					$("#notifdomain").html('<div class="error">subdomain is not available</div>');
				}
				
			  }
			});
		}
	})
}); 	
</script>	
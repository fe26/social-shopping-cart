<link href="<?php echo base_url()?>assets/users/js/cleditor/jquery.cleditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/cleditor/jquery.cleditor.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
$("#description").cleditor({width:"100%",height:150,controls:"bold italic underline | bullets numbering"});
var n="";
//$("#formitemproduct").validate();
    $('#kelola').click(function(){
		n = noty({
			text: '<h5 style="margin:0;padding:0">Sedang Memuat...</h5>',
			type:  'alert',
			layout: 'center',
			modal: true,
			dismissQueue: true,
			theme: 'default',
			callback: {
				afterShow: function(){
					$.ajax({
					  url: $("#kelola").attr('href'),
					  success: function(data) {
						n.close();
					  $("#divgaley").html(data)
					  .dialog({
							height: 420,
							width: 900,
							modal: true,
							dialogClass: 'dialogFixed'
							});
						$("a.jTip")
					   .hover(function(){JT_show(this.rev,this.id,this.name)},function(){$('#JT').remove()})
					   .click(function(){return false});	   
					  }
					});
				}
			}
		});
		return false;
    });
}); 	
</script>	
<?php
$longitude=set_value('longitude',isset($longitude)? $longitude : '');
if($longitude==""){
	$longitude="[-2.44565,117.8888]";
}else{
	$longitude=str_replace(")","]",str_replace("(", "[", $longitude));
}

?>

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/gmap3.min.js"></script> 
<script type="text/javascript">
$(function(){
 $('.maps').gmap3({
                action:'addMarker',
                latLng:<?php echo $longitude ?>,
                map:{
                  center: true,zoom: 14
                },
				marker:{
				options:{draggable: true},
				events:{
					dragend: function(marker){
						$(this).gmap3({
							action:'getAddress',
							latLng:marker.getPosition(),
							callback:function(results){
								$("#longitude").val(marker.getPosition());
							}
						});
					}
				  }
				}
              });
//----------	
	
	
	
	$("#city,#address").blur(function(){	
	$('.maps').gmap3({action:'clear'});
		 var addr = $('#city').val() + ' , ' + $('#address').val();
          if ( !addr || !addr.length ) return;
          $(".maps").gmap3({
            action:   'getlatlng',
            address:  addr,
			map:{center: true,zoom: 14},
            callback: function(results){
			content = results && results[1] ? results && results[1].formatted_address : addr;
              if ( !results ) return;
			  $('#longitude').val(results[0].geometry.location);
              $(this).gmap3({
                action:'addMarker',
                latLng:results[0].geometry.location,
                map:{
                  center: true,zoom: 14
                },
				marker:{
				options:{draggable: true},
				events:{
					dragend: function(marker){
						$(this).gmap3({
							action:'getAddress',
							latLng:marker.getPosition(),
							callback:function(results){
								$("#longitude").val(marker.getPosition());
							}
						});
					}
				  }
				}
              });
			
            }
          });
	})
	
})
</script>
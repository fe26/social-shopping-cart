<link href="<?php echo base_url()?>assets/users/css/table.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url()?>assets/users/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript">
$(document).ready(function(){
          $("#tabel").dataTable
            ({
              "bProcessing"  : true,
              "bServerSide"  : true,
              "sAjaxSource"  : "<?php  if(isset($source))echo $source ?>",
			  'sPaginationType': 'scrolling',
			  "sPaginationType": "full_numbers", 
			  "aoColumns": [
				{ "bSortable": false,"sWidth":"1%"},
				,
				,
				{ "bSortable": false,"sWidth":"1%"},
			],
              "fnServerData": function(sSource, aoData, fnCallback)
              {
                $.ajax(
                      {
                        "dataType": "json",
                        "type"  : "POST",
                        "url"    : sSource,
                        "data"  : aoData,
                        "success" : fnCallback
                      }
                  );
              }

          });
$("#tabel_length").append("&nbsp;&nbsp;&nbsp;<a href='<?php echo base_url();?>category/add'  class='button-add'>Tambah Data </a>");

});

</script>

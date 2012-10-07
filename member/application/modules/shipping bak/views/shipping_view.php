<div class="container_24">
	<div style="text-align:right">
		<a href="<?php echo base_url()?>user/shipping/add"  class="link"  id="add">TAMBAH ONGKOS KIRIM</a>
		<div class="clear"></div>
	</div>					
	<div class="wrapper2">
			<?php 
				if(isset($data)){
				//echo "<pre>";
				// print_r($data);
					$i=0;
					if(count($data)==0){
						echo '<div class="block-1">Tidak ada data yang ditampilkan</center></div>';
					}else{
					echo '<table class="pro_table pro_table-striped">
						<thead>
							<tr>
							<th width="70">Kode</th>
							<th>Nama Kota</th>
							<th width="150" style="text-align:right;padding-right:20px;">Ongkos Kirim</th>
							<th width="50">Edit</th>
							<th width="50">Hapus</th>
							</tr>
						</thead>
						<tbody>';
					foreach($data as $row){
					$i++;
						echo '<tr>
							<td>'.$row['id_city'].'</td>
							<td>'.$row['name'].'</td>
							<td style="text-align:right;padding-right:20px;">'.number_format($row['charge'],0, ',', '.').'</td>
							<td><a href="'.base_url().'user/shipping/edit/'.$row['id'].'" class="ubah edit">&nbsp;</a></td>
							<td><a href="'.base_url().'user/shipping/delete/'.$row['id'].'" onclick="return confirm(this)" class="hapus">&nbsp;</a></td>
							</tr>';
					}
					echo '</tbody></table>';
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
<div id="FormShipping" style="display:none;" title="FORM ONGKOS KIRIM">
</div>
<script type="text/javascript">
var n="";
$(document).ready(function() {
    $('#add,.edit').click(function(){
	var url=$(this).attr('href');
	n=noty({
				text: '<h5 style="margin:0;padding:0">Sedang Memuat...</h5>',
				type:  'alert',
				layout: 'center',
				modal: true,
				dismissQueue: true,
				theme: 'default',
				callback: {
				afterShow: function() {
					$.ajax({
					  url: url,
					  type:'POST',
					  success: function(data) {
					  n.close();
					  $("#FormShipping").html(data)
					  .dialog({
							height: 250,
							width: 650,
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
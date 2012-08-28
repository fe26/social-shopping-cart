<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Edit extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
		redirect();
		exit;
	 }
  }
	function index($id=''){
		$this->load->model('Category_m');
		$result=$this->Category_m->getData($id);
		if($result->num_rows()>0){
			$data=$result->row_array();
			$data['post']=base_url().'user/category/edit/post';
			$this->load->view('form_view',$data);
		}else{
			echo '<div class="block-1">Tidak ada data</center></div>';
		}

	 }	
	function post(){
	  $data = array(
		'category_name' => $this->input->post( "category_name", TRUE ),
		'description' => $this->input->post( "description", TRUE )
		);
	  $this->load->model('Category_m');
	  if($this->Category_m->updatedata($data,$this->input->post( "category_id", TRUE ))){
		echo 'sukses';
		$_SESSION['notif']=array(
			'msg' => 'Data berhasil disimpan',
			'type' => 'success',
			'modal' => 'false',
			'layout'=>'bottomRight',
			'timeout'=>'5000'
		);
	  }else{
		echo 'failed';
		$_SESSION['notif']=array(
			'msg' => 'Ada kesalahan data gagal disimpan',
			'type' => 'error',
			'modal' => 'false',
			'layout'=>'bottomRight',
			'timeout'=>''
		);
	  }
		
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
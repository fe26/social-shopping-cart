<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
		redirect();
		exit;
	 }
  }
	function index(){
		$data['jsonCity']=file_get_contents('./json/city.json');
		$data['post']=base_url().'user/shipping/add/post';
		$this->load->view('form_view',$data);
	}
	function post(){
	  if($this->input->post( "id_city", TRUE )==""){
		echo "Maaf nama kota tidak terdaftar";
		exit;
	  }
	  $data = array(		
		'uid' => $_SESSION['fb_data']['profile']['id'],
		'id_city' => $this->input->post( "id_city", TRUE ),
		'charge' => $this->input->post( "charge", TRUE ),
		);
		
		
	  $this->load->model('Shipping_m');
	  if($this->Shipping_m->cekData($this->input->post( "id_city", TRUE ))>=1){
		echo "Maaf nama kota sudah terdaftar..";
		exit;
	  }
	  
	  if($this->Shipping_m->insertdata($data)){
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
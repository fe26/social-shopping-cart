<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	$this->template->set_template('user');
  }
	function index(){
		$this->load->helper('form');
		$this->load->model('Master_m');
		$data=$this->Master_m->getAllCategory();
		$data['post']=base_url().'user/category/add/post';
		$this->template->write('title1','TAMBAH PRODUK ITEM');
		$this->template->write_view('content','form_view',$data);
		$this->template->render();
	}
	function post(){
	  $data = array(		
		'uid' => $_SESSION['fb_data']['profile']['id'],
		'category_name' => $this->input->post( "category_name", TRUE ),
		'description' => $this->input->post( "description", TRUE )
		);
	  $this->load->model('Category_m');
	  if($this->Category_m->insertdata($data)){
		echo 'sukses';
		$_SESSION['notif']=array(
			'msg' => 'Data berhasil disimpan',
			'type' => 'success',
			'modal' => 'false',
			'layout'=>'bottomRight'
		);
	  }else{
		echo 'failed';
		$_SESSION['notif']=array(
			'msg' => 'Ada kesalahan data gagal disimpan',
			'type' => 'error',
			'modal' => 'false',
			'layout'=>'bottomRight'
		);
	  }
		
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
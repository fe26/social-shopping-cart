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
		$data['post']=base_url().'user/itemproduct/add/post';
		$this->template->write('title1','TAMBAH PRODUK ITEM');
		$this->template->write_view('content','form_view',$data);
		$this->template->render();
	}
	function post(){
	  $data = array(		
		'uid' => $_SESSION['fb_data']['profile']['id'],
		'category_id' => $this->input->post( "category_id", TRUE ),		
		'product_name' => $this->input->post( "product_name", TRUE ),		
		'photo_thumb' => $this->input->post( "photo_thumb", TRUE ),	
		'photo_big' => $this->input->post( "photo_big", TRUE ),	
		'price' => $this->input->post( "price", TRUE ),	
		'description' => $this->input->post( "description", TRUE ),
		);
	  $this->load->model('itemproduct_m');
	  if($this->itemproduct_m->insertdata($data)){
		$_SESSION['notif']=array(
			'msg' => 'Data berhasil disimpan',
			'type' => 'success',
			'modal' => 'false',
			'layout'=>'bottomRight'
		);
		redirect('user/itemproduct');
	  }else{
		$_SESSION['notif']=array(
			'msg' => 'Ada kesalahan data gagal disimpan',
			'type' => 'error',
			'modal' => 'false',
			'layout'=>'bottomRight'
		);
		redirect('user/itemproduct/add');
	  }
	
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
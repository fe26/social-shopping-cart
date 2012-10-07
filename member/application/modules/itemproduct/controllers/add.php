<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Add extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SESSION['profil_data'])){
		redirect('user');
		exit;
	}
	$this->template->set_template('user');
	$this->load->library('form_validation');
  }
	function index(){
		$this->load->helper('form');
		$this->load->model('Master_m');
		$data['categoryOpt']=$this->Master_m->getAllCategory();		
		$data['post']=base_url().'itemproduct/add/post';
		$data['activeMenu']='product';
		$this->template->write('title1','TAMBAH PRODUK ITEM');
		$this->template->write_view('content','form_view',$data);
		$this->template->write_view('footer','js_form',$data);
		$this->template->render();
	}
	function post(){
		$config = array(
			array(
				 'field'   => 'category_id',
				 'label'   => '*',
				 'rules'   => 'required'
			  ),
			array(
				 'field'   => 'description',
				 'label'   => '*',
				 'rules'   => 'required'
			  ),
			array(
				 'field'   => 'product_name',
				 'label'   => '*',
				 'rules'   => 'required'
			  ),
			  array(
				 'field'   => 'price',
				 'label'   => '*',
				 'rules'   => 'required|numeric'
			  ),
			  		  array(
			 'field'   => 'photo_thumb',
			 'label'   => '*',
			 'rules'   => ''
		  ),
		  array(
			 'field'   => 'photo_big',
			 'label'   => '*',
			 'rules'   => ''
		  )
		);
	  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	  $this->form_validation->set_rules($config);
	  if ($this->form_validation->run() == FALSE){
		  $this->index();
	  }else{
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
				'layout'=>'bottomRight',
				'timeout'=>'5000'
			);
			redirect('itemproduct');
		  }else{
			$_SESSION['notif']=array(
				'msg' => 'Ada kesalahan data gagal disimpan',
				'type' => 'error',
				'modal' => 'false',
				'layout'=>'bottomRight',
				'timeout'=>''
			);
			redirect('itemproduct/add');
		  }
	  }
	  
	
		
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
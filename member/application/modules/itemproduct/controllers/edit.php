<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Edit extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SESSION['profil_data'])){
		redirect('user');
		exit;
	}
	$this->template->set_template('user');
	$this->load->library('form_validation');
  }
	function index($id=''){
		$this->load->model('itemproduct_m');
		$result=$this->itemproduct_m->getData($id);
		if($result->num_rows()>0){
			$this->load->helper('form');
			$this->load->model('Master_m');
			$data=$result->row_array();
			$data['categoryOpt']=$this->Master_m->getAllCategory();		
			$data['activeMenu']='product';
			$data['post']=base_url().'itemproduct/edit/post';
			$this->template->write('title1','EDIT PRODUK ITEM');
			$this->template->write_view('footer','js_form',$data);
			$this->template->write_view('content','form_view',$data);
			$this->template->render();
		}
		


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
		  $this->index($this->input->post( "product_id", TRUE ));
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
		  if($this->itemproduct_m->updatedata($data,$this->input->post( "product_id", TRUE ))){
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
			redirect('itemproduct/edit/'.$this->input->post( "product_id", TRUE ));
		  }
	  
	  }
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
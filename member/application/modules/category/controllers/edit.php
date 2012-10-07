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
		$this->load->model('Category_m');
		$result=$this->Category_m->getData($id);
		if($result->num_rows()>0){
			$data=$result->row_array();
			$data['activeMenu']='category';
			$data['post']=base_url().'category/edit/post';
			$this->template->write('title1','EDIT KATEGORI PRODUK');
			$this->template->write_view('content','form_view',$data);
			$this->template->render();
		}else{
			echo '<div class="block-1">Tidak ada data</center></div>';
		}

	 }	
	function post(){
		$config = array(
			array(
				 'field'   => 'category_name',
				 'label'   => '*',
				 'rules'   => 'required'
			  ),
			array(
				 'field'   => 'description',
				 'label'   => '*',
				 'rules'   => 'required'
			  )
		);
	  $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
	  $this->form_validation->set_rules($config);	
	  if ($this->form_validation->run() == FALSE){
		  $this->index($this->input->post( "category_id", TRUE ));
	  }else{
		  $data = array(
			'category_name' => $this->input->post( "category_name", TRUE ),
			'description' => $this->input->post( "description", TRUE )
			);
		  $this->load->model('Category_m');
		  if($this->Category_m->updatedata($data,$this->input->post( "category_id", TRUE ))){
			$_SESSION['notif']=array(
				'msg' => 'Data berhasil disimpan',
				'type' => 'success',
				'modal' => 'false',
				'layout'=>'bottomRight',
				'timeout'=>'5000'
			);
			redirect('category');
		  }else{
			$_SESSION['notif']=array(
				'msg' => 'Ada kesalahan data gagal disimpan',
				'type' => 'error',
				'modal' => 'false',
				'layout'=>'bottomRight',
				'timeout'=>''
			);
			$this->index($this->input->post( "category_id", TRUE ));	
		  }		
	  }
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
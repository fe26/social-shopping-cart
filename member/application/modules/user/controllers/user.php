<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(isset($_SESSION['profil_data'])){
			redirect('home');
			exit;
	}
	$this->template->set_template('konfirmasi');
	$this->load->library('form_validation');
  }
	function index(){
		$this->template->write('title1','KONFIRMASI PROFIL ANDA');
		$this->template->write_view('content','konfirmasi_view','');
		$this->template->render();
	}
	function registrasi(){
		$this->template->write('title1','REGISTRASI');
		$data=(isset($_SESSION['fb_data']['profile']) ? $_SESSION['fb_data']['profile'] : '') ;
//		($user['permissions'] == 'admin' ? true : false);
		$this->template->write_view('content','registrasi_view',$data);
		$this->template->write_view('footer','js',$data);
		$this->template->render();
	}
	
	function postRegistrasi(){
		$config = array(
			array(
				 'field'   => 'name',
				 'label'   => '*',
				 'rules'   => 'required'
			  ),
			  array(
				 'field'   => 'subdomain',
				 'label'   => '*',
				 'rules'   => 'required|min_length[3]|callback_validSubdomain'
			  ),
			array(
				 'field'   => 'email',
				 'label'   => '*',
				 'rules'   => 'required|valid_email'
			  ),
			array(
				 'field'   => 'phone',
				 'label'   => '*',
				 'rules'   => 'required'
			  ),
			array(
				 'field'   => 'address',
				 'label'   => '*',
				 'rules'   => 'required'
			  ),
			array(
				 'field'   => 'city',
				 'label'   => '*',
				 'rules'   => 'required'
			  ),
			  array(
				 'field'   => 'description',
				 'label'   => '',
				 'rules'   => ''
			  )
		);
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE){
			$this->registrasi();
		}else{
		  $dedit=date('Y-m-d H:i:s');
		  $data = array(		
			'id' => $_SESSION['fb_data']['profile']['id'],
			'name' => $this->input->post( "name", TRUE ),
			'email' => $this->input->post( "email", TRUE ),
			'phone' => $this->input->post( "phone", TRUE ),
			'address' => $this->input->post( "address", TRUE ),
			'city' => $this->input->post( "city", TRUE ),
			'description' => $this->input->post( "description", TRUE ),
			'subdomain' => $this->input->post( "subdomain", TRUE ),
			'date_join' => $dedit
			);
		  $this->load->model('User_m');
		  if($this->User_m->insertProfile($data)){
			$_SESSION['notif']=array(
				'msg' => 'Selamat Registrasi Berhasil',
				'type' => 'success',
				'modal' => 'true',
				'layout'=>'center',
				'timeout'=>''
			);
		$this->fbcek->cekProfile($_SESSION['fb_data']['profile']['id']);
		redirect('home');
	  }else{
		$_SESSION['notif']=array(
			'msg' => 'Registrasi Gagal Silahkan mencoba kembali',
			'type' => 'error',
			'modal' => 'false',
			'layout'=>'bottomRight',
			'timeout'=>''
		);
		$this->registrasi();
	  }
	 }
	}
	function cekSubdomain($param){
	   if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
		 redirect("error");
		 exit;
	   }
	   $this->load->model('User_m');
	   if($this->User_m->getSubdomain($param)){
			echo  true;
	   }else{
			echo  false;
	   }
	}
	
	function validSubdomain($param=""){
	   $this->load->model('User_m');
	   if($this->User_m->getSubdomain($param)){
			return TRUE;
	   }else{
			$this->form_validation->set_message('validSubdomain', 'subdomain is not available');
			return FALSE;
	   }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
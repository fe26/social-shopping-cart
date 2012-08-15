<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	$this->template->set_template('user');
  }
	function index(){
		$this->template->write('title1','Selamat Datang di NUMPANGJUALAN.COM');
		$this->template->write('title2','Konfirmasikan Profil Anda');
		$this->template->write_view('content','konfirmasi_view','');
		$this->template->render();
	}
	function registrasi(){
		$this->template->write('title2','REGISTRASI');
		$data=$_SESSION['fb_data']['profile'];
		$this->template->write_view('content','registrasi_view',$data);
		$this->template->render();
	}
	function postRegistrasi(){
	  $dedit=date('Y-m-d H:i:s');
	  if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
		 redirect("error");
		 exit;
	  }
	  $data = array(		
		'id' => $_SESSION['fb_data']['profile']['id'],
		'name' => $this->input->post( "name", TRUE ),
		'email' => $this->input->post( "email", TRUE ),
		'phone' => $this->input->post( "phone", TRUE ),
		'address' => $this->input->post( "address", TRUE ),
		'city' => $this->input->post( "city", TRUE ),
		'description' => $this->input->post( "description", TRUE ),
		'date_join' => $dedit
		);
	  $this->load->model('User_m');
	  if($this->User_m->insertProfile($data)){
		echo 'sukses';
	  }else{
		echo 'failed';
	  }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
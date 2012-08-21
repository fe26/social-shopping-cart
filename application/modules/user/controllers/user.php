<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	$this->template->set_template('user');
  }
	function index(){
		$this->template->write('title1','KONFIRMASI PROFIL ANDA');
		$this->template->write_view('content','konfirmasi_view','');
		$this->template->render();
	}
	function registrasi(){
		$this->template->write('title1','REGISTRASI');
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
		$_SESSION['notif']=array(
			'msg' => 'Selamat Registrasi Berhasil',
			'type' => 'success',
			'modal' => 'true',
			'layout'=>'center'
		);
	  }else{
		echo 'failed';
		$_SESSION['notif']=array(
			'msg' => 'Registrasi Gagal Silahkan mencoba kembali',
			'type' => 'error',
			'modal' => 'false',
			'layout'=>'bottomRight'
		);
	  }
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
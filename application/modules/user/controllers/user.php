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
		$this->template->write_view('content','registrasi_view','');
		$this->template->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
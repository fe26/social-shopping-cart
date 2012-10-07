<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SESSION['profil_data'])){
		redirect('user');
		exit;
	}
	$this->template->set_template('user');
  }
	function index(){
//		$this->template->write('title1','HALAMAN ADMINISTRATOR');
		$this->template->write_view('content','home_view','');
		$this->template->render();
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Mainuser extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	$this->template->set_template('user');
  }
	function index(){
		$this->template->write('title1','HALAMAN ADMINISTRATOR');
		$this->template->write_view('content','mainuser_view','');
		$this->template->render();
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
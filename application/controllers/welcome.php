<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->fbcek->cek();
		//$this->fb_me = $this->fb_ignited->fb_get_me();
		//$this->fb_app = $this->fb_ignited->fb_get_app();
	}

	function index(){
		if(isset($_SESSION['fb_data'])){
			redirect('user');
		}else{
			$this->template->render();
		}
    }
	
	

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
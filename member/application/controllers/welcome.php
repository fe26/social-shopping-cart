<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
	 parent::__construct();
		if(isset($_SESSION['profil_data'])){
			redirect('home');
		}else{
			redirect('user');
		}
	}
	function index(){

    }
	
	

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
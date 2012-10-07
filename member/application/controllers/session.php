<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session extends CI_Controller {

	function __construct(){
		parent::__construct();		
	}

	function index(){
		echo "<pre>";
		print_r($_SESSION);
		echo "</pre>";
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
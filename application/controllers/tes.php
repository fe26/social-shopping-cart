<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tes extends CI_Controller {

	function __construct(){
		parent::__construct();		
	}

	function index($type=""){
		$thumb = file_get_contents("https://graph.facebook.com/1747789089/picture?access_token=".$this->fb_ignited->getAccessToken());
		//header("Content-Type: image/jpeg");

		echo ($thumb);exit;
		$this->load->view('tes',$data);
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
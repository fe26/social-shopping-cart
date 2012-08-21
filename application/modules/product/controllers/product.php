<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Product extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	$this->template->set_template('user');
  }
	function index(){
		$this->template->write('title1','PRODUK');
		$this->template->write_view('content','product_view','');
		$this->template->render();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
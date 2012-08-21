<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	$this->template->set_template('user');
  }
	function index(){
		$this->load->model('Category_m');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'user/category/index/';
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->Category_m->getRow();
		$config['per_page'] = '8'; 
		$this->pagination->initialize($config);
		$data['pagging']=$this->pagination->create_links();
		$data['data'] = $this->Category_m->getAllData($config['per_page'],$this->uri->segment(4)); 
		$this->template->write('title1','KATEGORI PRODUK');
		$this->template->write_view('content','category_view',$data);
		$this->template->render();
	}
	

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
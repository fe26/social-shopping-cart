<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shipping extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	$this->template->set_template('user');
  }
	function index(){
		$this->load->model('Shipping_m');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'user/shipping/index/';
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->Shipping_m->getRow();
		$config['per_page'] = '10'; 
		$this->pagination->initialize($config);
		$data['pagging']=$this->pagination->create_links();
		$data['data'] = $this->Shipping_m->getAllData($config['per_page'],$this->uri->segment(4)); 
		//echo $this->db->last_query();exit;
		$this->template->write('title1','ONGKOS KIRIM');
		$this->template->write_view('content','shipping_view',$data);
		$this->template->render();
	}
	
	function delete($id=""){
	  $this->load->model('Shipping_m');
	  if($this->Shipping_m->deletedata($id)){
		$_SESSION['notif']=array(
			'msg' => 'Data berhasil dihapus',
			'type' => 'success',
			'modal' => 'false',
			'layout'=>'bottomRight',
			'timeout'=>'5000'
		);
	  }else{
		$_SESSION['notif']=array(
			'msg' => 'Ada kesalahan data gagal dihapus',
			'type' => 'error',
			'modal' => 'false',
			'layout'=>'bottomRight',
			'timeout'=>''
		);
	  }
	  redirect('user/shipping');
	}
	
	function getCity(){
		$result=file_get_contents('./json/city.json');
		echo $result;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SESSION['profil_data'])){
		redirect('user');
		exit;
	}
	$this->template->set_template('user');
  }
	function index(){
		$data['source']=base_url()."category/grid";
		$data['activeMenu']='category';
		$this->template->write('title1','KATEGORI PRODUK');
		$this->template->write_view('content','category_view',$data);
		$this->template->write_view('footer','js',$data);
		$this->template->render();
		
	}
	function grid(){
	 if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
		redirect();
		exit;
	 }
		$this->load->database();
		$this->load->library("datatables");
		$this->datatables->select('category_id,category_name,description');
		$this->datatables->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->datatables->from('category');
		$this->datatables->add_column('edit', '<a href="'.base_url().'category/edit/index/$1" class="edit">&nbsp;</a> <br /> <br /><a href="'.base_url().'category/delete/$1"  class="hapus" onclick="return confirm(this)">&nbsp;</a>', 'category_id');
		echo $this->datatables->generate();
	}
	
	function delete($id=""){
	  $this->load->model('Category_m');
	  if($this->Category_m->deletedata($id)){
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
	  redirect('category');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
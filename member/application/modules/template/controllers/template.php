<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SESSION['profil_data'])){
		redirect('user');
		exit;
	}
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->template->set_template('user');
	$this->load->model('Template_m');
  }
	function index(){
		$this->load->helper('directory');
		$map = directory_map("../template/",1);
		$data=$this->Template_m->getData();
		$data['activeMenu']='template';
		$data['template']=$map;
		$data['post']=base_url().'template/post';
		$this->template->write('title1','PENGATURAN TEMPLATE');
		$this->template->write_view('content','template_view',$data);
		$this->template->render();
	}
	function images($folder="",$image=""){
		$param=$folder.'/'.$image;
		$this->load->Helper('file');
		$file="../template/".$param;
		if(read_file($file)){
			$this->output->set_content_type('image/jpeg');
			$this->output->set_output(file_get_contents($file));
		}

	}
	function post(){
		$this->form_validation->set_rules('tpl', 'tpl', 'required');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if ($this->form_validation->run() == FALSE){
				$_SESSION['notif']=array(
					'msg' => 'Silahkan pilih template ',
					'type' => 'warning',
					'modal' => 'false',
					'layout'=>'bottomRight',
					'timeout'=>'5000'
				);
				$this->index();
		}else{
			$data = array(
					'uid'=>$_SESSION['fb_data']['profile']['id'],
					'template_name' => $this->input->post( "tpl", TRUE )
				);
			if($this->Template_m->insertdata($data)){
				$_SESSION['notif']=array(
						'msg' => 'Data berhasil disimpan',
						'type' => 'success',
						'modal' => 'false',
						'layout'=>'bottomRight',
						'timeout'=>'5000'
					);
			}else{
				$_SESSION['notif']=array(
					'msg' => 'Ada kesalahan data gagal disimpan',
					'type' => 'error',
					'modal' => 'false',
					'layout'=>'bottomRight',
					'timeout'=>''
				);
			}
			redirect('template');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SESSION['profil_data'])){
		redirect('user');
		exit;
	}
	$this->template->set_template('user');
	$this->load->helper('form');
	$this->load->library('form_validation');
  }
	function index(){
		$this->load->model('Profile_m');
		$result=$this->Profile_m->getData();
		if($result->num_rows()>0){
			$result=$result->row_array();
			$data=$result;
		}else{
			$data="";
		}
		$data['activeMenu']='profile';
		$this->template->write('title1','PROFIL');
		$this->template->write_view('content','profile_view',$data);
		$this->template->write_view('footer','js',$data);
		$this->template->render();
		
	}
	function submit(){
		$config = array(
				array(
                     'field'   => 'name',
                     'label'   => '*',
                     'rules'   => 'required'
                  ),
				array(
                     'field'   => 'email',
                     'label'   => '*',
                     'rules'   => 'required|valid_email'
                  ),
				array(
                     'field'   => 'phone',
                     'label'   => '*',
                     'rules'   => 'required'
                  ),
				array(
                     'field'   => 'address',
                     'label'   => '*',
                     'rules'   => 'required'
                  ),
				array(
                     'field'   => 'city',
                     'label'   => '*',
                     'rules'   => 'required'
                  ),	
				  array(
                     'field'   => 'longitude',
                     'label'   => '',
                     'rules'   => ''
                  )	,
				  array(
                     'field'   => 'description',
                     'label'   => '',
                     'rules'   => ''
                  )		  
            );
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules($config);	
		if ($this->form_validation->run() == FALSE){
				$this->index();
		}else{
				$data = array(		
					'name' => $this->input->post( "name", TRUE ),
					'email' => $this->input->post( "email", TRUE ),
					'phone' => $this->input->post( "phone", TRUE ),
					'address' => $this->input->post( "address", TRUE ),
					'city' => $this->input->post( "city", TRUE ),
					'longitude' =>$this->input->post( "longitude", TRUE ),
					'description' => $this->input->post( "description", TRUE ),
				);
		
			$this->load->model('Profile_m');
			if($this->Profile_m->updatedata($data)){
			$this->fbcek->cekProfile($_SESSION['fb_data']['profile']['id']);
				$_SESSION['notif']=array(
					'msg' => 'Data berhasil disimpan',
					'type' => 'success',
					'modal' => 'false',
					'layout'=>'bottomRight',
					'timeout'=>'5000'
				);
				
			}else{
			//echo "failes";
				$_SESSION['notif']=array(
					'msg' => 'Ada kesalahan data gagal disimpan',
					'type' => 'error',
					'modal' => 'false',
					'layout'=>'bottomRight',
					'timeout'=>''
				);
			}
			//echo $this->db->last_query();exit;
			redirect("profile");
		}
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->fbcek->cek();
		//$this->fb_me = $this->fb_ignited->fb_get_me();
		//$this->fb_app = $this->fb_ignited->fb_get_app();
	}

	function index(){
		// if($this->fb_me){
			// $profile=$this->fb_me;
			// $picture=$this->fb_ignited->fb_fql("SELECT pic_square,pic_big FROM user WHERE uid =".$profile['id'], false);
			// $picture=$picture['data']['0'];
			// $fb_data = array(
                    // 'profile' => $profile,
					// 'picture'=>$picture
          // //          'fb_app' => $this->fb_app
                // );
			// $this->session->set_userdata('fb_data', $fb_data);
		// }else{
			// $this->session->unset_userdata('fb_data');
		// }
		// $this->session->set_userdata('login', $this->fb_ignited->fb_login_url(false,'email,user_photos,user_about_me,user_location',base_url()));
		// $this->session->set_userdata('logout', $this->fb_ignited->fb_logout_url());
		$sess=$this->session->userdata('fb_data'); 
		if(!empty($sess)){
			redirect('user');
		}else{
			$this->template->render();
		}
    }
	
	
	function logout(){
		session_destroy();
		$this->session->sess_destroy();
		redirect();
	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
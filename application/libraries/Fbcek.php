<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Fbcek{
	public function __construct() {
		$this->CI = & get_instance();
		$this->fb_me =$this->CI->fb_ignited->fb_get_me();
	}

  public function cek(){
	if($this->fb_me){
		$profile=$this->fb_me;
		$picture=$this->CI->fb_ignited->fb_fql("SELECT pic_square,pic_big FROM user WHERE uid =".$profile['id'], false);
		$picture=$picture['data']['0'];
		$fb_data = array(
				'profile' => $profile,
				'picture'=>$picture
			);
		$this->CI->session->set_userdata('fb_data', $fb_data);
	}else{
		$this->CI->session->unset_userdata('fb_data');
	}
	$this->CI->session->set_userdata('login', $this->CI->fb_ignited->fb_login_url(false,'email,user_photos,user_about_me,user_location',base_url()));
	$this->CI->session->set_userdata('logout', $this->CI->fb_ignited->fb_logout_url());
  }
}

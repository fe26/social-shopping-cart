<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Fbcek{
	public function __construct($params) {
		$this->CI = & get_instance();
		$this->fb_me = $this->fb_ignited->fb_get_me();
	}

  public function cek(){
	if($this->fb_me){
		$profile=$this->fb_me;
		$picture=$this->fb_ignited->fb_fql("SELECT pic_square,pic_big FROM user WHERE uid =".$profile['id'], false);
		$picture=$picture['data']['0'];
		$fb_data = array(
				'profile' => $profile,
				'picture'=>$picture
			);
		$this->session->set_userdata('fb_data', $fb_data);
	}else{
		$this->session->unset_userdata('fb_data');
	}
	$this->session->set_userdata('login', $this->fb_ignited->fb_login_url(false,'email,user_photos,user_about_me,user_location',base_url()));
	$this->session->set_userdata('logout', $this->fb_ignited->fb_logout_url());
  }
}

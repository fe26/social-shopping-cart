<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Fbcek{
	public function __construct() {
		$this->CI = & get_instance();
		if (!session_id()){
			session_start();
		}
	}

  public function cek(){
	if(!isset($_SESSION['fb_data'])){
		$this->fb_me =$this->CI->fb_ignited->fb_get_me();
		if($this->fb_me){
			$profile=$this->fb_me;
			$picture=$this->CI->fb_ignited->fb_fql("SELECT pic_square,pic_big FROM user WHERE uid =".$profile['id'], false);
			$picture=$picture['data']['0'];
			$fb_data = array(
					'profile' => $profile,
					'picture'=>$picture
				);
			$_SESSION['fb_data']=$fb_data;
		}else{
			unset($_SESSION['fb_data']);
		}
	}
	$_SESSION['login']= $this->CI->fb_ignited->fb_login_url(false,'email,user_photos,user_about_me,user_location',base_url());
	$_SESSION['logout']= $this->CI->fb_ignited->fb_logout_url();
  }
}

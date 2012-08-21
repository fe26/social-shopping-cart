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
	
	 $atts = array(
              'width'      => '600',
              'height'     => '500',
              'scrollbars' => 'yes',
              'status'     => 'yes',
              'resizable'  => 'yes',
              'screenx'    => '0',
              'screeny'    => '0'
            );	
	$_SESSION['login']= anchor_popup($this->CI->fb_ignited->fb_login_url(false,'email,user_photos',base_url() .'auth/ceklogin'), '<img src=" '.base_url().'assets/images/connect-with-facebook.png" />', $atts);
	$_SESSION['logout']= $this->CI->fb_ignited->fb_logout_url();
  }
}

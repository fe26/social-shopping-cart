<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile_m extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->database();
    }

	function updatedata($data){
		$this->db->where('id',$_SESSION['fb_data']['profile']['id']);
		if($this->db->update('profile',$data)){
			return true;
		}else{
			return false;
		}
	}	
	function getData(){
		$this->db->where('id',$_SESSION['fb_data']['profile']['id']);
		$result=$this->db->get('profile');
		return $result;
	}
   
   
}
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_m extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	function insertProfile($data){
		if($this->db->insert('profile',$data)){
			return true;
		}else{
			return false;
		}
	}
}
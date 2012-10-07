<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Template_m extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	function insertdata($data){
		if($this->cekData()){
			$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
			if($this->db->update('template',$data)){
				return true;
			}else{
				return false;
			}
		}else{
			if($this->db->insert('template',$data)){
				return true;
			}else{
				return false;
			}
		}
	}
	
	
	
	function getData(){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$result=$this->db->get('template');
		return $result->row_array();
	}
	
   
   function cekData(){
		$this->db->select('uid');
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$result=$this->db->get('template');
		if($result->num_rows()>0){
			return true;
		}else{
			return false;
		}
   }
   
   
   
}
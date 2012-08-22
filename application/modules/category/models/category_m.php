<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category_m extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	function insertdata($data){
		if($this->db->insert('category',$data)){
			return true;
		}else{
			return false;
		}
	}
	function updatedata($data,$id){
		$this->db->where('category_id',$id);
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		if($this->db->update('category',$data)){
			return true;
		}else{
			return false;
		}
	}	
	function getAllData($perPage,$uri){
		$this->db->select('category_id,category_name,description');
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->order_by('category_id','DESC');
		$result=$this->db->get('category',$perPage, $uri)->result_array();
		return $result;
	}
	function getRow(){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		return $this->db->count_all_results('category');
	}
	function getData($id){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->where('category_id',$id);
		$result=$this->db->get('category');
		return $result;
	}
	function deletedata($id=""){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->where('category_id',$id);
		if($this->db->delete('category')){
			return true;
		}else{
			return false;
		}
	}
}
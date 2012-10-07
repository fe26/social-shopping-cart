<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Shipping_m extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	function insertdata($data){
		if($this->db->insert('shippingcharges',$data)){
			return true;
		}else{
			return false;
		}
	}
	function updatedata($data,$id){
		$this->db->where('id',$id);
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		if($this->db->update('shippingcharges',$data)){
			return true;
		}else{
			return false;
		}
	}	
	function getAllData($perPage,$uri){
		$this->db->select('shippingcharges.id,shippingcharges.id_city,shippingcharges.charge,city.name');
		$this->db->from('shippingcharges');
		$this->db->join('city','city.id=shippingcharges.id_city');
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->order_by('shippingcharges.id','DESC');
		$this->db->limit($perPage,$uri);
		$result=$this->db->get()->result_array();
		return $result;
	}
	function getRow(){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		return $this->db->count_all_results('shippingcharges');
	}
	function getData($id){
		$this->db->select('shippingcharges.id,shippingcharges.id_city,shippingcharges.charge,city.name as city');
		$this->db->join('city','city.id=shippingcharges.id_city');
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->where('shippingcharges.id',$id);
		$result=$this->db->get('shippingcharges');
		return $result;
	}
	function deletedata($id=""){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->where('id',$id);
		if($this->db->delete('shippingcharges')){
			return true;
		}else{
			return false;
		}
	}
	function cekData($id_city){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->where('id_city',$id_city);
		return $this->db->count_all_results('shippingcharges');
	}
}
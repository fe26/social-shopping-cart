<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Master_m extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	function getAllCategory(){
		$this->db->select('category_id,category_name');
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$result=$this->db->get('category');
		
		$categoryOpt[''] ='Pilih Kategori Produk' ;
		if($result->num_rows()>0){
			foreach($result->result_array() as $row){
				$categoryOpt[$row['category_id']]=$row['category_name'] ;
			}
		}
		return $categoryOpt;
	}
}
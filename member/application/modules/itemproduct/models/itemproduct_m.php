<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Itemproduct_m extends CI_Model{
    function __construct(){
        parent::__construct();
		$this->load->database();
    }
	function insertdata($data){
		if($this->db->insert('item_product',$data)){
			return true;
		}else{
			return false;
		}
	}
	function updatedata($data,$id){
		$this->db->where('product_id',$id);
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		if($this->db->update('item_product',$data)){
			return true;
		}else{
			return false;
		}
	}	
	function getAllData($perPage="",$uri=""){
		$this->db->select('product_id,product_name,price,photo_thumb,photo_big,description');
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->order_by('product_id','DESC');
		$result=$this->db->get('item_product',$perPage, $uri)->result_array();
		return $result;
	}
	function getRow(){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		return $this->db->count_all_results('item_product');
	}
	function getData($id){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->where('product_id',$id);
		$result=$this->db->get('item_product');
		return $result;
	}
	function deletedata($id=""){
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$this->db->where('product_id',$id);
		if($this->db->delete('item_product')){
			return true;
		}else{
			return false;
		}
	}
   
   function cekAlbum(){
		$this->db->select('object_id,album_id');
		$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
		$result=$this->db->get('albums');
		if($result->num_rows()>0){
			$row=$result->row_array();
			return $row;
		}else{
			return false;
		}
   }
   function insertAlbum($object_id=""){
	$data=array(
		'uid'=>$_SESSION['fb_data']['profile']['id'],
		'object_id'=>$object_id,
		'album_id'=>$this->getAlbumfb($object_id)
		);
	if($this->db->insert('albums',$data)){
		return true;
	}else{
		return false;
	}
   }
   
   function updateAlbum($object_id=""){
	$data=array(
		'object_id'=>$object_id,
		'album_id'=>$album_id=$this->getAlbumfb($object_id)
		);
	$this->db->where('uid',$_SESSION['fb_data']['profile']['id']);
	if($this->db->update('albums',$data)){
		return true;
	}else{
		return false;
	}
   }
   function getAlbumfb($object_id=""){
		$sql="SELECT aid FROM album WHERE object_id=".$object_id;
		$album=$this->fb_ignited->fb_fql($sql, false);
		if($album){
			if(count($album['data'])<=0){
				return Null;
			}else{
				return $album['data'][0]['aid'];
			}
		}else{
			return Null;
		}
   }
   
    function countAlbumfb($object_id=""){
		$sql="SELECT photo_count FROM album WHERE object_id=".$object_id;
		$album=$this->fb_ignited->fb_fql($sql, false);
		if($album){
			if(count($album['data'])<=0){
				return 0;
			}else{
				return $album['data'][0]['photo_count'];
			}
		}else{
			return 0;
		}
   }
 	function updateLogo($data){
		$this->db->where('id',$_SESSION['fb_data']['profile']['id']);
		if($this->db->update('profile',$data)){
			return true;
		}else{
			return false;
		}
	}	
   
   
}
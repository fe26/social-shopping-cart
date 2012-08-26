<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Itemproduct extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	$this->template->set_template('user');
  }
	function index(){
		$this->load->model('itemproduct_m');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'user/category/index/';
		$config['uri_segment'] = 4;
		$config['total_rows'] = $this->itemproduct_m->getRow();
		$config['per_page'] = '8'; 
		$this->pagination->initialize($config);
		$data['pagging']=$this->pagination->create_links();
		$data['data'] = $this->itemproduct_m->getAllData($config['per_page'],$this->uri->segment(4)); 
		$this->template->write('title1','PRODUK ITEM');
		$this->template->write_view('content','itemproduct_view',$data);
		$this->template->render();
		
	}
	
	function delete($id=""){
	  $this->load->model('itemproduct_m');
	  if($this->itemproduct_m->deletedata($id)){
		$_SESSION['notif']=array(
			'msg' => 'Data berhasil dihapus',
			'type' => 'success',
			'modal' => 'false',
			'layout'=>'bottomRight'
		);
	  }else{
		$_SESSION['notif']=array(
			'msg' => 'Ada kesalahan data gagal dihapus',
			'type' => 'error',
			'modal' => 'false',
			'layout'=>'bottomRight'
		);
	  }
	  redirect('user/category');
	}
	function getphoto(){
		if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
			redirect();
			exit;
		}
		if(isset($_SESSION['fb_data']['profile']['id'])){
			$this->load->model('itemproduct_m');
			// 1.Cek Album didatabase
			$object=$this->itemproduct_m->cekAlbum();
			if(!$object){
				$result=$this->fb_ignited->fb_createAlbum();
				if($result){
					$object_id=$result['id'];
					$this->itemproduct_m->insertAlbum($object_id);
				}else{
					echo 'error';
					exit;
				}
			}else{
				$object_id=$object['object_id'];
			}
			// 2.Cek Album di Facebook barangkali albumnya dihapus
			$album=$this->itemproduct_m->getAlbumfb($object_id);
			if(!$album){
				$result=$this->fb_ignited->fb_createAlbum();
				if($result){
					$object_id=$result['id'];
					$this->itemproduct_m->updateAlbum($object_id);
				}else{
					echo 'error';
					exit;
				}
			}
			$data=$this->getDataPhoto($object_id);
			$this->load->view('getfoto_view',$data);
					
		}
	}
	function getMorePhoto($object_id="",$page=0){
		$this->load->model('itemproduct_m');
		$data=$this->getDataPhoto($object_id,$page);
		$this->load->view('getfoto_view',$data);
	}
	function getDataPhoto($object_id="",$page=0){
		$offset = 10 * $page;
		$jml_hal=ceil($this->itemproduct_m->countAlbumfb($object_id) / 10);
		//echo 'JML HAL : '. $jml_hal;

		$sql='select pid,images from photo where album_object_id ='.$object_id .'order by pid desc limit '.$offset.',10';
		$data=$this->fb_ignited->fb_fql($sql, false);
		if($jml_hal==$page+1){
			$data['page']=false;
		}else{
			$data['page']=$page+1;
		}
		$data['object_id']=$object_id;
		//$this->load->view('getfoto_view',$data);
		return $data;
	}
	
	function getPost(){
		if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
			redirect();
			exit;
		}
		if(!isset($_FILES['userfile'])){
			echo "Silahkan pilih foto untuk diupload";
			exit;				
		}else{
			if($_FILES['userfile']['type']!='image/jpeg' and $_FILES['userfile']['type']!='image/png' and $_FILES['userfile']['type']!='image/gif'){
				echo "Format File tidak sesuai..";
				exit;
			}
		}
		$this->load->model('itemproduct_m');
		$object=$this->itemproduct_m->cekAlbum();
		if(!$object){
			$result=$this->fb_ignited->fb_createAlbum();
			if($result){
				$object_id=$result['id'];
				$this->itemproduct_m->insertAlbum($object_id);
			}else{
				echo 'error';
				exit;
			}
		}else{
			$album_id=$object['album_id'];
		}
		 $upload=$this->fb_ignited->fb_uploadFoto('@'.realpath($_FILES['userfile']['tmp_name']),$album_id);
		 if($upload){
			echo "success";
		 }else{
			echo "Ada kesalahan silahkan submit ulang";
		 }
		 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Getphoto extends CI_Controller{
  function __Construct(){
    parent::__Construct();
	if(!isset($_SESSION['profil_data'])){
		redirect('user');
		exit;
	}
  }

	function index(){
		if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
			redirect();
			exit;
		}
		if(isset($_SESSION['fb_data']['profile']['id'])){
			$this->load->model('itemproduct/itemproduct_m');
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
		if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
			redirect();
			exit;
		}
		$this->load->model('itemproduct/itemproduct_m');
		$data=$this->getDataPhoto($object_id,$page);
		//print_r($data);
		$this->load->view('morephoto_view',$data);
	}
	function getDataPhoto($object_id="",$page=0){
		if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
			redirect();
			exit;
		}
		$offset = 10 * $page;
		$count=$this->itemproduct_m->countAlbumfb($object_id);
		$jml_hal=ceil($count/10);
		//echo 'JML HAL : '. $jml_hal;

		$sql='select pid,images from photo where album_object_id ='.$object_id .'order by pid desc limit '.$offset.',10';
		$data=$this->fb_ignited->fb_fql($sql, false);
		if($jml_hal==$page+1 or $jml_hal==0){
			$data['page']=false;
		}else{
			$data['page']=$page+1;
		}
		$data['object_id']=$object_id;
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
		$this->load->model('itemproduct/itemproduct_m');
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
	function updateLogo(){
		if(!isset($_SERVER["HTTP_X_REQUESTED_WITH"])){
			redirect();
			exit;
		}
		
		$this->load->model('itemproduct/itemproduct_m');
		$data = array(
			'logo_big' => $this->input->post( "logo_big", TRUE ),
			'logo_thumb' => $this->input->post( "logo_thumb", TRUE )
			);
		if($this->itemproduct_m->updateLogo($data)){
			$this->fbcek->cekProfile($_SESSION['fb_data']['profile']['id']);
			echo 'success';	
		}else{
			echo "Ada kesalahan silahkan pilih ulang";
		}
		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
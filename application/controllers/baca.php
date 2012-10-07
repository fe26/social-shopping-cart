<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Baca extends CI_Controller {

	function __construct(){
		parent::__construct();		
	}

	function index(){
		$this->load->database();
		$this->db->select('name as label,name as value,id');
		$result=$this->db->get('city')->result_array();
		echo json_encode($result);exit;
		
		
		$lines = file('./namakota.txt');
		// Loop through our array, show HTML source as HTML source; and line numbers too.
		foreach ($lines as $line_num => $line) {
			//echo $line. "<br />\n";
			$line=trim($line);
			if(strlen($line)==42){
					$line=$line . ' ';
			}
			
			$data['id']=trim(substr($line,-3));
			$data['name']=trim(substr($line,8,28));
			if($this->db->insert('city',$data)){
			}else{	
				echo $this->db->_error_message() .'+++++'.$line;
			}
			
		}
		
	
		echo "<pre>";
		print_r($data);

	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
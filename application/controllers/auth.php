<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->fbcek->cek();
	}

	function ceklogin(){
		if(isset($_SESSION['fb_data'])){
			echo "<script>
					window.opener.location.reload(true);
					self.close();
				</script>
				";
		}else{
			if($_GET['error_reason']=='user_denied'){
				echo "<script>
				self.close();
				</script>
				";
			}
		}
    }
	
	function logout(){
		session_destroy();
		$this->session->sess_destroy();
		redirect();
	}
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
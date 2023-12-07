<?php 
    class Clogin extends CI_Controller {
        
        function proses_login() {
            $this->load->model("mlogin");
            $this->mlogin->login();
        }

        function logout()
		{
			$this->session->sess_destroy();
			redirect('Ctampilan/login','refresh');	
		} 
    }
    ?>
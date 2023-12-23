<?php 
    class Clogin extends CI_Controller {
        
        function proses_login() {
            $this->load->model("mlogin");
            $this->load->model("mvalidasi");
            $this->mlogin->login();
            $this->mvalidasi->validasi();
        }

        function logout()
		{
			$this->session->sess_destroy();
			redirect('Ctampilan/login','refresh');	
		} 
    }
    ?>
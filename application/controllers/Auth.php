<?php 

    class Auth extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('mlogin');
            $this->load->model('mdaftar_user');
            
        }
        
        function login() {
            $this->mlogin->login();
        }
        
        function logout()
		{
            $this->mlogin->logout();
		}

        function simpan_daftar() {
            $this->mdaftar_user->simpan_daftar();
        }

        function Clogin() {
            $this->load->view('auth/login.php');
            $this->load->helper('url');
        }

        function register() {
            $this->load->view('auth/register.php');
        }

       

    }
?>
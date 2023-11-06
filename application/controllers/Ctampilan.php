<?php 
    class Ctampilan extends CI_Controller {

        function login() {
            $this->load->view('logreg/login.php');
            $this->load->helper('url');
        }

        function register() {
            $this->load->view('logreg/register.php');
        }

        function dashboard() {
            $this->load->view('dashboard');
        }
        
    }

?> 
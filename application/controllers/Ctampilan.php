<?php 
    class Ctampilan extends CI_Controller {

        function login() {
            $this->load->view('logreg/login.php');
        }

        function register() {
            $this->load->view('logreg/register.php');
        }
    }

?> 
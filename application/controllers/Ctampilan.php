<?php 
    class Ctampilan extends CI_Controller {

        function login() {
            $this->load->view('logreg/login.php');
            $this->load->helper('url');
        }

        function register() {
            $this->load->view('logreg/register.php');
        }

        function dashboard_penyewa() {
            $this->load->view('penyewa/dashboard');
        }
        function dashboard_pemilik() {
            $this->load->view('pemilik/dashboard');
        }
        function daftar_kost() {
            $this->load->view('pemilik/daftarKost');
        
    }
}

?> 
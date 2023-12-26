<?php 
    class Ctampilan extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('mvalidasi');
            $this->mvalidasi->validasi();
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
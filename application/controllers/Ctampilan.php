<?php 
    class Ctampilan extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('mvalidasi');
            $this->mvalidasi->validasi();
            $this->load->model('mdaftarkost');

        }
        
        function dashboard_penyewa() {
            $this->load->view('penyewa/dashboard');
        }
        function dashboard_pemilik() {
			$tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('pemilik/dashboard', $tampildata);
        }
        function daftar_kost() {
            $this->load->view('pemilik/daftarKost');   
        }
        function cari_kost(){
            $tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('pemilik/cariKost', $tampildata);
		}
        
        
}

?> 
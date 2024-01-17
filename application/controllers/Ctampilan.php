<?php 
    class Ctampilan extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('mvalidasi');
            $this->mvalidasi->validasi();
            $this->load->model('mdaftarkost');

        }
        
        function dashboard_penyewa() {
            $tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('penyewa/dashboard',$tampildata);
        }
        function dashboard_pemilik() {
			$tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('pemilik/dashboard', $tampildata);
        }
        function admin() {
			$tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('admin/dashboard', $tampildata);
        }

        function kontak() {
            $this->load->view('pemilik/kontak');
        }

        function kontak_penyewa() {
            $this->load->view('penyewa/kontak');
        }


        function daftar_kost() {
            $this->load->view('pemilik/daftarKost');   
        }
        function cari_kost(){
            $tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('pemilik/cariKost', $tampildata);
		}
        
        function cariKost_penyewa(){
            $tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('penyewa/cariKost_penyewa', $tampildata);
		}
        function cariKost_admin(){
            $tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('admin/cariKostAdmin', $tampildata);
		}

        
        function menu_admin(){
            $this->load->view('admin/menu_admin.php');
        }
        // test func
        function profile_penyewa(){
        
            $this->load->view('pemilik/daftarKost');
        }
        
        function editprofile() {
        $this->load->view('penyewa/editprofile');   
        }

        function tabelKost() {
        $tampildata['hasil']=$this->mdaftarkost->tampildata();
        $this->load->view('admin/tabel_kost',$tampildata);   
        }

    }

?> 
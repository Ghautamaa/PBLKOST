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
        function admin() {
			$tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('admin/dashboard', $tampildata);
        }
        function daftar_kost() {
            $this->load->view('pemilik/daftarKost');   
        }
        function cari_kost(){
            $tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('pemilik/cariKost', $tampildata);
		}
        function details_kost(){
            $tampildata['data']=$this->mdaftarkost->tampildata();
            $this->load->view('pemilik/detailKost', $tampildata);
		}
        
        function menu_admin(){
            $this->load->view('admin/menu_admin.php');
        }
        // test func
        function profile_penyewa(){
        
            $this->load->view('pemilik/daftarKost');
        }




        // admin menu
        function tampilDataKost(){
            $tampildata['hasil']=$this->mprodi->tampilData();
            $data['konten'] = $this->load->view('crud_prodi','',TRUE);
            $data['table']= $this ->load->view('tabel_prodi',$tampildata,TRUE);
            $this->load->view('admin',$data);
        }

    }

?> 
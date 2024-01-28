<?php 
    class Ctampilan extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('mvalidasi');
            $this->mvalidasi->validasi();
            $this->load->model('mdaftarkost');

        }
        //dashboard
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
        //kontak
        function kontak() {
            $this->load->view('pemilik/kontak');
        }

        function kontak_penyewa() {
            $this->load->view('penyewa/kontak');
        }

        //daftar
        function daftar_kost() {
            $this->load->view('pemilik/daftarKost');   
        }
        
        //cari
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
        
        //edit
        function editprofilePemilik() {
        $this->load->view('pemilik/editprofile');   
        }

        function editprofilePenyewa() {
        $this->load->view('penyewa/editprofile');   
        }

        function editprofileAdmin() {
        $this->load->view('admin/editprofile');   
        }

        function editKost($id) {
        $tampildata['datakost']=$this->mdaftarkost->getKostByIdUser($id);
        $this->load->view('pemilik/editkost',$tampildata);   
        }

        //menampilkan tabel data kost
        function tabelKost() {
        $tampildata['hasil']=$this->mdaftarkost->tampildata();
        $this->load->view('admin/tabel_kost',$tampildata);   
        }

        function tabelKostedit() {
        $Id=$this->session->userdata('id_user');
        $tampildata['hasil']=$this->mdaftarkost->tampilkost($Id);
        $this->load->view('pemilik/tabel_kost',$tampildata);   
        }

        //cetakpdf
        function cetakpdf()
        {
            $data['hasil']=$this->mdaftarkost->tampildata();
            require_once(APPPATH . 'libraries/dompdf/autoload.inc.php');
			$pdf = new Dompdf\Dompdf();
			$pdf->setPaper('A4', 'potrait');
			$pdf->set_option('isRemoteEnabled', TRUE);
			$pdf->set_option('isHtml5ParserEnabled', true);
			$pdf->set_option('isPhpEnabled', true);
			$pdf->set_option('isFontSubsettingEnabled', true);
			
			
			$pdf->loadHtml($this->load->view('admin/cetakKost',$data, true));
			$pdf->render();
			$pdf->stream('Data Prodi', ['Attachment' => false]);	
		}

    }

?> 
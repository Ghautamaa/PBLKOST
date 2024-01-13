<?php 
    class Cdaftarkost extends CI_Controller {

        public function __construct()
		{
			parent::__construct();
            $this->load->model('mdaftarkost');
            
		}
        

        function simpan_daftarkost() {
            $this->mdaftarkost->simpan_daftarkost();
        }

        function tampil()
        {
            $tampildata['data'] = $this->mdaftarkost->tampildata();
            $this->load->view('pemilik/dashboard', $tampildata);
        }

        function cari_kost() {
            $keyword = $this->input->post('keyword');
            $data['data'] = $this->mdaftarkost->searchKost($keyword);
            $this->load->view('pemilik/carikost', $data);
        }

        public function detailKost($id)
        {
            $data['kost_detail'] = $this->mdaftarkost->getKostById($id);
            $this->load->view('pemilik/detailKost', $data);
        }


    }
?>

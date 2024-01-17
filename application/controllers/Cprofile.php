<?php
class Cprofile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mvalidasi');
        $this->mvalidasi->validasi();
        $this->load->model('mprofile');
    }

    function tampilPenyewa(){
        $tampildata['data'] = $this->mprofile->data();
        $this->load->view('penyewa/profilPenyewa', $tampildata);
    }
    
    function tampilPemilik(){
        $tampildata['data'] = $this->mprofile->data();
        $this->load->view('pemilik/profilPemilik', $tampildata);
    }
    function tampilprofile(){
        $tampildata['data'] = $this->mprofile->data();
        $this->load->view('penyewa/profilPenyewa', $tampildataprofile);
    }

    function editprofile() {
        $this->mprofile->editprofile();
    }
    

}
?>

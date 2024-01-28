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
    function tampilAdmin(){
        $tampildata['data'] = $this->mprofile->data();
        $this->load->view('admin/profilAdmin', $tampildata);
    }
    
    function tampilKostUser(){
        $tampildata['data'] = $this->mprofile->datakost();
        $this->load->view('pemilik/tabel_kost', $tampildata);
    }

    function editprofilePemilik() {
        $this->mprofile->editprofilePemilik();
    }

    function editprofilePenyewa() {
        $this->mprofile->editprofilePenyewa();
    }

    function editprofileAdmin() {
        $this->mprofile->editprofileAdmin();
    }

    function editKost() {
        $this->mprofile->editKost();
    }

    function deletekost($id_kost) {
        $this->mprofile->deletekost($id_kost);
    }

    function deletekostUser($id_kost) {
        $this->mprofile->deletekostUser($id_kost);
    }

}
?>

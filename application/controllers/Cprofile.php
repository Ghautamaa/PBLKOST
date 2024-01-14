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

    function tampil()
    {
        $tampildata['data'] = $this->mprofile->data();

        // var_dump($tampildata);
        // die;

        // $data
        $this->load->view('penyewa/profilPenyewa', $tampildata);
    }

}
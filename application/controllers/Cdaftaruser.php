<?php 
    class Cdaftaruser extends CI_Controller {
        public $mdaftar_user;
        function simpan_daftar() {
            $this->load->model("mdaftar_user");
            $this->mdaftar_user->simpan_daftar();
        }

    }
?>

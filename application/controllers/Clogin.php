<?php 
    class Clogin extends CI_Controller {
        function proses_login() {
            $this->load->model("Mlogin");
            $this->Mlogin->login();
        }
    }
    ?>
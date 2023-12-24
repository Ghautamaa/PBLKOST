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

    }
?>

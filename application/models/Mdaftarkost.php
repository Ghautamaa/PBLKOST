<?php 
    class Mdaftarkost extends CI_Model {
        function simpan_daftarkost()
        {
            $data=$_POST; //boleh pakai ini tapi name pada form harus sama dengan fill pada database
            $this->db->insert ('tbkost',$data);
            $this->session->set_flashdata('pesan',' Kami akan mengirimkan email berupa kode verifikasi ke email anda...');
            redirect ('Ctampilan/daftar_kost','refresh');
        } 
    }
?>
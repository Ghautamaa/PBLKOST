<?php 
    class Mdaftar_user extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }
        function simpan_daftar() {
            $nama_user=$this->input->post('nama_user');
			$nomor_whatsapp=$this->input->post('nomor_whatsapp');	
			$alamat_email=$this->input->post('alamat_email');
			$password=$this->input->post('password');
			$level=$this->input->post('level');
			
			$data=array(
				'nama_user'=>$nama_user,
				'nomor_whatsapp'=>$nomor_whatsapp,
				'alamat_email'=>$alamat_email,
				'password'=>$password,
				'level'=>$level
			);

            $this->db->insert('tbuser',$data);
            $this->session->set_flashdata('pesan','Data Berhasil Disimpan...');
            redirect('Ctampilan/register','self');
        }
    }
?>
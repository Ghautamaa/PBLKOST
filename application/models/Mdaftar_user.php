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

            $sql = "select * from tbuser where nama_user = '".$nama_user."'";
            $sql.= "and alamat_email = '".$alamat_email."'";
            
            $query = $this->db->query($sql);
            if($query->num_rows()==0){
                
                $data=array(
                    'nama_user'=>$nama_user,
                    'nomor_whatsapp'=>$nomor_whatsapp,
                    'alamat_email'=>$alamat_email,
                    'password'=>$password,
                    'level'=>$level
                );

                $this->db->insert('tbuser',$data);
                $this->session->set_flashdata('pesan','Kami sudah mengirimkan email vefirikasi ke alamat email anda segera lakukan verifikasi agar bisa menggunakan fitur-fitur web...');
                redirect('Ctampilan/register','self');
            } else {
                $this->session->set_flashdata('pesan','Data Diri Yang Dimasukan Sudah Ada..');
                redirect('Ctampilan/register','self');
            }

        }
    }
?>
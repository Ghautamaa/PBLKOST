<?php 
    class Mlogin extends CI_Model {
        public function __construct() {
            parent::__construct();
            $this->load->database();
        }

        function login() {
            $alamat_email = $this->input->post('alamat_email');
            $password = $this->input->post('password');

            $sql = "select * from tbuser where alamat_email = '".$alamat_email."'"; 
            $sql.="and password ='".$password."'";
            $querry= $this->db->query($sql);
            if($querry->num_rows()> 0){ 
                $data=$querry->row();
                $session_data=array(
                    'id_user'=>$data->id_user,
                    'nama_user'=>$data->nama_user,
                    'level'=> $data->level,
                    'status' => true
                );
                $this->session->set_userdata($session_data);
                if($data->level == 'penyewa'){
                    return redirect('Ctampilan/dashboard_penyewa');
                }elseif($data->level == 'pemilik'){
                    return redirect('Ctampilan/dashboard_pemilik');
                }

            
            } else {
                $this->session->set_flashdata('pesan','Login Gagal!');
                redirect('Auth/login','refresh');
            }
        }

        function logout() {
            $this->session->sess_destroy();
            return redirect('Auth/Clogin');
        }
    }
?>

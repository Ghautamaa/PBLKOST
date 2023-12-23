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
                $array=array(
                    'id_user'=>$data->id_user,
                    'nama_user'=>$data->nama_user,
                    'level'=> $data->level,
                    'is_logged_in' => true
                );
                if($data->level == 'penyewa'){
                    $this->session->set_userdata($array);
                    return redirect('Ctampilan/dashboard_penyewa');
                }elseif($data->level == 'pemilik'){
                    $this->session->set_userdata($array);
                    return redirect('Ctampilan/dashboard_pemilik');
                }

            
            } else {
                $this->session->set_flashdata('pesan','Login Gagal!');
                redirect('Ctampilan/login','refresh');
            }
        }

        function logout() {
            $this->session->unset_userdata('is_loggeg_in');
            $this->session->sess_destroy();
            redirect('Ctampilan/login', 'refresh');
        }
    }
?>

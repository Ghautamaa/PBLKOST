<?php

use function PHPSTORM_META\type;

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
                    'level'=>$level,
                    'activation'=>0,
                    'date_created' => time()


                );
                $subject = 'Aktivasi Akun';
                $message = '<html>
                                <h2>Aktivasi Akun</h2>
                                <p>Mohon untuk aktivasi akun Anda dengan klik tombol berikut</p>
                                <button>Aktivasi</button>
                            </html>';

                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $alamat_email,
                    'token' => $token,
                    'date_created' => time()
                ];


                // $this->db->insert('tbuser', $data);
                $this->db->insert('id_token', $user_token);
                

                $this->sendEmail($token, 'verify');



                $this->session->set_flashdata('pesan','Kami sudah mengirimkan email vefirikasi ke alamat email anda segera lakukan verifikasi agar bisa menggunakan fitur-fitur web...');
                redirect('Ctampilan/register','self');
            } else {
                $this->session->set_flashdata('pesan','Data Diri Yang Dimasukan Sudah Ada..');
                redirect('Ctampilan/register','self');
            }

        }


        private function sendEmail($token, $type){
            $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'smtp.googlemail.com', 
                'smtp_port' => 587,
                'smtp_user' => 'senjaghautama2004@gmail.com',
                'smtp_pass' => 'nridnjlxoabsgkhz',
                'smtp_crypto' => 'tls', //can be 'ssl' or 'tls' for example
                'mailtype' => 'html', //plaintext 'text' mails or 'html'
                'smtp_timeout' => '4', //in seconds
                'charset' => 'iso-8859-1',
                'wordwrap' => TRUE
            ); 

            $this->email->initialize($config);

            $this->email->from('senjaghautama2004@gmail.com', 'testing pbl kost');
            $this->email->to($this->input->post('alamat_email'));

            if($type == 'verify'){
                $this->email->subject('verifikasi akun');
                $this->email->message('klik link berikut untuk verifikasi: <a href="'. base_url() . 'Auth/verify?email=' . $this->input->post('alamat_email') . '$token' . $token . '">Aktivasi<a/>');
            }

            if ($this->email->send()){
                return true;
            } else {
                echo $this->email->print_debugger();
                die;
            }
        }

        public function verify(){
            $email = $this->input->get('email');
            $token = $this->input->get('token');

            $user = $this->db->get_where('tbuser', ['email' => $email])->row_array();

            if($user){
                $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

                if($user_token){

                }else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Aktivasi Akun gagal, token tidak ditemukan </div> ');
                    redirect('auth/clogin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Aktivasi Akun gagal, email salah</div> ');
                redirect('auth/clogin');
            }
        }

    }
?>
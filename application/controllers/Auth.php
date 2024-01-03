<?php 

    class Auth extends CI_Controller {
        public function __construct(){
            parent::__construct();
            $this->load->model('user_model');
            $this->load->library('form_validation');
            $this->load->helper('string');
            
            
        }
        
        public function Plogin(){
            $alamat_email = $this->input->post('alamat_email');
            $password = $this->input->post('password');

            $querry= $this->db->get_where('tbuser', ['alamat_email'=>$alamat_email]);
            
            if($querry->num_rows()> 0){ 
                $data=$querry->row_array();
                if(password_verify($password, $data['password'])){
                    $session_data=array(
                        'id_user'=>$data['id_user'],
                        'nama_user'=>$data['nama_user'],
                        'level'=> $data['level'],
                        'is_active'=> $data['is_active']
                    );
                    if($data['is_active'] == 1){
                        $this->session->set_userdata($session_data); 
                        if($data['level'] == '2'){
                            return redirect('Ctampilan/dashboard_penyewa');
                        }elseif($data['level'] == '3'){
                            return redirect('Ctampilan/dashboard_pemilik'); 
                        }else{
                            return redirect('Ctampilan/admin');
                        }
                    }else{
                        $this->session->set_flashdata('pesan','Akun belum Diaktivasi');
                        redirect('Auth/clogin');
                    }
                } else{
                    $this->session->set_flashdata('pesan','Password yang anda masukan salah!!');
                    redirect('Auth/clogin');
                }
            } else{
                $this->session->set_flashdata('pesan','Email yang anda masukan belum terdaftar!!');
                redirect('Auth/clogin');
            } 
        }
        
        function logout()
		{
            $this->session->sess_destroy();
            return redirect('Auth/Clogin');
            // $this->mlogin->logout();
		}

        function Clogin() {
            $this->load->view('auth/login.php');
            $this->load->helper('url');
        }

        function register() {

            if($this->session->userdata('status') == 'login'){
                redirect('dashboard');
            } else {
                $this->load->view('auth/register');
            }

        }
        
        public function doregister(){
            $name = $this->input->post('nama_user');
            $email = $this->input->post('alamat_email');
            $password = $this->input->post('password');
            $nomorwa = $this->input->post('nomor_whatsapp');
            $level = $this->input->post('level');
            $password = $this->input->post('password');
            
            $data = array(
                
                'nama_user' => $name,
                'nomor_whatsapp' => $nomorwa,
                'image' => 'default.jpg',
                'alamat_email' => $email,
                'password'  => password_hash($password, PASSWORD_DEFAULT),
                'level' => $level,
                'is_active' => '0',
                'date_created' => date('Y-m-d',time())  
            );

                        
            $token = random_string('alnum', 32);
            $user_token = [
                'alamat_email' => $email,
                'token' => $token,
                'date_created' => time()
            ];
            
            $querry= $this->db->get_where('tbuser', ['alamat_email'=>$email]);
            if($querry->num_rows()> 0){
                $this->session->set_flashdata('pesan','Email yang anda gunakan sudah terdaftar!!');
            }else{
                $insert = $this->db->insert('tbuser',$data);
                $this->db->insert('id_token', $user_token);
            }
            
            
            
            if(isset($insert)){
                $this->session->set_flashdata('pesan','Email vefirikasi sudah terkirim ke alamat email '.$email.', link akan kadaluarsa dalam 2 jam!' );
                $this->sendEmail($token, 'verify');
                return redirect('auth/Clogin');
            } else {
                $this->session->set_flashdata('pesan','Data diri yang anda masukan sudah ada!!');
                return redirect('auth/register');
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
                    'wordwrap' => TRUE,
                    'newline' => "\r\n"
    
                ); 
    
                $this->email->initialize($config);
    
                $this->email->from('senjaghautama2004@gmail.com', 'Aktivasi Akun KostFinder');
                $this->email->to($this->input->post('alamat_email'));
    
                if($type == 'verify'){
                    $this->email->subject('Verifikasi Akun');
                    $this->email->message('klik link berikut untuk verifikasi: <a href="'. base_url() . 'Auth/verify?email=' . $this->input->post('alamat_email').'&&token='.$token. '">Aktivasi<a/>');
                }
    
                if ($this->email->send()){
                    return true;
                } else {
                    echo $this->email->print_debugger();
                    die;
                }
            }
            
            public function verify(){
                $alamat_email = $this->input->post_get('email');
                $token = $this->input->post_get('token');

                $user = $this->db->get_where('tbuser', ['alamat_email' => $alamat_email]);
                if($user->num_rows()>0){
                    $user_token = $this->db->get_where('id_token' ,['token'=> $token]);
                    if($user_token->num_rows()> 0){    
                        $data=$user_token->row_array();
                        if(time() - $data['date_created'] < (60*60*2)){
                            $this->db->set('is_active', 1);
                            $this->db->where('alamat_email', $alamat_email);
                            $this->db->update('tbuser');
    
                            
                            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Akun ' . $alamat_email . ' sudah Aktif!.</div>');
                            $this->db->delete('id_token', ['alamat_email' => $alamat_email]);
                            redirect('auth/register');

                            }
                        else {
                            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Aktivasi akun gagal, token kadaluarsa.</div>');
                            $this->db->delete('id_token', ['alamat_email' => $alamat_email]);
                            $this->db->delete('tbuser', ['alamat_email' => $alamat_email]);
                            redirect('auth/register');
                        }
                    }else {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Aktivasi Akun gagal, token tidak ditemukan </div> ');
                        redirect('auth/clogin');
                    }

                } else {
                    $this->db->delete('tbuser', ['alamat_email' => $alamat_email]);
                    $this->db->delete('user_token', ['alamat_email' => $alamat_email]);
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Aktivasi Akun gagal, email salah</div> ');
                    redirect('auth/clogin');
                }
            }


        

       

    }
?>

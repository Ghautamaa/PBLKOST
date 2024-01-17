<?php 
    class Cdaftarkost extends CI_Controller {

        public function __construct()
		{
			parent::__construct();
            $this->load->model('mdaftarkost');
            $this->load->model('mreviewkost');
            $this->load->model('mvalidasi');
            $this->mvalidasi->validasi();
            
		}
        
        function simpan_daftarkost() {
            $this->mdaftarkost->simpan_daftarkost();
        }

        function cari_kost() {
            $keyword = $this->input->post('keyword');
            $data['data'] = $this->mdaftarkost->searchKost($keyword);
            $this->load->view('pemilik/carikost', $data);
        }

        function cari_kost_penyewa() {
            $keyword = $this->input->post('keyword');
            $data['data'] = $this->mdaftarkost->searchKost($keyword);
            $this->load->view('penyewa/carikost', $data);
        }

        public function detailKost_penyewa($id)
        {
            $data['kost_detail'] = $this->mdaftarkost->getKostById($id);
            $data['reviews'] = $this->mreviewkost->get_reviews_by_kost($id);
            $this->load->view('penyewa/detailKost_penyewa', $data);
        }

        public function detailKost($id)
        {
            $data['kost_detail'] = $this->mdaftarkost->getKostById($id);
            $data['reviews'] = $this->mreviewkost->get_reviews_by_kost($id);
            $this->load->view('pemilik/detailKost', $data);
        }

        public function submitReview()
        {
            $id_kost = $this->input->post('id_kost');
            $id_user = $this->session->userdata('id_user');
            $rating = $this->input->post('rating');
            $comment = $this->input->post('comment');

            $data = array(
                'id_kost' => $id_kost,
                'id_user' => $id_user,
                'rating' => $rating,
                'comment' => $comment
            );

            $this->mreviewkost->simpan_review($data);

            redirect('Cdaftarkost/detailKost/' . $id_kost);
        }

        public function detailProfile($id)
        {
            $data['profile_detail'] = $this->mdaftarkost->getProfileById($id)->row();
            $this->load->view('penyewa/profilePenyewa ', $data);
        }
    }
?>

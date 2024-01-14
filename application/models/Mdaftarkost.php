<?php 
    class Mdaftarkost extends CI_Model {
        function simpan_daftarkost()
        {
            $data=$_POST; //boleh pakai ini tapi name pada form harus sama dengan fill pada database
			
			$config['upload_path']          = './assets/uploadimg/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 1024;


			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('gambar'))
			{
					// $error = array('error' => $this->upload->display_errors());
					$this->session->set_flashdata('pesan',$this->upload->display_errors());

					// $this->load->view('upload_form', $error);
				}
				else
				{
					// $data = array('upload_data' => $this->upload->data());
					$gambar = $this->upload->data('file_name');
					$this->session->set_flashdata('pesan',' Kami akan mengirimkan email berupa kode verifikasi ke email anda...');
					// $this->load->view('upload_success', $data);
				}
				
				
				$data['gambar']=  $gambar;
				$this->db->insert ('tbkost',$data);
            redirect ('Ctampilan/daftar_kost','refresh');
        } 

        function tampildata()
		{
			$sql="select * from tbkost";
			$query=$this->db->query($sql);
			if ($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{
					$data[]=$row;
				}	
			}
			else
			{
				$data="";	
			}
			return $data;
		}

		function searchKost($keyword) {
			$this->db->like('namaKost', $keyword);
			$this->db->or_like('alamatKost', $keyword);
			$this->db->or_like('deskripsi', $keyword);
			$query = $this->db->get('tbkost');
			return $query->result();
		}
		
		function getKostById($id)
		{
			$this->db->where('id_kost', $id);
			$query = $this->db->get('tbkost');
			return $query->row(); // Mengembalikan satu baris hasil query
		}
    }
?>
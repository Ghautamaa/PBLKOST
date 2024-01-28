<?php 
    class Mdaftarkost extends CI_Model {
        function simpan_daftarkost()
        {


            $data=$_POST; //boleh pakai ini tapi name pada form harus sama dengan fill pada database
			
			$config['upload_path']          = './assets/uploadimg/';
			$config['allowed_types']        = 'jpeg|jpg|png';
			$config['max_size']             = 1024;


			$this->load->library('upload', $config);

			if ($this->upload->do_upload('gambar'))
			{
				$gambar = $this->upload->data('file_name');
			}
			else
			{
					
			}
				
				
			$data['gambar']=  $gambar;
			$this->db->insert ('tbkost',$data);
			$this->session->set_flashdata('pesan','Kost anda sudah terdaftar');
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
			$this->db->select('*');
			$this->db->from('tbkost');
			$this->db->join('tbuser', 'tbkost.id_user = tbuser.id_user', 'inner');
			$this->db->where('id_kost', $id);
			$query = $this->db->get();
			return $query->row(); // Mengembalikan satu baris hasil query
		}

		//untuk nampilin data kos user
		function getKostByIdUser($id)
		{
			$this->db->select('*');
			$this->db->from('tbkost');
			$this->db->where('id_kost', $id);
			$query = $this->db->get();
			return $query->row(); // Mengembalikan satu baris hasil query
		}

		//untuk menampilkan data pengguna di halaman akun/profile
		function tampildataprofile()
		{
			$sql="select * from tbuser";
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

		function getProfileById($id)
		{
			$this->db->where('id_user', $id);
			$query = $this->db->get('tbuser');
			return $query; // Mengembalikan satu baris hasil query
		}

<<<<<<< HEAD
=======
		function tampilkost($id) 
		{
			$this->db->where('id_user', $id);
			$query = $this->db->get('tbkost');
			return $query->result();
		}


>>>>>>> cd76a39b841fc9e90984d191e96c4317760fb77a
		
    }
?>
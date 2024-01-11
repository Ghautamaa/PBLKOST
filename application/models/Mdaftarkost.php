<?php 
    class Mdaftarkost extends CI_Model {
        function simpan_daftarkost()
        {
            $data=$_POST; //boleh pakai ini tapi name pada form harus sama dengan fill pada database
            $this->db->insert ('tbkost',$data);
            $this->session->set_flashdata('pesan',' Kami akan mengirimkan email berupa kode verifikasi ke email anda...');
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
		
		function tampilFasilitas()
		{

			$nama_fasilitas = $this->input->post('nama_fasilitas');
            $jumlah_fasilitas = $this->input->post('jumlah_fasilitas');


			$data = array(
                
                'nama_fasilitas' => $nama_fasilitas,
                'jumlah_fasilitas' => $jumlah_fasilitas
               
            );
			$sql="select * from fasilitas";
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


		
        
    }

    
?>
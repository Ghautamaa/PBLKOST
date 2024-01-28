<?php
class Mprofile extends CI_Model
{
	//menampilkan data pengguna
	function data()
	{
		return $this->db->get_where('tbuser',['level'=>$this->session->userdata('level'),
		'id_user'=>$this->session->userdata('id_user')])->row();
	}

	function datakost()
	{
		return $this->db->get_where('tbkost',['id_kost'=>$this->session->userdata('id_kost')])->row();
	}

	function editprofilePemilik()
	{
		$data=$_POST;
		$this->db->where ('id_user',$data['id_user']);
		$this->db->update ('tbuser',$data);
		$session=['nama_user'=>$data['nama_user']];
		$this->session->set_userdata($session);
		redirect ('cprofile/tampilPemilik','refresh');		
	}

	function editprofilePenyewa()
	{
		$data=$_POST;
		$this->db->where ('id_user',$data['id_user']);
		$this->db->update ('tbuser',$data);
		$session=['nama_user'=>$data['nama_user']];
		$this->session->set_userdata($session);
		redirect ('cprofile/tampilPenyewa','refresh');		
	}

	function editprofileAdmin()
	{
		$data=$_POST;
		$this->db->where ('id_user',$data['id_user']);
		$this->db->update ('tbuser',$data);
		$session=['nama_user'=>$data['nama_user']];
		$this->session->set_userdata($session);
		redirect ('cprofile/tampilAdmin','refresh');		
	}

	function editKost()
	{
		$data=$_POST;
		$this->db->where ('id_kost',$data['id_kost']);
		$this->db->update ('tbkost',$data);
		$this->session->set_flashdata('pesan','Kost anda sudah diubah');
		redirect ('ctampilan/tabelKostedit','refresh');		
	}

	//hapus data kos dan gambar
	function deletekost($id_kost)//=di admin
	{
		$query=$this->db->get_where('tbkost',['id_kost'=>$id_kost])->row();
		$image=$query->gambar;
		unlink ('assets/uploadimg/'.$image);
		$this->db->where ('id_kost',$id_kost);
		$this->db->delete ('tbkost');
		redirect ('ctampilan/tabelKost','refresh');		
	}

	function deletekostUser($id_kost)//=di profil
	{
		$query=$this->db->get_where('tbkost',['id_kost'=>$id_kost])->row();
		$image=$query->gambar;
		unlink ('assets/uploadimg/'.$image);
		$this->db->where ('id_kost',$id_kost);
		$this->db->delete ('tbkost');
		redirect ('ctampilan/tabelKostedit','refresh');		
	}
	
}
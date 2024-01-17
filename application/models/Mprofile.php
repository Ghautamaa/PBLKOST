<?php
class Mprofile extends CI_Model
{
	function data()
	{
		return $this->db->get_where('tbuser',['level'=>$this->session->userdata('level'),'id_user'=>$this->session->userdata('id_user')])->row();
	}

	function editprofilePemilik()
	{
		$data=$_POST;
		$this->db->where ('id_user',$data['id_user']);
		$this->db->update ('tbuser',$data);
		redirect ('cprofile/tampilPemilik','refresh');		
	}

	function editprofilePenyewa()
	{
		$data=$_POST;
		$this->db->where ('id_user',$data['id_user']);
		$this->db->update ('tbuser',$data);
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

	function deletekost($id_kost)
	{
		$this->db->where ('id_kost',$id_kost);
		$this->db->delete ('tbkost');
		redirect ('ctampilan/tabelKost','refresh');		
	}
	
}
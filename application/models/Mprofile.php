<?php
class Mprofile extends CI_Model
{
	function data()
	{
		return $this->db->get_where('tbuser',['level'=>$this->session->userdata('level'),'id_user'=>$this->session->userdata('id_user')])->row();
	}

	function editprofile()
	{
		$data=$_POST;
		$this->db->where ('id_user',$data['id_user']);
		$this->db->update ('tbuser',$data);		
	}
	
}
<?php
class Mprofile extends CI_Model
{
	function data()
	{
		return $this->db->get_where('tbuser',['level'=>$this->session->userdata('level')])->row();
	}
	
}
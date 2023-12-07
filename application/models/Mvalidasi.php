<?php
	class Mvalidasi extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('nama_user')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..!');</script>";
				redirect('Ctampilan/login','refresh');
			}
		}
		
	}
?>
<?php
	class Mvalidasi extends CI_Model
	{
		function validasi()
		{
			if ($this->session->userdata('id_user')=='')
			{
				echo "<script>alert ('Anda tidak dapat mengakses halaman ini..!');</script>";
				redirect('Auth/Clogin','refresh');
			}
		}
		
	}
?>
<?php
class Mprofile extends CI_Model
{
	function data()
	{
		$level = $this->session->userdata('level');
		$sql = 'select * from tbuser where level=?';
		$hasil = $this->db->query($sql, $level)->row();

		// Cek jika level user bukan 3 (Pemilik))
		if ($hasil->level != 3) {
			$hasil->image = '';
		}
		return $hasil;
	}
	function edit($id_user){
		{
			$sql = "select * from tbprodi where KodeProdi='" . $id_user . "'";
			$query = $this->db->query($sql);
			if ($query->num_rows() > 0) {
				$data = $query->row();
				echo "<script>$('#KodeProdi').val('" . $data->KodeProdi . "')</script>";
	
				echo "<script>$('#NamaProdi').val('" . $data->NamaProdi . "')</script>";
				echo "<script>$('#Jenjang').val('" . $data->Jenjang . "')</script>";
				echo "<script>$('#Jurusan').val('" . $data->Jurusan . "')</script>";
				echo "<script>$('#Kaprodi').val('" . $data->Kaprodi . "')</script>";
				echo "<script>$('#NoSKProdi').val('" . $data->NoSKProdi . "')</script>";
				echo "<script>$('#Keterangan').val('" . $data->Keterangan . "')</script>";
			}
		}
	}
}
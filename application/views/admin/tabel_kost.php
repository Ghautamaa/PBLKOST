<h3>Daftar Data Kost</h3>
  <table class="table table-hover" border='1'>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Kost</th>
        <th>Alamat</th>
        <th>Harga</th>
        <th>Kode Pos</th>
        <th>Deskripsi</th>
        <th>Gambar</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
		if(empty($hasil))
		{
			echo "Data kosong";
		}
		else
		{
			$no=1;
			foreach ($hasil as $data):
	?>	
    
      <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $data->namaKost;  ?></td>
        <td><?php echo $data->alamatKost; ?></td>
        <td><?php echo $data->hargaKost; ?></td>
        <td><?php echo $data->kodepos; ?></td>
        <td><?php echo $data->deskripsi; ?></td>
        <td><img src="<?php echo base_url('assets/uploadimg/').$data->gambar; ?>" alt="" width="100px"></td>
        <td>
        	<button type="button" onclick="hapusData('<?php echo $data->id_kost; ?>');" class="btn btn-sm btn-danger">Hapus</button>
        </td>
      </tr>
      
     <?php
	 		$no++;
	 		endforeach;
		}
	 ?>
      
    </tbody>
  </table>
  <br>
  <div class="pb-5">
    <input type="button" class="btn btn-success" value="Cetak Data" onclick="cetakpdf()">
  </div>

  <script language="javascript">
  	function hapusData(KodeProdi)
	{
		if(confirm("Apakah yakin menghapus data ini?"))
		{
			window.open("<?php echo base_url(); ?>Cprodi/hapusData/"+KodeProdi,"_self");
		}	
	}
  function editData(KodeProdi)
	{
		load("Cprodi/editData/"+KodeProdi,"script");	
	}
  function cetakpdf()
	{
		window.open("<?php echo base_url() ?>cprodi/cetakpdf","_blank");	
	}
  </script>
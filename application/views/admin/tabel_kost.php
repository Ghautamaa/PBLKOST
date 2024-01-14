<h3>Daftar Data Prodi</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Kost</th>
        <th></th>
        <th>Jenjang</th>
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
        <td><?php echo $data->NamaProdi;  ?></td>
        <td><?php echo $data->Jurusan; ?></td>
        <td><?php echo $data->Jenjang; ?></td>
        <td>
        	<button type="button" onclick="editData('<?php echo $data->KodeProdi; ?>')" class="btn btn-sm btn-primary">Edit</button>
        	<button type="button" onclick="hapusData('<?php echo $data->KodeProdi; ?>');" class="btn btn-sm btn-danger">Hapus</button>
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
<html>
<head>
	<title>Cetak PDF</title>
</head>

<body>
<table width="100%">
  <tr>
        <td align="center">
        <font size="5"><b>KOSTFINDER</b></font><br/>
        <font size="1">Laman : www.kostfinder.com, Email : kostfinder@gmail.com </font>
        </td>
    </tr>
</table>

<hr/>

<h3><center>Daftar Data Kost</center></h3>
  <table border="1" width="100%">
    <thead>
      <tr>
      <th>No</th>
        <th>Nama Kost</th>
        <th>Kecamatan</th>
        <th>Alamat</th>
        <th>Harga</th>
        <th>Kode Pos</th>
        <th>Deskripsi</th>
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
        <td><?php echo $data->kecamatan;  ?></td>
        <td><?php echo $data->alamatKost; ?></td>
        <td><?php echo $data->hargaKost; ?></td>
        <td><?php echo $data->kodepos; ?></td>
        <td><?php echo $data->deskripsi; ?></td>
      </tr>
      
     <?php
	 		$no++;
	 		endforeach;
		}
	 ?>
    </tbody>
  </table>

</body>
</html>

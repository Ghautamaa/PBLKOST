<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Kost</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-5">
  <h2>Form Pendaftaran Kost</h2>
  <form name="daftarkost" action="<?php echo base_url ('cdaftarkost/simpan_daftarkost'); ?>" method="post">
  <?php
                $pesan=$this->session->flashdata('pesan');
                 if ($pesan=="")
                 {
                    echo "";	
                 }
                 else
                 {
            ?>
              <div class="alert alert-success alert-dismissible mt-4">
                 <?php echo $pesan; ?>                        
              </div>
            <?php
                }
            ?>    
    <div class="mb-3 mt-3">
      <label for="email">Nama Kost :</label>
      <input type="text" class="form-control" id="namaKost" placeholder="Masukan Nama Kost" name="namaKost" required>
    </div>
    <div class="mb-3">
      <label for="alamat">Alamat Kost :</label>
      <input type="text" class="form-control" id="alamatKost" placeholder="Masukan alamat kost" name="alamatKost" required>
    </div>
    <div class="mb-3">
      <label for="harga">Harga Kost :</label>
      <input type="text" class="form-control" id="hargaKost" placeholder="Masukan harga kost" name="hargaKost" required>
    </div>
    <div class="mb-3">
      <label for="Kodepos">Kode Pos :</label>
      <input type="text" class="form-control" id="kodepos" placeholder="Masukan Kode Pos" name="kodepos" required>
    </div>
    <div class="mb-3">
      <p class="mb-1"><label for="Deskripsi">Deskripsi :</label></p>
      <textarea name="deskripsi" id="deskripsi" cols="100" rows="10" required></textarea>
    </div>
    <div class="d-flex  justify-content-start">
      <a class="btn btn-danger col-2" href="<?php echo base_url('ctampilan/dashboard_pemilik'); ?>">Back</a>
    </div>
    <div class="d-flex  justify-content-end">
      <button typ e="submit" class="btn btn-primary col-2">Submit</button>
    </div>
    
  </form>
</div>

</body>
</html>

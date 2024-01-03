<!DOCTYPE html>
<html lang="en">
<head>
  <title>Daftar Kost</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
</head>

<style>
    body{
        background-image: url(<?php echo base_url('')?>/img/daftarkos.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }
</style>

<body style="background-color: #E6F6F5;font-family: 'Montserrat', sans-serif; " >

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4 p-2 m-2 text-center fw-bolder">
      <h2>Form Pendaftaran Kost</h2>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-7 rounded-5 mb-2 text-white px-5" style="background-color:#1d70f5; opacity: 1;">
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
        <div class="mb-3 mt-4">
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
          <textarea name="deskripsi" id="deskripsi" cols="71" rows="10" required></textarea>
        </div>
        <div class="d-flex justify-content-between mb-3">
          <div class="">
            <a class="btn btn-danger " href="<?php echo base_url('ctampilan/dashboard_pemilik'); ?>">Back</a>
          </div>
          <div class="">
          <button typ e="submit" class="btn btn-success ">Submit</button>  
          </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>

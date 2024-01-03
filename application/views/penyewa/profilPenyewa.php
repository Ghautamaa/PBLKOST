<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>Profil Penyewa</title>
</head>

<body>
  <!-- awal navbar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Kost Finder</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">HOME</a></li>
        <li><a href="#">PROFILE</a></li>
        <li><a href="#">Daftar Kost</a></li>
        <li><a href="<?php echo base_url('cadmin/logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>
  <!-- akhir navbar -->

  <div class="container bg-primary">
    <h3>Profil Kamu </h3>
    <p>Selamat Datang di Menu Profil</p>
    <hr>
    <br>


    <div class="row text-center">
      <div class="col-md-6">
        <h4>Nama Kamu</h4>
        <?php echo $this->session->userdata('nama_user'); ?>
      </div>
      <div class="col-md-6">
        <h4>Email Kamu</h4>
        <?php echo $this->session->userdata('alamat_email'); ?>
      </div>
    </div>
    <br>

    <div class="row text-center">
      <div class="col-md-12">
        <h4>No WhatsApp</h4>
        <?php echo $this->session->userdata('nomor_whatsapp'); ?>
      </div>
    </div>

    <!-- menampilkan data jika level 3(pemilik) -->
    <h1><?= $data->image ?></h1>

  </div>

</body>

</html>
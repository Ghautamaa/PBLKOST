<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css"> -->
  
  <meta charset="utf-8">
        <title>Kost Finder</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="<?=base_url()?>assets/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?=base_url()?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- awal navbar -->
  <div class="container-fluid sticky-top">           
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.html" class="navbar-brand"><h1 class="text-info display-6">Kost Finder</h1></a>
                        <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="fa fa-bars text-info"></span>
                        </button>                       
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="<?php echo base_url ('ctampilan/dashboard_pemilik'); ?>" class="nav-item nav-link active text-info">Home</a>
                            <a href="<?php echo base_url ('ctampilan/cari_kost'); ?>" class="nav-item nav-link text-info">Cari Kost</a>
                            <a href="<?php echo base_url ('ctampilan/daftar_kost'); ?>" class="nav-item nav-link text-info">Daftar Kost</a>
                            <a href="<?php echo base_url ('ctampilan/kontak'); ?>" class="nav-item nav-link text-info">Kontak kami</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <!-- Logo Profile -->
                          
                            <a href="<?php echo base_url ('auth/logout'); ?>" class="nav-item nav-link text-info">LOG OUT</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
  <!-- akhir navbar -->

  <div class="container">
    <center><h3>Profil Kamu </h3></center>
    <hr>
    <br>
        <div class="row text-center">
            <div>
                <h4 class="fw-bold mb-3"><?php echo $data->nama_user; ?></h4>
                <p class="mb-3">Nomor : <?php echo $data->nomor_whatsapp; ?></p>
                <h5 class="fw-bold mb-3">Email : <?php echo $data->alamat_email; ?></h5>
                <a  href="<?php echo base_url ('ctampilan/editprofilePemilik'); ?>" class="btn btn-sm btn-warning">Edit Akun</a>
                <a  href="<?php echo base_url ('ctampilan/tabelKostedit'); ?>" class="btn btn-sm btn-warning">Edit Kost</a>
            </div>
        </div>
    </div>
<!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>assets/lib/easing/easing.min.js"></script>
    <script src="<?=base_url()?>assets/lib/waypoints/waypoints.min.js"></script>
    <script src="<?=base_url()?>assets/lib/lightbox/js/lightbox.min.js"></script>
    <script src="<?=base_url()?>assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?=base_url()?>assets/js/main.js"></script>
</body>

</html>
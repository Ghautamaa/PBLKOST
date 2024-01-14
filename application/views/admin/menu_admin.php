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

<div class="container-fluid px-0">

                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="index.html" class="navbar-brand"><h1 class="text-primary display-6">Kost Finder</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                            <a href="<?php echo base_url ('ctampilan/dashboard_pemilik'); ?>" class="nav-item nav-link active">Home</a>
                            <a href="<?php echo base_url ('ctampilan/menu_admin'); ?>" class="nav-item nav-link">Admin</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Master Data</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a  href="<?php echo base_url('ctampilan/tampilDataAkun')?>" class="dropdown-item">Daftar Akun</a>
                                    <a  href="<?php echo base_url('ctampilan/tampilDataKost')  ?>" class="dropdown-item">Daftar Kost</a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex m-3 me-0">

                            <!-- Logo Profile -->
                            <a href="<?php echo base_url ('cprofile/tampil'); ?>" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                            <a href="<?php echo base_url ('auth/logout'); ?>" class="nav-item nav-link">LOG OUT</a>
                        </div>
                    </div>
                </nav>
            </div>
        
            
</div>


</body>
</html>

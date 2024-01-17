<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Halaman Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('style.php')?>">

    <style>
          .bg{
            background-image:url(<?php echo base_url('')?>/img/Login2.png);
            background-size:cover;
            background-repeat: no-repeat;
          }
    </style>
  </head>
  <body>
    <div class="bg">
    <div class="container-fluid">
      <div class="row h-100">
      <div class="col-6   d-flex align-items-center justify-content-start">
      <div class="hero text-light mx-5">
              <h1 >KostFinder</h1>
              <h2 >cari tempat terbaik kalian</h2>
            </div>
      </div>

      <div class="row h-100 col-6 d-flex justify-content-center align-items-center " id="container">
        <div class="col-lg-7 col-md-8 col-sm-10 border-dark ">
          <h2 class="text-center py-3 ">Form Register</h2>
		  <form method="post" action="<?php echo base_url('auth/doregister')?>">
              <?php
              $pesan=$this->session->flashdata('pesan');
              if (!empty($pesan))
              {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <?php
                 echo ($pesan)
                 ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              <?php
              }
            ?>
            <div class="mx-3 my-4">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control mb-2" required placeholder="Masukan Nama lengkap" name="nama_user">
              <label class="form-label">No. WhatsApp</label>
              <input type="text" class="form-control mb-2" placeholder="12356789" name="nomor_whatsapp"> 
              <label class="form-label">Email</label>
              <input type="email" class="form-control mb-2" placeholder="example@yahoo.com" name="alamat_email">
              <label class="form-label">Password</label>
              <input type="password" class="form-control mb-2" placeholder="*********" name="password"> 
              <label class="form-label">Daftar Sebagai</label>
              <select name="level" id="" class="w-100 rounded-2" style="height: 37px;">
                <option value="" disabled selected>-- Pilih Role --</option>
                <option value="2">Penyewa Kos</option>
                <option value="3">Pemilik Kos</option>
              </select>
              <!-- bagian button -->
              <div class="pt-3 d-flex align-items-center justify-content-between">
				      <a class="btn btn-info" href="<?php echo base_url('Auth/clogin'); ?>">Back</a>
                <input type="submit" value="Sign Up" class="btn btn-success" id="signup">
              </div>
              <!-- term & Privacy -->
              <!-- <label class="pt-5" id="tp">
                <input type="checkbox">
                I accept the <a href="#">Term of Use</a> & <a href="#">Privacy Policy</a>
              </label> -->
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</html>
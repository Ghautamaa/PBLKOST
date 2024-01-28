<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>login</title>
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
          <div class="col-6 d-flex align-items-center justify-content-start" >
            <div class=" mx-5 hero text-light">
              <h1 >KostFinder</h1>
              <h2 >cari tempat terbaik kalian</h2>
            </div>
          </div>
          <div class="h-100 col-6 d-flex justify-content-center align-items-center pt-5">
            <div class="col-lg-8 ">
              <h2 class="text-center py-3 d-flex align-items-center justify-content-center">Login</h2>
              <form name="formlogin" method="post" action="<?php echo base_url('Auth/Plogin')?>">
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
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control mb-2" placeholder="example@yahoo.com" name="alamat_email">                                                                                                                                                                          
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control mb-2" required placeholder="masukan password" name="password"> 
                  <!-- bagian button -->
                  <div class="pt-3 align-items-center justify-content-between align d-flex">
                    <a href="<?php echo base_url('Auth/register');?>">Klik Untuk Daftar</a>
                    <input type="submit" value="Masuk" class="btn btn-success" id="login">
                  </div>
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
      
      <script language="javascript">
        function register()
        {
          window.open("<?php echo base_url('Auth/register')?>","_self");	
        }
      </script>
</body>
</html>
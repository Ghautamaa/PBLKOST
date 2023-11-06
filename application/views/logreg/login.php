<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('style.php')?>">
      <style>
          .container{
            
            background-image:url(../img/Login.png);
            background-size:cover;
            background-repeat: no-repeat;
          }
          
      </style>
  </head>
  <body>
    <img src="../img/Login.png" alt="">
    <?php
    $pesan=$this->session->flashdata('pesan');
		  if ($pesan=="")
		  {
			  echo "";	
		  }
	  	else
		  {
	    ?>
         <div class="alert alert-danger alert-dismissible">
               <?php echo $pesan; ?>                        
      	 </div>
    <?php
		}
	  ?>
    <div class="container">
      <div class="h-100 d-flex justify-content-center align-items-center pt-5">
        <div class="col-lg-7 col-md-8 col-sm-10 ">
          <h2 class="text-center py-3 d-flex align-items-center justify-content-center">Login</h2>
          <form name="formlogin" method="post" action="<?php echo base_url('Clogin/proses_login')?>">
            <div class="mx-3 my-4">
              <label class="form-label">Email</label>
              <input type="email" class="form-control mb-2" placeholder="example@yahoo.com" name="alamat_email">                                                                                                                                                                          
              <label class="form-label">Password</label>
              <input type="password" class="form-control mb-2" required placeholder="masukan password" name="password"> 
              <!-- bagian button -->
              <div class="pt-3 align-items-center justify-content-between align d-flex">
                <a href="<?php echo base_url('Ctampilan/register');?>">Klik Untuk Daftar</a>
                <input type="submit" value="Login" class="btn btn-success" id="login">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
      </script>
      
      <script language="javascript">
        function register()
        {
          window.open("<?php echo base_url('Ctampilan/register')?>","_self");	
        }
      </script>
</body>
</html>
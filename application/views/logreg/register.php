<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Halaman Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container vh-100">
      <div class="row h-100 d-flex justify-content-center align-items-center " id="container">
        <div class="col-lg-7 col-md-8 col-sm-10 border-dark rounded-3 shadow-lg">
          <h2 class="text-center py-3 ">Form Register</h2>
		  <form method="post" action="<?php echo base_url('')?>">
            <div class="mx-3 my-4">
              <label class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control mb-2" required placeholder="Masukan Nama lengkap" name="nama_lengkap">
              <label class="form-label">No. WhatsApp</label>
              <input type="text" class="form-control mb-2" placeholder="12356789" name="no_telp"> 
              <label class="form-label">Email</label>
              <input type="email" class="form-control mb-2" placeholder="example@yahoo.com" name="email">
              <label class="form-label">Password</label>
              <input type="password" class="form-control mb-2" placeholder="Pochinki" name="password"> 
              <!-- bagian button -->
              <div class="pt-3 d-flex align-items-center justify-content-between">
				  <a class="btn btn-info" href="<?php echo base_url(''); ?>">Back</a>
                <input type="submit" value="Sign Up" class="btn btn-success" id="signup">

              </div>
              <!-- term & Privacy -->
              <label class="pt-5" id="tp">
                <input type="checkbox">
                I accept the <a href="#">Term of Use</a> & <a href="#">Privacy Policy</a>
              </label>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</html>
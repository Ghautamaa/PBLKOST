<!DOCTYPE html>
<html lang="en">

    <head>
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
      <style>
        .formbold-alert {
            padding: 20px;
            margin-bottom: 30px;
            background-color: #4287f5;
            color: white;
            border-radius: 5px;
        }
      </style>
      
    <div class="container-fluid">
               <!-- Navbar start -->      
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
                            <a href="<?php echo base_url ('ctampilan/kontak'); ?>" class="nav-item nav-link text-info">Contact kami</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <!-- Logo Profile -->
                            <a href="<?php echo base_url ('cprofile/tampilPemilik'); ?>" class="my-auto">
                                <i class="fas fa-user fa-2x text-info"></i>
                            </a>
                            <a href="<?php echo base_url ('auth/logout'); ?>" class="nav-item nav-link">LOG OUT</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
  <div class="container table col-11">
    <div class="my-2 d-flex justify-content-center align-items-center">
    <h3 class="">Daftar Data Kost</h3>
    </div>
              <?php
                    $pesan=$this->session->flashdata('pesan');
                    if ($pesan=="")
                    {
                        echo "";	
                    }
                    else
                    {
                ?>
                  <div class="formbold-alert">
                    <?php echo $pesan; ?>                        
                  </div>
              <?php
                    }
                ?> 
    <table class="table table-hover table-striped-columns text-center">
    <div class=" d-flex justify-content-center align-items-center">

    <thead>
      <tr>
        <th>No</th>
        <th>Nama Kost</th>
        <th>Kecamatan</th>
        <th>Alamat</th>
        <th>Harga</th>
        <th>Kode Pos</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
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
        <td>
          <a  href="<?php echo base_url ('ctampilan/editKost/'.$data->id_kost); ?>" class="btn btn-sm btn-warning">Edit Kost</a>
        	<button type="button" onclick="hapusData('<?php echo $data->id_kost; ?>');" class="btn btn-sm btn-danger" >Hapus</button>
        </td>
      </tr>
      
     <?php
	 		$no++;
	 		endforeach;
		}
	 ?>
      
    </tbody>
    </div>

  </table>
  </div>

  </div>


  <script language="javascript">
  	function hapusData(id_kost)
	{
		if(confirm("Apakah yakin menghapus data ini?"))
		{
			window.open("<?php echo base_url(); ?>cprofile/deletekostUser/"+id_kost,"_self");
		}	
	}

  </script>
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
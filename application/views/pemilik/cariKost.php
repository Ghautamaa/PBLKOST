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
                            <a href="<?php echo base_url ('ctampilan/dashboard_pemilik'); ?>" class="nav-item nav-link">Home</a>
                            <a href="<?php echo base_url ('ctampilan/cari_kost'); ?>" class="nav-item nav-link active">Cari Kost</a>
                            <a href="<?php echo base_url ('ctampilan/daftar_kost'); ?>" class="nav-item nav-link">Daftar Kost</a>
                            <a href="<?php echo base_url ('ctampilan/kontak'); ?>" class="nav-item nav-link">Contact kami</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <!-- Logo Profile -->
                            <a href="<?php echo base_url ('cprofile/tampil'); ?>" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                            <a href="<?php echo base_url ('auth/clogin'); ?>" class="nav-item nav-link">LOG OUT</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->
        <!-- <div class="container-fluid  py-5">
            <h1 class="text-center text-black display-6">Berbagai Kost Menarik yang mungkin kamu suka!</h1>
        </div> -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <h1 class="mb-4">Kost Finder</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <!-- Search Button -->
                            <div class="col-xl-3">
                                <form action="<?= base_url('Cdaftarkost/cari_kost'); ?>" method="post" class="w-100 mx-auto d-flex">
                                    <input type="search" name="keyword" class="form-control p-3" placeholder="Masukan Nama/Lokasi Kost" aria-describedby="search-icon-1">
                                    <!-- <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span> -->
                                    <button type="submit" class="btn btn-info input-group-text p-3 "><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- End Search Button -->

                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <div class="row g-4">
                                    <div class="col-lg-12">                           
                                        <!-- List Berapa banyak data pada sebuah lokasi kostnya -->
                                        <div class="mb-3">
                                            <h4>Lokasi Kost</h4>
                                            <?php
                                            if (empty($data)) {
                                                echo "Data Kosong";	
                                            } else {
                                                $lokasi = [];

                                                // Mengelompokkan data berdasarkan alamatKost
                                                foreach ($data as $item) {
                                                    $lokasi[$item->alamatKost][] = $item;
                                                }

                                                // Menampilkan data yang sudah dikelompokkan
                                                foreach ($lokasi as $alamatKost => $items):
                                            ?>
                                                <ul class="list-unstyled fruite-categorie">
                                                    <li>
                                                        <div class="d-flex justify-content-between fruite-name">
                                                            <a ><?php echo $alamatKost; ?></a>
                                                            <span>(<?php echo count($items); ?>)</span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            <?php
                                                endforeach;
                                            }
                                            ?>
                                        <!-- End --> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Start List Kost -->
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-center">

                                    <!-- Start perulangan kost -->
                                    <?php
                                        if (empty($data)) {
                                            echo "Data Kosong";	
                                        } else {
                                            $no = 1;
                                            foreach ($data as $item): 
                                    ?>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                                <img src="<?=base_url()?>assets/img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-info px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;"><?php echo $item->alamatKost ?></div>
                                            <div class="p-4 border border-top-0 rounded-bottom">
                                                    <h4>Kost <?php echo $item->namaKost ?></h4>
                                                    <p><?php echo $item->alamatKost ?></p>
                                                    <p class="text-dark fs-5 fw-bold mb-0">Rp.<?php echo $item->hargaKost ?>/Bulan</p>
                                                    <a href="<?= base_url('Cdaftarkost/detailKost/' . $item->id_kost); ?>" class="btn border border-secondary rounded-pill px-3 text-secondary"><i class=" me-2 text-info"></i> Cek Kost!</a>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                        $no++;                                       
                                        endforeach;
                                        }
                                    ?>
                                    <!-- End Card Kost -->

                                    <!-- Start Hasil pencarian di sini -->
                                    <?php if (!empty($data)): ?>
                                        <div class="row g-4 justify-content-center">
                                            <?php foreach ($data as $item): ?>
                                                <!-- Tampilkan data hasil pencarian di sini -->
                                            
                                            <?php endforeach; ?>
                                        </div>
                                    <?php else: ?>
                                        <!-- Data kosong -->
                                    <?php endif; ?>
                                    <!-- End Hasil Pencarian Kost -->
                                </div>
                            </div>
                            <!-- End List kost -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End-->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-primary mb-0">Kost Finder</h1>
                                <p class="text-secondary mb-0">100% Aman & Terpercaya</p>
                            </a>
                        </div>
                        
                        <div class="col-lg-3">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href="https://www.instagram.com/gus_suggi/"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href="https://www.instagram.com/ghtma.a/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href="https://www.instagram.com/l_juventuss/"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-secondary btn-md-square rounded-circle" href="https://www.instagram.com/km.yoga/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Kenapa kamu harus menggunakan Kost Finder?</h4>
                            <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea explicabo perferendis eligendi officiis mollitia.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-item">
                            <h4 class="text-light mb-3">Contact</h4>
                            <p>Address: 1429 Netus Rd, NY 48247</p>
                            <p>Email: Example@gmail.com</p>
                            <p>Phone: +0123 4567 8910</p>
                            <p>Payment Accepted</p>
                            <img src="img/payment.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="container-fluid copyright bg-dark py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Kost Finder</a>, All right reserved.</span>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Copyright End --> 
        
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
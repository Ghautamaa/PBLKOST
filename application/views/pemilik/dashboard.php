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
                            <a href="<?php echo base_url ('ctampilan/dashboard_pemilik'); ?>" class="nav-item nav-link active">Home</a>
                            <a href="<?php echo base_url ('ctampilan/cari_kost'); ?>" class="nav-item nav-link">Cari Kost</a>
                            <a href="<?php echo base_url ('ctampilan/daftar_kost'); ?>" class="nav-item nav-link">Daftar Kost</a>
                            <a href="<?php echo base_url ('ctampilan/kontak'); ?>" class="nav-item nav-link">Contact kami</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <!-- Logo Profile -->
                            <a href="<?php echo base_url ('cprofile/tampilPemilik'); ?>" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a>
                            <a href="<?php echo base_url ('auth/logout'); ?>" class="nav-item nav-link">LOG OUT</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Hero Start -->
        <div class="container-fluid py-1 mb-5 ">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <h4 class="mb-3 ">100% Aman Terpercaya</h4>
                        <h1 class="mb-5 display-3">Kost Murah & Aman</h1>
                    </div>
                    <div class="col-md-12 col-lg-5">
                        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <img src="<?=base_url()?>assets/img/kos1.jpg" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="<?=base_url()?>assets/img/kos3.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- Featurs Section Start -->
        <div class="container-fluid featurs py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-car-side fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Lokasi</h5>
                                <p class="mb-0">Lokasi pilih sesukamu</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-user-shield fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>100% Aman</h5>
                                <p class="mb-0">100% security aman</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fas fa-exchange-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Face To Face</h5>
                                <p class="mb-0">info kontak </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto">
                                <i class="fa fa-phone-alt fa-3x text-white"></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>24/7 Support</h5>
                                <p class="mb-0">Support every time fast</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs Section End -->

        <!-- Vesitable Shop Start-->
        <div class="container-fluid vesitable py-5">
            <div class="container py-5">
                <h1 class="mb-0">Kost Menarik yang mungkin kamu suka!</h1>
                <div class="owl-carousel vegetable-carousel justify-content-center">
                    <?php
                        if (empty($data)) {
                            echo "Data Kosong";	
                        } else {
                            $no = 1;
                            foreach ($data as $item): 
                    ?>
                    <div class="border rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="<?=base_url()?>assets/img/vegetable-item-6.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="text-white bg-info px-3 py-1 rounded position-absolute" style="top: 10px; right: 10px;"><?php echo $item->alamatKost ?></div>
                        <div class="p-4 rounded-bottom">
                            <h4><?php echo $item->namaKost ?></h4>
                            <p><?php echo $item->alamatKost ?></p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">Rp.<?php echo $item->hargaKost ?>/Bulan</p>
                                <a href="<?= base_url('Cdaftarkost/detailKost/' . $item->id_kost); ?>" class="btn border border-secondary rounded-pill px-3 text-secondary"> Cek Kost</a>
                            </div>
                        </div>
                    </div>
                    <?php
                            $no++;                                       
                            endforeach;
                        }
                    ?>
                </div>
            </div>
        </div>
        <!-- Vesitable Shop End -->

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
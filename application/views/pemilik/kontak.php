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
                            <a href="<?php echo base_url ('ctampilan/dashboard_pemilik'); ?>" class="nav-item nav-link text-info">Home</a>
                            <a href="<?php echo base_url ('ctampilan/cari_kost'); ?>" class="nav-item nav-link text-info">Cari Kost</a>
                            <a href="<?php echo base_url ('ctampilan/daftar_kost'); ?>" class="nav-item nav-link text-info">Daftar Kost</a>
                            <a href="<?php echo base_url ('ctampilan/kontak'); ?>" class="nav-item nav-link active text-info" >Kontak kami</a>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <!-- Logo Profile -->
                            <a href="<?php echo base_url ('cprofile/tampilPemilik'); ?>" class="my-auto">
                                <i class="fas fa-user fa-2x text-info"></i>
                            </a>
                            <a href="<?php echo base_url ('auth/logout'); ?>" class="nav-item nav-link text-info">LOG OUT</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->

        <!-- Tastimonial Start -->
        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h4 class="text-info">Ada Kendala?</h4>
                    <h1 class="display-5 mb-5 text-dark">Silakan hubungi cs kami</h1>
                </div>
                
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>                         
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="<?=base_url()?>assets/img/avatar.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">I Komang Yoga TriSaputra</h4>
                                    <p class="m-0">CS Kost Finder</p>                                  
                                    <p class="m-0">@ikm.yogats@gmail.com</p>
                                    <a class="m-0 text-dark" href="https://www.instagram.com/km.yoga/" ><i class="fab fa-instagram"></i> km.yoga</a>
                                                                      
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>                         
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="<?=base_url()?>assets/img/avatar.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">I Putu Agus Sugiantara</h4>
                                    <p class="m-0">CS Pemilik Kost</p>                                  
                                    <p class="m-0">I_Putu_Agus_Sugiantara@gmail.com</p>
                                    <a class="m-0 text-dark" href="https://www.instagram.com/gus_suggi/" ><i class="fab fa-instagram"></i> gus_suggi</a>
                                                                       
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>                         
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="<?=base_url()?>assets/img/avatar.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Gusti Ngurah Senja Ghautama</h4>
                                    <p class="m-0">CS Penyewa Kost</p>                                  
                                    <p class="m-0">Gusti_Ngurah_Senja_Ghautama@gmail.com</p>
                                    <a class="m-0 text-dark" href="https://www.instagram.com/ghtma.a/" ><i class="fab fa-instagram"></i> ghtma</a>                                                                     
                                </div>
                            </div>                           
                        </div>
                    </div>
                    <div class="testimonial-item img-border-radius bg-light rounded p-4">
                        <div class="position-relative">
                            <i class="fa fa-quote-right fa-2x text-secondary position-absolute" style="bottom: 30px; right: 0;"></i>                         
                            <div class="d-flex align-items-center flex-nowrap">
                                <div class="bg-secondary rounded">
                                    <img src="<?=base_url()?>assets/img/avatar.jpg" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                </div>
                                <div class="ms-4 d-block">
                                    <h4 class="text-dark">Louise Juventus Payong Bali Arakian</h4>
                                    <p class="m-0">CS Kost Finder</p>                                  
                                    <p class="m-0">Louise_Juventus_Payong_Bali_Arakian@gmail.com</p>
                                    <a class="m-0 text-dark" href="https://www.instagram.com/l_juventuss/" ><i class="fab fa-instagram"></i> l_juventuss</a>
                                                                      
                                </div>
                            </div>                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Tastimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-info-50 footer pt-5 mt-5">
            <div class="container py-5">
                <div class="pb-1 mb-4" style="border-bottom: 1px solid rgba(255, 255, 255, 0.5) ;">
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <a href="#">
                                <h1 class="text-light mb-0">Kost Finder</h1>
                                <p class="text-light mb-0">100% Aman & Terpercaya</p>
                            </a>
                        </div>
                        
                        <div class="col-lg-9">
                            <div class="d-flex justify-content-end pt-3">
                                <a class="btn  btn-outline-light me-2 btn-md-square rounded-circle" href="https://www.instagram.com/gus_suggi/"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light me-2 btn-md-square rounded-circle" href="https://www.instagram.com/ghtma.a/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light me-2 btn-md-square rounded-circle" href="https://www.instagram.com/l_juventuss/"><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-md-square rounded-circle" href="https://www.instagram.com/km.yoga/"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Footer End -->

        
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
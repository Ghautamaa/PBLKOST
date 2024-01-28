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
                            <a href="<?php echo base_url ('ctampilan/cari_kost'); ?>" class="nav-item nav-link active text-info">Cari Kost</a>
                            <a href="<?php echo base_url ('ctampilan/daftar_kost'); ?>" class="nav-item nav-link text-info">Daftar Kost</a>
                            <a href="<?php echo base_url ('ctampilan/kontak'); ?>" class="nav-item nav-link text-info" >Kontak kami</a>
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

        <!-- Single Product Start -->
        <div class="container-fluid py-5 mt-5">
            <div class="container py-5">
                <div class="row g-4 mb-5">
                    <div class="col-lg-8 col-xl-9">
                        <div class="row g-4">
                            <div class="col-lg-6">   
                                <div class="border rounded" style="width: 100%; height: 250px; overflow: hidden">
                             
                                        <img src="<?php echo base_url('assets/uploadimg/').$kost_detail->gambar;?>" class="img-fluid rounded" style="; " alt="Image">

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4 class="fw-bold mb-3">Kost <?php echo $kost_detail->namaKost; ?></h4>
                                <p class="mb-3"><?php echo $kost_detail->alamatKost; ?></p>
                                <h5 class="fw-bold mb-3">Rp. <?php echo $kost_detail->hargaKost; ?> / Bulan</h5>
                                
                                <?php
                                    // Mendapatkan total rating
                                    $totalRating = 0;
                                    $totalReviews = count($reviews); // $reviews berisi data ulasan dari database

                                    foreach ($reviews as $review) {
                                        $totalRating += $review->rating;
                                    }

                                    // Menghitung nilai rata-rata
                                    $averageRating = ($totalReviews > 0) ? $totalRating / $totalReviews : 0;
                                ?>
                                    <div class="d-flex mb-4">
                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        if ($i <= round($averageRating)) {
                                            echo '<i class="fa fa-star text-secondary"></i>';
                                        } else {
                                            echo '<i class="fa fa-star"></i>';
                                        }
                                    }
                                    ?>
                                    </div>
                                    <a href="#" class="btn border border-info rounded-pill px-4 py-2 mb-4 text-info" data-bs-toggle="modal" data-bs-target="#hubungiModal">
                                         <i class="fa me-2 text-info"></i> Hubungi Pemilik Kost
                                    </a>
                            </div>

                            <!-- !-- Modal -->
                            <div class="modal fade" id="hubungiModal" tabindex="-1" aria-labelledby="hubungiModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header ">
                                            <h5 class="modal-title text-info" id="hubungiModalLabel">Hubungi Pemilik Kost</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Nomor WhatsApp: <strong><?php echo $kost_detail->nomor_whatsapp; ?></strong></p>
                                            <p>Email: <strong><?php echo $kost_detail->alamat_email; ?></strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-info text-white" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal Search End -->

                            <div class="col-lg-12">
                                <nav>
                                    <div class="nav nav-tabs mb-3">
                                        <button class="nav-link active border-white border-bottom-0 text-info" type="button" role="tab"
                                            id="nav-about-tab" data-bs-toggle="tab" data-bs-target="#nav-about"
                                            aria-controls="nav-about" aria-selected="true">Deskripsi</button>
                                        <button class="nav-link border-white border-bottom-0 text-info" type="button" role="tab"
                                            id="nav-mission-tab" data-bs-toggle="tab" data-bs-target="#nav-mission"
                                            aria-controls="nav-mission" aria-selected="false">Reviews</button>
                                    </div>
                                </nav>
                                <div class="tab-content mb-5">
                                    <div class="tab-pane active" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                        <p><?php echo $kost_detail->deskripsi; ?></p>
                                    </div>
                                    
                                    <div class="tab-pane" id="nav-mission" role="tabpanel" aria-labelledby="nav-mission-tab">
                                        <?php foreach ($reviews as $review): ?>
                                        <div class="d-flex">
                                            <img src="<?=base_url()?>assets/img/avatar.jpg" class="img-fluid rounded-circle p-3" style="width: 100px; height: 100px;" alt="">
                                            <div class="">
                                                <p class="mb-2" style="font-size: 14px;"><?= date('F j, Y, g:i a', strtotime($review->created_at)); ?></p>
                                                <div class="d-flex justify-content-between">
                                                    <h5><?= $review->nama_user; ?></h5>
                                                    <?php for ($i = 1; $i <= 5; $i++): ?>
                                                        <?php if ($i <= $review->rating): ?>
                                                            <i class="fa fa-star text-secondary"></i>
                                                        <?php else: ?>
                                                            <i class="fa fa-star"></i>
                                                        <?php endif; ?>
                                                    <?php endfor; ?>
                                                </div>
                                                <p><?= $review->comment; ?></p>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>                                    
                                </div>
                            </div>
                            <form action="<?= base_url('Cdaftarkost/submitReview'); ?>" method="post">
                                <h4 class="mb-1 fw-bold">Review Kost</h4>
                                <div class="row g-4" >
                                        <input type="hidden" name="id_kost" value="<?= $kost_detail->id_kost; ?>" >
                                    <div class="col-lg-12">
                                        <div class="border-bottom rounded my-4" style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">
                                            <textarea name="comment" class="form-control border-0" cols="30" rows="8" placeholder="Tulis masukan mu disini" spellcheck="false" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between py-3 mb-5">
                                            <div class="d-flex align-items-center">
                                                <p class="mb-0 me-3">Beri rating pada kost</p>
                                                <input type="number" name="rating" class="form-control" min="1" max="5" required placeholder="1-5">
                                            </div>
                                            <button type="submit" class="btn border border-info text-info rounded-pill px-4 py-3">Kirim</button>
                                        </div>
                                    </div>
                                </div>
                            </form>                           
                        </div>
                    </div>
                        <!-- Start Promo Kost -->
                        <!-- <div class="col-lg-4 col-xl-3">
                            <div class="row g-4 fruite">
                                <div class="col-lg-12">
                                    <h4 class="mb-4">Kost yang mungkin kamu sukai!</h4>
                                    <div class="d-flex align-items-center justify-content-start">
                                        <div class="rounded" style="width: 100px; height: 100px;">
                                            <img src="<?=base_url()?>assets/img/featur-1.jpg" class="img-fluid rounded" alt="Image">
                                        </div>
                                        <div>
                                            <h6 class="mb-2">Kost <?= $kost_detail->namaKost ?></h6>
                                            <div class="d-flex mb-2">
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star text-secondary"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <h5 class="fw-bold me-2">2.99 $</h5>
                                                <h5 class="text-danger text-decoration-line-through">4.11 $</h5>
                                            </div>
                                        </div>
                                    </div>                            
                                </div> 
                            </div>
                        </div>           -->
                        <!-- End Promo Kost -->
                </div>
            </div>
        </div>
        <!-- Detail Kost End -->
            
        
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
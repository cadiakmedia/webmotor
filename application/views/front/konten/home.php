<!DOCTYPE html>
<html lang="en">
<?php
$random = (array) $foto;

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Elang Motor Indonesia - Kredit Syariah Tanpa Riba Sepeda Motor Honda dan Yamaha</title>
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preload" href="assets/css/fonts/dm.css" as="style" onload="this.rel='stylesheet'">
    <style>
        .bg-atas {
            background-color: #c00900;
        }

        .btn-utama {
            background-color: #c00900;
        }

        .col-centered {
            float: none;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            <div class="bg-atas text-white fw-bold fs-15 mb-2">
                <div class="container py-2 d-md-flex flex-md-row">
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-location-pin-alt"></i></div>
                        <address class="mb-0">Thamrin City, Jakarta Pusat</address>
                    </div>
                    <div class="d-flex flex-row align-items-center me-6 ms-auto">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-phone-volume"></i></div>
                        <p class="mb-0">0852 1858 3131</p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
                        <p class="mb-0"><a href="mailto:elangmotorindonesia@gmail.com" class="link-white hover">elangmotorindonesia@gmail.com</a></p>
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <nav class="navbar center-nav transparent navbar-expand-lg navbar-light">
                <div class="container flex-lg-row flex-nowrap align-items-center">
                    <div class="navbar-brand w-100"><a href=""><img src="assets/img/logo.png" alt="" /></a></div>
                    <div class="navbar-collapse offcanvas-nav">
                        <div class="offcanvas-header d-lg-none d-xl-none">
                            <a href="start.html"><img src="assets/img/logo-light.png" alt="" /></a>
                            <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
                        </div>
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="">Beranda</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://kredit.elangmotor.com">Pengajuan Kredit</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://kredit.elangmotor.com/page/persyaratan-pengajuan-kredit-motor">Syarat Kredit</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="https://kerjasama.elangmotor.com">Kemitraan</a>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link" href="https://arsip.elangmotor.com">Arsip Akad</a>
                            </li>

                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-collapse -->
                    <div class="navbar-other w-100 d-flex ms-auto">
                        <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                            <li class="nav-item d-none d-md-block">
                                <a href="https://wa.me/6285374807301" class="btn btn-sm btn-success rounded-pill" target="_blank">
                                    Whatsapp Admin
                                </a>
                            </li>
                            <li class="nav-item d-lg-none">
                                <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                            </li>
                        </ul>
                        <!-- /.navbar-nav -->
                    </div>
                    <!-- /.navbar-other -->
                </div>
                <!-- /.container -->
            </nav>
            <!-- /.navbar -->
        </header>
        <!-- /header -->
        <section class="wrapper bg-light">
            <div class="container pt-8 pt-md-14">
                <div class="row gx-lg-0 gx-xl-8 gy-10 gy-md-13 gy-lg-0 mb-7 mb-md-10 mb-lg-16 align-items-center">
                    <div class="col-md-8 offset-md-2 col-lg-6 offset-lg-1 position-relative order-lg-2" data-cue="zoomIn">
                        <div class="shape bg-dot primary rellax w-17 h-19" data-rellax-speed="1" style="top: -1.7rem; left: -1.5rem;"></div>
                        <div class="shape rounded bg-soft-primary rellax d-md-block" data-rellax-speed="0" style="bottom: -1.8rem; right: -0.8rem; width: 85%; height: 90%;"></div>
                        <figure class="rounded"><img src="galery/<?= $random['foto']?>" alt="" /></figure>
                    </div>
                    <!--/column -->
                    <div class="col-lg-5 mt-lg-n10 text-center text-lg-start" data-cues="slideInDown" data-group="page-title" data-delay="600">
                        <h1 class="display-1 mb-5">Telah Hadir di 63 Kota Indonesia Untuk Pelayanan Kredit Syariah Tanpa Riba</h1>
                        <p class="lead fs-25 lh-sm mb-7 px-md-10 px-lg-0">Khusus untuk sepeda motor merek <b class="text-danger">Honda</b> dan <b class="text-primary">Yamaha</b>.</p>
                        <div class="d-flex justify-content-center justify-content-lg-start" data-cues="slideInDown" data-group="page-title-buttons" data-delay="900">
                            <span><a href="https://kredit.elangmotor.com/" class="btn btn-lg btn-danger rounded-pill me-2">Pengajuan Kredit</a></span>
                            <span><a href="https://kredit.elangmotor.com/page/persyaratan-pengajuan-kredit-motor" class="btn btn-lg btn-outline-danger rounded-pill">Syarat Kredit</a></span>
                        </div>
                    </div>
                    <!--/column -->
                </div>
                <!-- /.row -->

                <!-- /.row -->
            </div>
            <!-- /.container -->

            <!-- /.container-fluid -->

            <!-- /section -->
            <!--/.container -->
        </section>
        <section class="wrapper bg-light">
            <div class="container py-14 py-md-16">
                <div class="row gy-6">
                    <div class="col-lg-4">
                        <h2 class="display-4 mt-lg-18 mb-3">Layanan Kami</h2>
                        <p class="lead fs-lg">Kami Menawarkan <span class="underline">layanan terbaik</span>, untuk kredit motor dan peluang kerja sama bisnis.</p>
                        <p>Peluang bisnis kemitraan <b><a href="#" class="hover">bisa dapat untung hingga 40%</a></b> dan bisa bantu ummat.</p>
                        <!-- <a href="#" class="btn btn-primary rounded-pill mt-2">See All Prices</a> -->
                    </div>
                    <!--/column -->
                    <div class="col-lg-7 offset-lg-1 pricing-wrapper">
                        <!-- <div class="pricing-switcher-wrapper switcher justify-content-start justify-content-lg-end">
                            <p class="mb-0 pe-3">Monthly</p>
                            <div class="pricing-switchers">
                                <div class="pricing-switcher pricing-switcher-active"></div>
                                <div class="pricing-switcher"></div>
                                <div class="switcher-button bg-primary"></div>
                            </div>
                            <p class="mb-0 ps-3">Yearly <span class="text-red">(Save 30%)</span></p>
                        </div> -->
                        <div class="row gy-6 position-relative mt-5">
                            <div class="shape bg-dot primary rellax w-16 h-18" data-rellax-speed="1" style="bottom: -0.5rem; right: -1.6rem;"></div>
                            <div class="shape rounded-circle bg-line red rellax w-18 h-18" data-rellax-speed="1" style="top: -1rem; left: -2rem;"></div>
                            <div class="col-md-6">
                                <div class="pricing card">
                                    <div class="card-body pb-12">
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">DP MULAI</span><span class="price-value">3,8</span> <span class="price-currency">Juta</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <h4 class="card-title mt-2">Pengajuan Kredit</h4>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9">
                                            <li><i class="uil uil-check"></i><span><strong>Akad</strong> Murni Jual Beli </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>Tanpa</strong> Bunga </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>Tanpa</strong> Riba Asuransi </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>Tanpa</strong> Denda </span></li>
                                        </ul>
                                        <a href="https://kredit.elangmotor.com" class="btn btn-danger rounded-pill">Pengajuan Kredit</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.pricing -->
                            </div>
                            <!--/column -->
                            <div class="col-md-6 popular">
                                <div class="pricing card">
                                    <div class="card-body pb-12">
                                        <div class="prices text-dark">
                                            <div class="price price-show"><span class="price-currency">Untung Hingga</span><span class="price-value">40</span> <span class="price-currency">%</span></div>
                                        </div>
                                        <!--/.prices -->
                                        <h4 class="card-title mt-2">Peluang Kemitraan</h4>
                                        <ul class="icon-list bullet-bg bullet-soft-primary mt-8 mb-9">
                                            <li><i class="uil uil-check"></i><span><strong>Bisa</strong> Bantu Ummat </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>Bisa</strong> Dapat Untung </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>Bisnis</strong> Penuh Berkah </span></li>
                                            <li><i class="uil uil-check"></i><span><strong>Indonesia</strong> Bebas Riba </span></li>
                                        </ul>
                                        <a href="https://kerjasama.elangmotor.com" class="btn btn-danger rounded-pill">Informasi Kemitraan</a>
                                    </div>
                                    <!--/.card-body -->
                                </div>
                                <!--/.pricing -->
                            </div>
                            <!--/column -->
                        </div>
                        <!--/.row -->
                    </div>
                    <!--/column -->
                </div>
                <!--/.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="bg-light">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="assets/img/logo.png" alt="Elang Motor Indonesia" />
                        <p class="mb-4">© <?= date('Y'); ?> Elang Motor Indonesia. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social">
                            <a href="https://www.facebook.com/elangmotorindonesia" target="_blank"><i class="uil uil-facebook-f"></i></a>
                            <a href="https://www.instagram.com/elangmotor.indonesia/" target="_blank"><i class="uil uil-instagram"></i></a>
                            <a href="#"><i class="uil uil-youtube"></i></a>
                        </nav>
                        <!-- /.social -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title mb-3">Get in Touch</h4>
                        <address class="pe-xl-15 pe-xxl-17">Cosmo Terrace – Thamrin City Lantai 10 No. 1 Jl Kh. Mas Mansyur, Kec. Tanah Abang, Jakarta Pusat</address>
                        <a href="mailto:#" class="link-body">elangmotorindonesia@email.com</a><br /> 0852 1858 3131
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title mb-3">Link Terkait</h4>
                        <ul class="list-unstyled text-reset mb-0">
                            <li><a href="https://kredit.elangmotor.com">Informasi Kredit</a></li>
                            <li><a href="https://kerjasama.elangmotor.com">Informasi Kemitraan</a></li>
                            <li><a href="https://kredit.elangmotor.com/cabang">Dafatar Cabang</a></li>
                        </ul>
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
                <div class="col-md-12 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title mb-3">Ayo Menuju Indonesia Bebas Riba</h4>
                        <p class="mb-5">Kalau Solusi Kredit Syariah Tanpa Riba Tersedia, Kenapa Masih Memilih Kredit Riba?</p>
                        <!-- /.newsletter-wrapper -->
                    </div>
                    <!-- /.widget -->
                </div>
                <!-- /column -->
            </div>
            <!--/.row -->
        </div>
        <!-- /.container -->
    </footer>
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
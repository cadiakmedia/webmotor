<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="<?= $meta_array['meta_keyword'];?>">
    <meta name="description" content="<?= $meta_array['meta_deskripsi'];?>">
    <meta name="image" content="<?=base_url('galery/'.$meta_array['meta_foto']);?>">

    <link rel="shortcut icon" href="<?= base_url('galery/icon/'.$website_array['favicon']) ?>">
    <title><?= $website_array['judul_website'] ?></title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/plugins.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="preload" href="<?=base_url()?>assets/css/fonts/dm.css" as="style" onload="this.rel='stylesheet'">
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
                        <p class="mb-0"><?= $website_array['hp'] ?></p>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <div class="icon text-white fs-22 mt-1 me-2"> <i class="uil uil-message"></i></div>
                        <p class="mb-0"><a href="mailto:<?= $website_array['email'] ?>" class="link-white hover"><?= $website_array['email'] ?></a></p>
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
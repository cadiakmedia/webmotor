<!DOCTYPE html>
<html lang="en">
<?php
$random = (array) $foto;
$meta_array = (array) $meta[0];
$website_array = (array) $website[0];
$akad_array = (array) $akad[0];

?>

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
    <header class="wrapper bg-soft-primary">
      <nav class="navbar center-nav transparent navbar-expand-lg navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100"><a href="start.html"><img src="img/logo.png" srcset="img/logo@2x.png 2x" alt="" /></a></div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="start.html"><img src="img/logo-light.png" srcset="img/logo-light@2x.png 2x" alt="" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#!">Demos</a>
                <ul class="dropdown-menu mega-menu mega-menu-img">
                  <li class="mega-menu-content">
                    <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                      <li class="col"><a class="dropdown-item" href="index.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi1.jpg" srcset="img/demos/mi1@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo I</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index2.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi2.jpg" srcset="img/demos/mi2@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo II</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index3.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi3.jpg" srcset="img/demos/mi3@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo III</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index4.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi4.jpg" srcset="img/demos/mi4@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo IV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index5.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi5.jpg" srcset="img/demos/mi5@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo V</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index6.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi6.jpg" srcset="img/demos/mi6@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index7.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi7.jpg" srcset="img/demos/mi7@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index8.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi8.jpg" srcset="img/demos/mi8@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VIII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index9.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi9.jpg" srcset="img/demos/mi9@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo IX</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index10.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi10.jpg" srcset="img/demos/mi10@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo X</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index11.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi11.jpg" srcset="img/demos/mi11@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index12.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi12.jpg" srcset="img/demos/mi12@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index13.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi13.jpg" srcset="img/demos/mi13@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XIII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index14.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi14.jpg" srcset="img/demos/mi14@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XIV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index15.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi15.jpg" srcset="img/demos/mi15@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index16.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi16.jpg" srcset="img/demos/mi16@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index17.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi17.jpg" srcset="img/demos/mi17@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="index18.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="img/demos/mi18.jpg" srcset="img/demos/mi18@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVIII</span>
                        </a></li>
                    </ul>
                    <!--/.row -->
                  </li>
                  <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Projects</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="projects.html">Projects I</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="projects2.html">Projects II</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="projects3.html">Projects III</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="projects4.html">Projects IV</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Single Projects</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="single-project.html">Single Project I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="single-project2.html">Single Project II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="single-project3.html">Single Project III</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Blocks</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="blocks.html">About</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks2.html">Blog</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks3.html">Clients</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks4.html">Contact</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks5.html">Facts</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks6.html">FAQ</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks7.html">Portfolio</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks8.html">Pricing</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks9.html">Process</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks10.html">Services</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks11.html">Team</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="blocks12.html">Testimonials</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="services.html">Services I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="services2.html">Services II</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">About</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="about.html">About I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="about2.html">About II</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="blog.html">Blog without Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="blog2.html">Blog with Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="blog3.html">Blog with Left Sidebar</a></li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog Posts</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="blog-post.html">Post without Sidebar</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="blog-post2.html">Post with Sidebar</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="blog-post3.html">Post with Left Sidebar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Contact</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="contact.html">Contact I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="contact2.html">Contact II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="contact3.html">Contact III</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Features</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Header</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Center Nav</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="header.html">Transparent</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header2.html">Light</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header3.html">Dark</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header4.html">Fancy</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Classic</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="header5.html">Transparent</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header6.html">Light</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header7.html">Dark</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header8.html">Fancy</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Center Logo</a>
                        <ul class="dropdown-menu">
                          <li class="nav-item"><a class="dropdown-item" href="header9.html">Transparent</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header10.html">Light</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header11.html">Dark</a></li>
                          <li class="nav-item"><a class="dropdown-item" href="header12.html">Fancy</a></li>
                        </ul>
                      </li>
                      <li class="nav-item"><a class="dropdown-item" href="header13.html">Extended</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Footer</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="footer.html">Footer I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="footer2.html">Footer II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="footer3.html">Footer III</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="footer4.html">Footer IV</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="footer5.html">Footer V</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Page Title</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="page-title.html">Page Title I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="page-title2.html">Page Title II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="page-title3.html">Page Title III</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Modal Popup</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="modal-popup1.html">Modal Popup I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="modal-popup2.html">Modal Popup II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="modal-popup3.html">Modal Popup III</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="dropdown-item" href="notification-bar.html">Notification Bar</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="colors.html">Colors</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="onepage.html">One Page</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="mega-menu-content">
                    <div class="row gx-0 gx-lg-3">
                      <div class="col-lg-6">
                        <h6 class="dropdown-header">General Elements</h6>
                        <div class="row gx-0">
                          <div class="col-lg-6">
                            <ul class="list-unstyled">
                              <li><a class="dropdown-item scroll" href="elements.html#buttons-badges">Buttons & Badges</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#counter">Counter</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#dividers">Dividers</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#form-elements">Form Elements</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#icon-box">Icon Box</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#image-hover">Image Hover</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#lightbox">Lightbox</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#modal">Modal</a></li>
                            </ul>
                          </div>
                          <!--/column -->
                          <div class="col-lg-6">
                            <ul class="list-unstyled">
                              <li><a class="dropdown-item scroll" href="elements.html#pricing-table">Pricing Table</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#process">Process</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#progressbar">Progressbar</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#shadows">Shadows</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#tabs">Tabs</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#team">Team</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#testimonials">Testimonials</a></li>
                              <li><a class="dropdown-item scroll" href="elements.html#toggle-accordion">Toggle & Accordion</a></li>
                            </ul>
                          </div>
                          <!--/column -->
                        </div>
                        <!--/.row -->
                      </div>
                      <!--/column -->
                      <div class="col-lg-3">
                        <h6 class="dropdown-header">Misc Elements</h6>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item" href="carousel.html">Carousel</a></li>
                          <li><a class="dropdown-item" href="icon-concept.html">Icons - Concept</a></li>
                          <li><a class="dropdown-item" href="icon-duotone.html">Icons - Duotone</a></li>
                          <li><a class="dropdown-item" href="icon-unicons.html">Icons - Unicons</a></li>
                          <li><a class="dropdown-item" href="player.html">Media Player</a></li>
                          <li><a class="dropdown-item" href="animations.html">Scroll Animations</a></li>
                          <li><a class="dropdown-item" href="wrappers.html">Wrappers</a></li>
                          <li><a class="dropdown-item" href="wrappers-angled.html">Wrappers - Angled</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                      <div class="col-lg-3">
                        <h6 class="dropdown-header">Typography</h6>
                        <ul class="list-unstyled">
                          <li><a class="dropdown-item scroll" href="typography.html#basic">Basic Typography</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#alerts">Alerts</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#animated-text">Animated Text</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#blockquote">Blockquote</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#dropcap">Dropcap</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#lists">Lists</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#tooltip-popover">Tooltip & Popover</a></li>
                          <li><a class="dropdown-item scroll" href="typography.html#misc">Miscellaneous</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                    </div>
                    <!--/.row -->
                  </li>
                  <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
              </li>
            </ul>
            <!-- /.navbar-nav -->
          </div>
          <!-- /.navbar-collapse -->
          <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
              <li class="nav-item dropdown language-select text-uppercase">
                <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                </ul>
              </li>
              <li class="nav-item d-none d-md-block">
                <a href="contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
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
    <section class="wrapper bg-soft-primary">
      <div class="container pt-10 pb-12 pt-md-14 pb-md-16 text-center">
        <div class="row">
          <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h1 class="display-1 mb-3">Business News</h1>
            <p class="lead px-lg-5 px-xxl-8">Welcome to our journal. Here you can find the latest company news and business articles.</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light wrapper-border">
      <div class="container inner py-8">
        <div class="row gx-lg-8 gx-xl-12 gy-4 gy-lg-0">
          <div class="col-lg-8 align-self-center">
            <div class="blog-filter filter">
              <p>Blog Filter:</p>
              <ul>
                <li><a class="active" href="#">Paper</a></li>
                <li><a href="#">Fabric</a></li>
                <li><a href="#">Fashion</a></li>
                <li><a href="#">Party</a></li>
                <li><a href="#">Printables</a></li>
              </ul>
            </div>
            <!--/.filter -->
          </div>
          <!--/column -->
          <aside class="col-lg-4 sidebar">
            <form class="search-form">
              <div class="form-label-group mb-0">
                <input id="search-form" type="text" class="form-control" placeholder="Search">
                <label for="search-form">Search</label>
              </div>
            </form>
            <!-- /.search-form -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!--/.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-8">
            <div class="blog classic-view">
              
              <!-- /.post -->
              <article class="post">
                <div class="card">
                  <div class="post-slider card-img-top">
                    <div class="basic-slider owl-carousel dots-over" data-nav="true" data-margin="5">
                      <?php foreach($foto_akad as $f){?>
                      <div class="item"><img src="<?= base_url('galery/').$f->foto?>" class="" alt="" /></div>
                      <?php }?>
                    </div>
                    <!-- /.basic-slider -->
                  </div>
                  <!-- /.post-slider -->
                  <div class="card-body">
                    <div class="post-header">
                      <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Ideas</a>
                      </div>
                      <!-- /.post-category -->
                      <h2 class="post-title mt-1 mb-0"><a class="link-dark" href="blog-post.html"><?=$akad_array['judul']?></a></h2>
                    </div>
                    <!-- /.post-header -->
                    <div class="post-content">
                    <?=$akad_array['konten']?>
                    </div>
                    <!-- /.post-content -->
                  </div>
                  <!--/.card-body -->
                  <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>
                        <?php $time = strtotime($akad_array['created_at']);
                              echo $newformat = date('d-m-Y',$time);?>
                              </span></li>
                      <?php foreach($user as $u){
                       if($akad_array['created_by'] == $u->id_user ) {?>
                      <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By <?=$u->nama_user?></span></a></li>
                      <?php } } ?>
                      
                      
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!-- /.card -->
              </article>
              
              <!-- /.post -->
              
              <!-- /.post -->
            </div>
            <!-- /.blog -->
           
            
            <!-- /nav -->
          </div>
          <!-- /column -->
          <aside class="col-lg-4 sidebar mt-8 mt-lg-6">
            <div class="widget">
              <h4 class="widget-title mb-3">About Us</h4>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
              <nav class="nav social">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
              <!-- /.social -->
              <div class="clearfix"></div>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Popular Posts</h4>
              <ul class="image-list">
                <li>
                  <figure class="rounded"><a href="blog-post.html"><img src="img/photos/a1.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="blog-post.html">Magna Mollis Ultricies</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>26 Mar 2021</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>3</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"> <a href="blog-post.html"><img src="img/photos/a2.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="blog-post.html">Ornare Nullam Risus</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16 Feb 2021</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>6</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <li>
                  <figure class="rounded"><a href="blog-post.html"><img src="img/photos/a3.jpg" alt="" /></a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="blog-post.html">Euismod Nullam Fusce</a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>8 Jan 2021</span></li>
                      <li class="post-comments"><a href="#"><i class="uil uil-comment"></i>5</a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Categories</h4>
              <ul class="unordered-list bullet-primary text-reset">
                <li><a href="#">Teamwork (21)</a></li>
                <li><a href="#">Ideas (19)</a></li>
                <li><a href="#">Workspace (16)</a></li>
                <li><a href="#">Coding (7)</a></li>
                <li><a href="#">Meeting (12)</a></li>
                <li><a href="#">Business Tips (14)</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Tags</h4>
              <ul class="list-unstyled tag-list">
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Still Life</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Urban</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Nature</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Landscape</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Macro</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Fun</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Workshop</a></li>
                <li><a href="#" class="btn btn-soft-ash btn-sm rounded-pill">Photography</a></li>
              </ul>
            </div>
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Archive</h4>
              <ul class="unordered-list bullet-primary text-reset">
                <li><a href="#">February 2019</a></li>
                <li><a href="#">January 2019</a></li>
                <li><a href="#">December 2018</a></li>
                <li><a href="#">November 2018</a></li>
                <li><a href="#">October 2018</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </aside>
          <!-- /column .sidebar -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="img/logo-light.png" srcset="img/logo-light@2x.png 2x" alt="" />
            <p class="mb-4">© 2021 Sandbox. <br class="d-none d-lg-block" />All rights reserved.</p>
            <nav class="nav social social-white">
              <a href="#"><i class="uil uil-twitter"></i></a>
              <a href="#"><i class="uil uil-facebook-f"></i></a>
              <a href="#"><i class="uil uil-dribbble"></i></a>
              <a href="#"><i class="uil uil-instagram"></i></a>
              <a href="#"><i class="uil uil-youtube"></i></a>
            </nav>
            <!-- /.social -->
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Get in Touch</h4>
            <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United Kingdom</address>
            <a href="mailto:#">info@email.com</a><br /> +00 (123) 456 78 90
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Learn More</h4>
            <ul class="list-unstyled mb-0">
              <li><a href="#">About Us</a></li>
              <li><a href="#">Our Story</a></li>
              <li><a href="#">Projects</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /column -->
        <div class="col-md-12 col-lg-3">
          <div class="widget">
            <h4 class="widget-title text-white mb-3">Our Newsletter</h4>
            <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.</p>
            <div class="newsletter-wrapper">
              <!-- Begin Mailchimp Signup Form -->
              <div id="mc_embed_signup2">
                <form action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a" method="post" id="mc-embedded-subscribe-form2" name="mc-embedded-subscribe-form" class="validate dark-fields" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll2">
                    <div class="mc-field-group input-group form-label-group">
                      <input type="email" value="" name="EMAIL" class="required email form-control" placeholder="Email Address" id="mce-EMAIL2">
                      <label for="mce-EMAIL2">Email Address</label>
                      <input type="submit" value="Join" name="subscribe" id="mc-embedded-subscribe2" class="btn btn-primary">
                    </div>
                    <div id="mce-responses2" class="clear">
                      <div class="response" id="mce-error-response2" style="display:none"></div>
                      <div class="response" id="mce-success-response2" style="display:none"></div>
                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc" tabindex="-1" value=""></div>
                    <div class="clear"></div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
            </div>
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
    <script src="<?=base_url()?>assets/js/plugins.js"></script>
    <script src="<?=base_url()?>assets/js/theme.js"></script>
</body>

</html>
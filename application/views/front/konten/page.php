
<!DOCTYPE html>
<html lang="en">

<?php
$random = (array) $foto;
$meta_array = (array) $meta[0];
$website_array = (array) $website[0];
$page_array = (array) $page[0];

?>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="<?= $meta_array['meta_keyword'];?>">
    <meta name="description" content="<?= $meta_array['meta_deskripsi'];?>">
    <meta name="image" content="<?=base_url('galery/'.$meta_array['meta_foto']);?>">

    <link rel="shortcut icon" href="<?= base_url('galery/icon/'.$website_array['favicon']) ?>">
    <title><?= $website_array['judul_website'] ?></title>
    <link rel="stylesheet" href="<?= base_url()?>assets/css/plugins.css">
    <link rel="stylesheet" href="<?= base_url()?>assets/css/style.css">
</head>

<body>
  <div class="content-wrapper">
    <header class="wrapper bg-soft-primary">
      <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
          <div class="navbar-brand w-100">
            <a href="./index.html">
              <img src="./assets/img/logo.png" srcset="./assets/img/logo@2x.png 2x" alt="" />
            </a>
          </div>
          <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
              <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
              <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link" href="#!">Demos</a>
                <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                  <li class="mega-menu-content">
                    <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-4 gy-lg-2 list-unstyled">
                      <li class="col"><a class="dropdown-item" href="./demo1.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi1.jpg" srcset="./assets/img/demos/mi1@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo I</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo2.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi2.jpg" srcset="./assets/img/demos/mi2@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo II</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo3.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi3.jpg" srcset="./assets/img/demos/mi3@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo III</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo4.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi4.jpg" srcset="./assets/img/demos/mi4@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo IV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo5.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi5.jpg" srcset="./assets/img/demos/mi5@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo V</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo6.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi6.jpg" srcset="./assets/img/demos/mi6@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo7.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi7.jpg" srcset="./assets/img/demos/mi7@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo8.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi8.jpg" srcset="./assets/img/demos/mi8@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo VIII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo9.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi9.jpg" srcset="./assets/img/demos/mi9@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo IX</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo10.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi10.jpg" srcset="./assets/img/demos/mi10@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo X</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo11.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi11.jpg" srcset="./assets/img/demos/mi11@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo12.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi12.jpg" srcset="./assets/img/demos/mi12@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo13.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi13.jpg" srcset="./assets/img/demos/mi13@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XIII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo14.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi14.jpg" srcset="./assets/img/demos/mi14@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XIV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo15.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi15.jpg" srcset="./assets/img/demos/mi15@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XV</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo16.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi16.jpg" srcset="./assets/img/demos/mi16@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVI</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo17.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi17.jpg" srcset="./assets/img/demos/mi17@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVII</span>
                        </a></li>
                      <li class="col"><a class="dropdown-item" href="./demo18.html">
                          <figure class="rounded lift d-none d-lg-block"><img src="./assets/img/demos/mi18.jpg" srcset="./assets/img/demos/mi18@2x.jpg 2x" alt=""></figure>
                          <span class="d-lg-none">Demo XVIII</span>
                        </a></li>
                    </ul>
                    <!--/.row -->
                  </li>
                  <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Pages</a>
                <ul class="dropdown-menu">
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Services</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="./services.html">Services I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./services2.html">Services II</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">About</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="./about.html">About I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./about2.html">About II</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Contact</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="./contact.html">Contact I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./contact2.html">Contact II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./contact3.html">Contact III</a></li>
                    </ul>
                  </li>
                  <li class="nav-item"><a class="dropdown-item" href="./pricing.html">Pricing</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="./onepage.html">One Page</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Projects</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="./projects.html">Projects I</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="./projects2.html">Projects II</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="./projects3.html">Projects III</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="./projects4.html">Projects IV</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Single Projects</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="./single-project.html">Single Project I</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./single-project2.html">Single Project II</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./single-project3.html">Single Project III</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#!">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="dropdown-item" href="./blog.html">Blog without Sidebar</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="./blog2.html">Blog with Sidebar</a></li>
                  <li class="nav-item"><a class="dropdown-item" href="./blog3.html">Blog with Left Sidebar</a></li>
                  <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">Blog Posts</a>
                    <ul class="dropdown-menu">
                      <li class="nav-item"><a class="dropdown-item" href="./blog-post.html">Post without Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./blog-post2.html">Post with Sidebar</a></li>
                      <li class="nav-item"><a class="dropdown-item" href="./blog-post3.html">Post with Left Sidebar</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link" href="#!">Blocks</a>
                <ul class="dropdown-menu mega-menu mega-menu-dark mega-menu-img">
                  <li class="mega-menu-content">
                    <ul class="row row-cols-1 row-cols-lg-6 gx-0 gx-lg-6 gy-lg-4 list-unstyled">
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/about.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block1.svg" alt=""></div>
                          <span>About</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/blog.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block2.svg" alt=""></div>
                          <span>Blog</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/call-to-action.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block3.svg" alt=""></div>
                          <span>Call to Action</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/clients.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block4.svg" alt=""></div>
                          <span>Clients</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/contact.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block5.svg" alt=""></div>
                          <span>Contact</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/facts.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block6.svg" alt=""></div>
                          <span>Facts</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/faq.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block7.svg" alt=""></div>
                          <span>FAQ</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/features.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block8.svg" alt=""></div>
                          <span>Features</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/footer.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block9.svg" alt=""></div>
                          <span>Footer</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/hero.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block10.svg" alt=""></div>
                          <span>Hero</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/navbar.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block11.svg" alt=""></div>
                          <span>Navbar</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/portfolio.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block12.svg" alt=""></div>
                          <span>Portfolio</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/pricing.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block13.svg" alt=""></div>
                          <span>Pricing</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/process.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block14.svg" alt=""></div>
                          <span>Process</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/team.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block15.svg" alt=""></div>
                          <span>Team</span>
                        </a>
                      </li>
                      <li class="col"><a class="dropdown-item" href="./docs/blocks/testimonials.html">
                          <div class="rounded img-svg d-none d-lg-block p-4 mb-lg-2"><img class="rounded-0" src="./assets/img/demos/block16.svg" alt=""></div>
                          <span>Testimonials</span>
                        </a>
                      </li>
                    </ul>
                    <!--/.row -->
                  </li>
                  <!--/.mega-menu-content-->
                </ul>
                <!--/.dropdown-menu -->
              </li>
              <li class="nav-item"><a class="nav-link" href="./docs/index.html">Documentation</a>
                <ul class="dropdown-menu mega-menu">
                  <li class="mega-menu-content">
                    <div class="row gx-0 gx-lg-3">
                      <div class="col-lg-4">
                        <h6 class="dropdown-header">Usage</h6>
                        <ul class="list-unstyled cc-2 pb-lg-1">
                          <li><a class="dropdown-item" href="./docs/index.html">Get Started</a></li>
                          <li><a class="dropdown-item" href="./docs/forms.html">Forms</a></li>
                          <li><a class="dropdown-item" href="./docs/faq.html">FAQ</a></li>
                          <li><a class="dropdown-item" href="./docs/changelog.html">Changelog</a></li>
                          <li><a class="dropdown-item" href="./docs/credits.html">Credits</a></li>
                        </ul>
                        <h6 class="dropdown-header mt-lg-6">Styleguide</h6>
                        <ul class="list-unstyled cc-2">
                          <li><a class="dropdown-item" href="./docs/styleguide/colors.html">Colors</a></li>
                          <li><a class="dropdown-item" href="./docs/styleguide/fonts.html">Fonts</a></li>
                          <li><a class="dropdown-item" href="./docs/styleguide/duotone-icons.html">Duotone Icons</a></li>
                          <li><a class="dropdown-item" href="./docs/styleguide/unicons.html">Unicons</a></li>
                          <li><a class="dropdown-item" href="./docs/styleguide/illustrations.html">Illustrations</a></li>
                          <li><a class="dropdown-item" href="./docs/styleguide/media.html">Media</a></li>
                          <li><a class="dropdown-item" href="./docs/styleguide/abstract.html">Abstract Images</a></li>
                          <li><a class="dropdown-item" href="./docs/styleguide/misc.html">Misc</a></li>
                        </ul>
                      </div>
                      <!--/column -->
                      <div class="col-lg-8">
                        <h6 class="dropdown-header">Elements</h6>
                        <ul class="list-unstyled cc-3">
                          <li><a class="dropdown-item" href="./docs/elements/accordion.html">Accordion</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/alerts.html">Alerts</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/animations.html">Animations</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/avatars.html">Avatars</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/background.html">Background</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/badges.html">Badges</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/breadcrumb.html">Breadcrumb</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/buttons.html">Buttons</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/carousel.html">Carousel</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/dividers.html">Dividers</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/form-elements.html">Form Elements</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/hover.html">Hover</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/image-mask.html">Image Mask</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/lightbox.html">Lightbox</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/lists.html">Lists</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/player.html">Media Player</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/modal.html">Modal</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/progressbar.html">Progressbar</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/shadows.html">Shadows</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/shapes.html">Shapes</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/tables.html">Tables</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/tabs.html">Tabs</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/text-highlight.html">Text Highlight</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/tooltips-popovers.html">Tooltips & Popovers</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/typed-text.html">Typed Text</a></li>
                          <li><a class="dropdown-item" href="./docs/elements/typography.html">Typography</a></li>
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
                <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
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
      <div class="container pt-10 pb-5 pt-md-14 pb-md-8 text-center">
        <div class="row">
          <div class="col-xl-5 mx-auto mb-6">
            <h1 class="display-1 mb-3"><?= $page_array['judul']?></h1>
            <p class="lead mb-0">A company turning ideas into beautiful things.</p>
          </div>
          <!-- /column -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
    

<section class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row gx-lg-8 gx-xl-12 gy-10 align-items-center">
      <div class="col-lg-7 order-lg-2">
        <figure>
          <img class="w-auto" src="<?= base_url('galery/').$page_array['featur_image']?>" srcset="<?= base_url('galery/').$page_array['featur_image']?> 2x" alt="" />
        </figure>
      </div>
      <!--/column -->
      <div class="col-lg-5">
        <h2 class="fs-15 text-uppercase text-line text-primary mb-3">Why Choose Us?</h2>
        <h3 class="display-5 mb-7">A few reasons why our valued customers choose us.</h3>
        <div class="accordion accordion-wrapper" id="accordionExample">
          <div class="card plain accordion-item">
            <div class="card-header" id="headingOne">
              <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Professional Design </button>
            </div>
            <!--/.card-header -->
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingTwo">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Top-Notch Support </button>
            </div>
            <!--/.card-header -->
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
          <div class="card plain accordion-item">
            <div class="card-header" id="headingThree">
              <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Header and Slider Options </button>
            </div>
            <!--/.card-header -->
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
              <div class="card-body">
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel.</p>
              </div>
              <!--/.card-body -->
            </div>
            <!--/.accordion-collapse -->
          </div>
          <!--/.accordion-item -->
        </div>
        <!--/.accordion -->
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
  <footer class="bg-dark text-inverse">
    <div class="container py-13 py-md-15">
      <div class="row gy-6 gy-lg-0">
        <div class="col-md-4 col-lg-3">
          <div class="widget">
            <img class="mb-4" src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" />
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
            <ul class="list-unstyled  mb-0">
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
                    <div class="mc-field-group input-group form-floating">
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
  <script src="assets/js/plugins.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
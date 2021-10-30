<footer class="bg-light">
        <div class="container py-13 py-md-15">
            <div class="row gy-6 gy-lg-0">
                <div class="col-md-4 col-lg-3">
                    <div class="widget">
                        <img class="mb-4" src="assets/img/logo.png" alt="Elang Motor Indonesia" />
                        <p class="mb-4">© <?= date('Y'); ?> Elang Motor Indonesia. <br class="d-none d-lg-block" />All rights reserved.</p>
                        <nav class="nav social">
                            <a href="<?= $website_array['link_fb'] ?>" target="_blank"><i class="uil uil-facebook-f"></i></a>
                            <a href="<?= $website_array['link_ig'] ?>" target="_blank"><i class="uil uil-instagram"></i></a>
                            <a href="<?= $website_array['link_yt'] ?>"><i class="uil uil-youtube"></i></a>
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
                        <?php foreach ($link as $L) :?>
                            <li><a href="<?= $L->link; ?>"><?= $L->judul; ?></a></li>
                            <?php endforeach; ?>
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
    <script src="<?=base_url()?>assets/js/plugins.js"></script>
    <script src="<?=base_url()?>assets/js/theme.js"></script>
    <svript>
    location.reload(true);
    </svript>
</body>

</html>
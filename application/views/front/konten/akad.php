
    <!-- /header -->
 
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
                      <!-- <div class="post-category text-line">
                        <a href="#" class="hover" rel="category">Ideas</a>
                      </div> -->
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
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-eye"></i><?=$akad_array['clicked']?></a></li>
                      
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
            <!-- <div class="widget">
              <h4 class="widget-title mb-3">About Us</h4>
              <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum. Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus.</p>
              <nav class="nav social">
                <a href="#"><i class="uil uil-twitter"></i></a>
                <a href="#"><i class="uil uil-facebook-f"></i></a>
                <a href="#"><i class="uil uil-dribbble"></i></a>
                <a href="#"><i class="uil uil-instagram"></i></a>
                <a href="#"><i class="uil uil-youtube"></i></a>
              </nav>
             
              <div class="clearfix"></div>
            </div> -->
            <!-- /.widget -->
            <div class="widget">
              <h4 class="widget-title mb-3">Popular Posts</h4>
              <ul class="image-list">
                <?php foreach($pop_akad as $p){ ?>
                <li>
                  <figure class="rounded"><a href="<?= base_url()?>akad/<?=$p->slug?>">
                  <?php foreach($all_foto_akad as $f){?>
                   <?php if($f->id_akad === $p->id){  ?>
                    <img src="<?= base_url('galery/').$f->foto?>" alt="" />
                    <?php   break;  };?>
                    <?php };?>
                  </a></figure>
                  <div class="post-content">
                    <h6 class="mb-2"> <a class="link-dark" href="<?= base_url()?>akad/<?=$p->slug?>"><?= $p->judul?></a> </h6>
                    <ul class="post-meta">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span><?= $newformat?></span></li>

                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-eye"></i><?=$p->clicked?></a></li>
                    </ul>
                    <!-- /.post-meta -->
                  </div>
                </li>
                <?php }?>
            
              </ul>
              <!-- /.image-list -->
            </div>
            <!-- /.widget -->
    
          
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

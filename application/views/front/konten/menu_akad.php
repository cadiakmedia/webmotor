
    <!-- /header -->
    <div class="col-md-7 col-lg-6 col-xl-5 mx-auto">
            <h1 class="display-1 mt-8 mb-3" style="text-align:center">Galery Akad</h1>
           
          </div>
    <!-- /section -->
    <section class="wrapper bg-light">
      <div class="container py-14 py-md-16">
        <div class="row gx-lg-8 gx-xl-12">
          <div class="col-lg-12">
            
            <!-- /.blog -->
            <div class="blog grid grid-view">
              <div class="row  gx-md-12 gy-12 mb-12">
                  <?php foreach($akad as $a){ ?>
                    
                <article class="post col-md-4">
                  <div class="card">
                 
                  <div class="post-slider card-img-top overlay overlay1 hover-scale">
                    <div class="basic-slider owl-carousel dots-over" data-nav="true" data-margin="5">
                    <?php foreach($foto_akad as $f){?>
                   <?php if($f->id_akad === $a->id){ ?>
                    <a href="<?= base_url()?>akad/<?=$a->slug?>">
                     <div class="item"><img src="<?= base_url('galery/').$f->foto?>" class="" alt="" /></div>
                     </a>
                 <?php };?>
                 <?php };?>
                    </div>
                    <!-- /.basic-slider -->
                  </div>  
         
                    <div class="card-body">
                   
                      <div class="post-header">
                        <!-- <div class="post-category text-line">
                          <a href="#" class="hover" rel="category">Coding</a>
                        </div> -->
                        <!-- /.post-category -->
                        <h2 class="post-title h3 mt-1 mb-3"><a class="link-dark" href="<?= base_url()?>akad/<?=$a->slug?>"><?= $a->judul?></a></h2>
                      </div>
                      <!-- /.post-header -->
                      <div class="post-content">
                   
                        <?= $small = substr($a->konten, 0, 300).'.....'?>
                      </div>
                      <!-- /.post-content -->
                    </div>
                    <!--/.card-body -->
                    <div class="card-footer">
                    <ul class="post-meta d-flex mb-0">
                      <li class="post-date"><i class="uil uil-calendar-alt"></i><span>
                        <?php $time = strtotime($a->created_at);
                              echo $newformat = date('d-m-Y',$time);?>
                              </span></li>
                      <?php foreach($user as $u){
                       if($a->created_by == $u->id_user ) {?>
                      <li class="post-author"><a href="#"><i class="uil uil-user"></i><span>By <?=$u->nama_user?></span></a></li>
                      <?php } } ?>
                      <li class="post-likes ms-auto"><a href="#"><i class="uil uil-eye"></i><?=$a->clicked?></a></li>
                      
                    </ul>
                      <!-- /.post-meta -->
                    </div>
                    <!-- /.card-footer -->
                  </div>
                  <!-- /.card -->
                </article>
                <?php }?>
                <!-- /.post -->
              
                <!-- /.post -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.blog -->
          
            <!-- /nav -->
          </div>
          <!-- /column -->
          
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->


    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
      <div class="container-md" data-aos="fade-in">
        <div class="row">
          <div class="col-12">
            <div class="swiper sliderFeaturedPosts">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end text-decoration-none" style="background-image: url('assets/img/post-slide-1.jpg');">
                    <div class="img-bg-inner">
                      <h2>The Best Homemade Masks for Face (keep the Pimples Away)</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end text-decoration-none" style="background-image: url('assets/img/post-slide-2.jpg');">
                    <div class="img-bg-inner">
                      <h2>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end text-decoration-none" style="background-image: url('assets/img/post-slide-3.jpg');">
                    <div class="img-bg-inner">
                      <h2>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>

                <div class="swiper-slide">
                  <a href="single-post.html" class="img-bg d-flex align-items-end text-decoration-none" style="background-image: url('assets/img/post-slide-4.jpg');">
                    <div class="img-bg-inner">
                      <h2>9 Half-up/half-down Hairstyles for Long and Medium Hair</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem neque est mollitia! Beatae minima assumenda repellat harum vero, officiis ipsam magnam obcaecati cumque maxime inventore repudiandae quidem necessitatibus rem atque.</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="custom-swiper-button-next">
                <span class="bi-chevron-right"></span>
            </div>
              <div class="custom-swiper-button-prev">
                <span class="bi-chevron-left"></span>
              </div>

              <div class="swiper-pagination"></div>
          </div>
            
        
        <div class="container" style="padding-top: 50px;">
          <div class="row justify-content-center">
            <div class="col-lg-12 align-center">
              <div class="row justify-content-center">
          
                <div class="col-lg-3 col-md-6">
                  <div class="counter-box text-center">
                    <a href="#" class="text-decoration-none">
                      <table align="center">
                        <tr>
                        <td><img src="https://dummyimage.com/45x45/bfb4bf/fff.png&text=45x45" class="rounded-circle text-center" height="70" alt="..."></td>
                        </tr>
                        <tr>
                        <td><h6 class="counter-head text-muted"> Layanan Masyarakat</h6></td>
                        </tr>
                      </table>
                    </a>
                  </div>
                </div>
           
                <div class="col-lg-3 col-md-6">
                  <div class="counter-box text-center">
                    <a href="#" class="text-decoration-none">
                      <table align="center">
                        <tr>
                        <td><img src="https://dummyimage.com/45x45/bfb4bf/fff.png&text=45x45" class="rounded-circle" height="70" alt="..."></td>
                        </tr>
                        <tr>
                        <td><h6 class="counter-head text-muted"> Statistik Desa</h6></td>
                        </tr>
                      </table>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter-box text-center">
                    <a href="#" class="text-decoration-none">
                      <table align="center">
                        <tr>
                        <td><img src="https://dummyimage.com/45x45/bfb4bf/fff.png&text=45x45" class="rounded-circle" height="70" alt="..."></td>
                        </tr>
                        <tr>
                        <td><h6 class="counter-head text-muted"> APB Desa</h6></td>
                        </tr>
                      </table>
                    </a>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6">
                  <div class="counter-box text-center">
                    <a href="#" class="text-decoration-none">
                      <table align="center">
                        <tr>
                        <td><img src="https://dummyimage.com/45x45/bfb4bf/fff.png&text=45x45" class="rounded-circle" height="70" alt="..."></td>
                        </tr>
                        <tr>
                        <td><h6 class="counter-head text-muted"> Kegiatan Desa</h6></td>
                        </tr>
                      </table>
                    </a>
                  </div>
                </div>
          </div>
        </div>
        </div>
        </div>
      </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
      <div class="container">
        
        <h1>Artikel Terkini</h1>
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <?php
                $cate = $_GET['category'];
                $search = $_GET['search'];
                
                $hal = (isset($_GET['hal'])) ? $_GET['hal'] : 1;
                if ($hal == 1 && $cate == "" && $search == ""|| !isset($cate) && $search == "" && $hal == 1 || !isset($search) && $cate == "" && $hal == 1) {
                $posterkini = query("SELECT * FROM post ORDER BY id DESC LIMIT 0,1");
                foreach ($posterkini as $data){
                 ?>
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted"><?= $data['date_created'] ?></div>
                        <h2 class="card-title"><?= $data['subject'] ?></h2>
                        <p class="card-text"><?php if ($detect->isMobile() && !$detect->isTablet()) {
                                  echo substr(strip_tags($data['body']), 0, 200);
                                }else{echo substr(strip_tags($data['body']), 0, 750);} ?></p>
                        <a class="btn btn-primary" href="?page=view-post&id=<?php echo base64_encode($data['id']);?>">Read more →</a>
                    </div>
                </div>
              <?php }} ?>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                     <?php
                        if (isset($cate) && !isset($search)) {
                          $scate = query("SELECT * FROM post_category WHERE category_name='$cate'");
                        
                        $showdata = 4;
                        $jumlahdata = count(query("SELECT * FROM post WHERE category='".$scate[0]['id']."'"));
                        $jumlahhalaman = ceil($jumlahdata / $showdata);
                        if ($jumlahhalaman == 0) {
                          $jumlahhalaman =1;
                        }
                        $awaldata = (($showdata * $hal) - $showdata);
                        $post = query("SELECT * FROM post WHERE category='".$scate[0]['id']."' ORDER BY id DESC LIMIT ".$awaldata.", ".$showdata."");
                        }elseif (isset($search) && !isset($cate)) {
                        $showdata = 4;
                        $jumlahdata = count(query("SELECT * FROM `post` WHERE `subject` LIKE '%$search%' OR `body` LIKE '%$search%'"));
                        $jumlahhalaman = ceil($jumlahdata / $showdata);
                        if ($jumlahhalaman == 0) {
                          $jumlahhalaman =1;
                        }
                        $awaldata = (($showdata * $hal) - $showdata);
                        $post = query("SELECT * FROM `post` WHERE `subject` LIKE '%$search%' OR `body` LIKE '%$search%' ORDER BY id DESC LIMIT ".$awaldata.", ".$showdata."");
                        }else{

                        $showdata = 4;
                        $jumlahdata = count(query("SELECT * FROM post")) - 1;
                        $jumlahhalaman = ceil($jumlahdata / $showdata);
                        $awaldata = (($showdata * $hal) - $showdata)+1;
                        $post = query("SELECT * FROM post ORDER BY id DESC LIMIT ".$awaldata.", ".$showdata."");
                        }
                        foreach ($post as $data) {
                         ?><div class="col-lg-6">
                        <!-- Blog post-->
                       
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?= $data['date_created']; ?></div>
                                <h2 class="card-title h4"><?= $data['subject']; ?></h2>
                                <p class="card-text"><?php if ($detect->isMobile() && !$detect->isTablet()) {
                                  echo substr(strip_tags($data['body']), 0, 200);
                                }else{echo substr(strip_tags($data['body']), 0, 250);} ?></p>
                                <a class="btn btn-primary" href="?page=view-post&id=<?php echo base64_encode($data['id']);?>">Read more →</a>
                            </div>
                        </div>
                        <!-- More Blog post-->
                    </div>
                      <?php } 
                      $prevpage = $hal - 1;
                      $nextpage = $hal + 1;
                      ?>
                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <?php 

                    if (isset($cate) && !isset($search)) { ?>
                      <ul class="pagination justify-content-center my-4">
                        <li class="page-item <?php if($hal == 1){echo 'disabled';} ?>"><a class="page-link <?php if($hal != 1){echo 'text-black';} ?>" href="<?php if($hal != 1){echo '?category='.$cate.'&hal='.$prevpage;} ?>" <?php if($hal == 1){echo 'tabindex="-1" aria-disabled="true"';} ?>>Terbaru</a></li>

                        <?php for ($i=1; $i<=$jumlahhalaman; $i++) { ?>
                        <li class="page-item <?php if($hal == $i){echo 'active aria-current="page"'; } ?>" aria-current="page">
                          <a href="<?php if($hal == $i) { echo "#"; }else{ echo '?category='.$cate.'&hal='.$i; } ?>" class="<?php if($hal == $i){echo 'page-link text-white bg-black';}else{ echo 'page-link text-black'; } ?>"><?= $i ?></a>
                        </li>
                      <?php } ?>
                        <li class="page-item <?php if($hal == $jumlahhalaman){echo 'disabled';} ?>"><a class="page-link <?php if($hal != $jumlahhalaman){echo 'text-black';} ?>" href="<?php if($hal != $jumlahhalaman){echo '?category='.$cate.'&hal='.$nextpage;} ?>" <?php if($hal == $jumlahhalaman){echo 'tabindex="-1" aria-disabled="true"';} ?>>Terlama</a></li>
                    </ul>
                    <?php }elseif (!isset($cate) && isset($search)) { ?>
                      <ul class="pagination justify-content-center my-4">
                        <li class="page-item <?php if($hal == 1){echo 'disabled';} ?>"><a class="page-link <?php if($hal != 1){echo 'text-black';} ?>" href="<?php if($hal != 1){echo '?search='.$search.'&hal='.$prevpage;} ?>" <?php if($hal == 1){echo 'tabindex="-1" aria-disabled="true"';} ?>>Terbaru</a></li>

                        <?php for ($i=1; $i<=$jumlahhalaman; $i++) { ?>
                        <li class="page-item <?php if($hal == $i){echo 'active aria-current="page"'; } ?>" aria-current="page">
                          <a href="<?php if($hal == $i) { echo "#"; }else{ echo '?search='.$search.'&hal='.$i; } ?>" class="<?php if($hal == $i){echo 'page-link text-white bg-black';}else{ echo 'page-link text-black'; } ?>"><?= $i ?></a>
                        </li>
                      <?php } ?>
                        <li class="page-item <?php if($hal == $jumlahhalaman){echo 'disabled';} ?>"><a class="page-link <?php if($hal != $jumlahhalaman){echo 'text-black';} ?>" href="<?php if($hal != $jumlahhalaman){echo '?search='.$search.'&hal='.$nextpage;} ?>" <?php if($hal == $jumlahhalaman){echo 'tabindex="-1" aria-disabled="true"';} ?>>Terlama</a></li>
                    </ul>
                    <?php }else{
                     ?>
                    
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item <?php if($hal == 1){echo 'disabled';} ?>"><a class="page-link <?php if($hal != 1){echo 'text-black';} ?>" href="<?php if($hal != 1){echo '?hal='.$prevpage;} ?>" <?php if($hal == 1){echo 'tabindex="-1" aria-disabled="true"';} ?>>Terbaru</a></li>

                        <?php for ($i=1; $i<=$jumlahhalaman; $i++) { ?>
                        <li class="page-item <?php if($hal == $i){echo 'active aria-current="page"'; } ?>" aria-current="page">
                          <a href="<?php if($hal == $i) { echo "#"; }else{ echo '?hal='.$i; } ?>" class="<?php if($hal == $i){echo 'page-link text-white bg-black';}else{ echo 'page-link text-black'; } ?>"><?= $i ?></a>
                        </li>
                      <?php } ?>
                        <li class="page-item <?php if($hal == $jumlahhalaman){echo 'disabled';} ?>"><a class="page-link <?php if($hal != $jumlahhalaman){echo 'text-black';} ?>" href="<?php if($hal != $jumlahhalaman){echo '?hal='.$nextpage;} ?>" <?php if($hal == $jumlahhalaman){echo 'tabindex="-1" aria-disabled="true"';} ?>>Terlama</a></li>
                    </ul>
                  <?php } ?>


                </nav>
            </div>
            <!-- Side widgets-->
            <?php 
            include 'sidebar.php';
             ?>
        </div>
    </div>
    </section > <!-- End Post Grid Section -->
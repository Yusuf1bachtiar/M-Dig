
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
                $posterkini = query("SELECT * FROM post ORDER BY date_created DESC LIMIT 1");
                foreach ($posterkini as $data){
                 ?>
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="https://dummyimage.com/850x350/dee2e6/6c757d.jpg" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted"><?= $data['date_created'] ?></div>
                        <h2 class="card-title"><?= $data['subject'] ?></h2>
                        <p class="card-text"><?= substr($data['body'], 7); ?></p>
                        <a class="btn btn-primary" href="#!">Read more →</a>
                    </div>
                </div>
              <?php } ?>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                     <?php 
                        $post = query("SELECT * FROM post ORDER BY date_created DESC LIMIT 1,2");

                        foreach ($post as $data) {
                         ?><div class="col-lg-6">
                        <!-- Blog post-->
                       
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted"><?= $data['date_created']; ?></div>
                                <h2 class="card-title h4"><?= $data['subject']; ?></h2>
                                <p class="card-text"><?= $data['body']; ?></p>
                                <a class="btn btn-primary" href="#!">Read more →</a>
                            </div>
                        </div>
                        <!-- More Blog post-->
                    </div>
                      <?php } ?>
                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link text-white bg-black" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link text-black" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link text-black" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link text-black" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link text-black" href="#!">Older</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <?php 
            include 'sidebar.php';
             ?>
        </div>
    </div>
    </section	> <!-- End Post Grid Section -->

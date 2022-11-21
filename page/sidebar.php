<div class="col-lg-4">
                
                <!-- Statistik -->
                <div class="card mb-4">
                  <div class="card-header">Statistik</div>
                  <div class="card-body">
                      <!-- isi -->
                      <section class="border p-4 mb-4 rounded-5 d-flex justify-content-center">
                      <div class="col-lg-17" >
                        <canvas id="myChart" style="width: 300px; max-width: 900px; display: block; height: 60px;" width="121" height="60" class="chartjs-render-monitor"></canvas>

                            <script>
							var xValues = ["Perempuan", "Laki-laki", "Total"];
							var yValues = [1699, 1700, 2000];
							var barColors = ["red", "green","blue"];

							new Chart("myChart", {
							  type: "bar",
							  data: {
							    labels: xValues,
							    datasets: [{
							      backgroundColor: barColors,
							      data: yValues
							    }]
							  },
							  options: {
							    legend: {display: false},
							    title: {
							      display: true,
							      text: "World Wine Production 2018"
							    }
							  }
							});
							</script>
                      </div>
                     </section>
                  </div>
              </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Menu Kategori</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#" class="text-black">Berita Desa</a></li>
                                    <li><a href="#" class="text-black">Agenda Desa</a></li>
                                    <li><a href="#" class="text-black">Peraturan Desa</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#" class="text-black">Perpustakaan Desa</a></li>
                                    <li><a href="#" class="text-black">Transparansi Keuangan</a></li>
                                    <li><a href="#" class="text-black">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <section id="hero-slider" class="hero-slider">
                  <div class="container-md" data-aos="fade-in">
                    <div class="row-12" style="height: 300px;">
                      <div class="col-md-12">
                        <div class="swiper sliderFeaturedPosts">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide">
                              <a href="single-post.html" class="img-bg d-flex align-items-end text-decoration-none" style="background-image: url('assets/img/ava.jpeg');">
                                <div class="img-bg-inner">
                                  <h2>Ketua</h2>
                                </div>
                              </a>
                            </div>

                            <div class="swiper-slide">
                              <a href="single-post.html" class="img-bg d-flex align-items-end text-decoration-none" style="background-image: url('assets/img/');">
                                <div class="img-bg-inner">
                                  <h2>Wakil</h2>
                                </div>
                              </a>
                            </div>

                            <div class="swiper-slide">
                              <a href="single-post.html" class="img-bg d-flex align-items-end text-decoration-none" style="background-image: url('assets/img/');">
                                <div class="img-bg-inner">
                                  <h2>Anggota</h2>
                                </div>
                              </a>
                            </div>

                            <div class="swiper-slide">
                              <a href="single-post.html" class="img-bg d-flex align-items-end text-decoration-none" style="background-image: url('assets/img/');">
                                <div class="img-bg-inner">
                                  <h2>Anggota</h2>
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
                </section>

                <div class="card mb-4">
                  <div class="card-header">Arsip Artikel
                    <div class="card-body">
                      <div class="aside-block">

                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Popular</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-trending-tab" data-bs-toggle="pill" data-bs-target="#pills-trending" type="button" role="tab" aria-controls="pills-trending" aria-selected="false">Trending</button>
                          </li>
                          <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="false">Latest</button>
                          </li>
                        </ul>
          
                        <div class="tab-content" id="pills-tabContent">
          
                          <!-- Popular -->
                          <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                            <div class="post-entry-1 border-bottom">
                              <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                              <h2 class="mb-2"><a href="#">How to Avoid Distraction and Stay Focused During Video Calls?</a></h2>
                              <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
          
                          </div> <!-- End Popular -->
          
                          <!-- Trending -->
                          <div class="tab-pane fade" id="pills-trending" role="tabpanel" aria-labelledby="pills-trending-tab">
                            <div class="post-entry-1 border-bottom">
                              <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                              <h2 class="mb-2"><a href="#">17 Pictures of Medium Length Hair in Layers That Will Inspire Your New Haircut</a></h2>
                              <span class="author mb-3 d-block">Jenny Wilson</span>
                            </div>
          
                            
          
                          </div> <!-- End Latest -->
          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="card mb-4">
                  <div class="card-header">Agenda</div>
                  <div class="card-body"></div>
              </div>
                <div class="card mb-4">
                  <div class="card-header">Peta Wilayah Desa</div>
                  <div class="card-body">
                    <!-- Isi -->
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="300" height="260" id="gmap_canvas" src="https://maps.google.com/maps?q=kantor%20desa%20mekarsari,cileungsi&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">fmovies</a><br><style>.mapouter{position:relative;text-align:right;height:260px;width:300px;}</style><a href="https://www.embedgooglemap.net">integrate google maps into website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:260px;width:300px;}</style></div></div>
              </div>
            </div>
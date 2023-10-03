<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/css/style.css" type="text/css">

    <!--Css template galeri-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>template/galeri/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?= base_url()?>template/galeri/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?= base_url()?>template/galeri/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="<?= base_url()?>template/galeri/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?= base_url()?>template/galeri/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700,800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="<?= base_url()?>template/galeri/css/owl.carousel.min.css">
      <link rel="stylesoeet" href="<?= base_url()?>template/galeri/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="<?= base_url()?>ashion/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="#">Login</a>
            <a href="#">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
            <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="<?= base_url()?>"><img src="<?= base_url()?>assets/ico/logo-batik.jpg" style="border-radius: 10px; width: 60px;" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="<?= base_url()?>">Home</a></li>
                            <li><a href="<?= base_url('shop')?>">Toko</a></li>
                            <li><a href="<?= base_url('detail')?>">Detail Produk</a></li>
                            <li class="active"><a href="<?= base_url('galeri')?>">Galeri</a></li>
                            <li><a href="<?= base_url('contact')?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="#">Login</a>
                            <a href="#">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- cycle section start -->
    <div class="cycle_section layout_padding">
         <div class="container">
            <h1 class="cycle_taital">Hasil Batik Harmoni Warna</h1>
            <p class="cycle_text"></p>
            <!--galeri pengerjaan batik-->
            <!-- <div class="container">
            <h1 class="news_taital">News</h1>
            <p class="news_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
            <div class="news_section_2 layout_padding">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class=""><img src="<?= base_url()?>assets/gambar/Batik-Katun-Primis-Archi-Ara-transformed.png"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Speed cycle</h2>
                           <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><img src="<?= base_url()?>template/galeri/images/img-7.png"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Speed cycle</h2>
                           <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class="zoomout frame"><img src="<?= base_url()?>template/galeri/images/img-8.png"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Jaump cycle</h2>
                           <div class="post_text">Post by : Den <span style="float: right;">20-12-2019</span></div>
                           <p class="long_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div> -->
            <!--penutup galeri pengerjaan batik-->
            <div class="cycle_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="box_main">
                        <h6 class="number_text">01</h6>
                        <div class="image_2"><img src="<?= base_url()?>assets/gambar/Batik-Katun-Primis-Archi-Ara-transformed.png"></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="cycles_text">Style Batik</h1>
                     <h4><span>
                        Kain Batik Katun Primis Archi Ara
                    </span></h4>
                     <p class="lorem_text">
                        Kain yang terbuat dari bahan katun kualitas terbaik dengan warna dasar tosca bahan yang tidak gampang panas dan nyaman digunakan
                    </p>
                     <!-- <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4>
                     </div> -->
                  </div>
               </div>
            </div>
            <div class="cycle_section_3 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <h1 class="cycles_text">Style Batik</h1>
                     <h4><span>
                      Kain Batik Katun Primis Lateef Laila
                    </span></h4>
                     <p class="lorem_text">
                        Kain yang terbuat dari bahan katun kualitas terbaik dengan warna dasar tosca bahan yang tidak gampang panas dan nyaman digunakan
                    </p>
                     <!-- <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4>
                     </div> -->
                  </div>
                  <div class="col-md-6">
                     <div class="box_main_3">
                        <h6 class="number_text_2">02</h6>
                        <div class="image_2"><img src="<?= base_url()?>assets/gambar/Batik-Katun-Primis-Lateef-Laila-transformed.png"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cycle_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-6">
                     <div class="box_main_3">
                        <h6 class="number_text_2">03</h6>
                        <div class="image_2"><img src="<?= base_url()?>assets/gambar/Batik_Kain_Superfine_Rajendra_Rihana-transformed.png"></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <h1 class="cycles_text">Style Batik</h1>
                     <h4><span>
                     Kain Batik Superfine Rajendra Rihana
                    </span></h4>
                     <p class="lorem_text">
                        Kain yang terbuat dari bahan katun kualitas terbaik dengan warna dasar tosca bahan yang tidak gampang panas dan nyaman digunakan
                    </p>
                     <!-- <div class="btn_main">
                        <div class="buy_bt"><a href="#">Buy Now</a></div>
                        <h4 class="price_text">Price <span style=" color: #f7c17b">$</span> <span style=" color: #325662">200</span></h4>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- cycle section end -->
      <!-- client section start -->
      <!-- <div class="client_section layout_padding">
         <div id="my_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">CEO UTAMA</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><img src="<?= base_url()?>template/galeri/images/client-img.png" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="<?= base_url()?>template/galeri/images/quote-icon.png"></div>
                              <h3 class="client_name">Mohammad Ramadani. S.Sn</h3>
                              <p class="client_text">adalah CEO Utama dalam kepemilikan Toko Batik Harmoni Warna</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Kepala Pegawai</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><img src="<?= base_url()?>template/galeri/images/client-img.png" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="<?= base_url()?>template/galeri/images/quote-icon.png"></div>
                              <h3 class="client_name">Lstyo Ramdani</h3>
                              <p class="client_text">Lstyo adalah kepala pegawai dalam Toko Batik Harmoni Warna</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="client_main">
                        <h1 class="client_taital">Says Customers</h1>
                        <div class="client_section_2">
                           <div class="client_left">
                              <div><img src="<?= base_url()?>template/galeri/images/client-img.png" class="client_img"></div>
                           </div>
                           <div class="client_right">
                              <div class="quote_icon"><img src="<?= base_url()?>template/galeri/images/quote-icon.png"></div>
                              <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                              <h3 class="client_name">Channery</h3>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
              <i class="fa fa-angle-right"></i>
            </a>
         </div>
      </div> -->
      <!-- client section end -->
      <!-- news section start -->
      <div class="news_section layout_padding">
         <div class="container">
            <h1 class="news_taital">Galeri</h1>
            <p class="news_text">Proses Pembuatan Batik Tulis dan Batik Printing</p>
            <div class="news_section_2 layout_padding">
               <div class="row">
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class=""><img src="<?= base_url()?>assets/gambar/proses_batik1.jpg"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Proses Batik Tulis</h2>
                           <div class="post_text">Diposting Pada<span style="float: right;">20-12-2017</span></div>
                           <p class="long_text">Proses Batik Tulis adalah pembuatan batik dengan metode di tulis.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class=""><img src="<?= base_url()?>assets/gambar/proses_batik2.jpg"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Proses Batik Tulis</h2>
                           <div class="post_text">Diposting Pada<span style="float: right;">20-12-2017</span></div>
                           <p class="long_text">Proses Batik Tulis adalah pembuatan batik dengan metode di tulis.</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-4">
                     <div class="box_main_1">
                        <div class=""><img src="<?= base_url()?>assets/gambar/proses_batik3.jpeg"></div>
                        <div class="padding_15">
                           <h2 class="speed_text">Proses Batik Printing</h2>
                           <div class="post_text">Diposting Pada<span style="float: right;">20-12-2019</span></div>
                           <p class="long_text">Proses Batik Printing adalah pembuatan batik dengan metode di Print kurang lebih seperti Meprinting kaos.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- news section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="contact_main">
               <h1 class="request_text">A Call Back</h1>
               <form action="/action_page.php">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                  </div>
               </form>
               <div class="send_btn"><a href="#">SEND</a></div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
    
</section>
<!-- Contact Section End -->

<!-- Js Plugins -->
<script src="<?= base_url()?>ashion/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url()?>ashion/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery-ui.min.js"></script>
<script src="<?= base_url()?>ashion/js/mixitup.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery.countdown.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery.slicknav.js"></script>
<script src="<?= base_url()?>ashion/js/owl.carousel.min.js"></script>
<script src="<?= base_url()?>ashion/js/jquery.nicescroll.min.js"></script>
<script src="<?= base_url()?>ashion/js/main.js"></script>
</body>

</html>
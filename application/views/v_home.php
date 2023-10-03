<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

    <!--template slider-->
    <link rel="stylesheet" href="<?= base_url()?>ashion/templateslid/Casinal/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/templateslid/Casinal/css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>ashion/templateslid/Casinal/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>ashion/templateslid/Casinal/css/style.css">
    <link rel="stylesheet" href="<?= base_url()?>ashion/templateslid/Casinal/css/responsive.css">

    <!--icon-->
   

</head>
<style>
    .container {
        max-width: 1200px; /* Sesuaikan lebar maksimum container sesuai kebutuhan */
        margin: 0 auto; /* Untuk membuat container berada di tengah halaman */
    }

    .product__item {
        margin-bottom: 20px; /* Jarak antara item barang */
    }

    .product__item__pic {
        /* Atur tinggi atau lebar gambar barang */
        height: 300px; /* Sesuaikan dengan tinggi yang Anda inginkan */
        /* width: 300px; */ /* Jika ingin mengatur lebar, uncomment baris ini dan sesuaikan dengan lebar yang Anda inginkan */
        overflow: hidden; /* Untuk memotong gambar jika melebihi ukuran yang ditentukan */
    }
</style>

<!-- Navbar -->
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
                            <li class="active"><a href="<?= base_url()?>">Beranda</a></li>
                            <li ><a href="<?= base_url('shop')?>">Toko</a></li>
                            <li><a href="<?= base_url('detail')?>">Detail Produk</a></li>
                            <li ><a href="<? base_url('galeri')?>">Galeri</a></li>
                            <li ><a href="<?= base_url('contact')?>">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="<?= base_url('auth/login_user')?>">Login</a>
                            <a href="<?= base_url('auth/login_user')?>">Register</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            <li><a href="#"><span class="icon_heart_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_bag_alt"></span>
                                <div class="tip">2</div>
                            </a></li>
                            <li><a href="#"><span class="icon_whatsapp_alt"></span>
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
    <!-- /.content-header -->

 

      
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
            <a href="<?= base_url('auth/login_user')?>">Login</a>
            <a href="<?= base_url('auth/login_user')?>">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->


<div class="banner_section layout_padding"  style="padding-bottom: 30px;">
    <div id="my_slider" class="carousel slide" data-ride="carousel">
       <div class="carousel-inner">
          <div class="carousel-item active">
             <div class="container">
                <div class="banner_taital_main">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="image_1"><img src="<?= base_url()?>assets/slider/slid1.1.jpg" ></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          
          <!-- <div class="carousel-item">
             <div class="container">
                <div class="banner_taital_main">
                   <div class="row">
                      <div class="col-md-12">
                         <div class="image_1"><img src="<?= base_url()?>ashion/templateslid/Casinal/images/banneratas.webp"></div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" style="font-size:24px"></i>
       </a>
       <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
          <i class="fa fa-arrow-right" style="font-size:24px"></i>
       </a> -->
    </div>
 </div><br><br>
<!-- Product Section Begin -->
<section class="" style="margin-top: 100px;">
    <div class="container">
        <div class="text-center">
            <h1 class="rt-header-block__title"><strong>Produk Unggulan</strong></h1>
        </div>

        <div class="row">
            <?php foreach ($barang as $key => $value) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/gambar/'. $value->gambar)?>">
                            <ul class="product__hover">
                                <li><a href="<?= base_url('assets/gambar/'. $value->gambar)?>" class="image-popup arrow_expand"><span></span></a></li>
                                <li><a href="#" class="icon_heart_alt"><span></span></a></li>
                                <li><a href="#" class="icon_bag_alt"><span></span></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="#"><?= $value->nama_barang ?></a></h6>
                            <div class="product__price">Rp. <?= number_format($value->harga, 0)?></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<!-- Product Section End -->

<div class="text-center">
    <h1 class="rt-header-block__title"><strong>Partner</strong></h1>
</div>
<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="services__item">
                   <img src="<?= base_url()?>ashion/img/SMKN.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-6">
                <div class="services__item">
                   <img src="<?= base_url()?>ashion/img/kkbt.png" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-10">
                <div class="services__item">
                   <img src="<?= base_url()?>ashion/img/esc.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="services__item">
                   <img src="<?= base_url()?>ashion/img/jmb.jpg" alt="">
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- Services Section End -->


<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

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
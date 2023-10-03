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
                            <li ><a href="<?= base_url('shop')?>">Toko</a></li>
                            <li><a href="<?= base_url('detail')?>">Detail Produk</a></li>
                            <li><a href="<?= base_url('galeri')?>">Galeri</a></li>
                            <li class="active"><a href="<?= base_url('contact')?>">Contact</a></li>
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

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>Contact info</h5>
                            <ul>
                                <li>
                                    <h6><i class="fa fa-map-marker"></i> Alamat</h6>
                                    <p>160 Pennsylvania Ave NW, Washington, Castle, PA 16101-5161</p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone"></i> Telepon</h6>
                                    <p><span>+62 896-2715-9368</span></span></p>
                                </li>
                                <li>
                                    <h6><i class="fa fa-envelope"></i> Email</h6>
                                    <p>batikharmoniwarna@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <div class="contact__form">
                            <h5>Mengirim Pesan</h5>
                            <form action="#">
                                <input type="text" placeholder="Name">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Website">
                                <textarea placeholder="Message"></textarea>
                                <button type="submit" class="site-btn">Mengirim Pesan</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                        height="780" style="border:0" allowfullscreen="">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
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
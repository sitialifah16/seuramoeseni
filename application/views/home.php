<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <!-- Title -->
    <title>UKM Seuramoe Seni MIPA</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url('assets/');?>img/core-img/logo.jpeg">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('assets/');?>apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/');?>favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/');?>favicon-16x16.png">
    <link rel="manifest" href="<?php echo base_url('assets/');?>site.webmanifest">
    <link rel="mask-icon" href="<?php echo base_url('assets/');?>safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Core Stylesheet -->
    <link href="<?php echo base_url('assets/');?>/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="<?php echo base_url('assets/');?>css/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="colorlib-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand" href="#">Seuramoe Seni</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/web/profil'); ?>">PROFIL</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/web/kegiatan'); ?>">KEGIATAN</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/web/struktur'); ?>">STRUKTUR</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/web/galeri'); ?>">GALERI</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('index.php/web/daftar'); ?>">PENDAFTARAN</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                    <div class="wellcome-heading">
                        <h2>Selamat Datang</h2>
                        <h3>S</h3>
                        <p>Seuramoe Seni MIPA, wadah untuk menampung kreativitas mahasiswa di bidang seni</p>
                    </div>
                    <div class="get-start-area">
                        <!-- Form Start -->
                        <form action="<?php echo base_url('index.php/web/profil'); ?>" method="post" class="form-inline">
                            <input type="submit" class="submit" value="Selengkapnya">
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="img/bg-img/welcome-img.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area bg-white section_padding_100" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2>Room Seuramoe</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                            <img src="<?php echo base_url('assets/'); ?>img/bg-img/musik.png" alt="avatar" class="center" width="150" height="150">
                        </div>
                        <h4>Musik</h4>
                        <p>Menampung bakat mahasiswa dibidang musik baik musik tradisional, modern, ataupun bagian vokal</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <img src="<?php echo base_url('assets/'); ?>img/bg-img/nari.png" alt="avatar" class="center" width="150" height="150">
                        </div>
                        <h4>Tari</h4>
                        <p>Menampung bakat mahasiswa dibidang tari tradisional maupun kreasi</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                            <img src="<?php echo base_url('assets/'); ?>img/bg-img/puisi.png" alt="avatar" class="center" width="150" height="150">
                        </div>
                        <h4>Puisi</h4>
                        <p>Menampung bakat mahasiswa dibidang puisi baik membaca puisi, cipta pusi, serta teater didalamnya</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
    <div class="special_description_area position_fixed section_padding_100 clearfix" id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" style="margin-top: 100px">
                       <!--  <div class="special_description_img"> -->
                           <table id="t02" style="width:100%" style="margin-top:200px">
                                <tr>
                                    <th style="background: linear-gradient(to right, #ff9a9e 20%, #fad0c4 100%">Tari Ranup Lampuan di Suzuya Mall</th>
                                    <th style="background-color: #543e5c">20/1</th> 
                                 </tr>
                            </table>
                            <br>
                            <table id="t02" style="width:100%">
                                <tr>
                                    <th style="background-color: #543e5c">Penampilan Akustik di INFEST UNSYIAH </th>
                                    <th style="background: linear-gradient(to right, #ff9a9e 20%, #fad0c4 100%">22/1</th> 
                                 </tr>
                            </table>
                            <br>
                            <table id="t02" style="width:100%">
                                <tr>
                                    <th style="background: linear-gradient(to right, #ff9a9e 20%, #fad0c4 100%">Penampilan Tari Saman di INFEST </th>
                                    <th style="background-color: #543e5c">25/1</th> 
                                 </tr>
                            </table>
                        <!-- </div> -->
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content" style="margin-top: 100px">
                            <h2>Our Next Event</h2>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Video Area Start ***** -->
    <!-- ***** Video Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <!-- ***** App Screenshots Area End *****====== -->

    <!-- ***** Pricing Plane Area Start *****==== -->
    <section class="pricing-plane-area section_padding_100_50 clearfix" id="pricing">
        <div class="container">
            <div class="row">
                <div class="col-12" >
                    <!-- Heading Text  -->
                    <div class="section-heading text-center">
                        <h2>Room Business</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-6">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Alat Musik</h5>
                            <br>
                            <div class="ca-price d-flex justify-content-center">
                                <img src="<?php echo base_url('assets/');?>img/bg-img/musik.png" alt="avatar" class="center" width="150" height="150">
                            </div>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="<?php echo base_url('index.php/web/businessmusik');?>">Lihat Harga</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <!-- Package Price  -->
                    <div class="single-price-plan text-center">
                        <!-- Package Text  -->
                        <div class="package-plan">
                            <h5>Baju Tari</h5>
                            <br>
                            <div class="ca-price d-flex justify-content-center">
                                <img src="<?php echo base_url('assets/');?>img/bg-img/nari.png" alt="avatar" class="center" width="150" height="150">
                            </div>
                        </div>
                        <!-- Plan Button  -->
                        <div class="plan-button">
                            <a href="<?php echo base_url('index.php/web/businesstari');?>">Lihat Harga</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Pricing Plane Area End ***** -->

    <!-- ***** Client Feedback Area Start ***** -->
    <!-- ***** Client Feedback Area End ***** -->

    <!-- ***** CTA Area Start ***** -->
    <!-- ***** CTA Area End ***** -->

    <!-- ***** Our Team Area Start ***** -->
    <!-- ***** Our Team Area End ***** -->

    <!-- ***** Contact Us Area Start ***** -->
    <section class="footer-contact-area position_fixed section_padding_100 clearfix" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2>Kontak kami</h2>
                        <div class="line-shape"></div>
                    </div>
                   <!-- <div class="footer-text">
                        <p>Silahkan temui kami di</p>
                    </div>-->
                    <div class="address-text">
                        <p><span>Address:</span> Jl. Tgk. Syech Abdul Rauf, Fakultas MIPA, UNSYIAH</p>
                    </div>
                    <div class="phone-text">
                        <p><span>Phone:</span> 085260104277</p>
                    </div>
                    <div class="email-text">
                        <p><span>Email:</span> seuramoeseni@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_100 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>Seuramoe Seni</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="https://www.facebook.com/Seuramoe-Seni-MIPA-FMIPA-189836624457437/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://twitter.com/seuramoeseni"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/seuramoe_seni"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <!-- Foooter Text-->
    </footer>
    <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="<?php echo base_url('assets/');?>js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url('assets/');?>js/popper.min.js"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="<?php echo base_url('assets/');?>js/bootstrap.min.js"></script>
    <!-- All Plugins JS -->
    <script src="<?php echo base_url('assets/');?>js/plugins.js"></script>
    <!-- Slick Slider Js-->
    <script src="<?php echo base_url('assets/');?>js/slick.min.js"></script>
    <!-- Footer Reveal JS -->
    <script src="<?php echo base_url('assets/');?>js/footer-reveal.min.js"></script>
    <!-- Active JS -->
    <script src="<?php echo base_url('assets/');?>js/active.js"></script>
</body>

</html>

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
    <link href="<?php echo base_url('assets/');?>style.css" rel="stylesheet">

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
                        <form action="#" method="post" class="form-inline">
                            <input type="submit" class="submit" value="Selengkapnya">
                        </form>
                        <!-- Form End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="<?php echo base_url('assets/');?>img/bg-img/welcome-img.png" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

     <!-- ***** Special Area Start ***** -->
    <form action="<?php echo base_url('index.php/web/daftar_post'); ?>" method="post">
        <section class="special-area bg-white section_padding_100" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Section Heading Area -->
                        <div class="section-heading text-center">
                            <h2>Form Pendaftaran</h2>
                            <div class="line-shape"></div>
                            <div class="container">
    <!--   <form action="action_page.php"> -->
                            
                            <div class="row">
                            <div class="col-25">
                                    <label for="fname">Nama</label>
                            </div>
                            <div class="col-75">
                                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama">
                            </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Jenis Kelamin</label>
                                </div>
                                <div class="col-75">
                                    <select id="jenis_kelamin" name="jenis_kelamin">
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-25">
                                    <label for="fname">No. HP</label>
                            </div>
                            <div class="col-75">
                                    <input type="text" id="no_hp" name="no_hp" placeholder="Masukkan Nomor HP">
                            </div>
                            </div>
                        
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Jurusan</label>
                                </div>
                                <div class="col-75">
                                    <select id="jurusan" name="jurusan">
                                            <option value="matematika">Matematika</option>
                                            <option value="fisika">Fisika</option>
                                            <option value="kimia">Kimia</option>
                                            <option value="biologi">Biologi</option>
                                            <option value="farmasi">Farmasi</option>
                                            <option value="informatika">Informatika</option>
                                            <option value="manajemen informatika">Manajemen Informatika</option> 
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Angkatan</label>
                                </div>
                                <div class="col-75">
                                    <select id="angkatan" name="angkatan">
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option> 
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="country">Alamat</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Tempat Lahir</label>
                            </div>
                                <div class="col-75">
                                    <input type="text" id="tempat_lahir" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Tanggal Lahir</label>
                            </div>
                                <div class="col-75">
                                    <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir (YYYY-MM-DD)">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Riwayat Penyakit</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="riwayat_penyakit" name="riwayat_penyakit" placeholder="Masukkan Riwayat Penyakit">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Alergi</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="alergi" name="alergi" placeholder="Masukkan Alergi">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Minat Bakat 1</label>
                                </div>
                                <div class="col-75">
                                    <select id="minat_bakat_1" name="minat_bakat_1">
                                            <option value="musik">Musik</option>
                                            <option value="vokal">Vokal</option>
                                            <option value="tari">Tari</option>
                                            <option value="puisi">Puisi</option>
                                            <option value="teater">Teater</option>
                                            <option value="melukis">Melukis</option> 
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Minat Bakat 2</label>
                                </div>
                                <div class="col-75">
                                    <select id="minat_bakat_2" name="minat_bakat_2">
                                            <option value="musik">Musik</option>
                                            <option value="vokal">Vokal</option>
                                            <option value="tari">Tari</option>
                                            <option value="puisi">Puisi</option>
                                            <option value="teater">Teater</option>
                                            <option value="melukis">Melukis</option>
                                    </select>
                                </div>
                            </div>

                <div class="row">
                <div class="col-25">
                    <label for="subject">Alasan memilih UKM Seuramoe Seni</label>
                </div>
                <div class="col-75">
                    <textarea id="alasan" name="alasan" placeholder="Tulis sesuatu" style="height:200px"></textarea>
                </div>
                </div>
                <br>
                <!-- <form action="<?php echo base_url('index.php/web/daftar_post'); ?>" method="post" class="form-inline"> -->
                    <div class="col-8">
                        <input type="submit" class="submit" value="Submit">
                    </div>
                <!-- </form> -->
        </section>
    </form>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Video Area Start ***** -->
    <!-- ***** Video Area End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <!-- ***** App Screenshots Area End *****====== -->

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
                    <!--<div class="footer-text">
                        <p>We'll send you epic weekly blogs, whitepapers and things to make your app startup thrive, all FREE!</p>
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

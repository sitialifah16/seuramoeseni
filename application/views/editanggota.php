<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>UKM | Seuramoe Seni</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assetsadm/');?>img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/font-awesome.min.css">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/adminpro-custon-icon.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/meanmenu.min.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/animate.css">
    <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/data-table/bootstrap-editable.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/normalize.css">
    <!-- charts C3 CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/c3.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assetsadm/');?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url('assetsadm/');?>js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body class="materialdesign">
    <!-- [if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif] -->

    <!-- Header top area start-->
    <div class="wrapper-pro">
        <div class="left-sidebar-pro">
            <nav id="sidebar">
                <div class="sidebar-header">
                    <a href="#"><img src="<?php echo base_url('assetsadm/');?>img/message/admin.png" style="width: 100px" alt="" />
                    </a>
                    <h3>Admin</h3>
                    <p>Seuramoe Seni MIPA</p>
                    <strong>SSM</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item"><a href="<?php echo base_url('index.php/admin/dashboard');?>" data-toggle="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
                        <li class="nav-item"><a href="<?php echo base_url('index.php/admin/dataAnggota');?>" data-toggle="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Data Anggota</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
                        <li class="nav-item"><a href="<?php echo base_url('index.php/admin/dataPrestasi');?>" data-toggle="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Data Prestasi</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
                        <li class="nav-item"><a href="<?php echo base_url('index.php/admin/dataKegiatan');?>" data-toggle="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Data Kegiatan</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
                        <li class="nav-item"><a href="<?php echo base_url('index.php/admin/pendaftarBaru');?>" data-toggle="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Pendaftar Baru</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        </li>
                        <li class="nav-item"><a href="<?php echo base_url('index.php/admin/hargaSewa');?>" data-toggle="#" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-user"></i> <span class="mini-dn">Harga Sewa</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content-inner-all">
            <div class="header-top-area">
            <div class="fixed-header-top"  style= "background: linear-gradient(to left, #cc66ff 30%, #fb397d 80%);">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn" style="background:#cc66ff">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                            <div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
                                <div class="header-top-menu tabl-d-n">
                                    <ul class="nav navbar-nav mai-top-nav">
                                        <li class="nav-item" style="margin-left: 750px"><a href="<?php echo base_url('index.php/web/home');?>" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item" style="margin-right: -180px"><a href="<?php echo base_url('index.php/admin/loginadmin');?>" class="nav-link">Log Out</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>              
                    </div>
                </div>
            </div>
            <!-- Header top area end-->
            <!-- Breadcome start-->
            <div class="breadcome-area mg-b-30 small-dn">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
										<!-- <div class="breadcome-heading">
											<form role="search" class="">
												<input type="text" placeholder="Search..." class="form-control">
												<a href=""><i class="fa fa-search"></i></a>
											</form>
										</div> -->
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <ul class="breadcome-menu">
                                            <li><a href="<?php echo base_url('index.php/admin/dashboard');?>">Home</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><a href="<?php echo base_url('index.php/admin/dataAnggota');?>">Data Anggota</a> <span class="bread-slash">/</span>
                                            </li>
                                            <li><span class="bread-blod">Edit Anggota</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
            <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline8-list shadow-reset">
                        <div class="sparkline8-hd">
                            <div class="main-sparkline8-hd">
                                <h1>Edit Anggota</h1>
                                    <div class="sparkline8-outline-icon">
                                        
                                    </div>
                                    <br>
                                    <br>
                                    <div class="col-lg-10" style="margin:0 auto">
                                        <div class="card">
                                            <div class="card-body"> 
                                                <div class="basic-form">
                                                <?php echo form_open('admin/proses_editanggota'); ?>
                                                <?php foreach ($anggota as $datanya){ ?>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <br>
                                                                
                                                                <label class="col-sm-2 control-label">NPM</label>
                                                                                                       
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="npm" id="npm" value="<?php echo $anggota[0]->NPM; ?>" class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-sm-2 control-label">Nama</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="nama"  id="nama" value="<?php echo $anggota[0]->Nama; ?>" class="form-control"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-sm-2 control-label">Jurusan</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="jurusan"  id="jurusan" value="<?php echo $anggota[0]->Jurusan; ?>" class="form-control"/> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-sm-2 control-label">Bakat</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="bakat"  id="bakat" value="<?php echo $anggota[0]->Bakat; ?>" class="form-control"/> 
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-sm-2 control-label">Tahun Masuk</label>
                                                                <div class="col-sm-6">
                                                                    <input type="number" placeholder="YYYY" min="2010" max="2100" name="tahun"  id="tahun" value="<?php echo $anggota[0]->Tahun_Masuk; ?>" class="form-control"/> 
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <label class="col-sm-2 control-label">Id_Anggota</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="id" value="<?php echo $id_anggota; ?>" class="form-control" readonly/> 
                                                                </div>
                                                            </div>
                                                        </div>  
                                                        <div class="pull-left">
                                                            <button type="submit" value="submit" class="btn btn-primary" style="background: #a166ff">
                                                                Edit Anggota
                                                            </button>
                                                        </div>
                                                <?php } ?>
                                                    <?php echo form_close(); ?>

                                                    <br>
                                                    <br>
                                                    <br>
                                   
                                    
                                                </div>
                                                <br>
                                                <br>
                                            </div>
                                            
                                                    
                                        </div>
                                        
                                    </div>

        <!-- Footer Start-->
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright &#169; UKM Seuramoe Seni</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    
        <!-- jquery
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/vendor/jquery-1.11.3.min.js"></script>
        <!-- bootstrap JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/bootstrap.min.js"></script>
        <!-- meanmenu JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/jquery.meanmenu.js"></script>
        <!-- mCustomScrollbar JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/jquery.mCustomScrollbar.concat.min.js"></script>
        <!-- sticky JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/jquery.sticky.js"></script>
        <!-- scrollUp JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/jquery.scrollUp.min.js"></script>
        <!-- counterup JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/counterup/waypoints.min.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/counterup/counterup-active.js"></script>
        <!-- peity JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/peity/jquery.peity.min.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/peity/peity-active.js"></script>
        <!-- sparkline JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/sparkline/jquery.sparkline.min.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/sparkline/sparkline-active.js"></script>
        <!-- flot JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/flot/Chart.min.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/flot/flot-active.js"></script>
        <!-- map JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/map/raphael.min.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/map/jquery.mapael.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/map/france_departments.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/map/world_countries.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/map/usa_states.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/map/map-active.js"></script>
        <!-- data table JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/data-table/bootstrap-table.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/data-table/tableExport.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/data-table/data-table-active.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/data-table/bootstrap-table-editable.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/data-table/bootstrap-editable.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/data-table/bootstrap-table-resizable.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/data-table/colResizable-1.5.source.js"></script>
        <script src="<?php echo base_url('assetsadm/');?>js/data-table/bootstrap-table-export.js"></script>
        <!-- main JS
            ============================================ -->
        <script src="<?php echo base_url('assetsadm/');?>js/main.js"></script>
    </body>

    </html>
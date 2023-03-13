<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login Admin | UKM Seuramoe Seni</title>
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


<body class="auth fix-header">
    <div class="content-inner-all">
        <div class="unix-login">
            <style>
                .unix-login{
                    position: absolute;margin-top: -250px;margin-left: -220px;left: 40%;top: 50%;width: 700px;height: 500px; background: linear-gradient(to bottom, #cc66ff 0%, #33ccff 95%);
                }
            </style>
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="login-content card">
                                    <div class="login-form">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    
                                        <h2><b><center>LOGIN ADMIN</center><b></h2>
                                        <br>
                                        <br>
                                        <form action="<?php echo base_url('index.php/admin/login_post'); ?>" method="post">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="username" class="form-control" name="username" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                            </div>
                                            <!--<div class="checkbox">
                                                <label>
                                                        <input type="checkbox"> Remember Me
                                                    </label>
                                                <label class="pull-right">
                                                        <a href="#">Forgotten Password?</a>
                                                    </label>

                                            </div>-->
                                            <button type="submit" class="btn btn-default btn-flat btn-md m-b-30 m-t-30" name='submit'>Login</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

   
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
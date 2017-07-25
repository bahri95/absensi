<!DOCTYPE html>
<html>
    <head>
        
        <!-- Title -->
        <title>Login</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="<?php echo base_url(); ?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        
        <!-- Theme Styles -->
        <link href="<?php echo base_url(); ?>assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/themes/white.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>

   <body style="background-image: url('<?php echo base_url();?>image/back.jpg');
   background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    width: 100%;
    height: 100%;">
      <div class="navbar navbar-inverse " style="background-color: #030c1c; height: 90px; " >
        <div class="navbar-header">
            <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="glyphicon glyphicon-th-list"></span>      
                </a>       
        </div>
        <div class="container" >
            <nav class="navbar-collapse collapse " >
                <ul class="nav navbar-nav" style="display:inline-block;">
                 <li>
                      <img src="<?php echo base_url();?>image/logo.png" height="80" width="80" class="logo img-responsive" style="margin-top:10px" style="margin-right:1px">                 
                  </li>
                  <li>
                    <h3 style="color:white;font-family: 'El Messiri', sans-serif;"> Satuan Kerja Perencanaan dan Pengawasan Jalan Nasional Provinsi Jawa Tengah </h3>
                    <h5 style="color:white;font-family: 'El Messiri', sans-serif;"> Jl. Murbei No 6, Kel. Sumurboto, Banyumanik, Semarang. Telp/Fax (0274) 7471930, e-mail: sksp2jj_jateng@yahoo.com </h5>
                  </li>
                </ul>
            </nav>
        </div>
    </div>
        <main class="page-content" style=" padding-top: 50px;">
            <div class="page-inner">
                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-3 center">
                            <div class="login-box" style="margin-top: 60px;">
                                <a href="index.html" class="logo-name text-lg text-center">Administrator</a>
                                <!-- <p class="text-center m-t-md">Please login into your account.</p> -->
                                <form class="m-t-md" name="form1" method="post" action="<?php echo site_url('Home')?>">
                                    <div class="form-group">
                                        <input type="text" name="username" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block">Login</button>
                                 
                                </form>
                                <p class="text-center m-t-xs text-sm">2017 &copy; Satker P2JN Jateng</p>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper -->
            </div><!-- Page Inner -->
        </main><!-- Page Content -->
	

        <!-- Javascripts -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/modern.min.js"></script>
        
    </body>
</html>
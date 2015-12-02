<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PPC | Chefonline </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/uikit.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/normalize.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/slicknav.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="main-nav">
                        <ul class="list-inline list-unstyled">
                            <li><a href="<?php echo base_url() ;?>">Home</a></li>
                            <li><a href="<?php echo base_url() ;?>index.php/home/registation">Registation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>    
    <section class="header-area">
        <div class="container">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                   <div class="login-area">                    
                       <?php $this->load->view( 'users/login_view' ); ?>
                   </div>
               </div>
               <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                   <div class="content-area">
                       <?php $this->load->view( $main_view ) ?>
                   </div>
               </div>
            </div>
        </div>
    </section>

            <script src="<?php echo base_url(); ?>/assets/js/vendor/jquery-1.10.2.min.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/masonry.min.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/plugins.js"></script>        
            <script src="<?php echo base_url(); ?>/assets/js/jquery.slicknav.min.js"></script>
            <script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>

            <script>
            $(document).ready(function(){
                    $("#kader").masonry();
            });

            </script>

        </body>
    </html>

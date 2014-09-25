<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>
            <?php 
                wp_title('|', 'true', 'right');
            ?>
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="http://james-oldfield.co/wp-content/uploads/2014/08/icon1.png" />

        <!--css-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />
        
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        
        <!--Favicon-->
        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/icon.ico" />

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        
        <?php wp_head()?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
    <!--Top section-->
        <div class="container text-center">
                
            <div class="row icon">
                <a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/icon.svg" alt="8-bit character logo" width="150px"></a>
            </div>
            
        <!--Description & Name-->
            <div class="name">
                <h2><a href="/">JAMES OLDFIELD</a></h2>
                <h4>Front-end Web Developer &amp; geek.</h4>
            </div>
            
        <div class="row">

            <div class="col-xs-12 header-links">

            <!--github-->
                <a href="https://github.com/James-Oldfield" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/github.svg" width="50px"></a>

             <!--cargo-->
                <a href="http://cargocollective.com/james-oldfield/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/cargo.svg" width="50px"></a>

             <!--instagram-->
                <a href="http://instagram.com/JOldfield_" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/instagram.svg" class="instagram" width="50px"></a>

            <!--mail-->
                <a href="mailto:hi@james-oldfield.co" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/mail.svg" width="50px"></a>

            </div>

        </div>
            
        <hr>     
        </div>

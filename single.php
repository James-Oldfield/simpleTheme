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
        <meta property="og:image" content="http://james-oldfield.co/wp-content/uploads/2014/09/icon.png" />

        <!--css-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" media="screen" />
        
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans+Mono' rel='stylesheet' type='text/css'>
        
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
                <a href="/"><img src="<?php bloginfo('template_directory'); ?>/img/icon.svg" alt="8-bit character header logo" width="250px"></a>
            </div>
            
        <!--Description & Name-->
            <div class="container container-header">
              <div class="name">
              <h2>
                HI<span>.</span>
                <br> 
                I'M JAMES<span>.</span>
              </h2> 
              <br><br><br> 
              <h4 id='cursor'>Web Developer/Designer & geek.</h4>
              </div>
              <span class="cursor">|</span>
            </div>
 
        </div>

<hr>
<div class="col-lg-12 single">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
              
              <a href="<?php echo get_option('home'); ?>/"><</a>
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

              
            <hr>  

                <?php the_content() ?>   
              
            <hr>
            
            <span><p>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y');?>
              in <?php the_category( ', ' ); ?>.
            </p></span>

          </article>

         
        <?php endwhile; else: ?>
          
          <div class="page-header">
              <p>There aren't any entries to show.</p>
          </div>

        <?php endif; ?>

</div>

<?php get_footer(); ?>
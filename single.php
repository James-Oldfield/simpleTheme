<?php get_header(); ?>
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
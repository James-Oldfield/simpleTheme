<?php get_header(); ?>

<div class="wrapper">
  <div class="main blog">

          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="blogPost">

            <a href="##" onClick="history.go(-1); return false;" class="backButton">&lt;</a> 
              
              <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>
              <p><?php the_content(); ?></p>

            </div>

           
          <?php endwhile; else: ?>
            
            <div class="page-header">
                <p>There aren't any entries to show.</p>
            </div>

          <?php endif; ?>

  </div>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="container">   
    <div class="row">
      
      <div class="col-lg-12">
        <div class="page-header">
          <h1><?php wp_title(''); ?></h1>
        </div> 

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <span><p>
              By <?php the_author(); ?> 
              on <?php echo the_time('l, F jS, Y');?>
              in <?php the_category( ', ' ); ?>.
              <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
            </p></span>

            <?php the_excerpt(); ?>
              
            <hr>

          </article>

         
        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Woops, what a burke.</h1>
          </div>

          <p>There aren't any entries to show.</p>

        <?php endif; ?>


      </div>

    </div>
</div>

<div class="text-center twitter">
    <a href="https://twitter.com/JamesAOldfield" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @JamesAOldfield</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<?php get_footer(); ?>
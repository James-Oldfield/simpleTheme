<?php get_header(); ?>

<div class="col-lg-12 single">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <article class="post">

            
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

<div class="text-center twitter">
    <a href="https://twitter.com/JamesAOldfield" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @JamesAOldfield</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<?php get_footer(); ?>
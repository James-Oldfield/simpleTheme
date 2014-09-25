<?php get_header(); ?>


<div class="about text-center">
    <h2>I design and build sleek, modern and responsive websites.</h2>

    <div class="projects">
        
        <h4>CURRENT PROJECTS</h4>
        <hr>
        
        <div class="smiths">
            <a href="http://smithsmagazine.co.uk" target="_blank">SMITHS MAGAZINE SITE</a>
            <p>A custom responsive Wordpress site for [smiths] magazine.</p>
        </div>
        
        <div class="minimis">
            <a href="http://de-minimis-theme.tumblr.com/" target="_blank">DE-MINIMIS</a>
            <p>A free responsive minimalist theme for Tumblr with custom options built in.</p>
        </div>
        
    </div>
</div>
            

<div class="col-lg-12 single">
    
    <div class="text-center"><h4>BLOG</h4></div>

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
    <a href="https://twitter.com/JOldfield_" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @JOldfield_</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<?php get_footer(); ?>
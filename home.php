<?php get_header(); ?>


<div class="text-center">

  <!-- About section -->
  <div class="about">

    <h2>I'm currently working as a freelance web developer in my free time; building everything from static portfolio-style webpages to fully fledged CMS sites.

      <hr>

    I love building modern, sleek and responsive sites and I have a strong passion for Wordpress development.</h2>

  </div>

  <!-- Availability section -->
  <div class="available">

    <h2>Right now, i'm available <span>all year round</span> for bespoke web design and development projects.</h2>

  </div>

  <!-- Hire me section -->
  <div class="hire-me">

    <a href="mailto:hi@james-oldfield.co" target="_blank"><span></span>

        <img src="<?php bloginfo('template_directory'); ?>/img/mail-white.svg" width="65px">

          <hr>

        <h4><a href="mailto:hi@james-oldfield.co" target="_blank">HIRE ME</a></h4>

    </a>

  </div>

  <!-- Projects section -->
  <div class="projects">

        <button class="btn-link"><span></span>

          <img src="<?php bloginfo('template_directory'); ?>/img/code.svg" width="65px">

          <hr>

          <h4>RECENT WORK</h4>
          
        </button>
        
  </div>

    <div class="work">
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
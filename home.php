<?php get_header(); ?>


<div class="main text-center">

  <!-- About section -->
  <div class="about">

    <p>I'm currently working as a freelance web developer in my free time outside of uni; building everything from static portfolio-style web pages to fully fledged CMS sites.</p>


    <p class="secondary">I love building modern, sleek and responsive sites and I have a strong passion for Wordpress development.</p>

  </div>

  <!-- Availability section -->
  <div class="available">

    <p>Right now, i'm available <span>all year round</span> for bespoke web design and development projects.</p>

  </div>

  <!-- Hire me section -->
  <div class="hire-me">

    <a href="mailto:hi@james-oldfield.co" target="_blank"><span></span>

        <img src="<?php bloginfo('template_directory'); ?>/img/mail-white.svg" width="65px" alt="email icon">

        <h4><a href="mailto:hi@james-oldfield.co" target="_blank">HIRE ME</a></h4>

    </a>

  </div>

  <!-- Projects section -->
  <div class="projects">

        <button class="btn-link"><span></span>

          <img src="<?php bloginfo('template_directory'); ?>/img/code.svg" width="65px" alt="Recent work icon">

          <h4>RECENT WORK</h4>
          
        </button>
        
  </div>

    <div class="work">
        <div class="upriver">
            <a href="http://doc.gold.ac.uk/~joldf001/UpRiverSite/index.html" target="_blank"><span></span>UP RIVER SITE</a>
            <p>A website I recently built for Up River along with a uniform big cartel theme developed with Dugway.</p>
        </div>

        <div class="smiths">
            <a href="http://smithsmagazine.co.uk" target="_blank"><span></span>SMITHS MAGAZINE SITE</a>
            <p>A custom responsive Wordpress site for [smiths] magazine.</p>
        </div>
        
        <div class="minimis">
            <a href="http://de-minimis-theme.tumblr.com" target="_blank"><span></span>DE-MINIMIS</a>
            <p>A free responsive minimalist theme for Tumblr with custom options built in.</p>
        </div>
    </div>

    
    <div class="single">
      <h4>BLOG POSTS</h4>
      <hr>
    </div>

      <!-- home page WP loop -->
      <div class="home-page-post-loop">

       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


          <article class="home-page-post">
 

            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <span><p>
            <?php echo the_time('l, F jS, Y');?>
            </p></span>
              
            <hr>

          </article>

         
        <?php endwhile; else: ?>
          
          <div class="page-header">
              <p>Nothing here.</p>
          </div>

        <?php endif; ?>

      </div>
      <!-- end homepage wp loop -->

<div id="instafeed">
  
  
</div>

<div class="text-center twitter">
    <a href="https://twitter.com/JOldfield_" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @JOldfield_</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

</div>
<?php get_footer(); ?>
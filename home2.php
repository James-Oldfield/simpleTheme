<?php get_header(); ?>

<div class="col-lg-12 single text-center">

    <div class="home-title">
        <h4>THINGS I'VE BUILT</h4>
    </div>
    
    <div class="theme">
        <h4>De-Minimis Theme</h4>
    </div>
    
    <div class="smiths">
        <h4>Smiths custom wordpress site</h4>
    </div>
    
    
    <div class="home-title">
        <h4>THINGS I'VE WRITTEN</h4>
    </div>
    
    <div class="home-posts">
        <?php wp_get_archives('type=postbypost&limit=8'); ?>
    </div>
    
</div>

<div class="text-center twitter">
    <a href="https://twitter.com/JOldfield_" class="twitter-follow-button" data-show-count="false" data-size="large" data-dnt="true">Follow @JOldfield_</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>

<?php get_footer(); ?>
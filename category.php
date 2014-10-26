<?php
/*
Template Name: blog template
*/ ?>

<?php get_header(); ?>

<div class="main blog">

<?php
while (have_posts()) : the_post(); ?>
        <div class="blogPost">

            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>
            <p><?php the_content(); ?></p>
            
        </div>    
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
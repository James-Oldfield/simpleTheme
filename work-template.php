<?php
/*
Template Name: Work template
*/ ?>

<?php get_header(); ?>

<div class="main work">

<?php
query_posts('cat=16');
while (have_posts()) : the_post(); ?>
        <div class="post-thumb">

            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span class="title"><h1><?php the_title(); ?></h1></span></a>
            
        </div>    
<?php endwhile; ?>

</div>

<?php get_footer(); ?>
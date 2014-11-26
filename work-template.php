<?php
/*
Template Name: Work template
*/ ?>

<?php get_header(); ?>

<div class="wrapper">
	<div class="main work">

	<?php
	query_posts('cat=17');
	while (have_posts()) : the_post(); ?>
	        <div class="post-thumb">

	            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
	            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>
	            
	        </div>    
	<?php endwhile; ?>
	</div>
</div>

<?php get_footer(); ?>
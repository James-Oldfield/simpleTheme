<?php get_header(); ?>

<div class="wrapper">
	<div class="main">
		<div class="home" id="type"></div>
		<div class="cursor">|</div>
		<div class="about">
			<p>I'm a freelance web developer and designer based in London, UK.<br>Feel free to check out some of my <a href='/work'><span>work</span></a>, read my <a href='/blog'><span>blog</span></a> or <a href='mailto:hi@james-oldfield.co'><span>hire me</span></a>.</p>
		</div>
		<div class="homeGrid">
		<?php
		query_posts('cat=15');
		while (have_posts()) : the_post(); ?>
		        <div class="post-thumb">
		            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
		            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php the_title(); ?></h1></a>
		        </div>    
		<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
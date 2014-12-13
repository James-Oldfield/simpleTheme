<?php get_header(); ?>

<div class="wrapper">
	<div class="main">
		<div class="home" id="type"></div>
		<div class="cursor">|</div>
		<div class="about">
			<p>I'm a freelance web developer and designer based in London, UK.</p>
			<p>Full-stack Javascript apps are rocking my world at the minute and I'm generally fascinated by the application of code and generative algorithms in the visual arts/design. </p>
		</div>
		<div class="homeGrid">
		<?php
		query_posts('cat=19');
		while (have_posts()) : the_post(); ?>
		        <div class="post-thumb">
		            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumb'); ?></a>
		        </div>    
		<?php endwhile; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
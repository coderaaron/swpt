<?php get_header();

if ( have_posts() ) : 
	while ( have_posts() ) : 
		the_post();
		the_title(); ?>
		<a href="<?php the_permalink(); ?>">permalink</a>
		<?php the_content();
	endwhile;
endif; 

get_footer(); ?>
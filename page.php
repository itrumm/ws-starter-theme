<?php
/**
 * The template for displaying pages
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header();

while ( have_posts() ) : the_post();

	get_template_part( 'template-parts/content', 'page' );
	
endwhile;

// get_sidebar();
get_footer();
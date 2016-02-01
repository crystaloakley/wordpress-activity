<?php
/**
 * The Template for displaying all single posts.
 *
 * @package 
 */

get_header(); ?>

	<div>
		

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>
                    
                      
		

		

		<?php endwhile; // end of the loop. ?>

			<?php my_post_nav(); ?>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
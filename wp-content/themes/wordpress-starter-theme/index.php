<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage test
 * 
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
		

			<?php /* My custom loop */ ?>
			
				<?php $query = new WP_Query( 'posts_per_page=10&paged=.$paged');?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>	
				
				<article <?php post_class();?>>
					<div class = "entry-content">
					   <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				       <?php the_content(); ?><?php the_post_thumbnail();?>
					</div>
				</article>	

		
			<?php get_template_part( 'content', get_post_format() ); ?>
			<?php endwhile; ?>

		
		<!-- Post Navigation-->
			
			<?php my_post_nav(); ?>

	
		</div><!-- #
		content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
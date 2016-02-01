<?php get_header(); ?>

    <div class="container" role="main">
		<div class="col-md-8">
		
	<h1>This is the Front Page</h1>	
<h2>Recent Posts</h2>

<ol>
<?php
	$args = array( 'numberposts' => '3' );
	$recent_posts = wp_get_recent_posts( $args );
	 while ( have_posts($recent_posts) ) : the_post($recent_posts); 
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
		
	} 
?>
</ol>
				
<?php endwhile;  ?>
		</div>
<?php get_sidebar(); ?>
	</div>

  

<?php get_footer(); ?>
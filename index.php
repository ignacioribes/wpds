<?php
/**
 * Index
 *
 * Standard loop for the front-page
 *
 * @package WordPress
*/

get_header(); ?>

    <!-- Main Content -->
		<div id="slider"<?=get_slider_args_html()?>>
			<?php
				$args = array(
					'post_type' => 'post',
					'post_status' => 'publish',
					'orderby' => 'modified',
				);
				$the_query = new WP_Query($args);
				if ($the_query->have_posts()) : while ( $the_query->have_posts() ) : $the_query->the_post();
					print_post_html($post);
				endwhile; endif;
				wp_reset_query();
			?>
		</div>
    <!-- End Main Content -->

<?php get_footer(); ?>

<?php
/**
 * The front-page template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package konstochpyssel
 */

get_header();
?>
        <main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'front' );
		endwhile; // End of the loop.
		?>
        </main><!-- #main -->
<?php
get_footer();
<?php
/**
 * The Single template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package konstochpyssel
 */

get_header();
?>
        <main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'single' );
		endwhile; // End of the loop.
		
		endif;
		?>
        </main><!-- #main -->
<?php
get_footer();
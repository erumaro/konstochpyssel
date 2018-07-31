<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package konstochpyssel
 */

get_header();
?>
        <main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>
		<header class="hero archive-header">
		    <?php the_archive_title( '<h2 class="archive-title">', '</h2>' ); ?>
		</header>
		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );
		endwhile; // End of the loop.
		
		endif;
		?>
        </main><!-- #main -->
<?php
get_footer();
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package konstochpyssel
 */

?>

<section id="post-<?php the_ID(); ?>" <?php post_class('hero intro'); ?>>
    <?php the_title( '<h2 class="intro-title">', '</h2>' ); ?>
    <?php the_content(); ?>
</section>
<section id="app" class="gallery"></section>
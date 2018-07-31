<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package konstochpyssel
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-featured">
        <?php the_post_thumbnail('large'); ?>
    </div>
    <div class="entry-excerpt">
        <header class="entry-header">
            <?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
            <p><?php
            konstochpyssel_posted_on();
            konstochpyssel_posted_by();
            ?></p>
        </header>
        <div class="entry-content">
            <?php the_excerpt() ?>
            <a class="readMeButton" href="<?php echo esc_url( get_permalink() ) ?>" type="button">Läs mer</a>
        </div>
    </div>
</article>
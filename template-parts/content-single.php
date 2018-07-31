<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package konstochpyssel
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        <p><?php
        konstochpyssel_posted_on();
        konstochpyssel_posted_by();
        ?></p>
    </header>
    <div class="entry-content">
        <?php the_content() ?>
    </div>
    <footer class="entry-footer">
        <ul class="share-buttons">
            <li><a href="#"><i class="fab fa-facebook"></i> Share</a></li>
            <li><a href="#"><i class="fab fa-twitter"></i> Tweet</a></li>
            <li><a href="#"><i class="fab fa-pinterest"></i> Pin</a></li>
            <li><a href="#"><i class="fab fa-tumblr"></i> Share</a></li>
        </ul>
    </footer>
</article>
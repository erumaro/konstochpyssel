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
<section class="gallery">
    <h2 class="gallery-title">Senaste</h2>
    <nav class="featured-filter">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'menu-2',
            'menu_id'        => 'filter-menu',
            'container'      => false
        ) );
        ?>
    </nav>
    <?php
    $queryObject = new WP_Query( array('taxonomy' => 'category', 'posts_per_page' => '9', 'author' => 'wp_admin') );
    // The Loop!
    if ($queryObject->have_posts()) {
        ?>
        <div class="gallery-grid">
        <?php
        while ($queryObject->have_posts()) {
            $queryObject->the_post();
            ?>
            <div id="gallery-item-<?php the_ID(); ?>" class="gallery-item">
                <a href="<?php echo esc_url( get_permalink() ) ?>">
                    <div class="gallery-overlay">
                        <?php the_title( '<h3 class="gallery-item-title">', '</h3>' ); ?>
                    </div>
                    <?php the_post_thumbnail('large'); ?>
                </a>
            </div>
        <?php
        }
        ?>
        </div><!-- .gallery-grid -->
        <?php
    }

    wp_reset_postdata();
    ?>
</section>
<header class="hero page-header">
    <?php the_content(); ?>
</header>
<?php
$queryObject = new WP_Query( array('post_type' => 'page', 'post_parent' => '12',) );
// The Loop!
if ($queryObject->have_posts()) {
?>
<div class="authors-wrapper">
<?php
while ($queryObject->have_posts()) {
    $queryObject->the_post();
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( '<h2 class="entry-title">', '</h2>' ); ?>
        </header>
        <div class="entry-content">
            <div class="entry-featured">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <?php the_content() ?>
        </div>
    </article>
    <?php
    }
    ?>
</div>
<?php
}

wp_reset_postdata();
?>
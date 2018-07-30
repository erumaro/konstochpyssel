<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package konstochpyssel
 */

get_header();
?>
        <main id="main" class="site-main">
            <section class="hero intro">
                <h2>Det här en introduktion</h2>
                <p>Här ska en introducerande text stå som får användaren/besökaren veta vart dom kommit.</p>
            </section>
            <section class="gallery">
                <h2>Senaste</h2>
                <nav class="featured-filter">
                    <ul>
                        <li><a class="active-filter" href="#">Alla</a></li>
                        <li><a href="#">Anette</a></li>
                        <li><a href="#">Carina</a></li>
                    </ul>
                </nav>
                <div class="gallery-grid">
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/everything_will_be_okay_by_yuumei-d8yfrlp.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/instant_friendship_by_rhineville-d67asdc.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/e61c252f7534511d.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/magical_forest_elf_by_asuka111-d6jc5ie.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/everything_will_be_okay_by_yuumei-d8yfrlp.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/instant_friendship_by_rhineville-d67asdc.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/e61c252f7534511d.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/magical_forest_elf_by_asuka111-d6jc5ie.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/everything_will_be_okay_by_yuumei-d8yfrlp.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/instant_friendship_by_rhineville-d67asdc.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/e61c252f7534511d.jpg" />
                        </a>
                    </div>
                    <div class="gallery-item">
                        <a href="single-post.html">
                            <div class="gallery-overlay">
                                <h3>Entry title</h3>
                            </div>
                            <img src="images/magical_forest_elf_by_asuka111-d6jc5ie.jpg" />
                        </a>
                    </div>
                </div>
            </section>
        </main>
<?php
get_footer();
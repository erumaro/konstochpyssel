<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package konstochpyssel
 */

?>
        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="footer-content">
                <a data-scroll href="#masthead" class="backtotop"><i class="fas fa-arrow-alt-circle-up"></i></a>
                <p class="copyright"><?php echo date('Y'); ?> &copy; Konst och pyssel</p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>
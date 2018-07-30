<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package konstochpyssel
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body>
    <div id="page" class="hfeed site">
        <header id="masthead" class="site-header" role="banner">
            <nav id="site-navigation" class="main-navigation" role="navigation">
                <h1 class="site-title"><a href="index.html" rel="home">Konst <span>&</span> Pyssel</a></h1>
                <ul id="primary-menu" class="menu">
                    <li class="menu-item"><a class="active" href="index.html">Hem</a></li>
                    <li class="menu-item"><a href="category.html">Kategori 1</a></li>
                    <li class="menu-item"><a href="category.html">Kategori 2</a></li>
                    <li class="menu-item"><a href="category.html">Kategori 3</a></li>
                    <li class="menu-item"><a href="category.html">Kategori 4</a></li>
                    <li class="menu-item"><a href="about.html">Om oss</a></li>
                </ul>
            </nav>
        </header>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package saudi_woman
 */

?>
    <!doctype html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            <?php wp_title('|','true','right') ?>
            <?php bloginfo('name'); ?>
        </title>
        <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri().'/pic/favicon.png'?>"/>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <div class="container">
                <div id="nav_bar">
                    <div class="logo_out">
                        <img src="<?php echo get_template_directory_uri().'/pic/logo.png'?>">
                    </div>
                    <div class="links hidden-xs">
                        <ul>
                            <li class="hvr-underline-from-right hvr-biounce-in home"><a href="#">الرئيسية</a></li>
                            <li class="hvr-underline-from-right hvr-biounce-in intro"><a href="#">مقدمة</a></li>
                            <li class="hvr-underline-from-right hvr-biounce-in who_us"><a href="#">من نحن</a></li>
                            <li class="hvr-underline-from-right hvr-biounce-in vision"><a href="#">رؤيتنا</a></li>
                            <li class="hvr-underline-from-right hvr-biounce-in whyp"><a href="#">لماذا أشارك؟</a></li>  
                            <li class="hvr-underline-from-right hvr-biounce-in parteners"><a href="#">الرعاه والشركاء</a></li>
                            <li class="hvr-underline-from-right hvr-biounce-in locationn"><a href="#">المكان والزمان</a></li>
                            <li class="hvr-underline-from-right hvr-biounce-in mapp"><a href="#">الخريطة</a></li>
                        </ul>
                    </div>
                </div>
                <div id="nav_bar">
                    <button class="xs-navbar-btn visible-xs">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                </div>
                <div id="xs-navbar-id" class="xs-navbar visible-xs">
                    <div class="xs-navbar-content">
                        <i class="fa fa-times" aria-hidden="true"></i>
                        <ul>
                            <li><a href="#" class="nav-ele home">الرئيسية</a></li>
                            <li><a href="#" class="nav-ele intro">مقدمة</a></li>
                            <li><a href="#" class="nav-ele who_us">من نحن</a></li>
                            <li><a href="#" class="nav-ele vision">رؤيتنا</a></li>
                            <li><a href="#" class="nav-ele whyp">لماذا أشارك؟</a></li>
                            <li><a href="#" class="nav-ele parteners">الرعاه والشركاء</a></li>
                            <li><a href="#" class="nav-ele locationn">المكان والزمان</a></li>
                            <li><a href="#" class="nav-ele mapp">الخريطة</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

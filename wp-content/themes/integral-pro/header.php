<?php
/**
 * Header section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!-- Favicon-->
<link rel="shortcut icon" href="<?php echo $integral['gen-favicon']['url']; ?>">
<link rel="apple-touch-icon" href="<?php echo $integral['gen-appleicon-default']['url']; ?>">
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
<?php echo "\n<!--Custom CSS Start-->\n<style>\n".$integral['customcode-css']."\n</style>\n<!--Custom CSS End-->\n"; ?>
<?php echo "\n<!--Custom Header Code Start-->\n".$integral['customcode-header']."\n<!--Custom Header Code End-->\n"; ?>
</head>

<body <?php body_class(); ?>>

    <?php if($integral['header-section-toggle']==1) { ?>
    
        <nav class="navbar navbar-default <?php if($integral['topmenu-sticky']==1) { ?>navbar-fixed-top<?php } ?>" itemscope itemtype="http://schema.org/SiteNavigationElement" role="navigation">

            <div class="container-fluid">

                <div class="container">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">

                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>

                        </button>

                        <?php

                            $integral_logo = get_theme_mod('integral_logo');

                            if(isset($integral_logo) && $integral_logo != ""):

                                echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" class="navbar-brand">';

                                    echo '<img class="img-responsive" src="'.$integral_logo.'" alt="'.get_bloginfo('title').'">';

                                echo '</a></h1>';

                            else:

                                echo '<h1 class="site-title"><a href="'.esc_url( home_url( '/' ) ).'" title="'.get_bloginfo('title').'" class="navbar-brand">';

                                    echo ''.get_bloginfo('title').'';

                                echo '</a></h1>';

                            endif;

                        ?>

                    </div>

                    <?php if ( has_nav_menu( 'primary' ) ) : ?>

                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'primary',
                                'theme_location'    => 'primary',
                                'depth'             => 3,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'navbar-ex-collapse',
                                'menu_class'        => 'nav navbar-nav navbar-right',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            => new wp_bootstrap_navwalker())
                            );
                        ?>

                    <?php endif; ?>

               </div>

            </div>

        </nav>
    <?php } ?>
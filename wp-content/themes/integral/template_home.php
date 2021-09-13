<?php
/*
Template Name: One-page Template (Home)

 * Home Page Template for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>

<?php get_header(); ?>

<div class="home_banner">
<?php the_content(); ?>
</div>
<?
	$layout = $integral['gen-home-layout']['Enabled'];

		if ($layout): foreach ($layout as $key=>$value) {
		 get_template_part( 'sections/'.$key);
	 
	}

	endif;
	
?>

<?php get_footer(); ?>
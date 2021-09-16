<?php
/**
 * Brands Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['brands-section-toggle']==1) { ?>
<section id="brands" class="brands <?php echo esc_attr($integral['brands-custom-class']); ?>">
	<div class="container">
        <div class="row multi-columns-row">
        	<?php if ( is_active_sidebar( 'brands-widgets' ) ) : ?>
                <?php dynamic_sidebar( 'brands-widgets' ); ?>
            <?php endif; ?>	
		</div>
	</div>
</section><!--Brands-->
<?php } ?>
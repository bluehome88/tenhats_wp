<?php
/**
 * Pricing Tables Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['ptables-section-toggle']==1) { ?>
<section id="pts" class="pts dark <?php echo esc_attr($integral['ptables-custom-class']); ?>">
	<div class="container">
		<div class="row">
			<div class="col-md-12">			
				<h2 class="smalltitle_dark"><?php echo esc_html($integral['ptables-maintitle']); ?><span></span></h2>
			</div>
        </div>
        <div class="row multi-columns-row">
        	<?php if ( is_active_sidebar( 'pricing-widgets' ) ) : ?>
                <?php dynamic_sidebar( 'pricing-widgets' ); ?>
            <?php endif; ?>	
        </div>
	</div>
</section><!--pts-->
<?php } ?>
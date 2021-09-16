<?php
/**
 * stats Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['stats-section-toggle']==1) { ?>
<section id="stats" class="stats <?php echo esc_attr($integral['stats-custom-class']); ?>">
	<div class="container">
        <div class="row multi-columns-row">
        	<?php if ( is_active_sidebar( 'stats-widgets' ) ) : ?>
                <?php dynamic_sidebar( 'stats-widgets' ); ?>
            <?php endif; ?>	
		</div>
	</div>
</section><!--stats-->
<?php } ?>
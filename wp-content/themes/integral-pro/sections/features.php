<?php
/**
 * Features Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['features-section-toggle']==1) { ?>
<section id="features" class="features lite <?php echo esc_attr($integral['feature-custom-class']); ?>">
	<div class="container">
		<div class="row">
			<?php if ($integral['features-title']) { ?>
            <div class="col-md-12">			
				<h2 class="smalltitle"><?php echo esc_html($integral['features-title']); ?><span></span></h2>
			</div>
            <?php } ?>
		</div>
		<div class="row multi-columns-row">
			<?php if ( is_active_sidebar( 'feature-widgets' ) ) : ?>
                <?php dynamic_sidebar( 'feature-widgets' ); ?>
            <?php endif; ?>
		</div>
	</div>
</section><!--features-->
<?php } ?>
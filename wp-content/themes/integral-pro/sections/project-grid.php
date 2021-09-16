<?php
/**
 * Project Grid Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['projects-grid-section-toggle']==1) { ?>
<section id="projects-grid" class="projects-grid lite <?php echo esc_attr($integral['project-grid-custom-class']); ?>">
	<div class="container">
		<?php if ($integral['project-grid-maintitle']) { ?>
        <div class="row">
			<div class="col-md-12">			
                <h2 class="smalltitle"><?php echo esc_html($integral['project-grid-maintitle']); ?><span></span></h2>
			</div>
        </div>
        <?php } ?>
        <?php if ( is_active_sidebar( 'projects-grid-widgets' ) ) : ?>
        <div class="row multi-columns-row">
            <?php dynamic_sidebar( 'projects-grid-widgets' ); ?>
        </div>
        <?php endif; ?>
	</div>
</section><!--projects-grid-->
<?php } ?>
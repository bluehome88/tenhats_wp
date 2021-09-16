<?php
/**
 * Call to Action Section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['calltoaction2-section-toggle']==1) { ?>
<section id="calltoaction2" class="calltoaction2 <?php echo esc_attr($integral['calltoaction2-custom-class']); ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php if ($integral['calltoaction2-title']) { ?><h2><?php echo esc_html($integral['calltoaction2-title']); ?></h2><?php } ?>
                <?php if ($integral['calltoaction2-text']) { ?><p><?php echo wp_kses_post($integral['calltoaction2-text']); ?></p><?php } ?>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 text-right cta-button">
                    <?php if ($integral['calltoaction2-btn-text']) { ?><a href="<?php echo esc_url($integral['calltoaction2-btn-url']); ?>" class="btn btn-lg btn-secondary"><?php echo esc_html($integral['calltoaction2-btn-text']); ?></a><?php } ?>
                </div>
            </div>
        </div>
    </div>
</section><!--parallax2-->
<?php } ?>
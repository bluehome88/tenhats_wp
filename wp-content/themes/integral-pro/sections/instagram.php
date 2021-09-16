<?php
/**
 * Instragram section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['instagram-section-toggle']==1) { ?>
<section id="instagram" class="instagram <?php echo esc_attr($integral['instagram-custom-class']); ?>">
        <div class="container-fluid">
            <div class="row vertical-align">
                <div class="col-md-12 feed">
                	<?php echo do_shortcode($integral['instagram-shortcode']); ?>
                </div>
            </div>
        </div>
</section>
<?php } ?>
<?php
/**
 * Twitter feed section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<?php if($integral['tweets-section-toggle']==1) { ?>
<section id="tweets" class="tweets <?php echo esc_attr($integral['tweets-custom-class']); ?>">
        <div class="container">
            <div class="row vertical-align">
                <div class="col-sm-12 col-md-2 col-lg-2"><i class="fa fa-twitter fa-lg"></i></div>
                <div class="col-sm-12 col-md-10 col-lg-10">
                	<?php if ( is_active_sidebar( 'tweetscroll-widget' ) ) : ?>
                    	<?php dynamic_sidebar( 'tweetscroll-widget' ); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
</section>
<?php } ?>
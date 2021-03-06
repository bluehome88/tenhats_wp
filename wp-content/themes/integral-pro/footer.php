<?php
/**
 * Footer section for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>

<?php global $integral; ?>

<?php if($integral['footer-section-toggle']==1) { ?>

<section class="copyright">

	<div class="container">

		<div class="row">

			<div class="col-md-12">

                <div class="copyrightinfo">

                    <p>
                        <?php if ( $integral['copyright-text'] ) : ?>

                        <?php echo $integral['copyright-text']; ?>

                        <?php else : ?>

                        <?php esc_html_e('&copy; 2016 All Rights Reserved', 'integral'); ?>

                        <span class="sep"> | </span>

                        <?php printf( __( 'Powered by %2$s', 'integral' ), 'integral', '<a href="https://www.wordpress.org/" rel="designer">Wordpress</a>' ); ?>

                        <span class="sep"> | </span>

                        <?php printf( __( 'Made with &#10084; by %2$s', 'integral' ), 'integral', '<a href="https://www.themely.com/" rel="designer">Themely</a>' ); ?>

                        <?php endif; ?>
                    </p>

                </div>

			</div>

		</div>

	</div>

</section>

<?php } ?>

<?php wp_footer(); ?>

<?php get_template_part('sections/custom'); ?>

<?php echo "\n<!--Custom Footer Code Start-->\n".$integral['customcode-footer']."\n<!--Custom Footer Code End-->\n"; ?>

</body>

</html>

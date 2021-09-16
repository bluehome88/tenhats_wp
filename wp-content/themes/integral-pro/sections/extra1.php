<?php
/**
 * Extra1 ssection for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>

<?php if($integral['extra1-section-toggle']==1) { ?>

<section id="extra1" class="extra1 <?php echo $integral['extra1-style']; ?> <?php echo $integral['extra1-custom-class']; ?>">

	<div class="container">

		<div class="row">

			<div class="col-md-12 heading">

                <?php if ( $integral['extra1-title-style'] == 'bigtitle' ) : ?>

                    <?php if ($integral['extra1-title-icon']) { ?><i class="fa <?php echo $integral['extra1-title-icon']; ?>"></i><?php } ?>

    				<?php if ($integral['extra1-title']) { ?>
                        <?php if ( $integral['extra1-style'] == 'dark' ) : ?>
                        <h2 class="bigtitle_dark"><span><?php echo $integral['extra1-title']; ?></span></h2>
                        <?php else : ?>
                        <h2 class="bigtitle"><span><?php echo $integral['extra1-title']; ?></span></h2>
                        <?php endif; ?>
                    <?php } ?>

                    <?php if ($integral['extra1-subtitle']) { ?><p class="subtitle"><?php echo $integral['extra1-subtitle']; ?></p><?php } ?>

                <?php else : ?>

                    <?php if ( $integral['extra1-style'] == 'dark' ) : ?>
                        <h2 class="smalltitle_dark"><?php echo $integral['extra1-title']; ?><span></span></h2>
                    <?php else : ?>
                        <h2 class="smalltitle"><?php echo $integral['extra1-title']; ?><span></span></h2>
                    <?php endif; ?>

                <?php endif; ?>

			</div>

            <?php if ($integral['extra1-text']) { ?>

			<div class="col-md-12">

				<?php
                    $my_id = $integral['extra1-text'];
                    $post_id = get_post($my_id);
                    $content = $post_id->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                ?>

			</div>

            <?php } ?>

        </div>

        <?php if ( is_active_sidebar( 'extra1-widgets' ) ) : ?>
        <div class="row multi-columns-row">
            
            <?php dynamic_sidebar( 'extra1-widgets' ); ?>
            
        </div>
        <?php endif; ?> 

	</div>

</section>

<?php } ?>
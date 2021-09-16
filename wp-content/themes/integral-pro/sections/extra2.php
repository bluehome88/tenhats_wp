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

<?php if($integral['extra2-section-toggle']==1) { ?>

<section id="extra2" class="extra2 <?php echo $integral['extra2-style']; ?> <?php echo $integral['extra2-custom-class']; ?>">

	<div class="container">

		<div class="row">

			<div class="col-md-12 heading">

                <?php if ( $integral['extra2-title-style'] == 'bigtitle' ) : ?>

                    <?php if ($integral['extra2-title-icon']) { ?><i class="fa <?php echo $integral['extra2-title-icon']; ?>"></i><?php } ?>

    				<?php if ($integral['extra2-title']) { ?>
                        <?php if ( $integral['extra2-style'] == 'dark' ) : ?>
                            <h2 class="bigtitle_dark"><span><?php echo $integral['extra2-title']; ?></span></h2>
                        <?php else : ?>
                            <h2 class="bigtitle"><span><?php echo $integral['extra2-title']; ?></span></h2>
                        <?php endif; ?>
                    <?php } ?>

                    <?php if ($integral['extra2-subtitle']) { ?><p class="subtitle"><?php echo $integral['extra2-subtitle']; ?></p><?php } ?>

                <?php else : ?>

                    <?php if ( $integral['extra2-style'] == 'dark' ) : ?>
                        <h2 class="smalltitle_dark"><?php echo $integral['extra2-title']; ?><span></span></h2>
                    <?php else : ?>
                        <h2 class="smalltitle"><?php echo $integral['extra2-title']; ?><span></span></h2>
                    <?php endif; ?>

                <?php endif; ?>

			</div>

            <?php if ($integral['extra2-text']) { ?>

			<div class="col-md-12">

				<?php
                    $my_id = $integral['extra2-text'];
                    $post_id = get_post($my_id);
                    $content = $post_id->post_content;
                    $content = apply_filters('the_content', $content);
                    $content = str_replace(']]>', ']]>', $content);
                    echo $content;
                ?>

			</div>

            <?php } ?>

        </div>

        <?php if ( is_active_sidebar( 'extra2-widgets' ) ) : ?>
        <div class="row multi-columns-row">
            
            <?php dynamic_sidebar( 'extra2-widgets' ); ?>
            
        </div>
        <?php endif; ?> 

	</div>

</section>

<?php } ?>
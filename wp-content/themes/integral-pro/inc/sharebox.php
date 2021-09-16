<?php global $integral; ?>
<div class="sharebox clearfix">
	<ul>
		<?php if($integral['check_sharebox']['facebook'] == '1') { ?>	
		<li>
			<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" class="share-facebook" target="_blank" title="<?php esc_html_e( 'Share via', 'integral' ) ?> <?php esc_html_e( 'Facebook', 'integral' ) ?>"><i class="fa fa-facebook"></i> <?php esc_html_e( 'Facebook', 'integral' ) ?></a>
		</li>
		<?php } ?>
		<?php if($integral['check_sharebox']['twitter'] == '1') { ?>	
		<li>
			<a href="http://twitter.com/home?status=<?php the_title(); ?> <?php the_permalink(); ?>" class="share-twitter" target="_blank" title="<?php esc_html_e( 'Share via', 'integral' ) ?> <?php esc_html_e( 'Twitter', 'integral' ) ?>"><i class="fa fa-twitter"></i> <?php esc_html_e( 'Twitter', 'integral' ) ?></a>
		</li>
		<?php } ?>
		<?php if($integral['check_sharebox']['reddit'] == '1') { ?>	
		<li>
			<a href="http://www.reddit.com/submit?url=<?php the_permalink() ?>&amp;title=<?php echo urlencode(esc_attr(the_title('', '', false))); ?>" class="share-reddit" target="_blank" title="<?php esc_html_e( 'Share via', 'integral' ) ?> <?php esc_html_e( 'Reddit', 'integral' ) ?>"><i class="fa fa-reddit"></i> <?php esc_html_e( 'Reddit', 'integral' ) ?></a>
		</li>
		<?php } ?>
		<?php if($integral['check_sharebox']['pinterest'] == '1') { ?>	
		<li>
			<a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&amp;media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo esc_url($url); ?>&amp;" target="_blank" class="share-pinterest" title="<?php esc_html_e( 'Share via', 'integral' ) ?> <?php esc_html_e( 'Pinterest', 'integral' ) ?>"><i class="fa fa-pinterest"></i> <?php esc_html_e( 'Pinterest', 'integral' ) ?></a>
		</li>
		<?php } ?>
		<?php if($integral['check_sharebox']['googleplus'] == '1') { ?>	
		<li>
			<a href="https://plus.google.com/share?url=<?php the_permalink() ?>" target="_blank" class="share-google" title="<?php esc_html_e( 'Share via', 'integral' ) ?> <?php esc_html_e( 'Google+', 'integral' ) ?>"><i class="fa fa-google-plus"></i> <?php esc_html_e( 'Google+', 'integral' ) ?></a>
		</li>
		<?php } ?>
		<?php if($integral['check_sharebox']['linkedin'] == '1') { ?>	
		<li>
			<a href="http://linkedin.com/shareArticle?mini=true&amp;url=<?php the_permalink();?>&amp;title=<?php the_title();?>" target="_blank" class="share-linkedin" title="<?php esc_html_e( 'Share via', 'integral' ) ?> <?php esc_html_e( 'LinkedIn', 'integral' ) ?>"><i class="fa fa-linkedin"></i> <?php esc_html_e( 'LinkedIn', 'integral' ) ?></a>
		</li>
		<?php } ?>
		<?php if($integral['check_sharebox']['email'] == '1') { ?>	
		<li>
			<a href="mailto:?subject=<?php the_title();?>&amp;body=<?php the_permalink() ?>" class="share-mail" title="<?php esc_html_e( 'Share via', 'integral' ) ?> <?php esc_html_e( 'E-Mail', 'integral' ) ?>"><i class="fa fa-envelope-o"></i> <?php esc_html_e( 'E-Mail', 'integral' ) ?></a>
		</li>
		<?php } ?>
	</ul>
</div>
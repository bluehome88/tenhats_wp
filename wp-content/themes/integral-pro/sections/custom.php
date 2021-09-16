<?php
/**
 * Custom Javsscript for our theme
 *
 * @package WordPress
 * @subpackage Integral
 * @since Integral 1.0
 */
?>
<?php global $integral; ?>
<script type="text/javascript">
jQuery(document).ready(function($){

	<?php if($integral['hero-parallax-toggle']==1) { ?> $('#welcome').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['testi-parallax-toggle']==1) { ?> $('#testimonials').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['calltoaction-parallax-toggle']==1) { ?> $('#calltoaction').parallax("50%", 0.3); <?php } ?>
	<?php if($integral['newsletter-parallax-toggle']==1) { ?> $('#newsletter').parallax("50%", 0.3); <?php } ?>

	$('.flexslider').flexslider({
	animation: "slide",
	slideshow: <?php if($integral['project-single-autoplay']==1) echo "true"; else echo "false";  ?>,
	slideshowSpeed: parseInt(<?php echo $integral['project-single-slider']; ?>)*1000,
	});

	$('.testislider').flexslider({
	controlNav: true, 
	animation: "slide",
	slideshow: <?php if($integral['testi-autoplay']==1) echo "true"; else echo "false";  ?>,
	slideshowSpeed: parseInt(<?php echo $integral['testi-slider']; ?>)*1000,
	});
})	
</script>

<!-- PrettyPhoto Code START -->
<script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function($){
			$("a[rel^='prettyPhoto']").prettyPhoto({
				social_tools: false,
				theme: 'light_rounded',
                show_title: false,
                callback: function(){}
			});
		});
</script>
<!-- PrettyPhoto Code END -->

<!-- CounterUp Code For Stats START -->
<script type="text/javascript" charset="utf-8">
        jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,  // The delay in which the stats counter will start 
                time: 2000  // The speed by which the stats counter counts up (in milliseconds)
            });
        });
</script>
<!-- CounterUp Code For Stats END -->

<?php if($integral['animations-scrollreveal']==1) { ?>

<!-- Scroll Reveal START -->
<script type="text/javascript" charset="utf-8">
    // Changing the defaults
    window.sr = ScrollReveal({ reset: false });
    // Customizing a reveal set
    sr.reveal('.page-template-template_home .features .feature', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .project-single .project', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .projects-grid .grid', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .services .feature', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .pts .pt', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .skills .skill', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
    sr.reveal('.page-template-template_home .team .member', {
        duration: 900,
        delay    : 200,
        distance : '90px',
        easing   : 'ease-in-out',
        rotate   : { z: 5 },
        viewFactor: 0.25,
        scale    : 1.1
    }, 150);
    sr.reveal('.page-template-template_home .blog article', {
        duration: 900,
        delay: 50,
        origin: 'bottom',
        distance: '20px',
        scale: 1,
        easing: 'linear',
        viewFactor: 0.25
    }, 150);
</script>
<!-- Scroll Reveal END -->

<?php } ?>

<!-- Toggle H2 Big Title Horizontal Lines -->
<?php if($integral['gen-typography-bigtitle-horizontal-lines-toggle']==0) { ?>
    <style type="text/css">h2.bigtitle:before,h2.bigtitle:after{display:none !important;}</style>
<?php } ?>
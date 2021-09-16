<?php
/**
 * Declaring widgets
 */

/** Register Sidebars and Custom Widget Areas **/
function integral_widgets_init() {
    
    global $integral;

    register_sidebar( array(
      'name' => __( 'Right Sidebar', 'integral' ),
      'id' => 'rightbar',
      'description' => __( 'Widgets in this area will be shown in the right sidebar.', 'integral' )
    ) );
    
    $features_layout = $integral['features-layout'];

	register_sidebar( array(
		'name' => __( 'Homepage Features Section', 'integral' ),
		'id' => 'feature-widgets',
		'description' => __( 'The FEATURES section which appears on the homepage. Drag and drop widgets titled [Integral - Feature Widget] here to add features.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$features_layout.' col-md-'.$features_layout.' col-lg-'.$features_layout.'"><div class="feature">',
		'after_widget' => '</div></div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );

	register_sidebar( array(
		'name' =>__( 'Homepage Single Projects Section', 'integral'),
		'id' => 'single-project-widgets',
		'description' => __( 'The PROJECTS SINGLE section which appears on the homepage. Drag and drop widgets titled [Integral - Single Project Widget] here to add projects.', 'integral' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

    $clients_layout = $integral['clients-layout'];

    register_sidebar( array(
		'name' =>__( 'Homepage Clients Section', 'integral'),
		'id' => 'client-widgets',
		'description' => __( 'The CLIENTS section which appears on the homepage. Drag and drop widgets titled [Integral - Client Widget] here to add clients.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$clients_layout.' col-md-'.$clients_layout.' col-lg-'.$clients_layout.'">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
    register_sidebar( array(
		'name' =>__( 'Homepage Testimonials Section', 'integral'),
		'id' => 'testimonial-widgets',
		'description' => __( 'The TESTIMONIALS section which appears on the homepage. Drag and drop widgets titled [Integral - Testimonial Widget]  here to add testimonials.', 'integral' ),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<small>',
		'after_title' => '</small>',
	) );
    
    $services_layout = $integral['services-layout'];
    
    register_sidebar( array(
		'name' =>__( 'Homepage Services Section', 'integral'),
		'id' => 'service-widgets',
		'description' => __( 'The SERVICES section which appears on the homepage. Drag and drop widgets titled [Integral - Service Widget] here to add services.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$services_layout.' col-md-'.$services_layout.' col-lg-'.$services_layout.' feature">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	) );
    
    $team_layout = $integral['team-layout'];
    
    register_sidebar( array(
		'name' =>__( 'Homepage Team Section', 'integral'),
		'id' => 'team-widgets',
		'description' => __( 'The OUR TEAM section which appears on the homepage. Drag and drop widgets titled [Integral - Team Member Widget] here to add team members.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$team_layout.' col-md-'.$team_layout.' col-lg-'.$team_layout.' member">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="t-name">',
		'after_title' => '</h3>',
	) );
    
    // PRO VERSION WIDGETS
    $brands_layout = $integral['brands-layout'];
    
    register_sidebar( array(
		'name' =>__( 'Homepage Brands Section', 'integral'),
		'id' => 'brands-widgets',
		'description' => __( 'The Brands section which appears on the homepage. Drag and drop widgets titled [Integral - Brand Widget] here to add brands.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$brands_layout.' col-md-'.$brands_layout.' col-lg-'.$brands_layout.'">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
    $projects_grid_layout = $integral['projects-grid-layout'];

    register_sidebar( array(
		'name' =>__( 'Homepage Projects Grid Section', 'integral'),
		'id' => 'projects-grid-widgets',
		'description' => __( 'The PROJECTS GRID section which appears on the homepage. Drag and drop widgets titled [Integral - Grid Project Widget] here to add projects.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$projects_grid_layout.' col-md-'.$projects_grid_layout.' col-lg-'.$projects_grid_layout.' grid">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
    $stats_layout = $integral['stats-layout'];
    
    register_sidebar( array(
		'name' =>__( 'Homepage Stats Section', 'integral'),
		'id' => 'stats-widgets',
		'description' => __( 'The STATS section which appears on the homepage. Drag and drop widgets titled [Integral - Stat Widget] here to add stats.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$stats_layout.' col-md-'.$stats_layout.' col-lg-'.$stats_layout.'">',
		'after_widget' => '</div>',
	) );
    
    $ptables_layout = $integral['ptables-layout'];

    register_sidebar( array(
		'name' =>__( 'Homepage Pricing Tables Section', 'integral'),
		'id' => 'pricing-widgets',
		'description' => __( 'The PRICING TABLES section which appears on the homepage. Drag and drop widgets titled [Integral - Pricing Table Widget] here to add pricing tables.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$ptables_layout.' col-md-'.$ptables_layout.' col-lg-'.$ptables_layout.'">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
    register_sidebar( array(
		'name' =>__( 'Homepage Tweets Section', 'integral'),
		'id' => 'tweetscroll-widget',
		'description' => __( 'The TWEETS section which appears on the homepage. Drag and drop the widget titled [TweetScroll] here to add a scroll of your latest tweets', 'integral' ),
	) );

	$extra1_widgets_layout = $integral['extra1-widgets'];
    
    register_sidebar( array(
		'name' =>__( 'Extra 1 Section', 'integral'),
		'id' => 'extra1-widgets',
		'description' => __( 'The Extra 1 section which appears on the homepage. Drag and drop widgets here.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$extra1_widgets_layout.' col-md-'.$extra1_widgets_layout.' col-lg-'.$extra1_widgets_layout.'">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

	$extra2_widgets_layout = $integral['extra2-widgets'];
    
    register_sidebar( array(
		'name' =>__( 'Extra 2 Section', 'integral'),
		'id' => 'extra2-widgets',
		'description' => __( 'The Extra 2 section which appears on the homepage. Drag and drop widgets here.', 'integral' ),
		'before_widget' => '<div class="col-sm-'.$extra2_widgets_layout.' col-md-'.$extra2_widgets_layout.' col-lg-'.$extra2_widgets_layout.'">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
    
}

add_action( 'widgets_init', 'integral_widgets_init' );

/** Load Custom Widgets **/
require_once get_template_directory() . '/inc/widgets/custom_widgets.php';
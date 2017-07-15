<?php
// Include your functions files here


// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
function customThemeSupport() {
	global $wp_version;
	
	add_theme_support( 'menus' );
	
	//add_theme_support( 'title-tag' );
	//add_theme_support( 'custom-background', $args );
	//add_theme_support( 'custom-header', $args );
	
	// Automatic feed links compatibility
	if( version_compare( $wp_version, '3.0', '>=' ) ) {
		add_theme_support( 'automatic-feed-links' ); 
	} else {
		automatic_feed_links();
	}
}
add_action( 'after_setup_theme', 'customThemeSupport' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'footer-menu' => __( 'Footer Menu' ),
      'top-menu' => __( 'Top Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Content width
if( !isset( $content_width ) ) {
	// @TODO : edit the value for your own specifications
	$content_width = 960;
}
remove_filter( 'the_content', 'wpautop' );

// Register menus, use wp_nav_menu() to display menu to your template ( cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu )
register_nav_menus( array(
    'main_menu' => __( 'Menu principal', 'minimal-blank-theme' )
) );


// Register sidebars
function registerThemeSidebars() {
	if( function_exists( 'register_sidebar' ) ) {
		return;
	}

    register_sidebar( array(
        'name' => 'Main sidebar',
        'id' => 'main-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'registerThemeSidebars' );



/**
 * Register our sidebars and widgetized areas.
 *
 */
function footer1_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer-1',
		'id'            => 'farea',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer1_widgets_init' );

function footer2_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer-2',
		'id'            => 'farea2',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer2_widgets_init' );

function footer3_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer-3',
		'id'            => 'farea3',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'footer3_widgets_init' );

function side1_widgets_init() {

	register_sidebar( array(
		'name'          => 'Side-1',
		'id'            => 'side-1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'side1_widgets_init' );






// Admin editor style
function addAdminEditorStyle() {
    add_editor_style( get_stylesheet_directory_uri() . '/css/editor-style.css' );
}
//add_action( 'admin_init', 'addAdminEditorStyle' );

/*Jutluse lisamise võimalus vasakmenüünst*/

function create_post_type1() {
  register_post_type( 'Tooted',
                     array(
                       'labels' => array(
                         'name' => __( 'Tooted' ),
                         'singular_name' => __( 'toode' )
                       ),
                       'public' => true,
                       'taxonomies' => array('post_tag'),
                       'menu_position' => 5,
                       'rewrite' => array('slug' => 'tooted'),
                       'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
                     )
                    );
}

add_action( 'init', 'create_post_type1' );


function tooterubriik_taxonomy() {
  register_taxonomy(
    'tooterubriik',
    'tooted',
    array(
      'hierarchical' => true,
      'label' => 'Toote rubriik',
      'query_var' => true,
      'orderby' => 'date',
      'rewrite' => array('slug' => 'toote-rubriik')
    )
  );
}

add_action( 'init', 'Tooterubriik_taxonomy' );

/*Slaidide lisamise võimalus vasakmenüünst*/

/*function create_post_type2() {
  register_post_type( 'Slaidid',
                     array(
                       'labels' => array(
                         'name' => __( 'Slaidid' ),
                         'singular_name' => __( 'slaid' )
                       ),
                       'public' => true,
                       'taxonomies' => array('post_tag'),
                       'menu_position' => 5,
                       'rewrite' => array('slug' => 'slaid'),
                       'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail' )
                     )
                    );
}

add_action( 'init', 'create_post_type2' );


function slaidirubriik_taxonomy() {
  register_taxonomy(
    'slaidirubriik',
    'slaidid',
    array(
      'hierarchical' => true,
      'label' => 'Slaidi rubriik',
      'query_var' => true,
      'orderby' => 'date',
      'rewrite' => array('slug' => 'slaidi-rubriik')
    )
  );
}

add_action( 'init', 'slaidirubriik_taxonomy' );*/



require 'breadcrumb.php';

function my_post_queries( $query ) {

  {
    // show 50 posts on custom taxonomy pages
    $query->set('posts_per_page', 50);
  }
}
add_action( 'pre_get_posts', 'my_post_queries' ); 
load_theme_textdomain( 'saaremaasaunad', get_template_directory().'/languages' );

include_once  get_template_directory(). '/vx-templates/sections-acf-fields.php';


//add_filter('acf/settings/show_admin', '__return_false');

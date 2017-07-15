<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]> <html class="no-js ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]> <html class="no-js ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js " <?php language_attributes(); ?>  > <!--<![endif]-->

<title>Roopa Auto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="author" content="<?php the_author_meta( 'display_name', 1 ); ?>">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/apple-touch-icon.png" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />

<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/style.css">



<?php
	// Use jquery and jquery core from the google cdn instead of wordpress included
wp_deregister_script( 'jquery-ui-core' );
wp_deregister_script( 'jquery-ui-tab' );
wp_deregister_script( 'jquery-ui-autocomplete' );
wp_deregister_script( 'jquery-ui-accordion' );
wp_deregister_script( 'jquery-ui-autocomplete' );
wp_deregister_script( 'jquery-ui-button' );
wp_deregister_script( 'jquery-ui-datepicker');
wp_deregister_script( 'jquery-ui-dialog' );
wp_deregister_script( 'jquery-ui-draggable' );
wp_deregister_script( 'jquery-ui-droppable' );
wp_deregister_script( 'jquery-ui-mouse' );
wp_deregister_script( 'jquery-ui-position' );
wp_deregister_script( 'jquery-ui-progressbar');
wp_deregister_script( 'jquery-ui-resizable' );
wp_deregister_script( 'jquery-ui-selectable');
wp_deregister_script( 'jquery-ui-slider' );
wp_deregister_script( 'jquery-ui-sortable' );
wp_deregister_script( 'jquery-ui-tabs' );
wp_deregister_script( 'jquery-ui-widget' );
wp_deregister_script( 'jquery' );

wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3' );
/*wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl-carousel/owl.carousel.js', array(), '2' );*/
wp_enqueue_script( 'lightgallery', get_template_directory_uri() . '/js/lightgallery.js', array(), '2' );
wp_enqueue_script( 'lg-fullscreen', get_template_directory_uri() . '/js/lg-fullscreen.js', array(), '2' );
wp_enqueue_script( 'lg-thumbnail', get_template_directory_uri() . '/js/lg-thumbnail.js', array(), '2' );
wp_enqueue_script( 'lg-video', get_template_directory_uri() . '/js/lg-video.js', array(), '2' );
wp_enqueue_script( 'lg-autoplay', get_template_directory_uri() . '/js/lg-autoplay.js', array(), '2' );
wp_enqueue_script( 'lg-zoom', get_template_directory_uri() . '/js/lg-zoom.js', array(), '2' );
wp_enqueue_script( 'lg-hash', get_template_directory_uri() . '/js/lg-hash.js', array(), '2' );
wp_enqueue_script( 'lg-pager', get_template_directory_uri() . '/js/lg-pager.js', array(), '2' );

/*wp_enqueue_script( 'jquery-ui-core', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js', array( 'jquery' ), '1.11.4', true);
*/
	// Comment reply JS
if( is_singular() ) {
	wp_enqueue_script( 'comment-reply' );
}




	// @TODO : Uncomment what you need

	// Modernizr for html5 and CSS3 support
	//wp_enqueue_script( 'modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js' , array(), '2.8.3', true);

	// Normalize
	//wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css' );

	// Bootstrap
	//wp_enqueue_script( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js' , array('jquery'), '3.3.6', true);
	//wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );

	// ADD your css below


	// ADD your js below


	// Default theme stylesheet
//wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );

	// Default js of your theme to add your own js scripts, add dependances if needed
wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js' , array( 'jquery' ), '1.0', true);


wp_head();
?>
</head>
<body <?php echo body_class(); ?>  >

<div class="overlay">	</div>
	
	
	
	


				<?php /*	<div class="langList">
						<ul>
							<li><a class="est" href="?lang=et">EST</a></li>
							<li><a class="eng"  href="./?lang=en">ENG</a></li>
							<li><a class="rus"  href="./?lang=ru">RUS</a></li>
						</ul>
					</div> */?>
					
					<header class="full-width" id="header">
						<div class="container">
							<a class="mobileMenu">
								<div class="icon"></div>
							</a>
							<div class="inner flex wrap relative">	
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
									<div style="background-image: url('<?php echo bloginfo('template_directory'); ?>/images/roopaauto_logo.png');" alt="Roopa auto">
									</div>
								</a>

								<?php 
								wp_nav_menu(array(
									'menu' => 'header-menu'
									)); 
									?>
								</div>
							</div>
						</header>

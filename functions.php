<?php
/**
 * Where We Wander functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Where_We_Wander
 */

if ( ! function_exists( 'where_we_wander_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function where_we_wander_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Where We Wander, use a find and replace
	 * to change 'where-we-wander' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'where-we-wander', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'where-we-wander' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'where_we_wander_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'where_we_wander_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function where_we_wander_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'where_we_wander_content_width', 640 );
}
add_action( 'after_setup_theme', 'where_we_wander_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function where_we_wander_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'where-we-wander' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'where_we_wander_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function where_we_wander_scripts() {
	wp_enqueue_style( 'where-we-wander-style', get_stylesheet_uri() );

	wp_enqueue_style( 'where-we-wander-icomoon', get_template_directory_uri() . '/icomoon/style.css' );

	wp_enqueue_script( 'where-we-wander-app', get_template_directory_uri() . '/js/wherewewander.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		// wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'where_we_wander_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Custom functions
 */

/**
 * Tiny MCE Customisation
 */
function where_we_wander_add_editor_styles() {
	add_editor_style( 'style.css' );
}
function where_we_wander_add_editor_fonts() {
	add_editor_style( str_replace( ',', '%2C', '//fonts.googleapis.com/css?family=Lato:300,400,700' ) );
}
function where_we_wander_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		array(
			'title' => 'Image Rotation',
			'items' => array(
				array(  
					'title' => '↔ Image Group',  
					'block' => 'p',
					'classes' => 'u-text-center',
					'wrapper' => false
				), 
				array(  
					'title' => '⇠ Rotate Left',  
					'selector' => 'img',
					'classes' => 'blog-image rotate-left',
					'wrapper' => false
				),  
				array(  
					'title' => '← Rotate Left (more)',  
					'selector' => 'img',
					'classes' => 'blog-image rotate-left-more',
					'wrapper' => false
				),
				array(  
					'title' => '⇢ Rotate Right', 
					'selector' => 'img', 
					'classes' => 'blog-image rotate-right',
					'wrapper' => false
				),  
				array(  
					'title' => '→ Rotate Right (more)',  
					'selector' => 'img',
					'classes' => 'blog-image rotate-right-more',
					'wrapper' => false
				)
			)
		)
	);
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
	
}
function where_we_wander_editor_buttons_2( $buttons ) {
		array_splice( $buttons, 1, 0, 'styleselect' );
		return $buttons;
}
// Attach callback to 'tiny_mce_before_init' 
add_action( 'admin_init', 'where_we_wander_add_editor_styles' );
add_action( 'after_setup_theme', 'where_we_wander_add_editor_fonts' );
add_filter( 'tiny_mce_before_init', 'where_we_wander_insert_formats' );  
add_filter( 'mce_buttons_2', 'where_we_wander_editor_buttons_2' );

/**
 * Get Page Id
 */

function where_we_wander_get_page_id($post) {
	if (isset($post) && property_exists($post, 'post_name')) {
		return $post->post_name;
	}
	else {
		return '';
	}
}

/**
 * Get All Posts
 */

function where_we_wander_get_posts() {
	$args = array(
		'numberposts'       => -1,
		'post_type'         => 'post',
		'post_status'				=> 'publish'
	);

	return get_posts( $args );
}

/**
 * Get All Attachments in Post
 */

function where_we_wander_get_images() {
	$args = array(
		'numberposts'     => -1,
		'post_type'  			=> 'attachment',
		'post_mime_type'  => 'image',
		'post_parent'			=> null
	);

	return get_posts( $args );
}

/**
 * Get Wander Attachments
 */

function where_we_wander_get_wander_objects() {
	$images = where_we_wander_get_images();
	$objects = [];

	foreach ( $images as $image ) {
		$objects[] = array(
			'id'				=> $image->ID,
			'src'       => wp_get_attachment_image_src($image->ID, 'full')[0],
			'thumb'     => wp_get_attachment_image_src($image->ID, 'large')[0],
			'caption'   => $image->post_title
		);
	}

	return $objects;
}

/**
 * Footer Quotes
 */

function where_we_wander_footer_quote($page_id) {
	$quotes = array(
		'home'			=> array(
			'text'			=> 'Stuff your eyes with wonder, live as if you\'d drop dead in ten seconds. See the world.',
			'author'		=> 'Ray Bradbury'
		),
		'about'			=> array(
			'text'			=> 'If you reject the food, ignore the customs &amp; avoid the people, you might better stay at home.',
			'author'		=> 'James Michener'
		),
		'where'			=> array(
			'text'			=> 'Travelling - it leaves you speechless, then turns you into a storyteller.',
			'author'		=> 'Ibn Battuta'
		),
		'wander'			=> array(
			'text'			=> 'We wander for distraction but we travel for fulfilment.',
			'author'		=> 'Hilarie Belloc'
		),
		'contact'			=> array(
			'text'			=> 'The real voyage of discovery consists not in seeking new landscapes, but in having new eyes.',
			'author'		=> 'Marcel Proust'
		)
	);

	if (isset($quotes[$page_id])) {
		return $quotes[$page_id];
	}
	else {
		return $quotes['home'];
	}
}

/**
 * Post Navigation
 */

function where_we_wander_get_post_navigation($id) {
	$posts = where_we_wander_get_posts();

	foreach ( $posts as $index => $post ) {
		if ($post->ID === $id) {
			$post_index = $index;
			break;
		}
	}

	$nav = array_slice($posts, $post_index + 1, 4);
	$max = min(count($posts) - 1, 4);
	$inc = 0;

	while (count($nav) < $max) {
		$nav[] = $posts[$inc];
		$inc++;
	}

	return $nav;
}
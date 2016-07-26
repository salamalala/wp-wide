<?php
/**
 * Wide functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wide
 */

if ( ! function_exists( 'wide_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wide_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wide, use a find and replace
	 * to change 'wide' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wide', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'wide' ),
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
	add_theme_support( 'custom-background', apply_filters( 'wide_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wide_setup' );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wide_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wide' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wide' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wide_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wide_scripts() {
	wp_enqueue_style( 'wide-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wide-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'wide-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wide_scripts' );

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
 * Load custom field file.
 */
require get_template_directory() . '/inc/acf.php';


//added functions

//remove added p tags
remove_filter('acf_the_content', 'wpautop');

//remove p tags around images and iframes:
function filter_ptags_on_images($content) {
    $content = preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
    return preg_replace('/<p>\s*(<iframe .*>*.<\/iframe>)\s*<\/p>/iU', '\1', $content);
}
add_filter('acf_the_content', 'filter_ptags_on_images');


// Walker: outputting HTML for custom menus My_Sub_Menu allows custom class name, in this case nav__submenu
class My_Sub_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"nav__submenu\">\n";
  }
  function end_lvl(&$output, $depth = 0, $args = array()) {
    $indent = str_repeat("\t", $depth);
    $output .= "$indent</ul>\n";
  }
}

//remove wp editor
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');


// create custom wysiwyg toolbar for acf fields
add_filter( 'acf/fields/wysiwyg/toolbars' , 'simple_toolbar'  );

function simple_toolbar( $toolbars )
{

	// Add a new toolbar called "Very Simple"
	// - this toolbar has only 1 row of buttons
	$toolbars['Simple' ] = array();
	$toolbars['Simple' ][1] = array('bold' , 'italic' , 'formatselect', 'bullist' ,'numlist', 'link', 'unlink');

	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	{
	    unset( $toolbars['Full' ][2][$key] );
	}

	// return $toolbars - IMPORTANT!
	return $toolbars;
}


//to change formatselect in the wysiwyg and only allow paragraph, h2 and h3.
add_filter( 'tiny_mce_before_init', function( $settings ){

	$settings['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3';

	return $settings;

} );


// create custom wysiwyg toolbar for acf fields
add_filter( 'acf/fields/wysiwyg/toolbars' , 'very_simple_toolbar'  );

function very_simple_toolbar( $toolbars )
{

	// Add a new toolbar called "Very Simple"
	// - this toolbar has only 1 row of buttons
	$toolbars['Very simple' ] = array();
	$toolbars['Very simple' ][1] = array('bold', 'link', 'unlink');

	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	{
	    unset( $toolbars['Full' ][2][$key] );
	}

	// return $toolbars - IMPORTANT!
	return $toolbars;
}


/**
*create custom post type Aktivitäten
*/
function create_posttype() {

	register_post_type( 'ueberuns',
	// CPT Options
		array(
			'labels' => array(
				'name' => 'Über Uns',
				'singular_name' => 'Über Uns',
				'add_new'            => 'Neues Über Uns',
				'add_new_item'       => 'Neues Über Uns hinzufügen',
				'edit_item'          => 'Über Uns bearbeiten',
				'new_item'           => 'Neues Über Uns',
				'all_items'          => 'Alle Über Uns',
				'view_item'          => 'Über Uns ansehen',
				'search_items'       => 'Über Uns suchen',
				'not_found'          => 'Kein Über Uns gefunden',
				'not_found_in_trash' => 'Kein Über Uns im Papierkorb gefunden',
				'parent_item_colon'  => '',
				'menu_name'          => 'Über Uns'
			),
			'supports' => array('title', 'thumbnail', 'revisions','author', 'page-attributes'),
			'taxonomies' => array('category'),
			'rewrite' => array('slug' => 'ueberuns'),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		)
	);


	register_post_type( 'aktivitaet',
	// CPT Options
		array(
			'labels' => array(
				'name' => 'Aktivitäten',
				'singular_name' => 'Aktivität',
				'add_new'            => 'Neue Aktivität',
		    'add_new_item'       => 'Neue Aktivität hinzufügen',
		    'edit_item'          => 'Aktivität bearbeiten',
		    'new_item'           => 'Neue Aktivität',
		    'all_items'          => 'Alle Aktivitäten',
		    'view_item'          => 'Aktivität ansehen',
		    'search_items'       => 'Aktivitäten suchen',
		    'not_found'          => 'Keine Aktivitäten gefunden',
		    'not_found_in_trash' => 'Keine Aktivitäten im Papierkorb gefunden',
		    'parent_item_colon'  => '',
		    'menu_name'          => 'Aktivitäten'
			),
			'supports' => array('title', 'thumbnail', 'revisions','author', 'page-attributes'),
			'taxonomies' => array('category'),
			'rewrite' => array('slug' => 'aktivität'),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		)
	);

	register_post_type( 'thema',
	// CPT Options
		array(
			'labels' => array(
				'name' => 'Themen',
				'singular_name' => 'Thema',
				'add_new'            => 'Neues Thema',
		    'add_new_item'       => 'Neues Thema hinzufügen',
		    'edit_item'          => 'Thema bearbeiten',
		    'new_item'           => 'Neues Thema',
		    'all_items'          => 'Alle Themen',
		    'view_item'          => 'Thema ansehen',
		    'search_items'       => 'Themen suchen',
		    'not_found'          => 'Kein Thema gefunden',
		    'not_found_in_trash' => 'Kein Thema im Papierkorb gefunden',
		    'parent_item_colon'  => '',
		    'menu_name'          => 'Themen'
			),
			'supports' => array('title', 'thumbnail', 'revisions','author', 'page-attributes'),
			'taxonomies' => array('category'),
			'rewrite' => array('slug' => 'thema'),
			// You can associate this CPT with a taxonomy or custom taxonomy.
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => 5,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		)
	);

}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


// creating different templates for single posts
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

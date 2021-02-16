<?php
/**
 * webino functions and definitions
 *
 * @package WordPress
 * @subpackage webino
 * @since webino 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since webino 1.0
 */
 load_theme_textdomain( 'webino' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'webino' ),
		'header'  => __( 'Header menu', 'webino' ),
		'footer'  => __( 'Footer menu', 'webino' ),
	) );
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	add_theme_support( 'custom-logo', array(
		'height'      => 248,
		'width'       => 248,
		'flex-height' => true,
	) );

	add_theme_support( 'customize-selective-refresh-widgets' );
	/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
 
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>
<?php
}
/*
* Creating a function to create widget
*/
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Main Sidebar', 'webino' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'webino' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );



/*
* Creating a function to create our slider
*/

function slider_post_type() {
	$labels = array(
		'name'                => _x( 'slider', 'Post Type General Name', 'webino' ),
		'singular_name'       => _x( 'slider', 'Post Type Singular Name', 'webino' ),
		'menu_name'           => __( 'slider', 'webino' ),
		'parent_item_colon'   => __( 'Parent slider', 'webino' ),
		'all_items'           => __( 'All slider', 'webino' ),
		'view_item'           => __( 'View slider', 'webino' ),
		'add_new_item'        => __( 'Add New slider', 'webino' ),
		'add_new'             => __( 'Add New', 'webino' ),
		'edit_item'           => __( 'Edit slider', 'webino' ),
		'update_item'         => __( 'Update slider', 'webino' ),
		'search_items'        => __( 'Search slider', 'webino' ),
		'not_found'           => __( 'Not Found', 'webino' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'webino' ),
	);
	$args = array(
		'label'               => __( 'slider', 'webino' ),
		'description'         => __( 'slider news and reviews', 'webino' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
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
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'slider', $args );
}
add_action( 'init', 'slider_post_type', 0 );






/*
* Creating a function to create our services
*/

function services_post_type() {
	$labels = array(
		'name'                => _x( 'services', 'Post Type General Name', 'webino' ),
		'singular_name'       => _x( 'services', 'Post Type Singular Name', 'webino' ),
		'menu_name'           => __( 'services', 'webino' ),
		'parent_item_colon'   => __( 'Parent services', 'webino' ),
		'all_items'           => __( 'All services', 'webino' ),
		'view_item'           => __( 'View services', 'webino' ),
		'add_new_item'        => __( 'Add New services', 'webino' ),
		'add_new'             => __( 'Add New', 'webino' ),
		'edit_item'           => __( 'Edit services', 'webino' ),
		'update_item'         => __( 'Update services', 'webino' ),
		'search_items'        => __( 'Search services', 'webino' ),
		'not_found'           => __( 'Not Found', 'webino' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'webino' ),
	);
	$args = array(
		'label'               => __( 'services', 'webino' ),
		'description'         => __( 'services news and reviews', 'webino' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
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
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'services', $args );
}
add_action( 'init', 'services_post_type', 0 );




/*
* Creating a function to create our work
*/

function work_post_type() {
	$labels = array(
		'name'                => _x( 'work', 'Post Type General Name', 'webino' ),
		'singular_name'       => _x( 'work', 'Post Type Singular Name', 'webino' ),
		'menu_name'           => __( 'work', 'webino' ),
		'parent_item_colon'   => __( 'Parent work', 'webino' ),
		'all_items'           => __( 'All work', 'webino' ),
		'view_item'           => __( 'View work', 'webino' ),
		'add_new_item'        => __( 'Add New work', 'webino' ),
		'add_new'             => __( 'Add New', 'webino' ),
		'edit_item'           => __( 'Edit work', 'webino' ),
		'update_item'         => __( 'Update work', 'webino' ),
		'search_items'        => __( 'Search work', 'webino' ),
		'not_found'           => __( 'Not Found', 'webino' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'webino' ),
	);
	$args = array(
		'label'               => __( 'work', 'webino' ),
		'description'         => __( 'work news and reviews', 'webino' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'genres' ),	
		'hierarchical'        => false,
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
		'taxonomies'          => array( 'category' ),
	);
	register_post_type( 'work', $args );
}
add_action( 'init', 'work_post_type', 0 );









// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
/**
 * Enables the Excerpt meta box in Page edit screen.
 */
function add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'add_excerpt_support_for_pages' );

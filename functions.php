<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

/**
 * Proper way to enqueue scripts and styles.
 */
function get_scripts() {
	
	wp_enqueue_script( 'customJS', get_stylesheet_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
	
	//Conditionally Loading The JS for single product
	if (is_product()) {
		wp_enqueue_script( 'customJSProductPage', get_stylesheet_directory_uri() . '/js/product-page.js', array(), '1.0.0', true );
	}

	if(is_page(434)){
		wp_enqueue_script( 'coachSignUp', get_stylesheet_directory_uri() . '/js/coach-sign-up-page.js', array(), '1.0.0', true );
	}

	if(is_page(54)){
		wp_enqueue_script( 'map', get_stylesheet_directory_uri() . '/js/map-page.js', array(), '1.0.0', true );
	}
	
	if(is_page(28)){
		wp_enqueue_script( 'shopSingular', get_stylesheet_directory_uri() . '/js/home-page.js', array(), '1.0.0', true );
	}

	if(is_page(647)){
		wp_enqueue_script( 'shopSingular', get_stylesheet_directory_uri() . '/js/shop-singular.js', array(), '1.0.0', true );
	}

	if(is_page(14)){
		wp_enqueue_script( 'coachDashboard', get_stylesheet_directory_uri() . '/js/coach-dashboard.js', array(), '1.0.0', true );
	}

	if ( get_post_type( get_the_ID() ) == 'coaches' ) {
		wp_enqueue_script( 'coaches-cat', get_stylesheet_directory_uri() . '/js/coaches-cat.js', array(), '1.0.0', true );
	}
  
}
add_action( 'wp_enqueue_scripts', 'get_scripts' );

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

add_filter( 'wcpv_vendor_slug', 'change_product_vendors_slug' );
function change_product_vendors_slug() {
return 'Coachy';
}

//woocommerce_template_loop_add_to_cart

add_action( 'woocommerce_product_meta_start', 'bbloomer_custom_action', 5 );
 
function bbloomer_custom_action() {?>
	<br />
	<p class="by-coach">By: <a href="<?php the_field('add_coach_url'); ?>"><?php the_field('coach_name'); ?></a></p>
<?php }

add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_custom_actions', 15 );
 
function bbloomer_custom_actions() {?>
	<br />
	<p class="by-coach">By: <a href="<?php the_field('add_coach_url'); ?>"><?php the_field('coach_name'); ?></a></p>
<?php }

//Remove Downloads
add_filter( 'woocommerce_account_menu_items', 'custom_remove_downloads_my_account', 999 );
 
function custom_remove_downloads_my_account( $items ) {
unset($items['downloads']);
unset($items['orders']);
unset($items['dashboard']);
return $items;
}




function custom_login_logo() {
	?>
<style type="text/css">
body.login div#login h1 a {
background-image: url('http://giddy-spiral.flywheelsites.com/wp-content/uploads/2019/06/logoBiz.jpg'); 
padding-bottom: 30px;
background-size: 150px;	
	height: 84px;
	width: 150px;
}
</style>
<?php
} add_action( 'login_enqueue_scripts', 'custom_login_logo' );
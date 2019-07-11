<?php
/**
 * Template Name: testttt Page
 * 
 * Ignore this page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<h2>hosr</h2>
  <?php global $wpdb; ?>

<?php
$user_count = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->users" );
echo "<p>User count is {$user_count}</p>";
?>


<?php  
$user_counteee = $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->usermeta" );
echo "<p>User count is {$user_counteee}</p>";


?>


<?php
$wp_user_search = $wpdb->get_results("SELECT ID, display_name FROM $wpdb->users ORDER BY ID");

foreach ( $wp_user_search as $userid ) {
	$user_id       = (int) $userid->ID;
	$user_login    = stripslashes($userid->user_login);
	$display_name  = stripslashes($userid->display_name);

	$return  = '';
	$return .= "\t" . '<li>'. $display_name .'</li>' . "\n";

	print($return);
}
?>

<?php get_footer(); ?>

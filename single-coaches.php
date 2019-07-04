<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>


<div id="profile-bg" style="background-image: url(<?php the_field('header_background'); ?>);">
	<div class="profile-info"> 

		<h1><?php the_field('name'); ?></h1>
		

		<div class="profile-stars">	
			<?php $rating = get_field('start_rating');
				for ($i = 0; $i < $rating; $i++) { ?>
					<i class="fas fa-star"></i>
			<?php } ?>
		</div>
	</div>
</div>




<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
		<main class="site-main" id="main">

			<div class="coach-wrapper">

			<div class="left-box">

			<img src="<?php the_field('coach_image'); ?>" alt="Coach" class="coach-image"/>	

			<p><strong>Call: <?php the_field('coach_number'); ?></strong></p>

			<p><strong>Coach Location: <?php the_field('coach_location'); ?></strong></p>

			

			</div><!-- end left-box -->

			
			<div class="right-box">		
				<?php the_field('coach_text'); ?>
			</div><!-- end rightbox -->


			</div><!-- end coach-wrapper -->




			<div class="coach-profile-products">
				<?php the_field('coach_products'); ?>
			</div>

			




			

				

			</main><!-- #main -->

			

			

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php get_footer(); ?>

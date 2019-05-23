<?php
/**
 * Template Name: Home Page
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

<?php if ( is_front_page() ) : ?>
  <?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
                    <?php while ( have_posts() ) : the_post(); ?>                    
                        <?php echo do_shortcode('[rev_slider alias="homepage"]'); ?>
                        
                        <?php the_content();?>	
                        
                       

                        <div class="step-boxes">
                        </div>

									
					<?php endwhile; // end of the loop. ?>










                    
				</main><!-- #main -->
			</div><!-- #primary -->
        </div><!-- .row end -->
    </div>    
</div>        

        <div id="explore-bizbom">
            <div class="explore-bizbom-container">
                <h2>Explore Bizbom</h2>
            </div>
            <button id="explore-view-all">
                View All
            </button>
        </div>








<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">



<h1>Success</h1>

        <div class="sports-boxes">
            <?php if( have_rows('sport_boxes') ): ?>

	<ul>

	<?php while( have_rows('sport_boxes') ): the_row(); 

		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$link = get_sub_field('link');

		?>

		<li>
			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>
				<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

            <?php if( $link ): ?>
                <a href="<?php echo $link; ?>">
                <?php endif; ?>
                    <?php echo $title; ?>
                <?php if( $link ): ?>
                </a>
            <?php endif; ?>

            <?php if( $link ): ?>
                <a href="<?php echo $link; ?>">
                <?php endif; ?>
                    <h4>View Category</h4>
                <?php if( $link ): ?>
                </a>
            <?php endif; ?>
		    </li>
	    <?php endwhile; ?>
	    </ul>
    <?php endif; ?>
</div><!-- end sport-boxes -->



	            </main><!-- #main -->
			</div><!-- #primary -->
        </div><!-- .row end -->
    </div>    
</div>        





<div id="how-works-bizbom">
    
      <div class="how-works-bizbom-container">
        <h2>
          How it works&nbsp; &nbsp; &nbsp; &nbsp;</h2>
    </div>   
  
  <button id="how-works-sign-up">
      Sign Up
    </button>
  
  </div>




<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">

<div class="step-boxes">
    <?php if( have_rows('step_boxes') ): ?>

	<ul>

	<?php while( have_rows('step_boxes') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$link = get_sub_field('link');
		$text = get_sub_field('text');
		?>

		<li>

		<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>
				<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" />
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>

            <?php if( $link ): ?>
                <a href="<?php echo $link; ?>">
                <?php endif; ?>
                    <?php echo $title; ?>
                <?php if( $link ): ?>
                </a>
			<?php endif; ?>
			
			<p><?php echo $text; ?></p>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>


<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">

    <h2>In here lads 02.....</h2>


	            </main><!-- #main -->
			</div><!-- #primary -->
        </div><!-- .row end -->
    </div>    
</div>        















<?php get_footer(); ?>

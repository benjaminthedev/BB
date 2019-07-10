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


<div id="banner-footer-image" style="background-image: url(<?php the_field('header_background'); ?>);">
	<div class="header-search-section"> 
		<!-- was footer banner -->
<div class="container">
		<div class="col-12">
				<div class="search-section">

		<h1>
			<?php the_field('header_title'); ?>		
			</h1>
		

				<!-- <div class="search-section">
					<form method="get" id="searchform" action="<?php //echo esc_url( home_url( '/' ) ); ?>" role="search">
						<label class="sr-only" for="s"><?php //esc_html_e( 'Search', 'understrap' ); ?></label>
							<div class="input-group">
								<input class="field form-control" id="s" name="s" type="text"
									placeholder="<?php //esc_attr_e( 'Search &hellip;', 'understrap' ); ?>" value="<?php //the_search_query(); ?>">
								<span class="input-group-append">
									<input class="submit btn btn-primary" id="searchsubmit"  type="submit"
									value="&#xf002;">
								</span>
							</div>
					</form>
				</div> -->

				<?php echo do_shortcode('[aws_search_form]'); ?>
				</div>

				</div>
				</div>

		</div>
</div>	



<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">
                    <?php while ( have_posts() ) : the_post(); ?>                    
                        <?php //echo do_shortcode('[rev_slider alias="homepage"]'); ?>
                        
                        <?php the_content();?>                  
                       

                       

									
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
                <a href="<?php echo $link; ?>"class="sport">
                <?php endif; ?>
                    <?php echo $title; ?>
                <?php if( $link ): ?>
                </a>
            <?php endif; ?>

            <?php if( $link ): ?>
                <a href="<?php echo $link; ?>" class="cat">
                <?php endif; ?>
                    View Category
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
          How it works Athletes &nbsp; &nbsp; &nbsp; &nbsp;</h2>
    </div>   
  
  <button id="how-works-sign-up">
      Sign Up
    </button>
  
  </div>



<div id="newBoxeFindACoach">


<div class="step-boxes-slide-in">
    <?php if( have_rows('step_boxes') ): ?>

	

	<?php while( have_rows('step_boxes') ): the_row(); 
		// vars
		$step_no = get_sub_field('step_number');
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$link = get_sub_field('link');
		$text = get_sub_field('text');
		?>

		
	<div class="boxes">

	<div class="boxes__content  boxes__content--front">
	
		<p class="step-number"><?php echo $step_no; ?></p>
	<div class="border01"></div>
	


		<div class="wrapContentBoxes">
         
			<?php if( $title ): ?>
				<h3 class="step-heading"><?php echo $title; ?></h3>                
			<?php endif; ?>
			
			<p class="step-text"><?php echo $text; ?></p>
		</div>	
		



			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>
				<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" class="icon_new"/>
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>
	</div>

	<div class="boxes__content boxes__content--back">
			
		<?php if( $link ): ?>
			<a href="<?php echo $link; ?>">
		<?php endif; ?>
			<a href="<?php echo $link; ?>" class="boxes_link">Find Your Coach</a>
		<?php if( $link ): ?>
			</a>
		<?php endif; ?>
				
	</div>

</div>

	<?php endwhile; ?>

	

<?php endif; ?>

    

</div>
	            </main><!-- #main -->
			</div><!-- #primary -->
        </div><!-- .row end -->
    </div>    
</div>        




	<div class="athlete-section">
        <div id="explore-bizbom">
            <div class="explore-bizbom-container">
                <h2>How it works coaches</h2>
            </div>
            <button id="explore-view-all">
                View All
            </button>
		</div>
	</div>		


<!-- <div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php //echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main"> -->

<div class="step-boxes-slide-in">
    <?php if( have_rows('step_boxes_coaches') ): ?>

	

	<?php while( have_rows('step_boxes_coaches') ): the_row(); 
		// vars
		$step_no = get_sub_field('step_number');
		$image = get_sub_field('image');
		$title = get_sub_field('title');
		$link = get_sub_field('link');
		$text = get_sub_field('text');
		?>

		
	<div class="boxes">

	<div class="boxes__content  boxes__content--front">
	
		<p class="step-number"><?php echo $step_no; ?></p>
	<div class="border01"></div>
	


		<div class="wrapContentBoxes">
         
			<?php if( $title ): ?>
				<h3 class="step-heading"><?php echo $title; ?></h3>                
			<?php endif; ?>
			
			<p class="step-text"><?php echo $text; ?></p>
		</div>	
		



			<?php if( $link ): ?>
				<a href="<?php echo $link; ?>">
			<?php endif; ?>
				<img src="<?php echo $image; ?>" alt="<?php echo $image['alt'] ?>" class="icon_new"/>
			<?php if( $link ): ?>
				</a>
			<?php endif; ?>
	</div>

	<div class="boxes__content boxes__content--back">
			
		<?php if( $link ): ?>
			<a href="<?php echo $link; ?>">
		<?php endif; ?>
		<a href="<?php echo $link; ?>" class="boxes_link">
		Become A Coach Today</a>
		<?php if( $link ): ?>
			</a>
		<?php endif; ?>
				
	</div>

</div>

	<?php endwhile; ?>

	

<?php endif; ?>




<div class="wrapper" id="full-width-page-wrapper">
	<div class="<?php echo esc_attr( $container ); ?>" id="content">
		<div class="row">
			<div class="col-md-12 content-area" id="primary">
				<main class="site-main" id="main" role="main">

    


	            </main><!-- #main -->
			</div><!-- #primary -->
        </div><!-- .row end -->
    </div>    
</div>        











<?php get_footer(); ?>

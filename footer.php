<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}?>

				</div><!--col end -->
			</div><!-- row end -->
		</div><!-- container end -->
	</div><!-- wrapper end -->
</div><!-- #page we need this extra closing tag here -->



<div id="banner-footer-image" style="background-image: url(<?php the_field('background_image', 28); ?>);">
	<div class="banner-footer"> 
		<h4><?php the_field('footer_banner_text', 28); ?></h4>
		<a href="<?php the_field('add_the_link', 28); ?>" target="_blank" class="sign-up">Sign Up Now</a>		
	</div>
</div>

		






	






<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 p-0">
				<?php dynamic_sidebar('Footer Left'); ?> 
			</div>
			<div class="col-md-8 offset-md-1 p-0">
				<?php dynamic_sidebar('Footer Right'); ?> 
			</div>			
		</div>
		<div class="row">		  
			<div class="col-md-12 p-3">
				<hr />
			</div>
		</div>
	<div class="copyright-section">	
		<div class="row">		  
			<div class="col-md-6 p-0">
				<?php dynamic_sidebar('copyleft'); ?> 
			</div>
			<div class="col-md-6 p-0">
				<div class="website-by">		
					<?php dynamic_sidebar('websiteright'); ?> 
				</div>
			</div>			
		   </div>	
		</div>
	</div>	
</div>

<?php wp_footer(); ?>

</body>

</html>


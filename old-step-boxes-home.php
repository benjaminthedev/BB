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
                <a href="<?php echo $link; ?>" class="step-heading">
                <?php endif; ?>
                    <?php echo $title; ?>
                <?php if( $link ): ?>
                </a>
			<?php endif; ?>
			
			<p class="step-text"><?php echo $text; ?></p>

		</li>

	<?php endwhile; ?>

	</ul>

<?php endif; ?>
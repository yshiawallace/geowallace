<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Geowallace
 */

$right_image = get_field('right_side_image');
$right_image_class = $right_image ? 'has-right-image': '';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($right_image_class); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php
		if( $right_image ) :	
	?>
		<div class="right-image">
			<?php
				if( $right_image['caption'] === '' ) {
					echo '<img src="' . $right_image['url'] . '" alt="' . $right_image['alt'] . '">';
				} else {
					echo '<figure>';
						echo '<img src="' . $right_image['url'] . '" alt="' . $right_image['alt'] . '">';
						echo '<figcaption>' . $right_image['caption'] . '</figcation>';
					echo '</figure>';	
				}
			?>
		</div>
	<?php 
		endif;
		
		the_content();

		// Check if flexible content field has rows	
		if ( have_rows( 'content_blocks' ) ) :
			// Loop through the rows
			while ( have_rows('content_blocks') ) : the_row();
				// Get the template part for the row
				get_template_part('template-parts/partials/' . get_row_layout() );
			endwhile;
		endif;	

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'geowallace' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'geowallace' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

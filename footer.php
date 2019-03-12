<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Geowallace
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'geowallace' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'geowallace' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'geowallace' ), 'geowallace', '<a href="https://automattic.com/">Automattic</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<?php
		// Check if a gallery block exists on this page
		$has_gallery = false;
		if ( have_rows( 'content_blocks' ) ) {
			while( have_rows( 'content_blocks' ) ) {
				the_row();
				if ( get_row_layout( 'gallery_block' ) ) {
					$has_gallery = true;
				}
			}
		}
		if ( $has_gallery ) :
			// Add the PhotoSwipe Html
	?>
			<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
				<!-- Background of PhotoSwipe. 
				It's a separate element as animating opacity is faster than rgba(). -->
				<div class="pswp__bg"></div>
				<!-- Slides wrapper with overflow:hidden. -->
				<div class="pswp__scroll-wrap">
					<!-- Container that holds slides. 
						PhotoSwipe keeps only 3 of them in the DOM to save memory.
						Don't modify these 3 pswp__item elements, data is added later on. -->
					<div class="pswp__container">
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
						<div class="pswp__item"></div>
					</div>
					<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
					<div class="pswp__ui pswp__ui--hidden">
						<div class="pswp__top-bar">
							<!--  Controls are self-explanatory. Order can be changed. -->
							<div class="pswp__counter"></div>
							<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
							<button class="pswp__button pswp__button--share" title="Share"></button>
							<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
							<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
							<!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
							<!-- element will get class pswp__preloader--active when preloader is running -->
							<div class="pswp__preloader">
								<div class="pswp__preloader__icn">
								<div class="pswp__preloader__cut">
									<div class="pswp__preloader__donut"></div>
								</div>
								</div>
							</div>
						</div>
						<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
							<div class="pswp__share-tooltip"></div> 
						</div>
						<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
						</button>
						<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
						</button>
						<div class="pswp__caption">
							<div class="pswp__caption__center"></div>
						</div>
					</div>
				</div>
			</div>
	<?php 
		endif;
	?>	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<?php
/**
 * The front page template
 *
 * @package Geowallace
 */

get_header();
?>
        <div id="primary" class="content-area">
			<main id="main" class="site-main">

            <article id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title screen-reader-text">', '</h1>' ); ?>
                </header><!-- .entry-header -->

                <div class="entry-content">
                <?php
                    
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

            </article><!-- #post-<?php the_ID(); ?> -->

            </main><!-- #main -->
		</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
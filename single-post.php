<?php
/**
 * The template for displaying all single posts.
 *
 * @package nii_framework
 */

get_header(); ?>
<div class=" uk-container uk-container-center">
<div class="nii-block uk-grid uk-grid-medium uk-grid-divider" data-uk-grid-match data-uk-grid-margin>
	<div id="primary" class="nii-block nii-panel  sidebar-right content-area uk-width-small-1-1 uk-width-medium-3-4">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
				<div class="centent">
					<header>
						
						<div class="date">
								  			<div>
								  				<span></span>
								  			</div>
						</div>
						<h2 class="uk-h2 uk-text-bold uk-text-center"> <?php echo get_the_title(); ?></h2>
						<p class="meta uk-text-center">
						<span class=""><?php echo get_the_date('Y-m-d' ); ?></span> |
						<span class="cat">
							<?php
							$category = get_the_category();
							if($category[0]){
							echo '<a href="'.get_category_link($category[0]->term_id ).'" class="cat">'.$category[0]->cat_name.'</a>';
							}
						?>
						</span> | 
						<span class="views"><?php post_views('阅读(', ')'); ?></span>
						</p>
					</header>
					
					<p class="note">
							<?php
								/* translators: %s: Name of current post */
								/*the_content( sprintf(
									__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'nii_framework' ),
									the_title( '<span class="screen-reader-text">"', '"</span>', false )
								) );*/
								// $content = get_the_content();
								// $trimmed_content = wp_trim_words( $content, 220, '...' );
								// echo $trimmed_content;
								the_content( );
							?>
					</p>
				</div>
		</article><!-- #post-## -->

			<?php nii_post_navigation(); ?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>

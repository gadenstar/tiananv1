<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nii_framework
 */

get_header(); ?>
<div class=" uk-container uk-container-center">
<div class="nii-block uk-grid uk-grid-medium uk-grid-divider" data-uk-grid-match data-uk-grid-margin>
	<div id="primary" class="nii-block nii-panel  sidebar-right content-area uk-width-small-1-1 uk-width-medium-3-4">
		<main id="main" class="site-main" role="main">
<ul>
		<?php if ( have_posts() ) : ?>

			<!-- <header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header --> 

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content-post' );
				?>
				
			<?php endwhile; ?>

			<?php
				//Reset Query 
				par_pagenavi();
				wp_reset_query();
	
				 
				?> 

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
</ul>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>
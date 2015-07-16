<?php
/**
 * The template for displaying all single posts.
 *
 * @package nii_framework
 */

get_header(); ?>
<div class=" uk-container uk-container-center">
<div class="nii-block uk-grid uk-grid-medium uk-grid-divider" data-uk-grid-match data-uk-grid-margin>
	<div id="primary" class="nii-block nii-panel sidebar-none content-area uk-width-small-1-1 uk-width-medium-1-1">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_type() ); ?>

			<?php nii_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>

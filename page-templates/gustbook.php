<?php
/**
 * Template Name: 在线留言
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="page-header pd20" >
	<div class=" uk-container uk-container-center">
		<h2 class="uk-h1 mg0"><?php the_title( ); ?></h2>
		<?php //echo vp_metabox("page_builder"); ?>
		<?php // echo vp_metabox("page_builder.toggle_filtering"); ?>
		<?php // print_r(vp_metabox("page_builder.filtering_group.0")) ; ?>
		<?php //
		// if (vp_metabox("page_builder.filtering_group.0.filter_type")=="color") {
		// 	$bg = vp_metabox("page_builder.filtering_group.0.page_color");
		// }else {
		// 	$bg = vp_metabox("page_builder.filtering_group.0.page_img");
		// }
		// echo $bg;
		?>
	</div>
</div>
<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>
<div class=" uk-container uk-container-center">
<div class="uk-grid">
	<div id="primary" class="content-area gustbook uk-width-medium-1-1">
		<main id="main" class="site-main " role="main">
			<?php while ( have_posts() ) : the_post(); ?>
						<?php //get_template_part( 'content', 'page' ); ?>
						<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
						?>
					<?php endwhile; // end of the loop. ?>
		</main><!-- #content -->
	</div><!-- #primary -->


<?php //get_sidebar(); ?>
</div>
</div>
<?php get_footer();

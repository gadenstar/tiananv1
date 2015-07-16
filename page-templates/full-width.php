<?php
/**
 * Template Name: 全宽页面
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





					<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>

		<?php //get_sidebar(); ?>

<?php get_footer();

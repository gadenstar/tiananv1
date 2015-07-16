<?php
/**
 * Template Name: 联系我们
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
		<div class="contact-us panel2">
		<div class="nii-block uk-grid uk-grid-medium uk-grid-divider" data-uk-grid-match data-uk-grid-margin>
			
		<div id="secondary" class="nii-block dark-sidebar uk-width-medium-1-4 widget-area" role="complementary" >
			
			<div class="uk-panel uk-panel-box uk-panel-box-primary">
				<aside id="recent-posts-2" class="uk-panel uk-panel-header widget widget_recent_entries" >
					<div class="widget-header">
						<h1 class="uk-panel-title widget-title"><span><?php echo vp_option('vpt_option.info');?></span></h1>
					</div>				
						<ul class="uk-list uk-list-line">
							<li><i class="uk-icon-home"></i><?php echo vp_option('vpt_option.add');?></li>
							<li><i class="uk-icon-phone"></i><?php echo vp_option('vpt_option.tel');?></li>
							<li><i class="uk-icon-envelope"></i><?php echo vp_option('vpt_option.mail');?></li>
							<li><i class="uk-icon-qq"></i><?php echo vp_option('vpt_option.qq');?></li>
						</ul>
				  </aside>
			</div>
			<div class="uk-panel uk-panel-box uk-panel-box-primary">
				<aside id="recent-posts-2" class="uk-panel uk-panel-header widget widget_recent_entries" >
						<img src="<?php echo vp_option('vpt_option.qr');?>" alt="">
				  </aside>
			</div>
		</div>

				<div id="primary" class="nii-block nii-panel sidebar-left content-area uk-width-small-1-1 uk-width-medium-3-4">
					<main id="main" class="site-main " role="main">
						<article>
						<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; // end of the loop. ?>
				</article>
				</main>
				</div>
		<?php //get_sidebar(); ?>
		</div>
	</div>
	</div>
<?php get_footer();

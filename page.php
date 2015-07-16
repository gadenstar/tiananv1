<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package nii_framework
 */

get_header(); ?>
<div class="page-header pd20 " >
	<div class=" uk-container uk-container-center">
		<?php if (vp_metabox("custom_page.show_title")!='1'): ?>
		<h2 class="uk-h1 mg0 nii-page-title ">
			<?php 
				if(!vp_metabox("custom_page.title")){
					echo the_title( );
				}else {
					echo vp_metabox("custom_page.title");
				}
			?>
		</h2>
	    <?php endif;?>
		
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
	<div class="page-bg panel2">


	<div class="nii-block uk-grid uk-grid-medium uk-grid-divider" data-uk-grid-match data-uk-grid-margin>
		<?php if (vp_metabox("custom_page.page_sidebar_pos")=="1"||vp_metabox("custom_page.page_sidebar_pos")==""):?>
			<div id="primary" class="nii-block nii-panel sidebar-none content-area uk-width-small-1-1 uk-width-medium-1-1">
				<main id="main" class="site-main " role="main">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>
								
					<?php endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->
	 	<?php endif; ?>
		<?php if (vp_metabox("custom_page.page_sidebar_pos")=="2"):  
			get_sidebar(); ?>
			<div id="primary" class="nii-block nii-panel sidebar-left content-area uk-width-small-1-1 uk-width-medium-3-4">
				<main id="main" class="site-main " role="main">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->
	 	<?php endif; ?>
		<?php if (vp_metabox("custom_page.page_sidebar_pos")=="3"): ?>
			<div id="primary" class="nii-block nii-panel  sidebar-right content-area uk-width-small-1-1 uk-width-medium-3-4">
				<main id="main" class="site-main " role="main">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>
				</main><!-- #main -->
			</div><!-- #primary -->
	 	<?php 
	 	get_sidebar();
	 	endif; ?>


	</div>
    </div>
</div>

<?php get_footer(); ?>

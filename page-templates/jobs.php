<?php
/**
 * Template Name: 招聘
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
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
	</div>
</div>
<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>

	<div class=" uk-container uk-container-center">
		<div class="jobs panel2">
		<div class="nii-block uk-grid uk-grid-medium uk-grid-divider" data-uk-grid-match data-uk-grid-margin>


		<div id="secondary" class="nii-block dark-sidebar uk-width-medium-1-4 widget-area" role="complementary" >
				<?php if($post->post_parent): ?>
				<div class="uk-panel uk-panel-box uk-panel-box-primary">

					<aside id="recent-posts-2" class="uk-panel uk-panel-header widget widget_recent_entries">
							<?php
								if($post->post_parent){
								    $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
									$parent_title = get_the_title($post->post_parent);
								}else{
								    $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
									$parent_title = get_the_title('');
								}
								echo '<div class="widget-header"><h1 class="uk-panel-title widget-title"><span>'.$parent_title.'</span></h1></div>';
								if ($children) {
								    echo '<ul>';
								        echo $children;
								    echo '</ul>';
							} ?>
					</aside>
				</div>
			<?php endif; ?>
			<div class="uk-panel uk-panel-box uk-panel-box-primary">
				<aside id="recent-posts-2" class="uk-panel uk-panel-header widget widget_recent_entries" >
				<ul class="">
					<?php

					$args = array(
						'orderby'=> 'post_date',
						'post_type' => 'jobs', //自定义分类法→ 文章类别
						'posts_per_page' => -1,
						'showposts' => 50
						);
					$my_query = new WP_Query($args);
					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post();?>

							<li ><a href="#<?php the_id(); ?>" data-uk-smooth-scroll><?php the_title( ); ?></a></li>
					    <?php endwhile;
					    wp_reset_query();
				   } ?>
				  </ul>
				  </aside>
			</div>
		</div>

				<div id="primary" class="nii-block nii-panel sidebar-left content-area uk-width-small-1-1 uk-width-medium-3-4">
					<main id="main" class="site-main " role="main">
						<article>
						<div class="jobs_info_box uk-accordion" data-uk-accordion>
						<?php
					$cat_id = vp_option('vpt_option.team_select');
					$args = array(
						//'post__not_in' => array( $post->ID ),
						//'post__in' => array( 103 ),
						'orderby'=> 'post_date',
						'post_type' => 'jobs', //自定义分类法→ 文章类别
						'posts_per_page' => -1,
						'showposts' => 50
						);
					$my_query = new WP_Query($args);
					//print_r($my_query->post->post_title) ;
					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post();?>

							<h3 id="<?php the_id();?>" class=" uk-accordion-title uk-text-bold jobs-title">
							    	<?php the_title( ); ?>
							    	<span class="uk-hidden-small"><?php echo get_the_date( 'Y-m-d'); ?></span>
							    	<i class="uk-display-block uk-icon-angle-down"></i>
						    </h3>
						    <div class=" uk-accordion-content">
						    	<h4 class="uk-h3">岗位描述</h4>
						    	<ul class="jobs_info ">
						    	 <?php //echo $teams_content;
									$count = count(vp_metabox("jobs.jobs_info_box"));
									for ($x=0; $x<$count; $x++) {

									  echo '<li>'.vp_metabox("jobs.jobs_info_box.$x.jobs_info").'</li>';

									}
							 	?>
							 	</ul>
						    </div>



					    <?php endwhile;
					    wp_reset_query();
				   } ?>
				   </div>
				</article>
				</main>
				</div>
		<?php //get_sidebar(); ?>
		</div>
	</div>
	</div>
<?php get_footer();

<?php
/**
 * Template Name: 活动列表
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class=" uk-container uk-container-center">
<div class="nii-block uk-grid uk-grid-medium uk-grid-divider events-list" data-uk-grid-match data-uk-grid-margin>
	<div id="primary" class="nii-block nii-panel  sidebar-none content-area uk-width-small-1-1 uk-width-medium-1-1">
		<main id="main" class="site-main" role="main">
		<article>
			<ul class="uk-list">
			<?php
				$cat_id = vp_option('vpt_option.team_select');
				$args = array(
					'orderby'=> 'post_date',
					'post_type' => 'events', //自定义分类法→ 文章类别
					'posts_per_page' => -1,
					'showposts' => 16
					);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				    while ($my_query->have_posts()) : $my_query->the_post();?>
				    <?php
						$teams_name = vp_metabox("teams_set.teams_name");
						$teams_img = vp_metabox("events_page.top_img.0.up_1");
						//print_r($teams_img);
					?>
					        <li id="post-<?php the_ID(); ?>" >
					        	<figure class="uk-overlay uk-cover-background" style='background-image:url("<?php echo $teams_img; ?> ");'>
					        	<img class="uk-invisible" src="<?php echo $teams_img; ?>" alt="" height="" width="">

								    <figcaption class="uk-overlay-panel uk-overlay-bottom uk-overlay-background">
								    	<div class="">
								    		<h3 class="uk-h3 uk-margin-bottom-remove"><?php the_title( ); ?></h3>

								    	</div>
								    </figcaption>
								    <a class="uk-position-cover" href="<?php the_permalink(); ?>"></a>
								</figure>

					        </li>
				    <?php endwhile;
				    wp_reset_query();
			   } ?>
			  </ul>
			</article>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>

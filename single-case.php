<?php
/**
 * @package nii_framework
 */
$client_name = vp_metabox("case_set.client_name");
$teams_img = vp_metabox("case_set.teams_dept");
$teams_content = vp_metabox("case_set.teams_content");
$case_area = vp_metabox("case_set.client_area");
$depts = get_the_terms( $post->ID, 'teams_dept' );
$styles = get_the_terms( $post->ID, 'case_style' );
$id=get_the_terms( $post->ID, 'teams_job' )[0]->term_id;
// $term = get_term($id, 'teams_job' );
// $name = $term->name;

// echo $id;
// print_r($name) ;
// //get_term_by( $field, $value, $taxonomy, $output, $filter );

// //$title = get_post($id)->post_title;
// //$link = get_post_permalink( $id );
// //$img = get_post_meta($id,'teams_set')[0]['teams_img'];

$style = array();
	foreach ( $styles as $s ) {
		$style[] = $s->name;
	}
$case_style = join( ", ", $style );

/**
 * 根据获取分类ID输出自定义分类文章
 */
$args = array(
	'post_type' => 'teams',
	'tax_query' => array(
		array(
			'taxonomy' => 'teams_job',
			'terms' => $id
		)
	)
);
$design_name =  get_posts( $args )[0]->post_title;
$design_link =  get_posts( $args )[0]->guid;

?>
<?php
/**
 * The template for displaying all single posts.
 *
 * @package nii_framework
 */

get_header(); ?>
<div class="page-header pd20" >
	<div class=" uk-container uk-container-center">
		<h2 class="uk-h1 mg0"><?php the_title( ); ?></h2>
	</div>
</div>

<?php if(function_exists('cmp_breadcrumbs')) cmp_breadcrumbs();?>

<div class=" uk-container uk-container-center">
<div class="nii-block uk-grid uk-grid-medium uk-grid-divider" data-uk-grid-match data-uk-grid-margin>
	<div id="primary" class="nii-block nii-panel  sidebar-none content-area uk-width-small-1-1 uk-width-medium-1-1">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="case-info" >
						<div class="uk-grid uk-grid-collapse uk-grid-divider uk-margin-bottom" data-uk-grid-margin>
							<div class="uk-width-small-1-2 uk-width-medium-1-4">

							<h3 class="uk-h3 uk-text-center uk-margin-remove"><span >客户</span><?php echo $client_name; ?></h3>
							</div>
							<div class="uk-width-small-1-2 uk-width-medium-1-4">

							<h3 class="uk-h3 uk-text-center uk-margin-remove"><span>设计风格</span><?php echo $case_style; ?></h3>
							</div>
							<div class="uk-width-small-1-2 uk-width-medium-1-4">

							<h3 class="uk-h3 uk-text-center uk-margin-remove"><span>装修面积</span><?php echo $case_area; ?>m²</h3>
							</div>
							<div class="uk-width-small-1-2 uk-width-medium-1-4">

							<h3 class="uk-h3 uk-text-center uk-margin-remove"><span>设计师</span><a href="<?php echo $design_link; ?>" class=""><?php echo $design_name; ?></a></h3>
							</div>
						</div>
						</div>
						<div class="uk-slidenav-position" data-uk-slideshow>
						    <ul class="uk-slideshow">
						    <?php //echo $teams_content;
									$count = count(vp_metabox("case_set.repeating_group"));
									for ($x=0; $x<$count; $x++) {
									  echo "<li>";
									  echo '<img src="'.vp_metabox("case_set.repeating_group.$x.teams_img").'">';
									  echo '<a class="uk-position-cover" href="'.vp_metabox("case_set.repeating_group.$x.teams_img").'" data-uk-lightbox="{group:\'group1\'}"></a></li>';
									}
							 	?>
						    </ul>
						    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
						    <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
						    <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
						        <?php //echo $teams_content;
									for ($x=0; $x<$count; $x++) {
									  echo '<li data-uk-slideshow-item="'.$x.'"><a href=""></a></li>';
									}
							 	?>
						    </ul>
						</div>
				<footer class="entry-footer">
						<?php nii_framework_entry_footer(); ?>
					</footer><!-- .entry-footer -->
			</article><!-- #post-## -->

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
</div>

<?php get_footer(); ?>



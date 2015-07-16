<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package nii_framework
 */

get_header();


?>
<div class=" uk-container uk-container-center">
<div class="nii-block uk-grid uk-grid-medium uk-grid-divider" data-uk-grid-match data-uk-grid-margin>
	<div id="primary" class="nii-block nii-panel sidebar-none content-area uk-width-small-1-1 uk-width-medium-1-1">
		<main id="main" class="site-main" role="main">
			<article>
		<?php if ( have_posts() ) : ?>

<!-- 			<header class="page-header">
			<?php
			$terms = get_terms("teams_dept",'orderby=name');//sort是分类法别名
			$count = count($terms);
			if ( $count > 0 ){
			//echo '<ul id="filter" class="uk-subnav"><li class="uk-active" data-uk-filter><a href="#">所有部门</a></li>';
			echo '<ul id="filter" class="uk-subnav">';
			foreach ( $terms as $term ) {
			echo '<li data-uk-filter="filter-'.$term->term_id.'">';
			//echo '<a href="#">' . $term->name . '</a>';
			echo '<a href="' . get_term_link( $term ) . '" >' . $term->name . '</a>';
			//判断分类描述，非空则输出描述
			if (!empty($term->description)) { echo '<p>' . $term->description . '</p>'; }
			echo '</li>';
			}
			echo '</ul>';
			}
			?>
			</header><!-- .page-header -->
			<!-- 动态网格 -->
			<div class="uk-grid-width-small-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-4 tm-grid-heights team-grid " data-uk-grid="{gutter: 20,controls: '#filter2'}">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
					<?php
						//$teams_name = vp_metabox("teams_set.teams_name");
						$teams_img = vp_metabox("teams_set.teams_img");
						$teams_job = vp_metabox("teams_set.teams_job");
						$depts = get_the_terms( $post->ID, 'teams_dept' );
					//	$jobs = get_the_terms( $post->ID, 'teams_job' );

						$deptID = array();
							foreach ( $depts as $dept ) {
								$deptID[] = $dept->term_id;
							}
						$dept_id = join( ", ", $deptID );

						$depta = array();
							foreach ( $depts as $dept ) {
								$depta[] = $dept->name;
							}
						$teams_dept = join( ", ", $depta );

						// $joba = array();
						// 	foreach ( $jobs as $job ) {
						// 		$joba[] = $job->name;
						// 	}
						// $teams_job = join( ", ", $joba );
					?>

				<div class="gird-box" data-uk-filter="filter-<?php echo $dept_id ;?>">
				<article id="post-<?php the_ID(); ?>" <?php post_class('uk-padding-remove'); ?>>




					<div class="box-image">
						<a class="focus" href="<?php the_permalink(); ?>">
							<img src="<?php echo $teams_img; ?>" alt="">
						</a>
					</div>
					<div class="centent">
						<header class="uk-clearfix">
							<div class="meta uk-float-left">

								<span><?php echo $teams_job; ?></span>
							</div>
							<h3 class="uk-h3"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title( ); ?></a></h3>
						</header>
					</div>
			</article><!-- #post-## -->
				</div>
			<?php endwhile; ?>
				</div>
			<?php
				//Reset Query
				par_pagenavi();
				wp_reset_query();


				?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
</article>

		</main><!-- #main -->
	</div><!-- #primary -->


</div>
</div>
<?php get_footer(); ?>

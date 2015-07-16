<?php
/**
 * @package nii_framework
 */
//$teams_name = vp_metabox("teams_set.teams_name");
$teams_name = get_the_title( );
$teams_img = vp_metabox("teams_set.teams_img");
$teams_style = vp_metabox("teams_set.teams_style");
$teams_job = vp_metabox("teams_set.teams_job");
$teams_time = vp_metabox("teams_set.teams_time");
$teams_content = vp_metabox("teams_set.teams_content");
$depts = get_the_terms( $post->ID, 'teams_dept' );


$depta = array();
	foreach ( $depts as $dept ) {
		$depta[] = $dept->name;
	}
$teams_dept = join( ", ", $depta );


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="uk-grid team-box ">
		<div class="uk-width-medium-3-10 team-img">
			<img src="<?php echo $teams_img; ?>" alt="">
		</div>
		<div class="uk-width-medium-7-10 team-info">
			<div class="name">
				<h3 class="uk-h3">
					<span><?php echo $teams_job; ?></span><?php echo $teams_name; ?>
				</h3>
			</div>
			<div class="dept">
				<span>从业时间</span>
					<?php echo $teams_time; ?>年
			</div>
			<div class="style">
				<span>擅长风格</span>
					<?php echo $teams_style; ?>
			</div>
			<div class="design">
				<span>设计理念</span>
				<p><?php echo $teams_content; ?>	</p>
			</div>

		</div>
	</div>
	<div class="team-content">
		<div class="title">
			<span class="uk-h3">设计案例</span>
		</div>
		<?php echo get_the_content(); ?>


<?php
/**
 * 根据获取分类ID输出自定义分类文章
 */
global $post;
$term_list = wp_get_post_terms($post->ID, 'teams_job', array("fields" => "ids"));
$tagid= $term_list[0];
    $args = array(
          'post__not_in' => array( $post->ID ),
          'post_type' => 'case',
          'showposts' => 6,
          'tax_query' => array(
						array(
							'taxonomy' => 'teams_job',//自定义分类法→ 分类标记
							'terms' => $tagid //自定义分类法→ 显示某ID分类
							),
						)
      );
 $my_query = new WP_Query($args);
	if( $my_query->have_posts() ) {
		echo '<ul class="uk-grid uk-grid-width-1-2 uk-grid-width-medium-1-4">';
	    while ($my_query->have_posts()) : $my_query->the_post();?>
	  			<?php
					$attachment_id = get_attachment_id_from_src(vp_metabox("case_set.img"));
					$case_img = wp_get_attachment_image_src( $attachment_id, 'case-thumb')[0];
	  			?>

					    <li>
								<a class="uk-thumbnail" href="<?php the_permalink(); ?>">
								    <img src="<?php echo $case_img; ?>" alt="">
								    <div class="uk-thumbnail-caption"><?php the_title( ); ?></div>
								</a>
					    </li>

  <?php endwhile; wp_reset_query();

       } ?>
		</ul>
	</div>
	<!-- .entry-meta -->

	<footer class="entry-footer">
		<?php nii_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package nii_framework
 */
?>

	</div><!-- #content   -->
	<div class="footer-contact uk-block uk-contrast">
		<div class="uk-container uk-container-center">

			<!-- 	<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 1') ) ?>

				<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 2') ) ?> -->

						<div class="uk-grid ">
				<div class="uk-width-small-1-1 uk-width-medium-1-6">
					<h3 class="subtitle">关于天安</h4>
					<div class="" >
						<ul class="uk-list uk-list-line">
                                	<?php wp_nav_menu(
										array(
											'items_wrap' => '%3$s',
											'theme_location' => 'footer',
											'container'=>false,
											'menu_class' => 'uk-navbar-nav uk-hidden-small',
											// 'walker'			=>	new JWalker_Nav_Menu,
											));
											 ?>

                        </ul>
					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-2-6">
					<h3 class="subtitle">公司动态</h4>
						<ul id="" class=" uk-list uk-list-line">
						<?php
							$cat_id = vp_option('vpt_option.new_select');
							$posts = get_posts(
								$args = array(
									'category' => $cat_id,
									'numberposts' =>6
							 ));
							 if( $posts ):
							 foreach( $posts as $post ) : setup_postdata( $post ); ?>
								 <li class="">
									  	<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

											<span class="data"><?php echo get_the_date('m-d' ); ?></span><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title( ); ?></a>

										</div><!-- #post-## -->
									</li>
							<?php endforeach;
							endif; ?>
						</ul>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-2-6">
					<h3 class="subtitle">最新活动</h4>
<?php

	global $wp_query;
	$temp_query = $wp_query;
	$wp_query = new WP_Query(array(
		'orderby'=> 'post_date',
						'post_type' => 'events',
						'posts_per_page' => -1,
						'showposts' => 1
	));
 ?>
		<?php if (have_posts()) : ?>
		<ul class="uk-grid" data-uk-grid-margin>
		<?php while (have_posts()) : the_post();
			$teams_img = vp_metabox("events_page.top_img.0.up_1"); ?>
				<li id="post-<?php the_ID(); ?>" class="uk-width-medium-1-1 uk-position-relative">
					<img src="<?php echo $teams_img; ?>" alt="" class="">
					 <a class="uk-position-cover" href="<?php the_permalink(); ?>"></a>
				</li>
				<?php endwhile; ?>
				</ul>
				<?php endif; ?>
			<?php $wp_query = $temp_query; wp_reset_postdata();

		?>

				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-6">
					<h3 class="subtitle">关注我们</h4>
					<img src="<?php echo vp_option('vpt_option.qr');?>" alt="" />
				</div>


			<!-- 	<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 1') ) ?>

				<?php	/* Widgetised Area */	if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer 2') ) ?> -->
			</div>
		</div>
	</div>
	<footer id="colophon" class="site-footer pd20" role="contentinfo">
		<div class="uk-container uk-container-center">
			<!-- <div class="site-info uk-text-center">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'nii_framework' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'nii_framework' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( '%1$s by %2$s.', 'nii_framework' ), '技术支持', '<a href="http://niizer.com/" rel="designer">Niizer</a>' ); ?>
			</div> -->

			<div class=" uk-grid " data-uk-grid-margin>
				<div class="uk-width-medium-1-2 uk-clearfix copyright">
						<img class="uk-align-medium-left uk-margin-bottom-remove footer-brand" src="<?php echo vp_option('vpt_option.footer-logo');?>" alt="" />

					<p class="uk-margin-remove">Copyright &copy; <a href="">湖南天安家装(集团)有限公司</a>.</p>
					<p class="uk-margin-remove"><?php echo vp_option('vpt_option.add');?></p>
					<p class="uk-margin-remove">湘ICP备12010930号-5</p>
				</div>
				<div class="uk-width-medium-1-2 uk-text-right">
								<a href="#ip-container" class="gotop" data-uk-smooth-scroll>
							  	<i class="uk-icon-angle-up"></i>
								</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div id="my-id" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
			<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>

				<?php wp_nav_menu(
					array(
						'items_wrap' => '%3$s',
						'theme_location' => 'primary',
						'container'=>false,
						'menu_class' => 'uk-navbar-nav uk-hidden-small',
						// 'walker'			=>	new JWalker_Nav_Menu,
						));
						 ?>

			</ul>
		</div>

	</div>

			<!-- <a href="<?php echo get_page_link(vp_option('vpt_option.se_gustbook'));?>"  class="text weibo red"> -->

<?php wp_footer(); ?>






		<?php
			if(vp_option('vpt_option.custom_js')!=''):
			echo vp_option('vpt_option.custom_js');
		 endif; ?>
</body>
</html>

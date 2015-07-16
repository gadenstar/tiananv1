<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php the_title( ); ?></title>
	<link rel="stylesheet" id="uikit-css" href="<?php echo get_template_directory_uri(); ?>/uikit/css/uikit.min.css?ver=2.18.0">
	<link rel="stylesheet" id="sticky" href="<?php echo get_template_directory_uri(); ?>/uikit/css/components/sticky.min.css">
	<link rel="stylesheet" id="css" href="<?php echo get_stylesheet_uri(); ?>">

	<script src="//libs.useso.com/js/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/uikit/js/uikit.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/uikit/js/components/sticky.min.js"></script>
	<style>
		<?php if(vp_metabox("events_page.clients.0.is_clients_set")==1):
		echo '.clients h2,.clients p{color: '.vp_metabox("events_page.clients.0.text_c").'}';
		if (vp_metabox("events_page.clients.0.mode")=='color') {
			echo '.clients {background-color:'. vp_metabox("events_page.clients.0.background_color").';background-image: none;}';
		}elseif (vp_metabox("events_page.clients.0.mode")=='custom') {
			echo '.clients {background-color:'. vp_metabox("events_page.clients.0.background_color").';background-image: url("'.vp_metabox("events_page.clients.0.background_img").'");background-position: '.vp_metabox("events_page.clients.0.custom_position").';background-repeat: '.vp_metabox("events_page.clients.0.custom_repeat").';background-size: '.vp_metabox("events_page.clients.0.custom_size").';background-attachment: '.vp_metabox("events_page.clients.0.custom_attachment").'}';
		}elseif (vp_metabox("events_page.clients.0.mode")=='package') {
			echo '.clients {background: url("'.get_template_directory_uri().'/images/patterns/'.vp_metabox("events_page.clients.0.package").'.png")}';
		}
		endif; ?>
	</style>
</head>
<body  <?php body_class( ); ?>>
<div class="uk-cover-background " style="height:100%;background-image:url('<?php print_r(vp_metabox("events_page.top_img.0.up_1")); ?>')">

	<div class="ta-navbar " data-uk-sticky>
			<div class="uk-container uk-container-center">
				<nav class="uk-navbar">
				    <ul class="uk-navbar-nav">

				        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">返回天安</a></li>

				    </ul>
				    <div class="uk-navbar-flip">
				        <ul class="uk-navbar-nav">
				            <li><a href="">立即预约</a></li>
				        </ul>
				    </div>
				</nav>
			</div>
	</div>
<img class="uk-invisible" src="<?php print_r(vp_metabox("events_page.top_img.0.up_1")); ?>" width="" height="" alt="">
</div>


		<?php while ( have_posts() ) : the_post(); ?>


							<?php
								the_content( );
							?>

		<?php endwhile; // end of the loop. ?>

<?php

	global $wp_query;
	$temp_query = $wp_query;
	$wp_query = new WP_Query(array(
		'orderby'=> 'post_date',
						'post_type' => 'clients',
						'posts_per_page' => -1,
						'showposts' => 50
	));
	if(vp_metabox("events_page.clients.0.is_clients_set")==1):
 ?>
	<div class="uk-block clients">
	<div class="uk-container-center uk-container">
			<div class="uk-text-center section-title">
				<h2 class="uk-h1">合作伙伴</h2>
				<div class="title-border">
					<div class="title-line">
					</div>
				</div>
				<p class="uk-h2">一线品牌直供，品质安全可靠</p>
			</div>
		<?php if (have_posts()) : ?>
		<ul class="uk-grid" data-uk-grid-margin>
		<?php while (have_posts()) : the_post();
			$teams_img = vp_metabox("clients_set.img"); ?>
				<li id="post-<?php the_ID(); ?>" class="uk-width-medium-1-6">
					<img src="<?php echo $teams_img; ?>" alt="" class="">
				</li>
		<?php endwhile; ?>
		</ul>
		<?php endif; ?>
		</div>
	</div>
	<?php $wp_query = $temp_query; wp_reset_postdata();

	endif;
?>
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
					<div class=" social-info uk-vertical-align uk-text-right uk-height-1-1" >
						<ul class="uk-vertical-align-middle">
							<li class="qq">
								<a href="">
									<i class="uk-icon-qq"></i>
								</a>
							</li>
							<li class="wechat">
								<a href="">
									<i class="uk-icon-wechat"></i>
								</a>
							</li>
							<li class="weibo">
								<a href="">
									<i class="uk-icon-weibo"></i>
								</a>
							</li>
						</ul>

					</div>
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
					<p class="uk-margin-remove">京ICP备14007358号-1</p>
				</div>
				<div class="uk-width-medium-1-2 uk-text-right">
								<a href="#ip-container" class="gotop" data-uk-smooth-scroll>
							  	<i class="uk-icon-angle-up"></i>
								</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</body>
</html>

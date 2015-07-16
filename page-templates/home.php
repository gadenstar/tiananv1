<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<div class="home-slider">
	<?php nii_slideshow(); ?>
</div>

<div class="uk-block advantage">
	<div class="uk-container uk-container-center">
			<div class="uk-text-center section-title">
				<h2 class="uk-h1"><?php echo vp_option('vpt_option.server_title');?></h2>
				<?php echo vp_metabox("slider_set.bg_color"); ?>
				<div class="title-border">
					<div class="title-line">

					</div>
				</div>
				<p class="uk-h2"><?php echo vp_option('vpt_option.server_title_2');?></p>
			</div>
			<div class="uk-grid" data-uk-scrollspy="{cls:'uk-animation-fade uk-invisible', target:'>div>.block', delay:300, repeat: true}">
				<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4 ">
					<div class="block uk-invisible">
						<div class="icon">
							<span class="one"></span>

						</div>

						<div class="uk-h2 title">

							360°整家解决方案

						</div>
						<p>
							由100多名美家顾问、方案设计师、绘图设计师、配饰设计师、项目管家、工程督导和客服人员组成整家解决方案小组为您提供一流的整家配置服务，将设计、家装、家具、家电、软装以及家居百货一步搞定。
						</p>

					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4 " >
					<div class="block uk-invisible">
					<div class="icon">
						<span class="more"></span>
					</div>
					<div class="uk-h2 title">
						20种主流生活方式
					</div>
					<p>
						风情、国际、书香、现代四大系列共包括20套1:1实景家装样板房，为您提供居家花样选择，在天安家装选择您钟爱的生活方式，把它带回家。
					</p>
					</div>
				</div>

				<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4 " >
					<div class="block uk-invisible">
					<div class="icon">
						<span class="hight"></span>
					</div>
					<div class="uk-h2 title">
						高品质绿色家居
					</div>
					<p>
						天安施工团队打造湖南首屈一指家装工艺，用料皆为一线环保品牌，全程实施金牌管家5A监管体制，为您构筑高品质环保家。
					</p>
					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-2 uk-width-large-1-4 ">
					<div class="block uk-invisible">
					<div class="icon">
						<span class="price">低价格</span>
					</div>
					<div class="uk-h2 title">
						无需担心价格
					</div>
					<p>
						天安家装整合家具上下游资源，对原材料进行集团化采购，搭建一线品牌联盟，让整体家装费用净省30%以上。施工前杜绝漏项，真正做到让预算=决算，不再增加任何费用。

					</p>
					</div>
				</div>
			</div>

	</div>
</div>

<div class="uk-block flow">
	<div class="uk-container uk-container-center">
			<div class="uk-text-center section-title">
				<h2 class="uk-h1 uk-contrast">服务流程</h2>
			</div>
			<div class="uk-grid">
				<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-6 ">
					<div class="block uk-text-center">
						<div class="uk-border-circle uk-display-inline-block pd30 uk-block-green">
							<img src="<?php echo get_template_directory_uri();?>/inc/svg/yuding.svg" width="" height="" alt="Image" class="">
							<i class="uk-icon-angle-double-right"></i>
						</div>
						<h3 class="uk-h3">01.填写预定</h3>
					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-6 ">
					<div class="block uk-text-center">
						<div class="uk-border-circle uk-display-inline-block pd30 uk-block-green">
							<img src="<?php echo get_template_directory_uri();?>/inc/svg/liangfang.svg" width="" height="" alt="Image" class="">
							<i class="uk-icon-angle-double-right"></i>
						</div>
						<h3 class="uk-h3">02.上门量房</h3>
					</div>
				</div>

				<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-6 ">
					<div class="block uk-text-center">
						<div class="uk-border-circle uk-display-inline-block pd30 uk-block-green">
							<img src="<?php echo get_template_directory_uri();?>/inc/svg/sheji.svg" width="" height="" alt="Image" class="">
							<i class="uk-icon-angle-double-right"></i>
						</div>
						<h3 class="uk-h3">03.确认设计</h3>
					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-6 ">
					<div class="block uk-text-center">
						<div class="uk-border-circle uk-display-inline-block pd30 uk-block-green">
							<img src="<?php echo get_template_directory_uri();?>/inc/svg/hetong.svg" width="" height="" alt="Image" class="">
							<i class="uk-icon-angle-double-right"></i>
						</div>
						<h3 class="uk-h3">04.签订合同</h3>
					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-6 ">
					<div class="block uk-text-center">
						<div class="uk-border-circle uk-display-inline-block pd30 uk-block-green">
							<img src="<?php echo get_template_directory_uri();?>/inc/svg/shigong.svg" width="" height="" alt="Image" class="">
							<i class="uk-icon-angle-double-right"></i>
						</div>
						<h3 class="uk-h3">05.进场施工</h3>
					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-3 uk-width-large-1-6 ">
					<div class="block uk-text-center">
						<div class="uk-border-circle uk-display-inline-block pd30 uk-block-green">
							<img src="<?php echo get_template_directory_uri();?>/inc/svg/fuwu.svg" width="" height="" alt="Image" class="">
						</div>
						<h3 class="uk-h3">06.验收&售后</h3>
					</div>
				</div>
			</div>

	</div>
</div>


<div class="uk-block hexbox  arrow-b uk-cover-background uk-hidden-small" style="background-image: url('<?php echo get_template_directory_uri();?>/images/bg.jpg')">
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-text-center">
			<div class=" uk-width-medium-1-1 uk-width-large-1-2 uk-vertical-align uk-visible-large hexbox-title">
				<div class="uk-text-center uk-vertical-align-middle">
					<div class="">
						<h2 class="uk-h1 l">天安家装</h2>
						<h2 class="uk-h1 r">郑重承诺</h2>
					</div>
				</div>
			</div>
			<div class="uk-width-medium-1-1 uk-width-large-1-2 uk-hidden-small">
				<div class="boxinner">
					<div class="hex hex-1 hex-gap">
						<div class="inner">
								<h4>完美效果</h4>
								<hr>
								<p>保证装修效果与设计方案完美统一</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-2">
						<div class="inner">
								<h4>高品用材</h4>
								<hr>
								<p>与客户选材、设计用材完全保持一致</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-3">
						<div class="inner">
								<h4>极致价值</h4>
								<hr>
								<p>直接节省近25%-35%成本</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-4">
						<div class="inner">
								<h4>国标售后</h4>
								<hr>
								<p>装修隐蔽工程两年内保修终身维护</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>

					<div class="hex hex-5">
						<div class="inner">
								<h4>同频施工</h4>
								<hr>
								<p>与合同期限绝对保持一致</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-6 hex-gap">
						<div class="inner">
								<h4>国际品质</h4>
								<hr>
								<p>绿色环保，100%达标</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
					<div class="hex hex-7">
						<div class="inner">
								<h4>国宾服务</h4>
								<hr>
								<p>尊享的7星级管家服务为您全程服务</p>
						</div>
						<a href="####"></a>
						<div class="corner-1"></div>
						<div class="corner-2"></div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>

<div class="uk-block teams ">
	<div class="uk-container uk-container-center">

			<div class="uk-text-center section-title">
				<h2 class="uk-h1"><?php echo vp_option('vpt_option.team_title_3');?></h2>
				<div class="title-border">
					<div class="title-line">

					</div>
				</div>
				<p class="uk-h2"><?php echo vp_option('vpt_option.team_title_4');?></p>
			</div>
		<div data-uk-slideset="{large:4,medium:2,small:1}">
			<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
       	 	<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
			<ul class="uk-slideset uk-grid">
			<?php
				$cat_id = vp_option('vpt_option.team_select');
				$args = array(
					'orderby'=> 'post_date',
					'post_type' => 'teams', //自定义分类法→ 文章类别
					'posts_per_page' => -1,
					'showposts' => 16,        //输出6篇文章
					'tax_query' => array(
						array(
							'taxonomy' => 'teams_dept',//自定义分类法→ 分类标记
							'terms' => $cat_id //自定义分类法→ 显示某ID分类
							),
						)
					);
				$my_query = new WP_Query($args);
				if( $my_query->have_posts() ) {
				    while ($my_query->have_posts()) : $my_query->the_post();?>
				    <?php
						$teams_name = get_the_title( );
						$teams_img = vp_metabox("teams_set.teams_img");
						$teams_job = vp_metabox("teams_set.teams_job");
					?>


					        <li id="post-<?php the_ID(); ?>">
					        	<figure class="uk-overlay uk-overlay-hover">
								    <img src="<?php echo $teams_img; ?>" alt="" class="">
								    <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-overlay-fade">
								    	<div class="">
								    		<h3 class="uk-h3"><?php echo $teams_name; ?></h3>

								    		<?php echo $teams_job; ?>
								    	</div>
								    </figcaption>
								    <a class="uk-position-cover" href="<?php the_permalink(); ?>"></a>
								</figure>

					        </li>
				    <?php endwhile;
				    wp_reset_query();
			   } ?>
			  </ul>

		</div>
	</div>
</div>
<div class="uk-block partner" style="background:#6eb356;">
	<div class="uk-container uk-container-center">
		<div class="uk-text-center ">
			<p class="uk-h1 uk-text-bold" style="color:#fff;">中国家居整装整配模式专家</p>
			<p class="uk-h3"style="color:#fff;">DIS研发|设计|家装|家具|家电|软装|家居百货</p>
		</div>
	</div>
</div>

<div class="uk-block clients">
	<div class="uk-container uk-container-center">
			<div class="uk-text-center section-title">
				<h2 class="uk-h1"><?php echo vp_option('vpt_option.new_title');?></h2>
				<div class="title-border">
					<div class="title-line">

					</div>
				</div>
				<p class="uk-h2"><?php echo vp_option('vpt_option.new_title_2');?></p>
			</div>
			<div data-uk-slideset="{large:5,medium:2,small:2}">
				<a href="" class="uk-slidenav uk-slidenav-previous" data-uk-slideset-item="previous"></a>
	       	 	<a href="" class="uk-slidenav uk-slidenav-next" data-uk-slideset-item="next"></a>
				<ul class="uk-slideset uk-grid">
				<?php
					$cat_id = vp_option('vpt_option.team_select');
					$args = array(
						'orderby'=> 'post_date',
						'post_type' => 'clients', //自定义分类法→ 文章类别
						'posts_per_page' => -1,
						'showposts' => 50
						);
					$my_query = new WP_Query($args);
					//print_r($my_query->post->post_title) ;
					if( $my_query->have_posts() ) {
					    while ($my_query->have_posts()) : $my_query->the_post();?>
					    <?php
							$teams_name = vp_metabox("teams_set.teams_name");
							$teams_img = vp_metabox("clients_set.img");
						?>
						    <li id="post-<?php the_ID(); ?>">
								<img src="<?php echo $teams_img; ?>" alt="" class="">
							</li>
					    <?php endwhile;
					    wp_reset_query();
				   } ?>
				  </ul>

			</div>
			<p class="uk-text-center">以上排名不分先后</p>
	</div>
</div>
<?php get_footer();

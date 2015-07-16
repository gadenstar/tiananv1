<?php
function myUrl($atts, $content = null) {
    extract(shortcode_atts(array(
        "href" => 'http://'
    ), $atts));
    return '<a href="'.$href.'">'.$content.'</a>';
}

function myRow($atts, $content = null) {
    extract(shortcode_atts(array(

    ), $atts));
    return '<div class="uk-container"><div class="uk-grid">'.$content.'</div></div>';
}

add_shortcode("row", "myRow");
function myButton($atts, $content = null) {
    extract(shortcode_atts(array(
       "url" => '',
       "text_color" => '',
       "background_color" => '',
       "size" => ''

    ), $atts));
    return '<a class="btn '.$size.'" href="http://'.$url.'" style="color:'.$text_color.';background:'.$background_color.'">'.$content.'</a>';
}
add_shortcode("button", "myButton");
function myIcon($atts, $content = null) {
    extract(shortcode_atts(array(
       "name" => '',
       "text_color" => '',
       "background_color" => '',
       "size" => ''

    ), $atts));
    return '<i class="fa '.$name.'" style="color:'.$text_color.';background:'.$background_color.'">'.$content.'</i>';
}
add_shortcode("icon", "myIcon");
function myInnerTitle($atts, $content = null) {
    extract(shortcode_atts(array(
       "title_text" => '',
       "title_color" => '',
       "title_color_b" => '',
       "upload" => ''

    ), $atts));
    return '
    <div class="uk-text-center inner-title" >
    	<img src="'.$upload.'" />
		<h2 class="uk-h1" style="color:'.$title_color.';"><span style="background-color:'.$title_color_b.'">'.$title_text.'</span></h2>
    </div>
    ';
}
add_shortcode("promised", "myPromised");
function myPromised($atts, $content = null) {
    extract(shortcode_atts(array(
       "title_text" => '',
       "title_color" => '',
       "title_color_b" => '',
       "upload" => ''

    ), $atts));
    return '
 <div class="uk-block hexbox  arrow-b uk-cover-background uk-hidden-small">
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
    ';

}
add_shortcode("promised", "myPromised");

function myClients2($atts, $content = null) {
    extract(shortcode_atts(array(
       "title_text" => '',
       "title_color" => '',
       "title_color_b" => '',
       "upload" => ''

    ), $atts));

    return  '
    <div class="uk-block clients">
	<div class="uk-container uk-container-center">
			<div class="uk-text-center section-title">
				<h2 class="uk-h1">合作伙伴</h2>
				<div class="title-border">
					<div class="title-line">
					</div>
				</div>
				<p class="uk-h2">一线品牌直供,品质安全可靠</p>
			</div>
				<ul class="uk-grid" data-uk-grid-margin>
							<li class="uk-width-medium-1-6"  id="post-119">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/hp.png" alt="" class="">
							</li>
					    <li class="uk-width-medium-1-6" id="post-118">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/dwdb.png" alt="" class="">
							</li>
					    <li class="uk-width-medium-1-6" id="post-117">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/wg.png" alt="" class="">
							</li>
					    <li class="uk-width-medium-1-6" id="post-116">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/age.png" alt="" class="">
							</li>
					    <li class="uk-width-medium-1-6"  id="post-115">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/afe.png" alt="" class="">
							</li>
					    <li class="uk-width-medium-1-6"  id="post-114">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/dl.png" alt="" class="">
							</li>
					    <li class="uk-width-medium-1-6"  id="post-113">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/mg.png" alt="" class="">
							</li>
					    <li class="uk-width-medium-1-6"  id="post-112">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/fdl.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-111">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/hb.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-110">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/hh.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-109">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/sxmm.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-108">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/jd.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-107">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/jjl.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-106">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/he.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-105">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/ll.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6" style="" id="post-104">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/ltt.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6" style="" id="post-103">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/sdb.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6" style="" id="post-102">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/jn.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6" style="" id="post-101">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/dp.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6" style="" id="post-100">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/wztc.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-99">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/sg.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-98">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/mkbl.png" alt="" class="">
							</li>
					    					    						    <li class="uk-width-medium-1-6"  id="post-97">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/sxdb.png" alt="" class="">
							</li>
					    <li class="uk-width-medium-1-6"  id="post-72">
								<img src="http://t.xianz.net/wp-content/uploads/2015/06/jbl.png" alt="" class="">
							</li>
					    				  </ul>


			<p class="uk-text-center">以上排名不分先后</p>
	</div>
	</div>
';
}
add_shortcode("clients2", "myClients2");
function myTopIMG($atts, $content = null) {
    extract(shortcode_atts(array(
       "title_text" => '',
       "title_color" => '',
       "title_color_b" => '',
       "upload" => ''

    ), $atts));
    return '
    <div class="uk-text-center" >
    	<img src="'.$upload.'" />
    </div>
    ';
}
add_shortcode("topimg", "myTopIMG");

add_shortcode('clients', 'myClients');
function myClients($atts, $content = null) {
	extract(shortcode_atts(array(
		'mode'           => 'default',
		'posts_per_page' => 10,
		'pagination'     => 'page',
		'class'          => '',
	), $atts));

	// Temporary replace the global WP Query
	global $wp_query;
	$temp_query = $wp_query;
	$wp_query = new WP_Query(array(
		'orderby'=> 'post_date',
						'post_type' => 'clients',
						'posts_per_page' => -1,
						'showposts' => 50
	));

	// Begin Render
	ob_start(); ?>
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
	$html = ob_get_clean();
	// End Render

	return apply_filters('myClients', $html, $atts, $content);
}


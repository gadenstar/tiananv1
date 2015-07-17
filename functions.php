<?php
/**
 * nii_framework functions and definitions
 *
 * @package nii_framework
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */

}
define('TIANAN_IMAGES_DIR', get_template_directory() . '/images');
define('TIANAN_IMAGES_DIR_P', get_template_directory_uri() . '/images/');

if(!defined('AQPB_VERSION')) define( 'AQPB_VERSION', '1.0.8' );
if(!defined('AQPB_PATH')) 	 define( 'AQPB_PATH', get_template_directory() . '/plugins/pagebuilder/' );
if(!defined('AQPB_DIR')) 	 define( 'AQPB_DIR', get_template_directory_uri() . '/plugins/pagebuilder/' );

// Required functions & classes
require_once(AQPB_PATH . 'functions/aqpb_config.php');
require_once(AQPB_PATH . 'functions/aqpb_blocks.php');
require_once(AQPB_PATH . 'classes/class-aq-page-builder.php');
require_once(AQPB_PATH . 'classes/class-aq-block.php');
require_once(AQPB_PATH . 'functions/aqpb_functions.php');

// Register blocks
require_once( get_stylesheet_directory() . '/plugins/pagebuilder/blocks/block-init.php' );

$aqpb_config 	 = aq_page_builder_config();
$aq_page_builder = new AQ_Page_Builder($aqpb_config);

if(!is_network_admin()) $aq_page_builder->init();
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
if ( ! function_exists( 'nii_framework_setup' ) ) :
	function nii_framework_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nii_framework, use a find and replace
	 * to change 'nii_framework' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'nii_framework', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/**
	 * Include Vafpress Framework
	 */

	/**
	 * Load options, metaboxes, and shortcode generator array templates.
	 */
	// options
	//require_once ( get_template_directory() . '/inc/functions/admin.php');
	// function my_option( $name )
	// {
	//     return vp_option( "my_option." . $name );
	// }
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */


	require get_template_directory() . '/options/bootstrap.php';
	require get_template_directory() . '/admin/data_sources.php';
	define('NII_ADMIN', get_template_directory() . '/admin');
	define('NII_ADMIN_URI', get_template_directory_uri() . '/admin');


	$tmpl_opt  = get_template_directory() . '/admin/option/option.php';

	// metaboxes
	// $tmpl_mb1  = get_template_directory() . '/admin/metabox/sample_1.php';
	// $tmpl_mb2  = get_template_directory() . '/admin/metabox/sample_2.php';
	// $tmpl_mb3  = get_template_directory() . '/admin/metabox/sample_3.php';
	// $tmpl_mb4  = get_template_directory() . '/admin/metabox/sample_4.php';
	// $tmpl_mb5  = get_template_directory() . '/admin/metabox/sample_5.php';
	// $tmpl_mb6  = get_template_directory() . '/admin/metabox/sample_6.php';
	// $tmpl_mb6  = get_template_directory() . '/admin/metabox/sample_6.php';
	// $tmpl_mb7  = get_template_directory() . '/admin/metabox/sample_7.php';
	// $tmpl_mb8  = get_template_directory() . '/admin/metabox/sample_8.php';
	$tmpl_post  = get_template_directory() . '/admin/metabox/post.php';
	$tmpl_teams  = get_template_directory() . '/admin/metabox/teams.php';
	$tmpl_page  = get_template_directory() . '/admin/metabox/page.php';
	$tmpl_case  = get_template_directory() . '/admin/metabox/case.php';
	$tmpl_slider  = get_template_directory() . '/admin/metabox/slider.php';
	$tmpl_clients  = get_template_directory() . '/admin/metabox/clients.php';
	$tmpl_jobs  = get_template_directory() . '/admin/metabox/jobs.php';
	$tmpl_events  = get_template_directory() . '/admin/metabox/events.php';
	$nii_e_menu = array(
		'icon_url' => 'http://baidu.com/logo.png' ,
		'position'=>6
		);

	$theme_options = new VP_Option(array(
	'is_dev_mode'           => false,                                  // dev mode, default to false
	'option_key'            => 'vpt_option',                           // options key in db, required
	'page_slug'             => 'vpt_option',                           // options page slug, required
	'template'              => $tmpl_opt,                              // template file path or array, required
	'menu_page'             => $nii_e_menu,                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
	'use_auto_group_naming' => true,                                   // default to true
	'use_util_menu'         => true,                                   // default to true, shows utility menu
	'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
	'layout'                => 'fixed',                                // fluid or fixed, default to fixed
	'page_title'            => __( '主题设置', 'vp_textdomain' ), // page title
	'menu_label'            => __( '主题设置', 'vp_textdomain' ), // menu label
	));

	/**
	 * Create instances of Metaboxes
	 */
	// $mb1 = new VP_Metabox($tmpl_mb1);
	// $mb2 = new VP_Metabox($tmpl_mb2);
	// $mb3 = new VP_Metabox($tmpl_mb3);
	// $mb4 = new VP_Metabox($tmpl_mb4);
	// $mb5 = new VP_Metabox($tmpl_mb5);
	// $mb6 = new VP_Metabox($tmpl_mb6);
	// $mb7 = new VP_Metabox($tmpl_mb7);
	// $mb8 = new VP_Metabox($tmpl_mb8);
	$post = new VP_Metabox($tmpl_post);
	$teams = new VP_Metabox($tmpl_teams);
	$page = new VP_Metabox($tmpl_page);
	$case = new VP_Metabox($tmpl_case);
	$slider = new VP_Metabox($tmpl_slider);
	$clients = new VP_Metabox($tmpl_clients);
	$jobs = new VP_Metabox($tmpl_jobs);
  $events = new VP_Metabox($tmpl_events);

$tmpl_sg1  = get_template_directory() . '/admin/shortcode_generator/shortcodes1.php';
$tmpl_sg2  = get_template_directory() . '/admin/shortcode_generator/shortcodes2.php';
$tmpl_sg3  = get_template_directory() . '/admin/shortcode_generator/shortcodes3.php';
	/**
 * Create instances of Shortcode Generator
 */
$tmpl_sg1 = array(
	'name'           => 'sg_1',                                        // unique name, required
	'template'       => $tmpl_sg1,                                     // template file or array, required
	'modal_title'    => __( 'Vafpress Shortcodes 1', 'vp_textdomain'), // modal title, default to empty string
	'button_title'   => __( 'Vafpress1', 'vp_textdomain'),              // button title, default to empty string
	'types'          => array( 'post', 'page','events' ),                       // at what post types the generator should works, default to post and page
	'included_pages' => array( 'appearance_page_vpt_option' ),
	'main_image'     => get_template_directory_uri() . '/admin/public/img/b1.svg',      // or to what other admin pages it should appears
);
$tmpl_sg2 = array(
	'name'           => 'sg_2',
	'template'       => $tmpl_sg2,
	'modal_title'    => __( 'Vafpress Shortcodes 2', 'vp_textdomain'),
	'button_title'   => __( 'Vafpress2', 'vp_textdomain'),
	'types'          => array( 'post', 'page','events' ),
	'main_image'     => get_template_directory_uri() . '/admin/public/img/b2.svg',
	'sprite_image'   => get_template_directory_uri() . '/admin/public/img/vp_shortcode_icon_sprite.png',
);
$tmpl_sg3 = array(
	'name'           => 'sg_3',
	'template'       => $tmpl_sg3,
	'modal_title'    => __( '活动页面构建', 'vp_textdomain'),
	'button_title'   => __( '活动', 'vp_textdomain'),
	'types'          => array( 'post', 'page','events' ),
	'main_image'     => get_template_directory_uri() . '/admin/public/img/b2.svg',
	'sprite_image'   => get_template_directory_uri() . '/admin/public/img/vp_shortcode_icon_sprite.png',
);
$sg1 = new VP_ShortcodeGenerator($tmpl_sg1);
$sg2 = new VP_ShortcodeGenerator($tmpl_sg2);
$sg3 = new VP_ShortcodeGenerator($tmpl_sg3);



require get_template_directory() . '/inc/shortcode-func.php';

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( '主菜单', 'nii_framework' ),
		'footer' => __( '底部菜单', 'nii_framework' ),
	) );
	if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
		}
		if ( function_exists( 'add_image_size' ) ) {
		    add_image_size( 'customized-post-thumb', 100, 120 );
		    add_image_size( 'case-thumb', 500, 309 ,true );
		}
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside', 'image', 'video', 'quote', 'link',
	// ) );

	// Set up the WordPress core custom background feature.
	// add_theme_support( 'custom-background', apply_filters( 'nii_framework_custom_background_args', array(
	// 	'default-color' => 'ffffff',
	// 	'default-image' => '',
	// ) ) );
}
endif; // nii_framework_setup
add_action( 'after_setup_theme', 'nii_framework_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */

function nii_framework_scripts() {
	wp_enqueue_style( 'uikit', get_template_directory_uri() . '/uikit/css/uikit.min.css', array(),'2.18.0' );
	wp_enqueue_style( 'accordion', get_template_directory_uri() . '/uikit/css/components/accordion.min.css', array(),'2.18.0' );
	wp_enqueue_style( 'sticky', get_template_directory_uri() . '/uikit/css/components/sticky.min.css', array(),'2.18.0' );
	wp_enqueue_style( 'slidenav', get_template_directory_uri() . '/uikit/css/components/slidenav.min.css', array(),'2.18.0' );
	wp_enqueue_style( 'dotnav', get_template_directory_uri() . '/uikit/css/components/dotnav.min.css', array(),'2.18.0' );
	wp_enqueue_style( 'slideshow', get_template_directory_uri() . '/uikit/css/components/slideshow.min.css', array(),'2.18.0' );
	wp_enqueue_style( 'lazyload', get_template_directory_uri() . '/inc/css/bttrlazyloading.min.css', array(),'2.18.0' );
	//wp_enqueue_style( 'tooltip', get_template_directory_uri() . '/uikit/css/components/tooltip.min.css', array(),'2.18.0' );




	wp_enqueue_style( 'nii_framework-style', get_stylesheet_uri() );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', array( 'jquery' ),'2.18.0' );

	wp_enqueue_script( 'uikit-js', get_template_directory_uri() . '/uikit/js/uikit.min.js', array( 'jquery' ),'2.18.0' );

	wp_enqueue_script( 'uk-accordion', get_template_directory_uri() . '/uikit/js/components/accordion.min.js', array( 'jquery' ), '20120206');

	wp_enqueue_script( 'uikit-grid', get_template_directory_uri() . '/uikit/js/components/grid.min.js', array( 'jquery' ),'2.18.0' );
	wp_enqueue_script( 'sticky', get_template_directory_uri() . '/uikit/js/components/sticky.min.js', array(), '20120206',true);
	wp_enqueue_script( 'slideset', get_template_directory_uri() . '/uikit/js/components/slideset.min.js', array(), '20120206',true);
	wp_enqueue_script( 'slideshow', get_template_directory_uri() . '/uikit/js/components/slideshow.min.js', array(), '20120206',true);


	wp_enqueue_script( 'uikit-scrollspy', get_template_directory_uri() . '/uikit/js/core/scrollspy.min.js', array( 'jquery' ),'2.18.0' );
	 wp_enqueue_script( 'uikit-parallax', get_template_directory_uri() . '/uikit/js/components/parallax.min.js', array( 'jquery' ),'2.18.0' );
	wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/uikit/js/core/smooth-scroll.min.js', array( 'jquery' ),'2.18.0' );
	wp_enqueue_script( 'modal', get_template_directory_uri() . '/uikit/js/core/modal.min.js', array( 'jquery' ),'2.18.0' );
	wp_enqueue_script( 'lazyload', get_template_directory_uri() . '/js/jquery.bttrlazyloading.min.js', array( 'jquery' ),'2.18.0' );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/uikit/js/components/lightbox.min.js', array( 'jquery' ),'2.18.0' );
	//wp_enqueue_script( 'tooltip', get_template_directory_uri() . '/uikit/js/components/tooltip.min.js', array( 'jquery' ),'2.18.0' );

	wp_enqueue_script( 'base', get_template_directory_uri() . '/js/base.js', array(), '20120206' , true);
	if (vp_option('vpt_option.loading_tg')=='1'){
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array( 'jquery' ),'2.18.0',true );
	wp_enqueue_script( 'pathLoader', get_template_directory_uri() . '/js/pathLoader.js', array(), '20120206',true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '20120206',true );
	}
	wp_enqueue_script( 'nii_framework-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nii_framework_scripts' );


function nii_custom_css() {
    return get_template_part('inc/customization');
}
add_action( 'wp_head', 'nii_custom_css' );


/**
 * 修改文章标题输入框内容
 */
function change_default_title( $title ){
	$screen = get_current_screen();
    	if( 'post' == $screen->post_type ) {
    		$title = '输入文章标题';
    	} elseif ('page' == $screen->post_type) {
    		$title = '输入页面标题';
    	} elseif ('teams' == $screen->post_type) {
    		$title = '输入成员姓名';
    } elseif ('case' == $screen->post_type) {
    		$title = '输入项目名称';
    	}
	return $title;
}
add_filter( 'enter_title_here', 'change_default_title' );
/**
 *  仪表盘设置为单栏布局
 */
function wpdx_screen_layout_columns($columns) {
	$columns['dashboard'] = 2;
	return $columns;
}
add_filter('screen_layout_columns', 'wpdx_screen_layout_columns');
function wpdx_screen_layout_dashboard() { return 2; }
add_filter('get_user_option_screen_layout_dashboard', 'wpdx_screen_layout_dashboard');

if ( ! function_exists( 'add_dashboard_widgets' ) ) :
function welcome_dashboard_widget_function() {
echo '<ul class="uk-list">
				<li><a href="post-new.php">发布新闻</a></li>
				<li><a href="post-new.php?post_type=case">添加案例</a></li>
				<li><a href="post-new.php?post_type=teams">添加成员</a></li>
				<li><a href="post-new.php?post_type=clients">添加合作伙伴</a></li>
				<li><a href="post-new.php?post_type=jobs">添加招聘</a></li>
				</ul>';
}
function add_dashboard_widgets() {
wp_add_dashboard_widget('welcome_dashboard_widget', '常规任务', 'welcome_dashboard_widget_function');
}
add_action('wp_dashboard_setup', 'add_dashboard_widgets' );
endif;
    function example_remove_dashboard_widgets() {
        // Globalize the metaboxes array, this holds all the widgets for wp-admin
        global $wp_meta_boxes;
        // 以下这一行代码将删除 "快速发布" 模块
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
        // 以下这一行代码将删除 "引入链接" 模块
        //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
        // 以下这一行代码将删除 "插件" 模块
        //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
        // 以下这一行代码将删除 "近期评论" 模块
        //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
        // 以下这一行代码将删除 "近期草稿" 模块
        //unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
        // 以下这一行代码将删除 "WordPress 开发日志" 模块
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
        // 以下这一行代码将删除 "其它 WordPress 新闻" 模块
        unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity']);
        unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
        // 以下这一行代码将删除 "概况" 模块
        //unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
    }
    add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );
    // 以下这一行代码将删除 "welcome" 模块
    remove_action('welcome_panel', 'wp_welcome_panel');
//Customize the Footer
function modify_footer_admin () {
  echo 'Created by <a href="http://wiinder.com">Niizer</a>.';
  //echo 'Powered by<a href="http://WordPress.org">WordPress</a>.';
}
add_filter('admin_footer_text', 'modify_footer_admin');
function nii_framework_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'nii_framework' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<div class="uk-panel uk-panel-box uk-panel-box-primary"><aside id="%1$s" class="uk-panel uk-panel-header widget %2$s">',
		'after_widget'  => '</aside></div>',
		'before_title'  => '<div class="widget-header"><h1 class="uk-panel-title widget-title"><span>',
		'after_title'   => '</span></h1></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer-Sidebar-1', 'nii_framework' ),
		'id'            => 'footer-sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="uk-panel uk-panel-header widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-header"><h1 class="uk-panel-title widget-title"><span>',
		'after_title'   => '</span></h1></div>',
	) );
	register_sidebar( array(
		'name'          => __( 'Footer-Sidebar-2', 'nii_framework' ),
		'id'            => 'footer-sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="uk-panel uk-panel-header widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<div class="widget-header"><h1 class="uk-panel-title widget-title"><span>',
		'after_title'   => '</span></h1></div>',
	) );
}
add_action( 'widgets_init', 'nii_framework_widgets_init' );



add_filter('upload_mimes', 'my_upload_mimes');

function my_upload_mimes($mimes = array()) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
/**
 * 导航菜单生成类
 *
 * @author		微笑的鱼
 * @package		SmileFish
 * @since		0.0.1 - 2013.10.30
 */

function get_attachment_id_from_src ($link) {
    global $wpdb;
    $link = preg_replace('/-\d+x\d+(?=\.(jpg|jpeg|png|gif)$)/i', '', $link);
    return $wpdb->get_var("SELECT ID FROM {$wpdb->posts} WHERE guid='$link'");
}
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/team.php';
require get_template_directory() . '/inc/case.php';
require get_template_directory() . '/inc/slider.php';
require get_template_directory() . '/inc/clients.php';
require get_template_directory() . '/inc/job.php';
require get_template_directory() . '/inc/events.php';
/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

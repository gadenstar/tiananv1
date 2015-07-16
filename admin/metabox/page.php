<?php

return array(
	'id'          => 'custom_page',
	'types'       => array('page'),
	'title'       => __('自定义页面顶部', 'vp_textdomain'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type' => 'toggle',
			'name' => 'show_title',
			'label' => __('隐藏页面标题', 'vp_textdomain'),
			'description' => __('Checking this will show filtering option group.', 'vp_textdomain'),
		),
		array(
			    'type'        => 'textbox',
			    'name'        => 'title',
			    'label'       => __('自定义标题', 'vp_textdomain'),
			    'description' => __('留空为显示页面标题', 'vp_textdomain'),
			    //'default'     => 'xixixixi',
			),
		array(
			'type' => 'radioimage',
			'name' => 'page_title_pos',
			'label' => __('标题定位', 'vp_textdomain'),
			'default' => '1',
			'description' => __('RadioButton with image item', 'vp_textdomain'),
			'items' => array(
				array(
					'value' => 'left',
					'label' => __('Label 1', 'vp_textdomain'),
					'img' => NII_ADMIN_URI . '/public/img/title-l.png',
				),
				array(
					'value' => 'center',
					'label' => __('Label 2', 'vp_textdomain'),
					'img' => NII_ADMIN_URI . '/public/img/title-c.png',
				),
				array(
					'value' => 'right',
					'label' => __('Label 3', 'vp_textdomain'),
					'img' => NII_ADMIN_URI . '/public/img/title-r.png',
				),

			),
			'default' => array(
						'left',
			),

		),
		array(
			'type' => 'toggle',
			'name' => 'toggle_filtering',
			'label' => __('自定义标题背景', 'vp_textdomain'),
			'description' => __('Checking this will show filtering option group.', 'vp_textdomain'),
		),
		array(
			'type'      => 'group',
			'repeating' => false,
			'length'    => 1,
			'name'      => 'filtering_group',
			'title'     => __('Filtering', 'vp_textdomain'),
			'dependency' => array(
				'field'    => 'toggle_filtering',
				'function' => 'vp_dep_boolean',
			),
			'fields'    => array(
				array(
					'type' => 'radiobutton',
					'name' => 'filter_type',
					'label' => __('颜色/图像', 'vp_textdomain'),
					'description' => __('Different type will show different type of field', 'vp_textdomain'),
					'items' => array(
						array(
							'value' => 'color',
							'label' => __('自定义颜色', 'vp_textdomain'),
						),
						array(
							'value' => 'img',
							'label' => __('自定义图片', 'vp_textdomain'),
						),
					),
				),
				array(
					'type' => 'color',
					'name' => 'page_color',
					'label' => __('颜色选择', 'vp_textdomain'),
					//'description' => __('ColorPicker using eyecon colorpicker library', 'vp_textdomain'),
					'default' => '#98ed28',
					'format' => 'rgb',
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'page_color',
					),
				),
				array(
					'type' => 'upload',
					'name' => 'page_img',
					'label' => __('上传图片', 'vp_textdomain'),
					//'description' => __('Built in WP media upload, upload any media', 'vp_textdomain'),
					//'default' => 'http://lorempixel.com/500/400/animals/',
					'dependency' => array(
						'field'    => 'filter_type',
						'function' => 'page_img',
					),
				),
			),
		),
		array(
			'type' => 'radioimage',
			'name' => 'page_sidebar_pos',
			'label' => __('侧边栏', 'vp_textdomain'),
			'default' => '1',
			'description' => __('RadioButton with image item', 'vp_textdomain'),
			'items' => array(
				array(
					'value' => '1',
					'label' => __('Label 1', 'vp_textdomain'),
					'img' => NII_ADMIN_URI . '/public/img/sidebar-no.png',
				),
				array(
					'value' => '2',
					'label' => __('Label 2', 'vp_textdomain'),
					'img' => NII_ADMIN_URI . '/public/img/sidebar-left.png',
				),
				array(
					'value' => '3',
					'label' => __('Label 3', 'vp_textdomain'),
					'img' => NII_ADMIN_URI . '/public/img/sidebar-right.png',
				),
			),

		),
	),
);
/**
 * EOF
 */

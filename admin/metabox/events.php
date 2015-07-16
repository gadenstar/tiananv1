<?php

return array(
	'id'          => 'events_page',
	'types'       => array('events'),
	'title'       => __('自定义页面顶部', 'vp_textdomain'),
	'priority'    => 'core',
	'template'    => array(
		array(
        'type'      => 'group',
        'repeating' => false,
        'length'    => 1,
        'name'      => 'top_img',
        'title'     => __('顶部大图', 'vp_textdomain'),
        'fields'    => array(
            array(
				        'type' => 'color',
				        'name' => 'bg_c',
				        'label' => __('背景色', 'vp_textdomain'),
				        //'description' => __('Color Picker, you can set the default color.', 'vp_textdomain'),
				        'default' => 'rgb(255,0,0)',
				        'format' => 'rgb',
				    ),
		        array(
		            'type' => 'upload',
		            'name' => 'up_1',
		            'label' => __('顶部大图', 'vp_textdomain'),
		            'validation' => 'required',
		            'description' => __('Media uploader, using the powerful WP Media Upload', 'vp_textdomain'),
		            //'default' => 'http://placehold.it/70x70',
		        ),
        ),
    ),
    array(
			'type'       => 'group',
			'repeating'  => false,
			'length'     => 1,
			'name'       => 'clients',
			'title'      => __('合作伙伴', 'qualia_td'),
			'fields'     => array(
					array(
						'type' => 'toggle',
						'name' => 'is_clients_set',
						'label' => '显示合作伙伴',
						'default' => 1,
					),
					array(
				        'type' => 'color',
				        'name' => 'text_c',
				        'dependency' => array(
								'field'    => 'is_clients_set',
								'function' => 'vp_dep_boolean',
								),
				        'label' => __('文本颜色', 'vp_textdomain'),
				        //'description' => __('Color Picker, you can set the default color.', 'vp_textdomain'),
				        'default' => 'rgb(255,0,0)',
				        'format' => 'rgb',
				   ),
					array(
						'type' => 'radiobutton',
						'name' => 'mode',
						'dependency' => array(
								'field'    => 'is_clients_set',
								'function' => 'vp_dep_boolean',
							),
						'label' => __('背景色/图片背景', 'qualia_td'),
						'items' => array(
							'data' => array(
								array(
									'source' => 'function',
									'value'  => 'qualia_source_body_background_image_mode',
								),
							),
						),
					),
					array(
							'type' => 'radioimage',
							'name' => 'package',
							'label' => __(' ', 'qualia_td'),
							'dependency' => array(
								'field' => 'mode',
								'function' => 'qualia_dep_body_background_image_mode_package',
							),
							'item_max_height' => 80,
							'item_max_width' => 80,
							'items' => array(
									array(
										'value' => 'black-checker',
										'label' => __('Label 1', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/black-checker.png',
									),
									array(
										'value' => 'beige-paper',
										'label' => __('Label 2', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/beige-paper.png',
									),
									array(
										'value' => 'black-denim',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/black-denim.png',
									),
									array(
										'value' => 'cardboard',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/cardboard.png',
									),
									array(
										'value' => 'concrete-wall-2',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/concrete-wall-2.png',
									),
									array(
										'value' => 'cork',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/cork.png',
									),
									array(
										'value' => 'noise',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/noise.png',
									),
									array(
										'value' => 'fabric-45deg',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/fabric-45deg.png',
									),
									array(
										'value' => 'dark-brick-wall',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/dark-brick-wall.png',
									),
									array(
										'value' => 'black-linen',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/black-linen.png',
									),
									array(
										'value' => 'bright-squares',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/bright-squares.png',
									),
									array(
										'value' => 'connect',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/connect.png',
									),
									array(
										'value' => 'x-cross',
										'label' => __('Label 3', 'vp_textdomain'),
										'img' => TIANAN_IMAGES_DIR_P . '/patterns_thumb/x-cross.png',
									),

								),
						),
					array(
						'type' => 'color',
						'name' => 'background_color',
						'label' => __('背景色', 'qualia_td'),
						'format' => 'rgb',
						'dependency' => array(
							'field'    => 'mode',
							'function' => 'qualia_dep_body_background_image_mode_color',
						),
					),
					array(
						'type' => 'upload',
						'name' => 'background_img',
						'label' => __('上传图片', 'vp_textdomain'),
						//'description' => __('Built in WP media upload, upload any media', 'vp_textdomain'),
						//'default' => 'http://lorempixel.com/500/400/animals/',
						'dependency' => array(
							'field'    => 'mode',
							'function' => 'qualia_dep_body_background_image_mode_custom',
						),
					),
					array(
							'type'  => 'select',
							'name'  => 'custom_position',
							'label' => __('Background Position', 'qualia_td'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value'  => 'qualia_source_background_position',
									),
								),
							),
							'dependency' => array(
								'field' => 'mode',
								'function' => 'qualia_dep_body_background_image_mode_custom',
							),
						),
						array(
							'type'  => 'select',
							'name'  => 'custom_attachment',
							'label' => __('Background Attachment', 'qualia_td'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value'  => 'qualia_source_background_attachment',
									),
								),
							),
							'dependency' => array(
								'field' => 'mode',
								'function' => 'qualia_dep_body_background_image_mode_custom',
							),
						),
						array(
							'type'  => 'select',
							'name'  => 'custom_repeat',
							'label' => __('Background Repeat', 'qualia_td'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value'  => 'qualia_source_background_repeat',
									),
								),
							),
							'dependency' => array(
								'field' => 'mode',
								'function' => 'qualia_dep_body_background_image_mode_custom',
							),
						),
						array(
							'type'  => 'select',
							'name'  => 'custom_size',
							'label' => __('Background Size', 'qualia_td'),
							'items' => array(
								'data' => array(
									array(
										'source' => 'function',
										'value'  => 'qualia_source_background_size',
									),
								),
							),
							'dependency' => array(
								'field' => 'mode',
								'function' => 'qualia_dep_body_background_image_mode_custom',
							),
						),
       ),
    ),
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

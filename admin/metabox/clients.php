<?php

return array(
	'id'          => 'clients_set',
	'types'       => array('clients'),
	'title'       => __('合作伙伴设置', 'vp_textdomain'),
	'priority'    => 'high',
	'template'    => array(

		array(
		        'type' => 'upload',
		        'name' => 'img',
		        'label' => __('上传图片', 'vp_textdomain'),
		        'description' => __('用于分类页面展示用', 'vp_textdomain'),
		        //'default' => 'http://placehold.it/70x70',
		    ),

		//  array(
	 //        'type' => 'toggle',
	 //        'name' => 'toggle',
	 //        'label' => __('是否开启文字显示', 'vp_textdomain'),
	 //        'description' => __('Suits the need to ask user a yes or no option.', 'vp_textdomain'),
	 //        'default' => '0',
	 //    ),
		// array(
		// 	    'type'      => 'group',
		// 	    'repeating' => false,
		// 	    'length'    => 1,
		// 	    'name'      => 'button_1_group',
		// 	    'title'     => __('按钮#1设置', 'vp_textdomain'),
		// 	    'fields'    => array(
		// 	        array(
		// 	            'type'        => 'textbox',
		// 	            'name'        => 'button_text',
		// 	            'label'       => __('按钮文本', 'vp_textdomain'),
		// 	            'description' => __('Lorem Ngipsum.', 'vp_textdomain'),
		// 	            'default'     => 'xixixixi',
		// 	        ),
		// 		    array(
		// 	            'type'        => 'textbox',
		// 	            'name'        => 'button_link',
		// 	            'label'       => __('按钮链接', 'vp_textdomain'),
		// 	            'description' => __('Lorem Ngipsum.', 'vp_textdomain'),
		// 	            'default'     => 'xixixixi',
		// 	        ),
		// 	        /* more controls fields or even nested group ... */
		// 	    ),
		// 	),
		// array(
		// 	    'type'      => 'group',
		// 	    'repeating' => false,
		// 	    'length'    => 1,
		// 	    'name'      => 'button_2_group',
		// 	    'title'     => __('按钮#2设置', 'vp_textdomain'),
		// 	    'fields'    => array(
		// 	        array(
		// 	            'type'        => 'textbox',
		// 	            'name'        => 'button_text',
		// 	            'label'       => __('按钮文本', 'vp_textdomain'),
		// 	            'description' => __('Lorem Ngipsum.', 'vp_textdomain'),
		// 	            'default'     => 'xixixixi',
		// 	        ),
		// 	        array(
		// 	            'type'        => 'textbox',
		// 	            'name'        => 'button_link',
		// 	            'label'       => __('按钮链接', 'vp_textdomain'),
		// 	            'description' => __('Lorem Ngipsum.', 'vp_textdomain'),
		// 	            'default'     => 'xixixixi',
		// 	        ),
		// 	        /* more controls fields or even nested group ... */
		// 	    ),
		// 	),

		// array(
		//     'type'      => 'group',
		//     'repeating' => true,
		//     'name'      => 'repeating_group',
		//     'title'     => __('案例图像', 'vp_textdomain'),
		//     'fields'    => array(
		//         array(
		// 			'type' => 'upload',
		// 			'name' => 'teams_img',
		// 			'label' => __('图像', 'vp_textdomain'),
		// 			'description' => __('请上传成员图像', 'vp_textdomain'),
		// 			'default' => 'http://lorempixel.com/500/400/',
		// 		),
		//         /* more controls fields or even nested group ... */
		//     ),
		// ),
	),
);

/**
 * EOF
 */
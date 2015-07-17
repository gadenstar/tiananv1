<?php

return array(
	'id'          => 'post_set',
	'types'       => array('post','page','events'),
	'title'       => __('SEO设置', 'vp_textdomain'),
	'priority'    => 'high',
	'template'    => array(
		// array(
		// 			'type' => 'textbox',
		// 			'name' => 'teams_name',
		// 			'label' => __('姓名', 'vp_textdomain'),
		// 			//'description' => __('输入姓名', 'vp_textdomain'),
		// ),
		array(
					'type' => 'textbox',
					'name' => 'post_keywords',
					'label' => __('文章关键字', 'vp_textdomain'),
					'description' => __('关键字用"，"分隔', 'vp_textdomain'),
		),
		array(
					'type' => 'textbox',
					'name' => 'post_description',
					'label' => __('文章简介', 'vp_textdomain'),
					//'description' => __('输入设计所所擅长风格', 'vp_textdomain'),
		),
		// array(
		// 	'type' => 'select',
		// 	'name' => 'team_dept',
		// 	'label' => __('部门', 'vp_textdomain'),
		// 	'description' => __('请选择所在部门', 'vp_textdomain'),
		// 	'items' => array(
		// 		'data' => array(
		// 			array(
		// 				'source' => 'function',
		// 				'value'  => 'nii_get_team_dept',
		// 			),
		// 		),
		// 	),
		// ),
		// array(
		// 	'type' => 'select',
		// 	'name' => 'team_job',
		// 	'label' => __('职位', 'vp_textdomain'),
		// 	'description' => __('请选择所处职位', 'vp_textdomain'),
		// 	'items' => array(
		// 		'data' => array(
		// 			array(
		// 				'source' => 'function',
		// 				'value'  => 'nii_get_team_job',
		// 			),
		// 		),
		// 	),
		// ),


	),
);

/**
 * EOF
 */

<?php

return array(
	'id'          => 'jobs',
	'types'       => array('jobs'),
	'title'       => __('招聘设置', 'vp_textdomain'),
	'priority'    => 'high',
	'template'    => array(
		array(
			'type'      => 'group',
			'repeating' => true,
			'name'      => 'jobs_info_box',
			'title'     => __('岗位描述', 'vp_textdomain'),
			'fields'    => array(
				array(
					'type' => 'textbox',
					'name' => 'jobs_info',
					'label' => __('岗位描述', 'vp_textdomain'),
					'description' => __('Source Name', 'vp_textdomain'),
				),
			),
		),
	),
);

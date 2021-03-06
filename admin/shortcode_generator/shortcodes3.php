<?php
return array(
	'布局' => array(
		'elements' => array(

			'row' => array(
				'title'   => __('Row', 'qualia_td'),
				'code'    => '[row][/row]',
			),
			'promised' => array(
				'title'   => __('承诺', 'qualia_td'),
				'code'    => '[promised][/promised]',
			),
			'clients' => array(
				'title'   => __('合作伙伴', 'qualia_td'),
				'code'    => '[clients][/clients]',
			),
			'column' => array(
				'title'   => __('Column', 'qualia_td'),
				'code'    => '[column][/column]',
				'attributes' => array(
					array(
						'name'    => 'grid',
						'type'    => 'slider',
						'label'   => __('Grid', 'qualia_td'),
						'min'     => 1,
						'max'     => 12,
						'default' => 12,
					),
					array(
						'name'    => 'offset',
						'type'    => 'slider',
						'label'   => __('Offset', 'qualia_td'),
						'min'     => 0,
						'max'     => 11,
						'default' => 0,
					),
				),
			),
			'inner_title' => array(
				'title'   => '顶部大图',
				'code'    => '[topimg][/topimg]',
				'attributes' => array(
					array(
						'name'  => 'bg_color',
						'label' => __('背景颜色', 'vp_textdomain'),
						'type'  => 'color'
					),
					array(
						'name'  => 'upload',
						'type'  => 'upload',
						'label' => __('上传', 'vp_textdomain'),
					),
				),
			),
			'spacer' => array(
				'title'   => __('Inner Spacer', 'qualia_td'),
				'code'    => '[spacer]',
				'attributes' => array(
					array(
						'name'    => 'size',
						'type'    => 'slider',
						'label'   => __('Size', 'qualia_td'),
						'default' => 0,
						'min'     => 0,
						'max'     => 500,
					),
				),
			),
		),
	),

);

/**
 * EOF
 */

<?php
return array(
	'name' => __('Buttons', 'honeymoon') ,
	'value' => 'button',
	'options' => array(
		array(
			'name' => __('Text', 'honeymoon') ,
			'id' => 'text',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Style', 'honeymoon') ,
			'id' => 'style',
			'default' => 'filled-small',
			'options' => array(
				'filled' => __('Filled', 'honeymoon'),
				'filled-small' => __('Filled, small', 'honeymoon'),
				'border' => __('Border', 'honeymoon'),
			),
			'type' => 'select'
		) ,
		array(
			'name' => __('Font size', 'honeymoon') ,
			'id' => 'font',
			'default' => 24,
			'type' => 'range',
			'min' => 10,
			'max' => 64,
		) ,
		array(
			'name' => __('Background', 'honeymoon') ,
			'id' => 'bgColor',
			'default' => 'accent1',
			'options' => array(
				'accent1' => __('Accent 1', 'honeymoon'),
				'accent2' => __('Accent 2', 'honeymoon'),
				'accent3' => __('Accent 3', 'honeymoon'),
				'accent4' => __('Accent 4', 'honeymoon'),
				'accent5' => __('Accent 5', 'honeymoon'),
				'accent6' => __('Accent 6', 'honeymoon'),
				'accent7' => __('Accent 7', 'honeymoon'),
				'accent8' => __('Accent 8', 'honeymoon'),
			),
			'type' => 'select'
		) ,
		array(
			'name' => __('Hover Background', 'honeymoon') ,
			'id' => 'hover_color',
			'default' => 'accent1',
			'options' => array(
				'accent1' => __('Accent 1', 'honeymoon'),
				'accent2' => __('Accent 2', 'honeymoon'),
				'accent3' => __('Accent 3', 'honeymoon'),
				'accent4' => __('Accent 4', 'honeymoon'),
				'accent5' => __('Accent 5', 'honeymoon'),
				'accent6' => __('Accent 6', 'honeymoon'),
				'accent7' => __('Accent 7', 'honeymoon'),
				'accent8' => __('Accent 8', 'honeymoon'),
			),
			'type' => 'select'
		) ,
		array(
			'name' => __('Alignment', 'honeymoon') ,
			'id' => 'align',
			'default' => '',
			'prompt' => '',
			'options' => array(
				'left' => __('Left', 'honeymoon') ,
				'right' => __('Right', 'honeymoon') ,
				'center' => __('Center', 'honeymoon') ,
			) ,
			'type' => 'select',
		) ,
		array(
			'name' => __('Link', 'honeymoon') ,
			'id' => 'link',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Link Target', 'honeymoon') ,
			'id' => 'linkTarget',
			'default' => '_self',
			'options' => array(
				'_blank' => __('Load in a new window', 'honeymoon') ,
				'_self' => __('Load in the same frame as it was clicked', 'honeymoon') ,
			) ,
			'type' => 'select',
		) ,
		array(
			'name' => __('Icon', 'honeymoon') ,
			'id' => 'icon',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			'name' => __('Icon Style', 'honeymoon'),
			'type' => 'select-row',
			'selects' => array(
				'icon_color' => array(
					'desc' => __('Color:', 'honeymoon'),
					"default" => "",
					"prompt" => '',
					"options" => array(
						'accent1' => __('Accent 1', 'honeymoon'),
						'accent2' => __('Accent 2', 'honeymoon'),
						'accent3' => __('Accent 3', 'honeymoon'),
						'accent4' => __('Accent 4', 'honeymoon'),
						'accent5' => __('Accent 5', 'honeymoon'),
						'accent6' => __('Accent 6', 'honeymoon'),
						'accent7' => __('Accent 7', 'honeymoon'),
						'accent8' => __('Accent 8', 'honeymoon'),
					) ,
				),
				'icon_placement' => array(
					'desc' => __('Placement:', 'honeymoon'),
					"default" => 'left',
					"options" => array(
						'left' => __('Left', 'honeymoon'),
						'right' => __('Right', 'honeymoon'),
					) ,
				),
			),
		),

		array(
			'name' => __('ID', 'honeymoon') ,
			'desc' => __('ID attribute added to the button element.', 'honeymoon'),
			'id' => 'id',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Class', 'honeymoon') ,
			'desc' => __('Class attribute added to the button element.', 'honeymoon'),
			'id' => 'class',
			'default' => '',
			'type' => 'text',
		) ,
	) ,
);

<?php
return array(
	'name' => __('Progress Indicator', 'honeymoon') ,
	'desc' => __('You can choose from % indicator or animated number.' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('meter-medium'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'wpv_progress',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Type', 'honeymoon'),
			'id' => 'type',
			'type' => 'select',
			'default' => 'percentage',
			'options' => array(
				'percentage' => __('Percentage', 'honeymoon'),
				'number' => __('Number', 'honeymoon'),
			),
			'field_filter' => 'fpis',
		),

		array(
			'name' => __('Percentage', 'honeymoon') ,
			'id' => 'percentage',
			'default' => 0,
			'type' => 'range',
			'min' => 0,
			'max' => 100,
			'unit' => '%',
			'class' => 'fpis fpis-percentage',
		) ,

		array(
			'name' => __('Value', 'honeymoon') ,
			'id' => 'value',
			'default' => 0,
			'type' => 'range',
			'min' => 0,
			'max' => 10000,
			'class' => 'fpis fpis-number',
		) ,

		array(
			'name' => __('Track Color', 'honeymoon') ,
			'id' => 'bar_color',
			'default' => 'accent1',
			'type' => 'color',
			'class' => 'fpis fpis-percentage',
		) ,

		array(
			'name' => __('Bar Color', 'honeymoon') ,
			'id' => 'track_color',
			'default' => 'accent7',
			'type' => 'color',
			'class' => 'fpis fpis-percentage',
		) ,

		array(
			'name' => __('Value Color', 'honeymoon') ,
			'id' => 'value_color',
			'default' => 'accent2',
			'type' => 'color',
		) ,

		) ,


);

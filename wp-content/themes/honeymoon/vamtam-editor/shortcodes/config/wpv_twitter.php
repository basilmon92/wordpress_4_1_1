<?php
return array(
	"name" => __("Twitter Timeline", 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('twitter'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "wpv_tribe_events",
	'controls' => 'size name clone edit delete',
	"options" => array(

		array(
			'name' => __('Type', 'honeymoon') ,
			'id' => 'type',
			'default' => 'user',
			'type' => 'select',
			'options' => array(
				'user' => __('Single user', 'honeymoon'),
				'search' => __('Search results ', 'honeymoon'),
			),
		) ,

		array(
			'name' => __('Username or Search Terms', 'honeymoon') ,
			'id' => 'param',
			'default' => '',
			'type' => 'text',
		) ,

		array(
			'name' => __('Number of Tweets', 'honeymoon') ,
			'id' => 'limit',
			'default' => 5,
			'type' => 'range',
			'min' => 1,
			'max' => 20,
		) ,

		array(
			'name' => __('Title (optional)', 'honeymoon') ,
			'desc' => __('The title is placed just above the element.', 'honeymoon'),
			'id' => 'column_title',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __('Title Type (optional)', 'honeymoon') ,
			'id' => 'column_title_type',
			'default' => 'single',
			'type' => 'select',
			'options' => array(
				'single' => __('Title with divider next to it', 'honeymoon'),
				'double' => __('Title with divider under it ', 'honeymoon'),
				'no-divider' => __('No Divider', 'honeymoon'),
			),
		) ,
		array(
			'name' => __('Element Animation (optional)', 'honeymoon') ,
			'id' => 'column_animation',
			'default' => 'none',
			'type' => 'select',
			'options' => array(
				'none' => __('No animation', 'honeymoon'),
				'from-left' => __('Appear from left', 'honeymoon'),
				'from-right' => __('Appear from right', 'honeymoon'),
				'fade-in' => __('Fade in', 'honeymoon'),
				'zoom-in' => __('Zoom in', 'honeymoon'),
			),
		) ,
	),
);

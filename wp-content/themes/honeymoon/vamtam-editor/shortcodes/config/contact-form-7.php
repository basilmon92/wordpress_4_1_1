<?php
return array(
	'name' => __('Contact Form 7', 'honeymoon') ,
	'desc' => __('Please note that the theme uses the Contact Form 7 plugin for building forms and its option panel is found in the WordPress navigation menu on the left. ' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('pencil1'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'contact-form-7',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Choose By ID', 'honeymoon') ,
			'id' => 'id',
			'default' => '',
			'prompt' => '',
			'options' => WPV_Editor::get_wpcf7_posts('ID'),
			'type' => 'select',
		) ,

		array(
			'name' => __('Choose By Title', 'honeymoon') ,
			'id' => 'title',
			'default' => '',
			'prompt' => '',
			'options' => WPV_Editor::get_wpcf7_posts('post_title'),
			'type' => 'select',
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
	) ,
);

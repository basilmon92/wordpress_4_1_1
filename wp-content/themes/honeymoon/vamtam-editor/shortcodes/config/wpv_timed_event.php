<?php
return array(
	'name' => __('Timed Event', 'honeymoon') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('cog1'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'wpv_timed_event',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Style', 'honeymoon') ,
			'id' => 'style',
			'default' => 'light',
			'type' => 'select',
			'options' => array(
				'light' => __('Light text', 'honeymoon'),
				'dark' => __('Dark text', 'honeymoon'),
			),
			'field_filter' => 'fbs',
		) ,

		array(
			'name' => __('Title', 'honeymoon') ,
			'id' => 'title',
			'default' => 'This is a title',
			'type' => 'text',
		) ,

		array(
			'name' => __('Description', 'honeymoon') ,
			'id' => 'html-content',
			'default' => 'This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.

Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.',
			'type' => 'editor',
			'holder' => 'textarea',
		) ,

		array(
			'name' => __('Start Time', 'honeymoon') ,
			'id' => 'start_time',
			'default' => '',
			'type' => 'text',
		) ,

		array(
			'name' => __('End Time', 'honeymoon') ,
			'id' => 'end_time',
			'default' => '',
			'type' => 'text',
		) ,

		array(
			'name' => __('Date', 'honeymoon') ,
			'id' => 'date',
			'default' => '',
			'type' => 'text',
		) ,

		array(
			'name' => __('Link', 'honeymoon') ,
			'id' => 'button_link',
			'default' => '/',
			'type' => 'text'
		) ,

		array(
			'name' => __('Button Text', 'honeymoon') ,
			'id' => 'button_text',
			'default' => __('Learn more', 'honeymoon'),
			'type' => 'text'
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

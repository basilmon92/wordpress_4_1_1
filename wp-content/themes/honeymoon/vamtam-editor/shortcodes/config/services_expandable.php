<?php

/**
 * Expandable services shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __('Expandable Box ', 'honeymoon') ,
	'desc' => __('You have open and closed states of the box and you can set diffrenet content and background of each state.' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('expand1'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'services_expandable',
	'controls' => 'size name clone edit delete',
	'callbacks' => array(
		'init' => 'init-expandable-services',
		'generated-shortcode' => 'generate-expandable-services',
	),
	'options' => array(
		array(
			'name' => __('Backgrounds', 'honeymoon') ,
			'type' => 'color-row',
			'inputs' => array(
				'background' => array(
					'name' => __('Closed state:', 'honeymoon'),
					'default' => 'accent1',
				),
				'hover_background' => array(
					'name' => __('Expanded state:', 'honeymoon'),
					'default' => 'accent2',
				),
			),
		) ,

		array(
			'name' => __('Closed state image', 'honeymoon') ,
			'id' => 'image',
			'default' => '',
			'type' => 'upload'
		) ,

		array(
			'name' => __(' Closed state icon', 'honeymoon') ,
			'desc' => __('The icon will not be visable if you have an image in the option above.', 'honeymoon'),
			'id' => 'icon',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			"name" => __("Icon Color", 'honeymoon') ,
			"id" => "icon_color",
			"default" => 'accent6',
			"type" => "color",
		) ,
		array(
			'name' => __('Icon Size', 'honeymoon'),
			'id' => 'icon_size',
			'type' => 'range',
			'default' => 62,
			'min' => 8,
			'max' => 100,
		),
		array(
			'name' => __('Closed state text', 'honeymoon') ,
			'id' => 'closed',
			'default' => __('This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'honeymoon'),
			'type' => 'textarea',
			'class' => 'noattr',
		) ,

        array(
			'name' => __('Expanded state', 'honeymoon') ,
			'id' => 'html-content',
			'default' => __('This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'honeymoon').'[split]'.
			             __('This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'honeymoon'),
			'type' => 'editor',
			'holder' => 'textarea',
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

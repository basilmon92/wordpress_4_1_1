<?php
return array(
	'name' => __('Box with a Link', 'honeymoon') ,
	'desc' => __('You can set a link, background color and hover color to a section of the website and place your content there.' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('link5'),
		'size' => '30px',
		'lheight' => '40px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'linkarea',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Background Color', 'honeymoon') ,
			'id' => 'background_color',
			'default' => '',
			'prompt' => __('No background', 'honeymoon'),
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
			'name' => __('Hover Color', 'honeymoon') ,
			'id' => 'hover_color',
			'default' => 'accent1',
			'prompt' => __('No background', 'honeymoon'),
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
			'name' => __('Link', 'honeymoon') ,
			'id' => 'href',
			'default' => '',
			'type' => 'text',
		) ,

		array(
			"name" => __("Target", 'honeymoon') ,
			"id" => "target",
			"default" => '_self',
			"options" => array(
				"_blank" => __('Load in a new window', 'honeymoon') ,
				"_self" => __('Load in the same frame as it was clicked', 'honeymoon') ,
			) ,
			"type" => "select",
		) ,

		array(
			'name' => __('Contents', 'honeymoon') ,
			'id' => 'html-content',
			'default' => __('This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'honeymoon'),
			'type' => 'editor',
			'holder' => 'textarea',
		) ,

		array(
			'name' => __('Icon', 'honeymoon') ,
			'desc' => __('This option overrides the "Image" option.', 'honeymoon'),
			'id' => 'icon',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			"name" => __("Icon Color", 'honeymoon') ,
			"id" => "icon_color",
			"default" => 'accent6',
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
			"type" => "select",
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
			'name' => __('Image', 'honeymoon') ,
			'desc' => __('The image will appear above the content.<br/><br/>', 'honeymoon'),
			'id' => 'image',
			'default' => '',
			'type' => 'upload',
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

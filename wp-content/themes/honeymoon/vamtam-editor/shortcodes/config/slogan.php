<?php

/**
 * Slogan shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __('Call Out Box', 'honeymoon') ,
	'desc' => __('You can place the call out box into а column - color box elemnent in order to have background color.' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('font-size'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'slogan',
	'controls' => 'size name clone edit delete handle',
	'options' => array(
		array(
			'name' => __('Content', 'honeymoon') ,
			'id' => 'html-content',
			'default' => __('<h1>You can place your call out box text here</h1>', 'honeymoon'),
			'type' => 'editor',
			'holder' => 'textarea',
		) ,
		array(
			'name' => __('Button Text', 'honeymoon') ,
			'id' => 'button_text',
			'default' => 'Button Text',
			'type' => 'text'
		) ,
		array(
			'name' => __('Button Link', 'honeymoon') ,
			'id' => 'link',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __('Button Icon', 'honeymoon') ,
			'id' => 'button_icon',
			'default' => 'cart',
			'type' => 'icons',
		) ,
		array(
			'name' => __('Button Icon Style', 'honeymoon'),
			'type' => 'select-row',
			'selects' => array(
				'button_icon_color' => array(
					'desc' => __('Color:', 'honeymoon'),
					"default" => "accent 1",
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
				'button_icon_placement' => array(
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

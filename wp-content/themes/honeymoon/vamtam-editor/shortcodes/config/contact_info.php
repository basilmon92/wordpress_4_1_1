<?php

/**
 * Contact info shortcode options
 *
 * @package wpv
 * @subpackage editor
 */

return array(
	'name' => __('Contact Info', 'honeymoon') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('vcard'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'contact_info',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Name', 'honeymoon'),
			'id' => 'name',
			'default' => 'Nick Perry',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __('Color', 'honeymoon'),
			'id' => 'color',
			'default' => 'accent2',
			'prompt' => __('---', 'honeymoon'),
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
			'type' => 'select',
		),
		array(
			'name' => __('Phone', 'honeymoon'),
			'id' => 'phone',
			'default' => '+23898933i',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __('Cell Phone', 'honeymoon'),
			'id' => 'cellphone',
			'default' => '+23898933i',
			'size' => 30,
			'type' => 'text'
		),
		array(
			'name' => __('Email', 'honeymoon'),
			'id' => 'email',
			'default' => 'office@test.com',
			'type' => 'text'
		),
		array(
			'name' => __('Address', 'honeymoon'),
			'id' => 'address',
			'default' => 'London',
			'size' => 30,
			'type' => 'textarea'
		),


		array(
			'name' => __('Title (optional)', 'honeymoon') ,
			'desc' => __('The column title is placed just above the element.', 'honeymoon'),
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
				'double' => __('Title with divider below', 'honeymoon'),
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

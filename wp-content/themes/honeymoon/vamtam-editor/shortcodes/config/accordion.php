<?php
return array(
	"name" => __("Accordion", 'honeymoon'),
	'desc' => __('Adding panes, changing the name of the pane and adding content into the panes is done when the accordion element is toggled.' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('menu1'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "accordion",
	'controls' => 'size name clone edit delete always-expanded',
	'callbacks' => array(
		'init' => 'init-accordion',
		'generated-shortcode' => 'generate-accordion',
	),
	"options" => array(

		array(
			'name' => __('Allow All Panes to be Closed', 'honeymoon') ,
			'desc' => __('If enabled, the accordion will load with collapsed panes. Clicking on the title of the currently active pane will close it. Clicking on the title of an inactive pane will change the active pane.', 'honeymoon'),
			'id' => 'collapsible',
			'default' => true,
			'type' => 'toggle'
		) ,

		array(
			'name' => __('Pane Background', 'honeymoon') ,
			'id' => 'closed_bg',
			'default' => 'accent1',
			'type' => 'color'
		) ,

		array(
			'name' => __('Title Color', 'honeymoon') ,
			'id' => 'title_color',
			'default' => 'accent8',
			'type' => 'color'
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

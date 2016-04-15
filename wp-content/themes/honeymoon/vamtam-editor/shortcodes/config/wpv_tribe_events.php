<?php
return array(
	"name" => __("Upcoming Events", 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('calendar'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "wpv_tribe_events",
	'controls' => 'size name clone edit delete',
	"options" => array(

		array(
			'name' => __('Layout', 'honeymoon') ,
			'id' => 'layout',
			'default' => 'single',
			'type' => 'select',
			'options' => array(
				'single' => __('Single event per line', 'honeymoon'),
				'multiple' => __('Multiple events per line ', 'honeymoon'),
			),
			'field_filter' => 'fbl',
		) ,

		array(
			'name' => __('Style', 'honeymoon') ,
			'id' => 'style',
			'default' => 'light',
			'type' => 'select',
			'options' => array(
				'light' => __('Light Text', 'honeymoon'),
				'dark' => __('Dark Text', 'honeymoon'),
			),
			'field_filter' => 'fbl',
		) ,

		array(
			'name' => __('Number of Events', 'honeymoon') ,
			'id' => 'count',
			'default' => '',
			'type' => 'range',
			'min' => 1,
			'max' => 30,
		) ,

		array(
			'name' => __('Ongoing Event Text', 'honeymoon') ,
			'id' => 'ongoing',
			'default' => '',
			'type' => 'text',
			'class' => 'fbl fbl-single',
		) ,

		array(
			'name' => __('Categories (optional)', 'honeymoon') ,
			'desc' => __('All categories will be shown if none are selected. Please note that if you do not see categories, there are none created most probably. You can use ctr + click to select multiple categories.', 'honeymoon') ,
			'id' => 'cat',
			'default' => array() ,
			'target' => 'tribe_events_category',
			'type' => 'multiselect',
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

<?php
return array(
	'name' => __('Flickr', 'honeymoon') ,
	'desc' => __('This element is usefull if you have a Flickr account. Use <a href="http://idgettr.com/" target="_blank">idGettr</a> if you don\'t know your ID.<br/><br/>.' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('flickr'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'flickr',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Flickr ID', 'honeymoon'),
			'desc' => __('Use <a href="http://idgettr.com/" target="_blank">idGettr</a> if you don\'t know your ID.<br/><br/>', 'honeymoon'),
			'id' => 'id',
			'default' => '',
			'type' => 'text'
		),
		
		array(
			'name' => __('Type', 'honeymoon'),
			'id' => 'type',
			'default' => 'page',
			'options' => array(
				'user' => __('User', 'honeymoon'),
				'group' => __('Group', 'honeymoon'),
			),
			'type' => 'select',
		),
		
		array(
			'name' => __('Count', 'honeymoon'),
			'desc' => '',
			'id' => 'count',
			'default' => 4,
			'min' => 0,
			'max' => 20,
			'type' => 'range'
		),
		array(
			'name' => __('Display', 'honeymoon'),
			'id' => 'display',
			'default' => 'latest',
			'options' => array(
				'latest' => __('Latest', 'honeymoon'),
				'random' => __('Random', 'honeymoon'),
			),
			'type' => 'select',
		),
		
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
				'double' => __('Title with divider below', 'honeymoon'),
				'no-divider' => __('No Divider', 'honeymoon'),
			),
		) ,
	

	) ,
);

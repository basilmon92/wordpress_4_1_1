<?php
return array(
	'name' => __('Text Divider', 'honeymoon') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('minus'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'text_divider',
	'controls' => 'name clone edit delete',
	'options' => array(
		array(
			'name' => __('Type', 'honeymoon') ,
			'id' => 'type',
			'default' => 'single',
			'options' => array(
				'single' => __('Title in the middle', 'honeymoon') ,
				'double' => __('Title above divider', 'honeymoon') ,
			) ,
			'type' => 'select',
			'class' => 'add-to-container',
			'field_filter' => 'ftds',
		) ,
		array(
			'name' => __('Text', 'honeymoon') ,
			'id' => 'html-content',
			'default' => __('Text Divider', 'honeymoon'),
			'type' => 'editor',
			'class' => 'ftds ftds-single ftds-double',
		) ,
	) ,
);

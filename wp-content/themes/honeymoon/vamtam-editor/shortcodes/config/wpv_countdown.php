<?php
return array(
	'name' => __('Countdown', 'honeymoon') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('clock'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'wpv_countdown',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Date and Time', 'honeymoon') ,
			'desc' => __('Any <a href="http://www.php.net/manual/en/datetime.formats.compound.php">compount time format</a> accepted by PHP. "Common Log Format" is recommended if your server is in different time zone from you.', 'honeymoon'),
			'id' => 'datetime',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('"Finished" text', 'honeymoon') ,
			'id' => 'done',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Description text', 'honeymoon') ,
			'id' => 'html-content',
			'default' => '',
			'type' => 'editor',
		) ,
		array(
			'name' => __('Title (optional)', 'honeymoon') ,
			'desc' => __('The title is placed just above the element.<br/><br/>', 'honeymoon'),
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
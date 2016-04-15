<?php
return array(
	'name' => __('Drop Cap', 'honeymoon') ,
	'value' => 'dropcap',
	'options' => array(
		array(
			'name' => __('Type', 'honeymoon') ,
			'id' => 'type',
			'default' => '1',
			'type' => 'select',
			'options' => array(
				'1' => __('Type 1', 'honeymoon'),
				'2' => __('Type 2', 'honeymoon'),
			),
		) ,
		array(
			'name' => __('Text', 'honeymoon') ,
			'id' => 'text',
			'default' => '',
			'type' => 'text',
		) ,
	) ,
);

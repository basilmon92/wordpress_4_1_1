<?php
return array(
	'name' => __( 'Help', 'honeymoon' ),
	'auto' => true,
	'config' => array(

		array(
			'name' => __( 'Help', 'honeymoon' ),
			'type' => 'title',
			'desc' => '',
		),

		array(
			'name' => __( 'Help', 'honeymoon' ),
			'type' => 'start',
			'nosave' => true,
		),
//----
		array(
			'type' => 'docs',
		),

			array(
				'type' => 'end',
			),
	),
);
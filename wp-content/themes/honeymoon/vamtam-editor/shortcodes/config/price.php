<?php
return array(
	'name' => __('Price Box', 'honeymoon') ,
	'icon' => array(
		'char' => WPV_Editor::get_icon('basket1'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'price',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Title', 'honeymoon') ,
			'id' => 'title',
			'default' => __('Title', 'honeymoon'),
			'type' => 'text',
			'holder' => 'h5',
		) ,
		array(
			'name' => __('Price', 'honeymoon') ,
			'id' => 'price',
			'default' => '69',
			'type' => 'text',
		) ,
		array(
			'name' => __('Currency', 'honeymoon') ,
			'id' => 'currency',
			'default' => '$',
			'type' => 'text',
		) ,
		array(
			'name' => __('Duration', 'honeymoon') ,
			'id' => 'duration',
			'default' => 'per month',
			'type' => 'text',
		) ,
		array(
			'name' => __('Summary', 'honeymoon') ,
			'id' => 'summary',
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Description', 'honeymoon') ,
			'id' => 'html-content',
			'default' => '<ul>
	<li>list item</li>
	<li>list item</li>
	<li>list item</li>
	<li>list item</li>
	<li>list item</li>
	<li>list item</li>
</ul>',
			'type' => 'editor',
			'holder' => 'textarea',
		) ,
		array(
			'name' => __('Button Text', 'honeymoon') ,
			'id' => 'button_text',
			'default' => 'Buy',
			'type' => 'text'
		) ,
		array(
			'name' => __('Button Link', 'honeymoon') ,
			'id' => 'button_link',
			'default' => '',
			'type' => 'text'
		) ,
		array(
			'name' => __('Featured', 'honeymoon') ,
			'id' => 'featured',
			'default' => 'false',
			'type' => 'toggle'
		) ,


		array(
			'name' => __('Title', 'honeymoon') ,
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

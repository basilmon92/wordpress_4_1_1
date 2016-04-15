<?php

return array(
	"name" => __("Icon", 'honeymoon') ,
	"value" => "icon",
	"options" => array(
		array(
			'name' => __('Name', 'honeymoon') ,
			'id' => 'name',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			"name" => __("Color (optional)", 'honeymoon') ,
			"id" => "color",
			"default" => "",
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
			"type" => "select",
		) ,
		array(
			'name' => __('Size', 'honeymoon'),
			'id' => 'size',
			'type' => 'range',
			'default' => 16,
			'min' => 8,
			'max' => 100,
		),
		array(
			"name" => __("Style", 'honeymoon') ,
			"id" => "style",
			"default" => '',
			"prompt" => __('Default', 'honeymoon'),
			"options" => array(
				'inverted-colors' => __('Invert colors', 'honeymoon'),
				'box' => __('Box', 'honeymoon'),
			) ,
			"type" => "select",
		) ,
	)
);
<?php

return array(
	"name" => __("Styled List", 'honeymoon') ,
	"value" => "list",
	"options" => array(
		array(
			'name' => __('Style', 'honeymoon') ,
			'id' => 'style',
			'default' => '',
			'type' => 'icons',
		) ,
		array(
			"name" => __("Color", 'honeymoon') ,
			"id" => "color",
			"default" => "",
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
			"name" => __("Content", 'honeymoon') ,
			"desc" => __("Please insert a valid HTML unordered list", 'honeymoon') ,
			"id" => "content",
			"default" => "<ul>
				<li>list item</li>
				<li>another item</li>
			</ul>",
			"type" => "textarea"
		) ,
	)
);
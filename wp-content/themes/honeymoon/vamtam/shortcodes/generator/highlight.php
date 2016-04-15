<?php

return array(
	"name" => __("Highlight", 'honeymoon') ,
	"value" => "highlight",
	"options" => array(
		array(
			"name" => __("Type", 'honeymoon') ,
			"id" => "type",
			"default" => '',
			"options" => array(
				"light" => __("light", 'honeymoon') ,
				"dark" => __("dark", 'honeymoon') ,
			) ,
			"type" => "select",
		) ,
		array(
			"name" => __("Content", 'honeymoon') ,
			"id" => "content",
			"default" => "",
			"type" => "textarea"
		) ,
	)
);
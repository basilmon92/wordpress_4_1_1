<?php
/**
 * Vamtam Post Options
 *
 * @package wpv
 * @subpackage honeymoon
 */

return array(

array(
	'name' => __('General', 'honeymoon'),
	'type' => 'separator',
),

array(
	"name" => __("Cite", 'honeymoon') ,
	"id" => "testimonial-author",
	"default" => "",
	"type" => "text",
) ,

array(
	"name" => __("Link", 'honeymoon') ,
	"id" => "testimonial-link",
	"default" => "",
	"type" => "text",
) ,

);

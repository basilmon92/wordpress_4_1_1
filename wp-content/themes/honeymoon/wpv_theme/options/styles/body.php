<?php
/**
 * Theme options / Styles / Body
 *
 * @package wpv
 * @subpackage honeymoon
 */

return array(

array(
	'name' => __('Body', 'honeymoon'),
	'type' => 'start',
),

array(
	'name' => __('Where are these options used?', 'honeymoon'),
	'desc' => __('The page body is the area between the header and the footer. The page title, the body top widget areas and the sidebars are located here. You can change the style of these areas using the options below.', 'honeymoon'),
	'type' => 'info',
),

array(
	'name' => __('Backgrounds', 'honeymoon'),
	'type' => 'separator',
),

array(
	'name' => __('Body Background', 'honeymoon'),
	'desc' => __('If you want to use an image as a background, enabling the cover button will resize and crop the image so that it will always fit the browser window on any resolution. If the color opacity  is less than 1 the page background underneath will be visible.', 'honeymoon'),
	'id' => 'main-background',
	'type' => 'background',
	'only' => 'color,image,repeat,size,attachment'
),

array(
	'name' => __('Typography', 'honeymoon'),
	'type' => 'separator',
),

array(
	'name' => __('Body Font', 'honeymoon'),
	'desc' => __('This is the general font used in the body and the sidebars. Please note that the styles of the heading fonts are located in the general typography tab.', 'honeymoon'),
	'id' => 'primary-font',
	'type' => 'font',
	'min' => 1,
	'max' => 20,
	'lmin' => 1,
	'lmax' => 40,
),

array(
	'name' => __('Links', 'honeymoon'),
	'type' => 'color-row',
	'inputs' => array(
		'css_link_color' => array(
			'name' => __('Normal:', 'honeymoon'),
		),
		'css_link_visited_color' => array(
			'name' => __('Visited:', 'honeymoon'),
		),
		'css_link_hover_color' => array(
			'name' => __('Hover:', 'honeymoon'),
		),
	),
),

array(
	'name' => __('Single Event Featured Areas', 'honeymoon'),
	'type' => 'separator',
),

array(
	'name' => __('Footer Content', 'honeymoon'),
	'id' => 'events-after-sidebars-2-content',
	'type' => 'textarea',
),

array(
	'name' => __('Footer Background', 'honeymoon'),
	'id' => 'events-after-sidebars-2-background',
	'type' => 'background',
),

array(
	'name' => __('After Details Content', 'honeymoon'),
	'id' => 'events-after-details-content',
	'type' => 'textarea',
),

	array(
		'type' => 'end'
	),

);
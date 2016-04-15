<?php
/**
 * Vamtam Portfolio Format Selector
 *
 * @package wpv
 * @subpackage honeymoon
 */

return array(

array(
	'name' => __('Portfolio Format', 'honeymoon'),
	'type' => 'separator'
),

array(
	'name' => __('Portfolio Data Type', 'honeymoon'),
	'desc' => __('Image - uses the featured image (default)<br />
				  Gallery - use the featured image as a title image but show additional images too<br />
				  Video/Link - uses the "portfolio data url" setting<br />
				  Document - acts like a normal post<br />
				  HTML - overrides the image with arbitrary HTML when displaying a single portfolio page. Does not work with the ajax portfolio.
				', 'honeymoon'),
	'id' => 'portfolio_type',
	'type' => 'radio',
	'options' => array(
		'image' => __('Image', 'honeymoon'),
		'gallery' => __('Gallery', 'honeymoon'),
		'video' => __('Video', 'honeymoon'),
		'link' => __('Link', 'honeymoon'),
		'document' => __('Document', 'honeymoon'),
		'html' => __('HTML', 'honeymoon'),
	),
	'default' => 'image',
),

);

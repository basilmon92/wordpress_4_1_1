<?php

/**
 * Theme options / General / Posts
 *
 * @package wpv
 * @subpackage honeymoon
 */

return array(

array(
	'name' => __('Posts and Content', 'honeymoon'),
	'type' => 'start',
),

array(
	'name' => __('Blog and Portfolio Listing Pages and Archives', 'honeymoon'),
	'type' => 'separator',
),

array(
	'name' => __('Pagination Type', 'honeymoon'),
	'desc' => __('Please note that you will need WP-PageNavi plugin installed if you chose "paged" style.', 'honeymoon'),
	'id' => 'pagination-type',
	'type' => 'select',
	'options' => array(
		'paged' => __('Paged', 'honeymoon'),
		'load-more' => __('Load more button', 'honeymoon'),
		'infinite-scrolling' => __('Infinite scrolling', 'honeymoon'),
	),
	'class' => 'slim',
),


array(
	'name' => __('Blog Posts', 'honeymoon'),
	'type' => 'separator',
),

array(
	'name' => __('"View All Posts" Link', 'honeymoon'),
	'desc' => __('In a single blog post view in the top you will find navigation with 3 buttons. The middle gets you to the blog listing view.<br>
You can place the link here.', 'honeymoon'),
	'id' => 'post-all-items',
	'type' => 'text',
	'static' => true,
	'class' => 'slim',
),

array(
	'name' => __('Show "Related Posts" in Single Post View', 'honeymoon'),
	'desc' => __('Enabling this option will show more posts from the same category when viewing a single post.', 'honeymoon'),
	'id' => 'show-related-posts',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __('"Related Posts" title', 'honeymoon'),
	'id' => 'related-posts-title',
	'type' => 'text',
	'class' => 'slim',
),

array(
	'name' => __('Show Post Author', 'honeymoon'),
	'desc' => __('Blog post meta info, works for the single blog post view.', 'honeymoon'),
	'id' => 'show-post-author',
	'type' => 'toggle',
	'class' => 'slim'
),
array(
	'name' => __('Show Categories and Tags', 'honeymoon'),
	'desc' => __('Blog post meta info, works for the single blog post view.', 'honeymoon'),
	'id' => 'meta_posted_in',
	'type' => 'toggle',
	'class' => 'slim',
),
array(
	'name' => __('Show Post Timestamp', 'honeymoon'),
	'desc' => __('Blog post meta info, works for the single blog post view.', 'honeymoon'),
	'id' => 'meta_posted_on',
	'type' => 'toggle',
	'class' => 'slim',
),
array(
	'name' => __('Show Comment Count', 'honeymoon'),
	'desc' => __('Blog post meta info, works for the single blog post view.', 'honeymoon'),
	'id' => 'meta_comment_count',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __('Portfolio Posts', 'honeymoon'),
	'type' => 'separator',
),

array(
	'name' => __('"View All Portfolios" Link', 'honeymoon'),
	'desc' => __('In a single portfolio post view in the top you will find navigation with 3 buttons. The middle gets you to the portfolio listing view.<br>
You can place the link here.', 'honeymoon'),
	'id' => 'portfolio-all-items',
	'type' => 'text',
	'static' => true,
	'class' => 'slim',
),
array(
	'name' => __('Show "Related Portfolios" in Single Portfolio View', 'honeymoon'),
	'desc' => __('Enabling this option will show more portfolio posts from the same category in the single portfolio post.', 'honeymoon'),
	'id' => 'show-related-portfolios',
	'type' => 'toggle',
	'class' => 'slim',
),

array(
	'name' => __('"Related Portfolios" title', 'honeymoon'),
	'id' => 'related-portfolios-title',
	'type' => 'text',
	'class' => 'slim',
),

array(
	'name' => __('URL Prefix for Single Portfolios', 'honeymoon'),
	'desc' => __('Use an unique string without spaces. It must not be the same as any other URL slugs (used on pages, etc.).', 'honeymoon'),
	'id' => 'portfolio-slug',
	'type' => 'text',
	'class' => 'slim',
),

array(
	'name' => __('The Events Calendar', 'honeymoon'),
	'type' => 'separator',
),

array(
	'name' => __('"Join" Button', 'honeymoon'),
	'id' => 'tribe-events-join-text',
	'type' => 'text',
	'class' => 'slim',
),

	array(
		'type' => 'end'
	),
);
<?php
return array(
	"name" => "Sitemap",
	'icon' => array(
		'char' => WPV_Editor::get_icon('list'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	"value" => "sitemap",
	'controls' => 'size name clone edit delete',
	'class' => 'slim',
	"options" => array(
		array(
			'name' => __('General', 'honeymoon'),
			'type' => 'separator',
		),
			array(
				"name" => __("Filter", 'honeymoon') ,
				"id" => "shows",
				"default" => array(),
				"options" => array(
					"pages" => __("Pages", 'honeymoon') ,
					"categories" => __("Categories", 'honeymoon') ,
					"posts" => __("Posts", 'honeymoon') ,
					"portfolios" => __("Portfolios", 'honeymoon') ,
				) ,
				"type" => "multiselect",
			) ,

			array(
				"name" => __("Limit", 'honeymoon') ,
				"desc" => __("Sets the number of items to display.<br>leaving this setting as 0 displays all items.", 'honeymoon') ,
				"id" => "number",
				"default" => 0,
				"min" => 0,
				"max" => 200,
				"type" => "range"
			) ,

			array(
				"name" => __("Depth", 'honeymoon') ,
				"desc" => __("This parameter controls how many levels in the hierarchy are to be included. <br> 0: Displays pages at any depth and arranges them hierarchically in nested lists<br> -1: Displays pages at any depth and arranges them in a single, flat list<br> 1: Displays top-level Pages only<br> 2, 3 … Displays Pages to the given depth", 'honeymoon') ,
				"id" => "depth",
				"default" => 0,
				"min" => - 1,
				"max" => 5,
				"type" => "range"
			) ,

		array(
			'name' => __('Posts and portfolios', 'honeymoon'),
			'type' => 'separator',
		),
			array(
				"name" => __("Show comments", 'honeymoon') ,
				"id" => "show_comment",
				"desc" => '',
				"default" => true,
				"type" => "toggle"
			) ,
			array(
				"name" => __("Specific post categories", 'honeymoon') ,
				"id" => "post_categories",
				"default" => array() ,
				"target" => 'cat',
				"type" => "multiselect",
			) ,
			array(
				"name" => __("Specific posts", 'honeymoon') ,
				"desc" => __("The specific posts you want to display", 'honeymoon') ,
				"id" => "posts",
				"default" => array() ,
				"target" => 'post',
				"type" => "multiselect",
			) ,
			array(
				"name" => __("Specific portfolio categories", 'honeymoon') ,
				"id" => "portfolio_categories",
				"default" => array() ,
				"target" => 'portfolio_category',
				"type" => "multiselect",
			) ,
		
		array(
			'name' => __('Categories', 'honeymoon'),
			'type' => 'separator',
		),
			array(
				"name" => __("Show Count", 'honeymoon') ,
				"id" => "show_count",
				"desc" => __("Toggles the display of the current count of posts in each category.", 'honeymoon') ,
				"default" => true,
				"type" => "toggle"
			) ,
			array(
				"name" => __("Show Feed", 'honeymoon') ,
				"id" => "show_feed",
				"desc" => __("Display a link to each category's <a href='http://codex.wordpress.org/Glossary#RSS' target='_blank'>rss-2</a> feed.", 'honeymoon') ,
				"default" => true,
				"type" => "toggle"
			) ,
			array(
			'name' => __('Title', 'honeymoon') ,
			'desc' => __('The column title is placed just above the element.', 'honeymoon'),
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
	) ,
);

<?php
/**
 * Portfolio shortcode options
 *
 * @package wpv
 * @subpackage editor
 */


return array(
	'name' => __('Portfolio', 'honeymoon') ,
	'desc' => __('Please note that this element shows already created portfolio posts. To create one go to the Portfolios tab in the WordPress main navigation menu on the left - Add New. ' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('grid2'),
		'size' => '30px',
		'lheight' => '45px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'portfolio',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Layout', 'honeymoon') ,
			'id' => 'layout',
			'desc' => __('Static - no filtering.<br/>
				Filtering - Enable filtering for the portfolio items depending on their category.<br/>
				Srollable - shows the portfolio items in a slider', 'honeymoon') ,
			'default' => '',
			'type' => 'select',
			'options' => array(
				'static' => __('Static', 'honeymoon'),
				'fit-rows' => __('Filtering - Fit Rows', 'honeymoon'),
				'masonry' => __('Filtering - Masonry', 'honeymoon'),
				'scrollable' => __('Scrollable', 'honeymoon'),
			),
			'field_filter' => 'fbs',
		) ,
		array(
			'name' => __('No Paging', 'honeymoon') ,
			'id' => 'nopaging',
			'desc' => __('If the option is on, it will disable pagination. You can set the type of pagination in General Settings - Posts - Pagination Type. ', 'honeymoon') ,
			'default' => false,
			'type' => 'toggle',
			'class' => 'fbs fbs-static fbs-fit-rows fbs-masonry',
		) ,
		array(
			'name' => __('Columns', 'honeymoon') ,
			'id' => 'column',
			'default' => 4,
			'type' => 'range',
			'min' => 1,
			'max' => 4,
		) ,
		array(
			'name' => __('Limit', 'honeymoon') ,
			'desc' => __('Number of item to show per page. If you set it to -1, it will display all portfolio items.', 'honeymoon') ,
			'id' => 'max',
			'default' => '4',
			'min' => -1,
			'max' => 100,
			'step' => '1',
			'type' => 'range'
		) ,

		array(
			'name' => __('Display Title', 'honeymoon') ,
			'id' => 'title',
			'desc' => __('If the option is on, it will display the title of the portfolio post.<br/><br/>', 'honeymoon') ,
			'default' => 'false',
			'type' => 'select',
			'options' => array(
				'false' => __('No Title', 'honeymoon'),
				'below' => __('Below Media', 'honeymoon'),
			),
		) ,
		array(
			'name' => __('Display Description', 'honeymoon') ,
			'id' => 'desc',
			'desc' => __('If the option is on, it will display short description of the portfolio item.', 'honeymoon') ,
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __('Button Text', 'honeymoon') ,
			'id' => 'more',
			'default' => __('Read more', 'honeymoon') ,
			'type' => 'text',
		) ,
		array(
			'name' => __('Group', 'honeymoon') ,
			'id' => 'group',
			'desc' => __('If the option is on, the lightbox will display left and right arrows and  you can see all the portfolio posts from the same category.', 'honeymoon') ,
			'default' => true,
			'type' => 'toggle',
			'class' => 'fbs fbs-static fbs-fit-rows fbs-masonry',
		) ,
		array(
			'name' => __('Categories (optional)', 'honeymoon') ,
			'desc' => __('All categories will be shown if none are selected. Please note that if you do not see categories, there are none created most probably. You can use ctr + click to select multiple categories.', 'honeymoon') ,
			'id' => 'cat',
			'default' => array() ,
			'target' => 'portfolio_category',
			'type' => 'multiselect',
		) ,
		array(
			'name' => __('Portfolio Posts (optional)', 'honeymoon') ,
			'desc' => __('All portfolio posts will be shown if none are selected. If you select any posts here, this option will override the category option above. You can use ctr + click to select multiple posts.', 'honeymoon') ,
			'id' => 'ids',
			'default' => array() ,
			'target' => 'portfolio',
			'type' => 'multiselect',
		) ,

		array(
			'name' => __('Title (optional)', 'honeymoon') ,
			'desc' => __('The title is placed just above the element.<br/><br/>', 'honeymoon'),
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
				'single' => __('Title with divider next to it ', 'honeymoon'),
				'double' => __('Title with divider below', 'honeymoon'),
				'no-divider' => __('No Divider', 'honeymoon'),
			),
		) ,
	) ,
);

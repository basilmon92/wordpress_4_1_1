<?php

/**
 * Theme options / Layout / Body
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
	'name' => __('Body Layout', 'honeymoon'),
	'desc' => __('You can enable or disable  the body top widget areas and the body sidebar areas.<br>
Below you can set the width of the sidebars in the body .<br>
This will be the default layout for all pages<br>
Note: You can override some of the options on a page by page basis: enable/disable body sidebars and body top widget areas.', 'honeymoon'),
	'type' => 'info',
),

array(
	'name' => __('Enable Breadcrumbs', 'honeymoon'),
	'desc' => __('Breadcrumbs is yet another navigation menu  just above the page title.', 'honeymoon'),
	'id' => 'enable-breadcrumbs',
	'type' => 'toggle',
	'class' => 'hidden',

),

array(
	'name' => __('Enable Body Top Widget Areas', 'honeymoon'),
	'desc' => __('This option only enables the widget areas. You can choose the layout using the two options bellow. In appearance - widgets, you can populate the area with widgets. You can override this option on a page-by-page basis.', 'honeymoon'),
	'id' => 'has-header-sidebars',
	'type' => 'toggle',
),

array(
	'name' => __('Body Top Widget Area Pre-defined Layouts', 'honeymoon'),
	'desc' => __('The widget areas below are placed just below the page title. You can either choose one of the predefined layouts or configure your own in the "Advanced" section bellow.', 'honeymoon'),
	'type' => 'autofill',
	'class' => 'no-box',
	'option_sets' => array(
		array(
			'name' => __('1/3 | 1/3 | 1/3', 'honeymoon'),
			'image' => WPV_ADMIN_ASSETS_URI . 'images/header-sidebars-3.png',
			'values' => array(
				'header-sidebars' => 3,
				'header-sidebars-1-width' => 'cell-1-3',
				'header-sidebars-1-last' => 0,
				'header-sidebars-2-width' => 'cell-1-3',
				'header-sidebars-2-last' => 0,
				'header-sidebars-3-width' => 'cell-1-3',
				'header-sidebars-3-last' => 1,
				'header-sidebars-4-width' => 'full',
				'header-sidebars-4-last' => 0,
				'header-sidebars-5-width' => 'full',
				'header-sidebars-5-last' => 0,
				'header-sidebars-6-width' => 'full',
				'header-sidebars-6-last' => 0,
			),
		),
		array(
			'name' => __('1/4 | 1/4 | 1/4 | 1/4', 'honeymoon'),
			'image' => WPV_ADMIN_ASSETS_URI . 'images/header-sidebars-4.png',
			'values' => array(
				'header-sidebars' => 4,
				'header-sidebars-1-width' => 'cell-1-4',
				'header-sidebars-1-last' => 0,
				'header-sidebars-2-width' => 'cell-1-4',
				'header-sidebars-2-last' => 0,
				'header-sidebars-3-width' => 'cell-1-4',
				'header-sidebars-3-last' => 0,
				'header-sidebars-4-width' => 'cell-1-4',
				'header-sidebars-4-last' => 1,
				'header-sidebars-5-width' => 'full',
				'header-sidebars-5-last' => 0,
				'header-sidebars-6-width' => 'full',
				'header-sidebars-6-last' => 0,
			),
		),

		array(
			'name' => __('1/5 | 1/5 | 1/5 | 1/5 | 1/5', 'honeymoon'),
			'image' => WPV_ADMIN_ASSETS_URI . 'images/header-sidebars-5.png',
			'values' => array(
				'header-sidebars' => 5,
				'header-sidebars-1-width' => 'cell-1-5',
				'header-sidebars-1-last' => 0,
				'header-sidebars-2-width' => 'cell-1-5',
				'header-sidebars-2-last' => 0,
				'header-sidebars-3-width' => 'cell-1-5',
				'header-sidebars-3-last' => 0,
				'header-sidebars-4-width' => 'cell-1-5',
				'header-sidebars-4-last' => 0,
				'header-sidebars-5-width' => 'cell-1-5',
				'header-sidebars-5-last' => 1,
				'header-sidebars-6-width' => 'full',
				'header-sidebars-6-last' => 0,
			),
		),
	),
),

array(
	'name' => __('Body Top Widget Areas Advanced Layout Builder', 'honeymoon'),
	'desc' => __("Please choose the number of widget areas and adjust each widget area's settings. You can adjust the width of each widget area from the drop - down menu and place them in one to six rows by using 'last' option. 'Empty' is used if you do not intend to place a widget into certain widget area. If there is no widget in an widget area and this option is not ticked the layout may be broken.", 'honeymoon'),
	'id_prefix' => 'header-sidebars',
	'type' => 'horizontal_blocks',
	'min' => 0,
	'max' => 6,
),

array(
	'name' => __('Default Sidebar Layout', 'honeymoon'),
	'desc' => __('The sidebars are placed just below the header and the slider.  You can choose one of the predefined layouts.<br>
You can override this option on a page-by-page basis.', 'honeymoon'),
	'id' => 'default-body-layout',
	'type' => 'body-layout',
),

array(
	'name' => __('Sidebar Width', 'honeymoon'),
	'desc' => sprintf(__('The width is percent of the website width. If you have changed this option, please use the <a href="%s" title="Regenerate thumbnails" target="_blank">Regenerate thumbnails</a> plugin in order to update your images.', 'honeymoon'), 'http://wordpress.org/extend/plugins/regenerate-thumbnails/'),
	'type' => 'select-row',
	'selects' => array(
		'left-sidebar-width' => array(
			'desc' => __('Left:', 'honeymoon'),
			'options' => array(
				'33.333333' => '1/3',
				'20' => '1/5',
				'25' => '1/4',
			),
			'default' => '25',
		),
		'right-sidebar-width' => array(
			'desc' => __('Right:', 'honeymoon'),
			'options' => array(
				'33.333333' => '1/3',
				'20' => '1/5',
				'25' => '1/4',
			),
			'default' => '25',
		),
	),
),

	array(
		'type' => 'end'
	),
);
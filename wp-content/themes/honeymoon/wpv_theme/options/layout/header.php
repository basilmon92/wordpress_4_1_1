<?php

/**
 * Theme options / Layout / Header
 *
 * @package wpv
 * @subpackage honeymoon
 */

return array(
array(
	'name' => __('Header', 'honeymoon'),
	'type' => 'start',
),

array(
	'name' => __('Header Layout', 'honeymoon'),
	'desc' => __('Please note that the theme uses Revolution Slider and its option panel is found in the WordPress navigation menu on the left', 'honeymoon'),
	'type' => 'info',
),


array(
	'name' => __('Header Layout', 'honeymoon'),
	'type' => 'autofill',
	'class' => 'no-box ' . ( wpv_get_option( 'header-logo-type' ) === 'names' ? 'hidden' : ''),
	'option_sets' => array(
		array(
			'name' => __('One row, left logo, menu on the right', 'honeymoon'),
			'image' => WPV_ADMIN_ASSETS_URI . 'images/header-layout-1.png',
			'values' => array(
				'header-layout' => 'logo-menu',
			),
		),
		array(
			'name' => __('Two rows; left-aligned logo on top, right-aligned text and search', 'honeymoon'),
			'image' => WPV_ADMIN_ASSETS_URI . 'images/header-layout-2.png',
			'values' => array(
				'header-layout' => 'logo-text-menu',
			),
		),
		array(
			'name' => __('Two rows; centered logo on top', 'honeymoon'),
			'image' => WPV_ADMIN_ASSETS_URI . 'images/header-layout-3.png',
			'values' => array(
				'header-layout' => 'standard',
			),
		),
	),
),


array(
	'name' => __('Header Height', 'honeymoon'),
	'desc' => __('This is the area above the slider.', 'honeymoon'),
	'id' => 'header-height',
	'type' => 'range',
	'min' => 30,
	'max' => 300,
	'unit' => 'px',
),
array(
	'name' => __('Sticky Header', 'honeymoon'),
	'desc' => __('This option is switched off automatically for mobile devices because the animation is not well sported by the majority of the mobile devices.', 'honeymoon'),
	'id' => 'sticky-header',
	'type' => 'toggle',
),


array(
	'name' => __('Enable Header Search', 'honeymoon'),
	'id' => 'enable-header-search',
	'type' => 'toggle',
),

array(
	'name' => __('Full Width Header', 'honeymoon'),
	'id' => 'full-width-header',
	'type' => 'toggle',
	'class' => 'fhl fhl-logo-menu',
),

array(
	'name' => __('Top Bar Layout', 'honeymoon'),
	'id' => 'top-bar-layout',
	'type' => 'select',
	'options' => array(
		'' => __('Disabled', 'honeymoon'),
		'menu-social' => __('Left: Menu, Right: Social Icons', 'honeymoon'),
		'social-menu' => __('Left: Social Icons, Right: Menu', 'honeymoon'),
		'text-menu' => __('Left: Text, Right: Menu', 'honeymoon'),
		'menu-text' => __('Left: Menu, Right: Text', 'honeymoon'),
		'social-text' => __('Left: Social Icons, Right: Text', 'honeymoon'),
		'text-social' => __('Left: Text, Right: Social Icons', 'honeymoon'),
	),
	'field_filter' => 'ftbl',
),

array(
	'name' => __('Top Bar Text', 'honeymoon'),
	'desc' => __('You can place plain text, HTML and shortcodes.', 'honeymoon'),
	'id' => 'top-bar-text',
	'type' => 'textarea',
	'class' => 'ftbl ftbl-menu-text ftbl-text-menu ftbl-social-text ftbl-text-social',
),

array(
	'name' => __('Top Bar Social Text Lead', 'honeymoon'),
	'id' => 'top-bar-social-lead',
	'type' => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Facebook Link', 'honeymoon'),
	'id'    => 'top-bar-social-fb',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Twitter Link', 'honeymoon'),
	'id'    => 'top-bar-social-twitter',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar LinkedIn Link', 'honeymoon'),
	'id'    => 'top-bar-social-linkedin',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Google+ Link', 'honeymoon'),
	'id'    => 'top-bar-social-gplus',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Flickr Link', 'honeymoon'),
	'id'    => 'top-bar-social-flickr',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Pinterest Link', 'honeymoon'),
	'id'    => 'top-bar-social-pinterest',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Dribbble Link', 'honeymoon'),
	'id'    => 'top-bar-social-dribbble',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Instagram Link', 'honeymoon'),
	'id'    => 'top-bar-social-instagram',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar YouTube Link', 'honeymoon'),
	'id'    => 'top-bar-social-youtube',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name'  => __('Top Bar Vimeo Link', 'honeymoon'),
	'id'    => 'top-bar-social-vimeo',
	'type'  => 'text',
	'class' => 'ftbl ftbl-menu-social ftbl-social-menu ftbl-social-text ftbl-text-social slim',
),

array(
	'name' => __('Header Layout', 'honeymoon'), // dummy option, do not remove
	'id' => 'header-layout',
	'type' => 'select',
	'class' => 'hidden',
	'options' => array(
		'standard' => __('Two rows; centered logo on top', 'honeymoon'),
		'logo-menu' => __('One row, left logo, menu on the right', 'honeymoon'),
		'logo-text-menu' => __('Two rows; left-aligned logo on top, right-aligned text and search', 'honeymoon'),
	),
	'field_filter' => 'fhl',
),

array(
	'name' => __('Header Text Area', 'honeymoon'),
	'desc' => __('You can place text/HTML or any shortcode in this field. The text will appear in the header on the left hand side.', 'honeymoon'),
	'id' => 'phone-num-top',
	'type' => 'textarea',
	'static' => true,
),


array(
	'name' => __('Mobile Header', 'honeymoon'),
	'type' => 'separator',
),

array(
	'name'   => __('Enable Below', 'honeymoon'),
	'id'     => 'mobile-top-bar-resolution',
	'type'   => 'range',
	'min'    => 320,
	'max'    => 1920,
	'static' => true,
),

array(
	'name'   => __('Enable Search in Logo Bar', 'honeymoon'),
	'id'     => 'mobile-search-in-header',
	'type'   => 'toggle',
	'class'  => in_array( wpv_get_option( 'header-logo-type' ), array( 'image', 'site-title') ) ? '' : 'hidden',
	'static' => true,
),

array(
	'name'   => __('Mobile Top Bar', 'honeymoon'),
	'id'     => 'mobile-top-bar',
	'type'   => 'textarea',
	'class'  => in_array( wpv_get_option( 'header-logo-type' ), array( 'image', 'site-title') ) ? '' : 'hidden',
	'static' => true,
),

	array(
		'type' => 'end'
	),

);
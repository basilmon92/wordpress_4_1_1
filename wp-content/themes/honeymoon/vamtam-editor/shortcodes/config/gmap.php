<?php
return array(
	'name' => __('Google Maps', 'honeymoon') ,
	'desc' => __('In order to enable Google Map you need:<br>
                 Insert the Google Map element into the editor, open its option panel by clicking on the icon- edit on the right of the element and fill in all fields necessary.
' , 'honeymoon'),
		'icon' => array(
		'char' => WPV_Editor::get_icon('location1'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'gmap',
	'controls' => 'size name clone edit delete',
	'options' => array(
		array(
			'name' => __('Address (optional)', 'honeymoon') ,
			'desc' => __('Unless you\'ve filled in the Latitude and Longitude options, please enter the address that you want to be shown on the map. If you encounter any errors about the maximum number of address translation requests per page, you should either use the latitude/longitude options or upgrade to the paid Google Maps API.', 'honeymoon'),
			'id' => 'address',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Latitude', 'honeymoon') ,
			'desc' => __('This option is not necessary if an address is set.<br/><br/>', 'honeymoon'),
			'id' => 'latitude',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Longitude', 'honeymoon') ,
			'desc' => __('This option is not necessary if an address is set.<br/><br/>', 'honeymoon'),
			'id' => 'longitude',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Zoom', 'honeymoon') ,
			'desc' => __('Default map zoom level.<br/><br/>', 'honeymoon'),
			'id' => 'zoom',
			'default' => '14',
			'min' => 1,
			'max' => 19,
			'step' => '1',
			'type' => 'range'
		) ,
		array(
			'name' => __('Marker', 'honeymoon') ,
			'desc' => __('Enable an arrow pointing at the address.<br/><br/>', 'honeymoon'),
			'id' => 'marker',
			'default' => true,
			'type' => 'toggle'
		) ,
		array(
			'name' => __('HTML', 'honeymoon') ,
			'desc' => __('HTML code to be shown in a popup above the marker.<br/><br/>', 'honeymoon'),
			'id' => 'html',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Popup Marker', 'honeymoon') ,
			'desc' => __('Enable to open the popup above the marker by default.<br/><br/>', 'honeymoon'),
			'id' => 'popup',
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __('Controls (optional)', 'honeymoon') ,
			'desc' => sprintf(__('This option is intended to be used only by advanced users and is not necessary for most use cases. Please refer to the <a href="%s" title="Google Maps API documentation">API documentation</a> for details.', 'honeymoon'), 'https://developers.google.com/maps/documentation/javascript/controls'),
			'id' => 'controls',
			'size' => 30,
			'default' => '',
			'type' => 'text',
		) ,
		array(
			'name' => __('Scrollwheel', 'honeymoon') ,
			'id' => 'scrollwheel',
			'default' => false,
			'type' => 'toggle'
		) ,
		array(
			'name' => __('Maptype (optional)', 'honeymoon') ,
			'id' => 'maptype',
			'default' => 'ROADMAP',
			'options' => array(
				'ROADMAP' => __('Default road map', 'honeymoon') ,
				'SATELLITE' => __('Google Earth satellite', 'honeymoon') ,
				'HYBRID' => __('Mixture of normal and satellite', 'honeymoon') ,
				'TERRAIN' => __('Physical map', 'honeymoon') ,
			) ,
			'type' => 'select',
		) ,

		array(
			'name' => __('Color (optional)', 'honeymoon') ,
			'desc' => __('Defines the overall hue for the map. It is advisable that you avoid gray colors, as they are not well-supported by Google Maps.', 'honeymoon'),
			'id' => 'hue',
			'default' => '',
			'prompt' => __('Default', 'honeymoon') ,
			'options' => array(
				'accent1' => __('Accent 1', 'honeymoon'),
				'accent2' => __('Accent 2', 'honeymoon'),
				'accent3' => __('Accent 3', 'honeymoon'),
				'accent4' => __('Accent 4', 'honeymoon'),
				'accent5' => __('Accent 5', 'honeymoon'),
				'accent6' => __('Accent 6', 'honeymoon'),
				'accent7' => __('Accent 7', 'honeymoon'),
				'accent8' => __('Accent 8', 'honeymoon'),
			) ,
			'type' => 'select',
		) ,
		array(
			'name' => __('Width (optional)', 'honeymoon') ,
			'desc' => __('Set to 0 is the full width.<br/><br/>', 'honeymoon') ,
			'id' => 'width',
			'default' => 0,
			'min' => 0,
			'max' => 960,
			'step' => '1',
			'type' => 'range'
		) ,
		array(
			'name' => __('Height', 'honeymoon') ,
			'id' => 'height',
			'default' => '400',
			'min' => 0,
			'max' => 960,
			'step' => '1',
			'type' => 'range'
		) ,


		array(
			'name' => __('Title (optioanl)', 'honeymoon') ,
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
				'single' => __('Title with divider next to it', 'honeymoon'),
				'double' => __('Title with divider below', 'honeymoon'),
				'no-divider' => __('No Divider', 'honeymoon'),
			),
		) ,
	) ,
);
<?php
return array(
	'name' => __('Text/Image Block', 'honeymoon') ,
	'desc' => __('Please note that you can style your text with the help of the VamTam shortcodes found in the editor icon board at the top. Look for the V button. <br/>
		You can insert an image by the button -Add Media- found above the editor when you open the element option panel.<br/>
		You can toggle the element and insert plane text if you are in a rush.' , 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('file3'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'text',
	'controls' => 'size name edit delete clone handle',
	'options' => array(


		array(
			'name' => __('Content', 'honeymoon') ,
			'id' => 'html-content',
			'default' => __('This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'honeymoon'),
			'type' => 'editor',
			'holder' => 'textarea',
		) ,



		array(
			'name' => __('Title (optional)', 'honeymoon') ,
			'desc' => __('The column title is placed just above the element.<br/><br/>', 'honeymoon'),
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
		array(
			'name' => __('Element Animation (optional)', 'honeymoon') ,
			'id' => 'column_animation',
			'default' => 'none',
			'type' => 'select',
			'options' => array(
				'none' => __('No animation', 'honeymoon'),
				'from-left' => __('Appear from left', 'honeymoon'),
				'from-right' => __('Appear from right', 'honeymoon'),
				'fade-in' => __('Fade in', 'honeymoon'),
				'zoom-in' => __('Zoom in', 'honeymoon'),
			),
		) ,
	) ,
);

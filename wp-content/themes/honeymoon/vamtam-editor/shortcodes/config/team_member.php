<?php
return 	array(
	'name' => __('Team Member', 'honeymoon'),
	'icon' => array(
		'char' => WPV_Editor::get_icon('profile'),
		'size' => '26px',
		'lheight' => '39px',
		'family' => 'vamtam-editor-icomoon',
	),
	'value' => 'team_member',
	'controls' => 'size name clone edit delete',
	'options' => array(

		array(
			'name' => __('Name', 'honeymoon'),
			'id' => 'name',
			'default' => 'Nikolay Yordanov',
			'type' => 'text',
			'holder' => 'h5',
		),
		array(
			'name' => __('Position', 'honeymoon'),
			'id' => 'position',
			'default' => 'Web Developer',
			'type' => 'text'
		),
		array(
			'name' => __('Link', 'honeymoon'),
			'id' => 'url',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('Email', 'honeymoon'),
			'id' => 'email',
			'default' => 'support@vamtam.com',
			'type' => 'text'
		),
		array(
			'name' => __('Phone', 'honeymoon'),
			'id' => 'phone',
			'default' => '+448786562223',
			'type' => 'text'
		),
		array(
			'name' => __('Picture', 'honeymoon'),
			'id' => 'picture',
			'default' => 'http://makalu.vamtam.com/wp-content/uploads/2013/03/people4.png',
			'type' => 'upload'
		),

		array(
			'name' => __('Biography', 'honeymoon') ,
			'id' => 'html-content',
			'default' => __('This is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit.', 'honeymoon'),
			'type' => 'editor',
			'holder' => 'textarea',
		) ,

		array(
			'name' => __('Google+', 'honeymoon'),
			'id' => 'googleplus',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('LinkedIn', 'honeymoon'),
			'id' => 'linkedin',
			'default' => '',
			'type' => 'text'
		),
		array(
			'name' => __('Facebook', 'honeymoon'),
			'id' => 'facebook',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('Twitter', 'honeymoon'),
			'id' => 'twitter',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('YouTube', 'honeymoon'),
			'id' => 'youtube',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('Pinterest', 'honeymoon'),
			'id' => 'pinterest',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('LastFM', 'honeymoon'),
			'id' => 'lastfm',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('Instagram', 'honeymoon'),
			'id' => 'instagram',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('Dribble', 'honeymoon'),
			'id' => 'dribble',
			'default' => '/',
			'type' => 'text'
		),
		array(
			'name' => __('Vimeo', 'honeymoon'),
			'id' => 'vimeo',
			'default' => '/',
			'type' => 'text'
		),

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
	),
);

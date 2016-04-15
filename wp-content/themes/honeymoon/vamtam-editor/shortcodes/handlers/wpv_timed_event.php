<?php

class WPV_Timed_Event {
	public function __construct() {
		add_shortcode( 'wpv_timed_event', array( __CLASS__, 'shortcode' ) );
	}

	public static function shortcode( $atts, $content = null, $code ) {
		extract(shortcode_atts(array(
			'style' => 'light',
			'title' => 'This is a title',
			'button_text' => 'Learn More',
			'button_link' => '/',
			'start_time' => '',
			'end_time' => '',
			'date' => '',
			'class' => '',
		), $atts));

		ob_start();

		include locate_template('templates/shortcodes/wpv_timed_event.php');

		return ob_get_clean();
	}
}

new WPV_Timed_Event;

<div class="vamtam-timed-event style-<?php echo esc_attr( $style ) ?>" data-respond>
	<h4 class="event-title"><?php echo $title //xss ok ?></h4>
	<div class="event-time clearfix">
		<div class="event-time-left">
			<div class="event-time-inner">
				<?php echo wpv_shortcode_icon(array(
					'name' => 'theme-clock',
				)) ?>
				<br>
				<?php echo $start_time ?><br>
				<?php echo $end_time ?>
			</div>
		</div>
		<div class="event-time-right">
			<div class="event-time-inner">
				<?php echo wpv_shortcode_icon(array(
					'name' => 'theme-calendar',
				)) ?>
				<br>
				<?php echo $date ?>
			</div>
		</div>
		<?php include WPV_THEME_ASSETS_DIR . 'images/flower.svg' ?>
	</div>
	<div class="event-description"><?php echo wpautop( do_shortcode( $content ) ) //xss ok ?></div>
	<a href="<?php echo esc_attr( $button_link ) ?>" class="button vamtam-button button-border accent8 hover-accent1"><span class="btext"><?php echo $button_text //xss ok ?></span></a>
</div>

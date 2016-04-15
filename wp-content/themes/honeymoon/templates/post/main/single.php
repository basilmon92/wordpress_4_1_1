<?php


include(locate_template('templates/post/header.php'));

?><div class="post-content-outer single-post">
	<?php if (isset($post_data['media'])):?>
		<div class="post-media">
			<div class='media-inner'>
				<?php echo $post_data['media']; ?>
			</div>
		</div>
	<?php endif;

	include(locate_template('templates/post/content.php'));

	WpvTemplates::custom_link_pages( array(
		'before' => '<div class="wp-pagenavi"><span class="visuallyhidden">' . __( 'Pages:', 'honeymoon' ) . '</span>',
		'after' => '</div>',
		'echo' => true,
	) );

?></div>
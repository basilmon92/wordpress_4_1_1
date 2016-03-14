<?php

/*
* @Author 		ParaTheme
* @Folder	 	Team/Themes
* @version     3.0.5

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit; // if direct access 


		include team_plugin_dir.'/templates/team-grid-variables.php';

		$html = '';

		$html .= '<div  class="team-container" style="background-image:url('.$team_bg_img.');text-align:'.$team_grid_item_align.';">
		<div  id="team-'.$post_id.'" class="team-items team-'.$team_themes.'">';
		
		include team_plugin_dir.'/templates/team-grid-query.php';
			
		// use to detect mobile and tablet device Mobile_Detect class 
		$Mobile_Detect = new Mobile_Detect();
		$is_mobile = $Mobile_Detect->isMobile();
		$is_tablet = $Mobile_Detect->isTablet();

		if($is_mobile)
			{
				$team_items_max_width = $team_items_width_mobile;
			}
		elseif($is_tablet){
			$team_items_max_width = $team_items_width_tablet;
			}	
		
		if ( $wp_query->have_posts() ) :

		$i=0;
		
		while ( $wp_query->have_posts() ) : $wp_query->the_post();


		$team_member_position = get_post_meta(get_the_ID(), 'team_member_position', true );
		$team_member_social_links = get_post_meta( get_the_ID(), 'team_member_social_links', true );	
		
		$team_member_link_to_post = get_post_meta( get_the_ID(), 'team_member_link_to_post', true );
		
		$team_thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_ID()), $team_items_thumb_size );
		$team_thumb_url = $team_thumb['0'];

			
		$html.= '<div style="width:'.$team_items_max_width.';text-align:'.$team_item_text_align.';margin:'.$team_items_margin.'" class="team-item" >';
		

		$class_team_functions = new class_team_functions();
		if(empty($team_grid_items))
			{
				$team_grid_items = $class_team_functions->team_grid_items();
				
			}

		foreach($team_grid_items as $key=>$name)
			{
				
				if(empty($team_grid_items_hide[$key]))
					{
					include team_plugin_dir.'templates/team-grid-'.$key.'.php';
					}
				
			}


		$html.= '</div>';
		
		
		$i++;
		
		endwhile;
		
		$html .= '</div>';
		
		include team_plugin_dir.'/templates/team-grid-paginate.php';
		
		
		wp_reset_query();
		
		endif;

		$html .= '</div>';

		if($team_masonry_enable == 'yes' )
			{
				$html .= '<script>
					jQuery(document).ready(function($) {
					  var container = document.querySelector("#team-'.$post_id.'.team-items");
					  var msnry = new Masonry( container, {isFitWidth: true
					
					  });
					});
					</script>';		

				// masonry css to center align
				$html .= '<style type="text/css">
				
						#team-'.$post_id.'.team-items {
						  margin: 0 auto !important;
						}
						</style>
						';
			}






			




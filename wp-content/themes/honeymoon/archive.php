<?php
/**
 * Archive page template
 *
 * @package wpv
 * @subpackage honeymoon
 */

global $wp_query;

$wpv_title = __('Blog Archives', 'honeymoon');

if( is_day() ) {
	$wpv_title = sprintf( __( 'Daily Archives: <span>%s</span>', 'honeymoon' ), get_the_date() );
} elseif( is_month() ) {
	$wpv_title = sprintf( __( 'Monthly Archives: <span>%s</span>', 'honeymoon' ), get_the_date('F Y') );
} elseif( is_year() ) {
	$wpv_title = sprintf( __( 'Yearly Archives: <span>%s</span>', 'honeymoon' ), get_the_date('Y') );
} elseif( is_category() ) {
	$wpv_title = sprintf( __( 'Category: %s', 'honeymoon' ), '<span>' . single_cat_title( '', false ) . '</span>' );
} elseif( is_tag() ) {
	$wpv_title = sprintf( __( 'Tag Archives: %s', 'honeymoon' ), '<span>' . single_tag_title( '', false ) . '</span>' );
}

get_header(); ?>

<?php if ( have_posts() ): the_post(); ?>
	<div class="row page-wrapper">
		<?php WpvTemplates::left_sidebar() ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(WpvTemplates::get_layout()); ?>>
			<?php
			global $wpv_has_header_sidebars;
			if( $wpv_has_header_sidebars) {
				WpvTemplates::header_sidebars();
			}
			?>
			<div class="page-content">
				<?php rewind_posts() ?>
				<?php get_template_part('loop', 'archive') ?>
			</div>
		</article>

		<?php WpvTemplates::right_sidebar() ?>
	</div>
<?php endif ?>

<?php get_footer(); ?>

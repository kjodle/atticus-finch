<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Atticus Finch
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- end #sidebar -->
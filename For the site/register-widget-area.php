<?php

/**
 * Register our sidebars and widgetized areas.
 *
 */
function blessed_are_widget_area() {

	register_sidebar( array(
		'name'          => 'Landing Page Testimonials',
		'id'            => 'blessed_are_widget_area',
		'before_widget' => '<div class="blessed-testimonials-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'blessed_are_widget_area' );
<?php
	/* Add your parent stylesheets */

	if (!function_exists('homeland_script_styles_reg_child')) {
		function homeland_script_styles_reg_child() {
			$homeland_site_layout = esc_attr( get_option('homeland_site_layout') );

		   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		  	if(empty($homeland_site_layout)) :
		   	wp_enqueue_style( 'parent-responsive-style', get_template_directory_uri() . '/responsive.css' );
		   endif;
		}
	}
	add_action( 'wp_enqueue_scripts', 'homeland_script_styles_reg_child' );
	
	

?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>

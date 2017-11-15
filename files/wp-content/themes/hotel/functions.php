<?php 
/**
* Include extension REDUX framework
*/
require_once (get_template_directory() . '/extension-redux/options/sample-config.php');
// require_once (get_template_directory() . '/extension-redux/options/config.php');
require_once (get_template_directory() . '/extension-redux/options/loader.php');



/**
* Include theme scripts
*/
function hotel_scripts() {

	//================================ CSS ================================//
	wp_enqueue_style( 'bundle-css', get_template_directory_uri() . '/css/bundle.css' );
	// wp_enqueue_style( 'bundle-css', get_template_directory_uri() . '/lib/fullPage/jquery.fullPage.css' );
	// wp_enqueue_style( 'onepage-css', get_template_directory_uri() . '/lib/onePage/onepage-scroll.css' );

	//================================ JS ================================//
	wp_enqueue_script( 'vendor-js', get_template_directory_uri() . '/js/vendor.js', array(), '1.0.0', true );
	wp_enqueue_script( 'bundle-js', get_template_directory_uri() . '/js/bundle.js', array(), '1.0.0', true );
	wp_enqueue_script( 'fullPage-js', get_template_directory_uri() . '/lib/fullPage/jquery.fullPage.js', array('jquery'), '1.0.0', true );
	// wp_enqueue_script( 'onepage-js', get_template_directory_uri() . '/lib/onePage/jquery.onepage-scroll.js', array('jquery'), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'hotel_scripts' );



/**
* Register nav menu
*/
function theme_register_nav_menu() {
  register_nav_menu( 'main', __('Главное меню') );
}
add_action( 'after_setup_theme', 'theme_register_nav_menu' );



/**
* Remove <span> in cotact form 7
*/
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});




/**
* Custom CF7 loading image
*/
add_filter('wpcf7_ajax_loader', 'my_wpcf7_ajax_loader');
function my_wpcf7_ajax_loader () {
	return  get_template_directory_uri() . '/img/ajax-loader.gif';
}
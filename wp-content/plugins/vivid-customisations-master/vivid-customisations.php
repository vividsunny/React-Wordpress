<?php
/**
 * Plugin Name:       Rest API
 * Description:       Get / Set All Site date.
 * Plugin URI:        #
 * Version:           1.0.0
 * Author:            Team Vivid
 * Author URI:        http://vividwebsolutions.in/
 * Requires at least: 4.9
 * Tested up to:      5.8
 *
 * @package Vivid_Customisations
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Main Vivid_Customisations Class
 *
 * @class Vivid_Customisations
 * @version	1.0.0
 * @since 1.0.0
 * @package	Vivid_Customisations
 */
final class Vivid_Customisations {

	/**
	 * Set up the plugin
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'vivid_customisations_setup' ), -1 );
		add_action('acf/init', array( $this, 'acf_wysiwyg_remove_wpautop' ) );
		require_once( 'class/class-vivid-customisations-api.php' );

	}

	/**
	 * Remove WPAUTOP from ACF TinyMCE Editor
	 */
	public function acf_wysiwyg_remove_wpautop() {

	    remove_filter('acf_the_content', 'wpautop' );

	}

	/**
	 * Setup all the things
	 */
	public function vivid_customisations_setup() {
		add_action( 'wp_enqueue_scripts', array( $this, 'vivid_customisations_css' ), 999 );
		add_action( 'wp_enqueue_scripts', array( $this, 'vivid_customisations_js' ) );
	}

	/**
	 * Enqueue the CSS
	 *
	 * @return void
	 */
	public function vivid_customisations_css() {
		wp_enqueue_style( 'custom-css', plugins_url( '/assets/vivid-style.css', __FILE__ ) );
	}

	/**
	 * Enqueue the Javascript
	 *
	 * @return void
	 */
	public function vivid_customisations_js() {
		wp_enqueue_script( 'custom-js', plugins_url( '/assets/vivid-custom.js', __FILE__ ), array( 'jquery' ) );
	}
	
} // End Class

/**
 * The 'main' function
 *
 * @return void
 */
function vivid_customisations_main() {
	new Vivid_Customisations();

	if( function_exists('acf_add_options_page') ) {
		// Add parent.
		$parent = acf_add_options_page(array(
			'page_title'   => 'Theme Settings',
			'menu_title'  => 'Theme Settings',
			'menu_slug'   => 'theme-general-settings',
			'capability'  => 'edit_posts',
			'redirect'    => false
		));

        // Add sub page.
        $about = acf_add_options_page(array(
            'page_title'  => __('Who We Are'),
            'menu_title'  => __('About Us'),
            'parent_slug' => $parent['menu_slug'],
        ));

        $service = acf_add_options_page(array(
            'page_title'  => __('Service'),
            'menu_title'  => __('Service'),
            'parent_slug' => $parent['menu_slug'],
        ));

        $career = acf_add_options_page(array(
            'page_title'  => __('Career'),
            'menu_title'  => __('Career'),
            'parent_slug' => $parent['menu_slug'],
        ));

        $portfolio = acf_add_options_page(array(
            'page_title'  => __('Portfolio'),
            'menu_title'  => __('Portfolio'),
            'parent_slug' => $parent['menu_slug'],
        ));
        
        $testimonials = acf_add_options_page(array(
            'page_title'  => __('Testimonials'),
            'menu_title'  => __('Testimonials'),
            'parent_slug' => $parent['menu_slug'],
        ));
	}

}

/**
 * Initialise the plugin
 */
add_action( 'plugins_loaded', 'vivid_customisations_main' );

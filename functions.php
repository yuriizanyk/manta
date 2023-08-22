<?php




define('WCL_THEME_VERSION', '0.105');







/*
* =========================================
* 	STYLES & SCRIPTS
* =========================================
*/


/*
* Enqueueing Styles & Scripts
*/
function wcl_theme_enqueue_scripts() {

	// Remove jQuery from front-end of the website
	//wp_deregister_script('jquery');

	wp_enqueue_style('swiper',  get_template_directory_uri() . '/css/swiper-bundle.min.css', array(), WCL_THEME_VERSION);
	wp_enqueue_script('swiper',  get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), WCL_THEME_VERSION, true);

	// Styles
	wp_enqueue_style('wcl-custom-style', get_template_directory_uri() . '/css/wcl-style.min.css', array(), WCL_THEME_VERSION);

	// Scripts
	wp_enqueue_script('wcl-functions-js', get_template_directory_uri() . '/js/wcl-functions.js', array(), WCL_THEME_VERSION, true);


	wp_localize_script('wcl-functions-js', 'wcl_obj', array(
		'ajax_url'     => admin_url('admin-ajax.php'),
		'site_url'     => site_url('/'),
		'template_url' => get_template_directory_uri(),
	));
}
add_action('wp_enqueue_scripts', 'wcl_theme_enqueue_scripts');



/*
* Enqueueing Styles & Scripts To Admin Panel
*/
function wcl_admin_enqueue_scripts($hook) {

	wp_enqueue_style('wcl-admin-style', get_template_directory_uri() . '/css/wcl-admin-style.min.css', array(), WCL_THEME_VERSION);


	if ($_SERVER["SERVER_ADDR"] != '127.0.0.1') {
		wp_enqueue_style('wcl-admin-style-live', get_template_directory_uri() . '/css/wcl-admin-style-live.css', array(), WCL_THEME_VERSION);
	}
}

add_action('admin_enqueue_scripts', 'wcl_admin_enqueue_scripts');




/*
* Remove Gutenberg Block Library CSS from loading on the frontend
*/
function wcl_remove_wp_block_library_css() {

	wp_dequeue_style('wp-block-library');
	wp_dequeue_style('wp-block-library-theme');
	wp_dequeue_style('wc-blocks-style'); // Remove WooCommerce block CSS

}
add_action('wp_enqueue_scripts', 'wcl_remove_wp_block_library_css', 100);















/*
* =========================================
* 	IMAGE SIZES
* =========================================
*/



/*
* Remove default image sizes options
*/
// disable generated image sizes
function wcl_disable_unused_image_sizes($sizes) {

	unset($sizes['thumbnail']);    // disable thumbnail size
	unset($sizes['medium']);       // disable medium size
	unset($sizes['large']);        // disable large size
	unset($sizes['medium_large']); // disable medium-large size
	unset($sizes['1536x1536']);    // disable 2x medium-large size
	unset($sizes['2048x2048']);    // disable 2x large size
	return $sizes;
}
add_action('intermediate_image_sizes_advanced', 'wcl_disable_unused_image_sizes');


// disable other image sizes
function wcl_disable_other_images() {

	remove_image_size('post-thumbnail'); // disable set_post_thumbnail_size() 
	remove_image_size('another-size');   // disable other add image sizes

}
add_action('init', 'wcl_disable_other_images');


// disable scaled image size
add_filter('big_image_size_threshold', '__return_false');





/*
* Add custom image sizes 
*/
add_image_size('image-size-1', 681, 539, true); // <!-- wcl-block-1 - Hero Header -->
add_image_size('image-size-1@2x', 1362, 1078, true);
add_image_size('image-size-2', 621, 572, true); // <!-- wcl-block-2 - Award-Winning -->
add_image_size('image-size-2@2x', 1242, 1144, true);
add_image_size('image-size-3', 306, 402, true); // <!-- wcl-block-3 - Clients Testimonials -->
add_image_size('image-size-3@2x', 612, 804, true);
add_image_size('image-size-4', 524, 436, true); // <!-- wcl-block-5 - Case Studies -->
add_image_size('image-size-4@2x', 1048, 872, true);
add_image_size('image-size-5', 300, 270, true); // <!-- wcl-block-5 - Case Studies -->
add_image_size('image-size-5@2x', 600, 540, true);
add_image_size('image-size-6', 794, 670, true); // <!-- wcl-block-8 - Award Winning Workplace -->
add_image_size('image-size-6@2x', 1588, 1340, true);
add_image_size('image-size-7', 836, 582, true); // <!-- wcl-block-9 - CTA -->
add_image_size('image-size-7@2x', 1672, 1164, true);







/*
* =========================================
* 	THEME SUPPORT
* =========================================
*/



/*
* Support HTML 5 tags for styles and scripts
*/
add_action(
	'after_setup_theme',
	function () {
		add_theme_support('html5', ['script', 'style']);
	}
);






/*
* Add the ability to upload post thumbnails
*/
add_theme_support('post-thumbnails');






/*
* Register Nav Manus
*/

function wcl_register_nav_menus() {
	register_nav_menu('main-menu', 'Main Menu');
	register_nav_menu('footer-menu', 'Footer Menu');
	register_nav_menu('footer-manta', 'Footer Manta');
	register_nav_menu('footer-manta-mobile', 'Footer Manta Mobile');
	register_nav_menu('footer-services', 'Footer Services');
	register_nav_menu('footer-services-2', 'Footer Services 2');
	register_nav_menu('footer-services-mobile', 'Footer Services Mobile');
	register_nav_menu('footer-resources', 'Footer Resources');
	register_nav_menu('footer-resources-mobile', 'Footer Resources Mobile');
	register_nav_menu('footer-who-we-help', 'Footer Who We Help');
	register_nav_menu('footer-mobile', 'Footer Mobile');
	register_nav_menu('business-management-software', 'Business Management Software');
	register_nav_menu('paid-ads-services ', 'Paid Ads Services ');
	register_nav_menu('websites', 'Websites');
	register_nav_menu('business-listings', 'Business Listings');
	register_nav_menu('find-a-company', 'Find a Company');
	register_nav_menu('dental-services', 'Dental Services');
	register_nav_menu('home-services', 'Home Services');
	register_nav_menu('legal-services', 'Legal Services');
	register_nav_menu('automotive', 'Automotive');
	register_nav_menu('health-and-medical', 'Health & Medical');
	register_nav_menu('small-business', 'Small Business');
	register_nav_menu('resources', 'Resources');
	register_nav_menu('services', 'Services');
}

add_action('after_setup_theme', 'wcl_register_nav_menus');

















/*
* =========================================
* 	ACF Settings
* =========================================
*/



/*
* ACF Option Page
*/
if (function_exists('acf_add_options_page')) {

	// Theme Settings page
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'WCL Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'icon_url'		=> 'dashicons-admin-home',
	));
}













/*
* =======================================================
* 	Make ACF fields works on Preview
* =======================================================
*/

function wcl_fix_acf_field_post_id_on_preview($post_id, $original_post_id) {

	// Don't do anything to options
	if (is_string($post_id) && str_contains($post_id, 'option')) {
		return $post_id;
	}
	// Don't do anything to blocks
	if (is_string($original_post_id) && str_contains($original_post_id, 'block')) {
		return $post_id;
	}

	// This should only affect on post meta fields
	if (is_preview()) {
		return get_the_ID();
	}

	return $post_id;
}
add_filter('acf/validate_post_id', __NAMESPACE__ . '\wcl_fix_acf_field_post_id_on_preview', 10, 2);









/*
* =========================================
* 	CUSTOM FUNCTIONS
* =========================================
*/

function register_my_widgets() {


	register_sidebar(array(
		'name'          => 'Services Sidebar',
		'id'            => 'services-sidebar',
		'before_widget' => '<div class="data-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="data-widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => 'Who We Help Sidebar',
		'id'            => 'who-we-help-sidebar',
		'before_widget' => '<div class="data-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="data-widget-title">',
		'after_title'   => '</h3>',
	));


	register_sidebar(array(
		'name'          => 'Resources Sidebar',
		'id'            => 'resources-sidebar',
		'before_widget' => '<div class="data-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="data-widget-title">',
		'after_title'   => '</h3>',
	));


	register_sidebar(array(
		'name'          => 'Footer Sidebar',
		'id'            => 'footer-sidebar',
		'before_widget' => '<div class="data-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="data-widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => 'Footer Sidebar Mobile',
		'id'            => 'footer-sidebar-mobile',
		'before_widget' => '<div class="data-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="data-widget-title">',
		'after_title'   => '</h3>',
	));
}
add_action('widgets_init', 'register_my_widgets');


require_once get_theme_file_path('/inc/helper-functions.php');
require_once get_theme_file_path('/inc/ajax-requests.php');

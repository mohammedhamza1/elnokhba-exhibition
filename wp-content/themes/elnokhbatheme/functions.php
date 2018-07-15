<?php
/**
 * elnokhba_Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package elnokhba_Theme
 */

if ( ! function_exists( 'elnokhbatheme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function elnokhbatheme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on elnokhba_Theme, use a find and replace
		 * to change 'elnokhbatheme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'elnokhbatheme', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
        function elnokhba_register_custome_menu(){ 
			register_nav_menus( array(
                'main menu' => 'Navigation Menu',
                'second menu' => 'footer Menu'
            ));
		}
        add_action('init','elnokhba_register_custome_menu');

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'elnokhbatheme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'elnokhbatheme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function elnokhbatheme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'elnokhbatheme_content_width', 640 );
}
add_action( 'after_setup_theme', 'elnokhbatheme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function elnokhbatheme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'elnokhbatheme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'elnokhbatheme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'elnokhbatheme_widgets_init' );

/**
* Enqueue styles
*/

function elnokhba_add_styles(){
    wp_enqueue_style('hover-min-css',get_template_directory_uri().'/css/hover.css');
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('bootstrap-rtl-css',get_template_directory_uri().'/css/bootstrap-rtl.min.css');
    wp_enqueue_style('bootstrap-select-css',get_template_directory_uri().'/css/bootstrap-select.min.css');
    wp_enqueue_style('hover-min-css',get_template_directory_uri().'/css/hover.min.css');
    wp_enqueue_style('font-awesome-css',get_template_directory_uri().'/css/font-awesome.min.css');
    wp_enqueue_style('myStyle-css',get_template_directory_uri().'/css/myStyle.css');
    wp_enqueue_style('animate-css',get_template_directory_uri().'/css/animate.css');
    wp_enqueue_style('owl-carousel-css',get_template_directory_uri().'/css/owl.carousel.css');
    wp_enqueue_style('owl-theme-default-css',get_template_directory_uri().'/css/owl.theme.default.css');

}
add_action('wp_enqueue_scripts','elnokhba_add_styles');

/**
 * Enqueue scripts
 */
function elnokhba_add_scripts(){
    //remove registeraction for old jquery
    wp_deregister_script('jquery');
    //register a new jquery
    wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),array(),false,true);
    //enqueue the new jquery
    wp_enqueue_script('jquery');
   wp_enqueue_script('bootstrap-js',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),false,true);
    wp_enqueue_script('bootstrap-select-js',get_template_directory_uri().'/js/bootstrap-select.min.js',array('jquery'),false,true);
    wp_enqueue_script('owl-carousel-js',get_template_directory_uri().'/js/owl.carousel.js',array(),false,true);
    wp_enqueue_script('wow-min-js',get_template_directory_uri().'/js/wow.min.js',array(),false,true);
    wp_enqueue_script('script-js',get_template_directory_uri().'/js/script.js',array(),false,true);

}
add_action('wp_enqueue_scripts','elnokhba_add_scripts');

// add google map key

function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyAWkv5HOlLJJX8D_wo6_-0heGiubsWsbXI';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Add REST API support to an already registered post type.
 */
add_action( 'init', 'my_custom_post_type_rest_support', 25 );
function my_custom_post_type_rest_support() {
  global $wp_post_types;
 
  //be sure to set this to the name of your post type!
  $post_type_name = 'spaces';
  if( isset( $wp_post_types[ $post_type_name ] ) ) {
    $wp_post_types[$post_type_name]->show_in_rest = true;
    // Optionally customize the rest_base or controller class
    $wp_post_types[$post_type_name]->rest_base = $post_type_name;
    $wp_post_types[$post_type_name]->rest_controller_class = 'WP_REST_Posts_Controller';
  }
}

add_action('paypal_ipn_for_wordpress_ipn_response_handler', 'paypal_ipn', 10, 1);
     function paypal_ipn($posted) {
 
           // Parse data from IPN $posted array
 
           $mc_gross = isset($posted['mc_gross']) ? $posted['mc_gross'] : '';
           $invoice = isset($posted['invoice']) ? $posted['invoice'] : '';
           $protection_eligibility = isset($posted['protection_eligibility']) ? $posted['protection_eligibility'] : '';
           $address_status = isset($posted['address_status']) ? $posted['address_status'] : '';
           $payer_id = isset($posted['payer_id']) ? $posted['payer_id'] : '';
           $tax = isset($posted['tax']) ? $posted['tax'] : '';
           $address_street = isset($posted['address_street']) ? $posted['address_street'] : '';
           $payment_date = isset($posted['payment_date']) ? $posted['payment_date'] : '';
           $payment_status = isset($posted['payment_status']) ? $posted['payment_status'] : '';
           $charset = isset($posted['charset']) ? $posted['charset'] : '';
           $address_zip = isset($posted['address_zip']) ? $posted['address_zip'] : '';
           $mc_shipping = isset($posted['mc_shipping']) ? $posted['mc_shipping'] : '';
           $mc_handling = isset($posted['mc_handling']) ? $posted['mc_handling'] : '';
           $first_name = isset($posted['first_name']) ? $posted['first_name'] : '';
           $address_country_code = isset($posted['address_country_code']) ? $posted['address_country_code'] : '';
           $address_name = isset($posted['address_name']) ? $posted['address_name'] : '';
           $notify_version = isset($posted['notify_version']) ? $posted['notify_version'] : '';
           $payer_status = isset($posted['payer_status']) ? $posted['payer_status'] : '';
           $business = isset($posted['business']) ? $posted['business'] : '';
           $address_country = isset($posted['address_country']) ? $posted['address_country'] : '';
           $num_cart_items = isset($posted['num_cart_items']) ? $posted['num_cart_items'] : '';
           $mc_handling1 = isset($posted['mc_handling1']) ? $posted['mc_handling1'] : '';
           $address_city = isset($posted['address_city']) ? $posted['address_city'] : '';
           $verify_sign = isset($posted['verify_sign']) ? $posted['verify_sign'] : '';
           $payer_email = isset($posted['payer_email']) ? $posted['payer_email'] : '';
           $mc_shipping1 = isset($posted['mc_shipping1']) ? $posted['mc_shipping1'] : '';
           $tax1 = isset($posted['tax1']) ? $posted['tax1'] : '';
           $txn_id = isset($posted['txn_id']) ? $posted['txn_id'] : '';
           $payment_type = isset($posted['payment_type']) ? $posted['payment_type'] : '';
           $last_name = isset($posted['last_name']) ? $posted['last_name'] : '';
           $address_state = isset($posted['address_state']) ? $posted['address_state'] : '';
           $item_name1 = isset($posted['item_name1']) ? $posted['item_name1'] : '';
           $receiver_email = isset($posted['receiver_email']) ? $posted['receiver_email'] : '';
           $quantity1 = isset($posted['quantity1']) ? $posted['quantity1'] : '';
           $receiver_id = isset($posted['receiver_id']) ? $posted['receiver_id'] : '';
           $pending_reason = isset($posted['pending_reason']) ? $posted['pending_reason'] : '';
           $txn_type = isset($posted['txn_type']) ? $posted['txn_type'] : '';
           $mc_gross_1 = isset($posted['mc_gross_1']) ? $posted['mc_gross_1'] : '';
           $mc_currency = isset($posted['mc_currency']) ? $posted['mc_currency'] : '';
           $residence_country = isset($posted['residence_country']) ? $posted['residence_country'] : '';
           $test_ipn = isset($posted['test_ipn']) ? $posted['test_ipn'] : '';
           $receipt_id = isset($posted['receipt_id']) ? $posted['receipt_id'] : '';
           $ipn_track_id = isset($posted['ipn_track_id']) ? $posted['ipn_track_id'] : '';
           $IPN_status = isset($posted['IPN_status']) ? $posted['IPN_status'] : '';
           $cart_items = isset($posted['cart_items']) ? $posted['cart_items'] : '';
 
         /**
         * At this point you can use the data to generate email notifications,
         * update your local database, hit 3rd party web services, or anything
         * else you might want to automate based on this type of IPN.
         */
     }
do_action('paypal_ipn_for_wordpress_ipn_response_handler');
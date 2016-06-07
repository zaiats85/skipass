<?php
/**
 * MDLWP functions and definitions
 *
 * @package MDLWP
 */

if ( ! function_exists( 'mdlwp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mdlwp_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on MDLWP, use a find and replace
	 * to change 'mdlwp' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'mdlwp', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'mdlwp' ),
		'drawer' => esc_html__( 'Drawer Menu', 'mdlwp' ),
		'footer' => esc_html__( 'Footer Menu', 'mdlwp' )
	) );

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

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside',
	// 	'image',
	// 	'video',
	// 	'quote',
	// 	'link',
	// ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'mdlwp_custom_background_args', array(
		'default-color' => 'f5f5f5',
		'default-image' => '',
	) ) );
}


endif; // mdlwp_setup
add_action( 'after_setup_theme', 'mdlwp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mdlwp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mdlwp_content_width', 900 );
}
add_action( 'after_setup_theme', 'mdlwp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function mdlwp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'mdlwp' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="mdl-mega-footer__heading footer-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'mdlwp' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="mdl-mega-footer__heading footer-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'mdlwp' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="mdl-mega-footer__drop-down-section footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="mdl-mega-footer__heading footer-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'mdlwp' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="mdl-mega-footer__drop-down-section footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h1 class="mdl-mega-footer__heading footer-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'mdlwp_widgets_init' );

add_action( 'widgets_init', 'mdlwp_woocommerce_sidebar_init' );

function mdlwp_woocommerce_sidebar_init() {
	register_sidebar( array(
		'name' => __( 'WooCommerce Sidebar', 'mdlwp' ),
		'id' => 'sidebar-1',
		'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'mdlwp' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}

/**
 * Woocommerce mdl theme integration
 */
// Remove result counts :)
function woocommerce_result_count(){
	return;
}

//Remove breadcrumbs
add_action('init', 'mdlwp_remove_wc_breadcrumbs');
function mdlwp_remove_wc_breadcrumbs(){
	remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
}

//Remove Sorting
add_action('init', 'mdlwp_remove_wc_sorting');
function mdlwp_remove_wc_sorting(){
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}

// Enable tags in Woocommerce category description
foreach ( array( 'pre_term_description' ) as $filter ) {
	remove_filter( $filter, 'wp_filter_kses' );
}

foreach ( array( 'term_description' ) as $filter ) {
	remove_filter( $filter, 'wp_kses_data' );
}

// Unhook WooCommerce wrappers
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

//Hook functions to display the wrappers

add_action('woocommerce_before_main_content', 'mdlwp_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'mdlwp_wrapper_end', 10);

//Add WooCommerce support

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}


function mdlwp_wrapper_start() {
	echo '<section id="main" class="site-main mdl-grid mdlwp-1170">';
}

function mdlwp_wrapper_end() {
	echo '</section>';
}

//Woocommerce remove/update cart ajax controller

add_action( 'wp_ajax_cart_operations', 'cart_operations' );
add_action( 'wp_ajax_nopriv_cart_operations', 'cart_operations' );
function cart_operations() {

	$prices = array(); // Response array

	$cart = WC()->instance()->cart;
	$id = $_POST['product_id'];
	$quantity = $_POST['quantity'];
	$cart_id = $cart->generate_cart_id($id);

	$cart_item_id = $cart->find_product_in_cart($cart_id);

	if($cart_item_id){
		$cart->set_quantity($cart_item_id, $quantity);
	}

	$cart_total = $cart->get_cart_total();
	$cart_subtotal = $cart->get_cart_subtotal();

	$product = new WC_Product($id);
	$product_subtotal = $cart->get_product_subtotal($product, $quantity);

	$prices['product_subtotal'] = $product_subtotal;
	$prices['cart_subtotal'] = $cart_subtotal;
	$prices['cart_total'] = $cart_total;
    $prices['quantity'] = $quantity;
    $prices['total_quantity'] = $cart->get_cart_contents_count();

	echo json_encode($prices);
	exit();
}

wp_dequeue_script('wc-add-to-cart');
wp_register_script('wc-add-to-cart', get_bloginfo( 'stylesheet_directory' ). '/woocommerce/assets/js/add-to-cart.js' , array( 'jquery' ), WC_VERSION, TRUE);
wp_enqueue_script('wc-add-to-cart');

add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );
function woocommerce_header_add_to_cart_fragment( $fragments ) {
      ob_start();
      wc_get_template( 'cart/cart.php' );

      $fragments['cart_content'] = ob_get_clean();
      $fragments['cart_items_count'] = WC()->instance()->cart->get_cart_contents_count();

      return $fragments;
}

function st_ajaxurl(){ ?>
<script>
    var ajaxurl = '<?php echo admin_url('admin-ajax.php') ?>';
</script>
<?php }
add_action('wp_head','st_ajaxurl');

function st_handle_registration(){

    if( $_POST['action'] == 'register_action' ) {
        extract($_POST);

        if( empty( $email ) )
            $response['message'][]= 'Enter Email';
        elseif( !filter_var($email, FILTER_VALIDATE_EMAIL) )
            $response['message'][]= 'Enter Valid Email';

        if( empty( $password ) )
            $response['message'][]= 'Password should not be blank';
        elseif ( $password !== $passwordRepeat)
            $response['message'][] = 'Password must be same';

        if( empty( $fullName ) )
            $response['message'][]= 'Enter Full Name';

        if( empty( $city ) )
            $response['message'][]= 'Enter City';

        if( empty( $telephone ) )
            $response['message'][]= 'Enter telephone';

        if( empty( $response ) ){
            $status = wp_create_user( $email, $password ,$email );

            if( is_wp_error($status) ){
                foreach( $status->errors as $key => $val ){
                    foreach( $val as $k => $v ){
                        $msg[] = $v;
                    }
                }
                $response['message'] = $msg;
            } else {
                $response['status'] = 200;
                wp_set_auth_cookie( $status, false, is_ssl() );
            }
        }

        echo json_encode($response);
        exit;
    }
}
add_action( 'wp_ajax_register_action', 'st_handle_registration' );
add_action( 'wp_ajax_nopriv_register_action', 'st_handle_registration' );

add_action( 'tml_new_user_registered', 'tml_new_user_registered' );


function user_metadata( $user_id ){
    $fullName = trim($_POST['fullName']);
    update_user_meta( $user_id, 'first_name', explode(' ', $fullName)[0] );
    update_user_meta( $user_id, 'last_name', explode(' ', $fullName)[1] );
    update_user_meta( $user_id, 'billing_first_name', explode(' ', $fullName)[0] );
    update_user_meta( $user_id, 'billing_last_name', explode(' ', $fullName)[1] );
    update_user_meta( $user_id, 'display_name', $fullName);
    update_user_meta( $user_id, 'billing_phone', $_POST['telephone']);
    update_user_meta( $user_id, 'billing_city', $_POST['city']);
    update_user_meta( $user_id, 'billing_email', $_POST['email']);
    update_user_meta( $user_id, 'show_admin_bar_front', false );
}
add_action( 'user_register', 'user_metadata' );
add_action( 'profile_update', 'user_metadata' );

add_action( 'wp_ajax_custom_login', 'custom_login' );
add_action( 'wp_ajax_nopriv_custom_login', 'custom_login' );

function custom_login() {


    $credentials = [
        'user_login' => $_POST['email'],
        'user_password' => $_POST['password'],
        'remember' => $_POST['remember'] == 'true' ? true : false,
    ];

    $userLogin = wp_signon($credentials);

    if ($userLogin instanceof WP_User) {
        $response['status'] = 200;
    } else {
        foreach( $userLogin->errors as $key => $val ){
            foreach( $val as $k => $v ){
                $errors[] = $v;
            }
        }
        $response = [
            'status' => 500,
            'messages' => $errors
        ];
    }



    echo json_encode($response);
    exit;
}

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Enqueue all JS and CSS files
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Custom menu
 */
require get_template_directory() . '/inc/nav-walker.php';

/**
 * Meta Box
 */
require get_template_directory() . '/inc/meta-box.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Widget for Footer Links
 */
require get_template_directory() . '/inc/mdlwp-footer-widget.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


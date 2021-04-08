<?php
/**
 * Aurora Homes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Aurora_Homes
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '202103291526' );
}

if ( ! function_exists( 'aurorahomes_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function aurorahomes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Aurora Homes, use a find and replace
		 * to change 'aurorahomes' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'aurorahomes', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'aurorahomes' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'aurorahomes_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'aurorahomes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function aurorahomes_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'aurorahomes_content_width', 640 );
}

add_action( 'after_setup_theme', 'aurorahomes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function aurorahomes_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'aurorahomes' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'aurorahomes' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'aurorahomes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function aurorahomes_scripts() {
	wp_enqueue_style( 'aurorahomes-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'aurorahomes-style', 'rtl', 'replace' );

	wp_enqueue_script( 'aurorahomes-navigation', get_template_directory_uri() . '/js/navigation.js', array(),
		_S_VERSION, true );

	wp_enqueue_script( 'aurorahomes-app', get_template_directory_uri() . '/app.js', array(),
		_S_VERSION, true );

	if (is_page('Home')) {
		wp_enqueue_script('aurorahomes-front-page', get_template_directory_uri() . '/front-page.js', array(),
			_S_VERSION, true);
	}

	if (is_page('Contact')) {
		wp_enqueue_script('aurorahomes-page-contact', get_template_directory_uri() . '/page-contact.js', array(),
			_S_VERSION, true);
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if (is_singular('project') && ( get_post_type() == 'project' )) {
		wp_enqueue_script('aurorahomes-single-project', get_template_directory_uri() . '/single-project.js', array(),
			_S_VERSION, true);
	}

	if (is_page('Apply')) {
		wp_enqueue_script('aurorahomes-page-apply', get_template_directory_uri() . '/page-apply.js', array(),
			_S_VERSION, true);
	}

	if (isset($_GET['listing_id'])) {
		$listing_data = get_post($_GET['listing_id'])->to_array();
		$listing_data['post_location'] = get_field('location', $_GET['listing_id']);
		$listing_data['post_description'] = get_field('description', $_GET['listing_id']);

		wp_localize_script( 'aurorahomes-page-apply', 'LISTING', array(
			'data' => $listing_data,
			'ajax_url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('ajax-nonce')
		) );
	}
}

add_action( 'wp_enqueue_scripts', 'aurorahomes_scripts' );

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

function hideAdminBar() {
	show_admin_bar( false );
}

add_action( 'wp_loaded', 'hideAdminBar' );

function addBodyClasses( $classes ) {

	$classes[] = '';

	return $classes;
}

add_filter( 'body_class', 'addBodyClasses' );

function addNavMenuActiveClass( $classes ) {
	if ( in_array( 'current-menu-item', $classes ) ) {
		$classes[] = 'active';
	}

	return $classes;
}

add_filter('nav_menu_css_class', 'addNavMenuActiveClass', 10, 2);

function aurora_send_application() {
	if ( !wp_verify_nonce( $_POST['nonce'], 'ajax-nonce' ) ) {
		echo json_encode(['status' => 0, 'message' => 'Invalid nonce.']);
		die();
	}

	$to = [];
	$to[] = get_option('admin_email');
	$subject = 'Job Application';
	$headers = '';

	if (count($_FILES)) {
		require_once( ABSPATH . 'wp-admin/includes/image.php' );
		require_once( ABSPATH . 'wp-admin/includes/file.php' );
		require_once( ABSPATH . 'wp-admin/includes/media.php' );
		$attachment_id = media_handle_upload( 'resume', 0 );
		$attachments  = [wp_get_attachment_url($attachment_id)];
	} else {
		$attachments = [];
	}

	ob_start();

	echo '
        <p>First Name: ' . $_POST["first_name"] . '</p>
        <p>Last Name: ' . $_POST["last_name"] . '</p>
        <p>Email: ' . $_POST["email"] . '</p>
        <p>Phone: ' . $_POST["phone"] . '</p>
        <p>Address: ' . $_POST["address"] . '</p>
        <p>City: ' . $_POST["city"] . '</p>
        <p>Postal Code: ' . $_POST["postal_code"] . '</p>
        <p>Country: ' . $_POST["country"] . '</p>
        ';

	if ($_POST["website"]) {
		echo '<p>Website: ' . $_POST["website"] . '</p>';
	}

	if ($_POST["profile_url"]) {
		echo '<p>Profile URL: ' . $_POST["profile_url"] . '</p>';
	}

	if ($_POST["date_available"] != "Invalid date") {
		echo '<p>Date Available: ' . $_POST["date_available"] . '</p>';
	}

	if ($_POST["desired_pay"]) {
		echo '<p>Desired Pay: ' . $_POST["desired_pay"] . '</p>';
	}

	if ($_POST["resume"]) {
		echo '<p>Resume: ' . '*read attachment' . '</p>';
	}

	$message = ob_get_contents();
	ob_end_clean();

	$mail = wp_mail($to, $subject, $message, $headers, $attachments);

	if (!$mail) {
		echo json_encode(['status' => 0, 'message' => 'Failed to send application.']);
		die();
	}

	echo json_encode(['status' => 1, 'message' => 'Application has been sent.']);
	die();
}

function aurora_send_application_content_type() {
	return "text/html";
}

add_action('wp_ajax_aurora_send_application', 'aurora_send_application');
add_action('wp_ajax_nopriv_aurora_send_application', 'aurora_send_application');
add_filter('wp_mail_content_type','aurora_send_application_content_type' );

function enqueueLoginScripts() {
	?>
	<style type="text/css">
        body {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/admin-bg.jpg) !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position: bottom left !important;
        }

        #login h1 a {
            background-color: #ffffff;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/admin-logo.png) !important;
            background-size: auto;
            margin: 0;
            width: 100%;
        }
	</style>
	<?php
}

add_action( 'login_enqueue_scripts', 'enqueueLoginScripts' );

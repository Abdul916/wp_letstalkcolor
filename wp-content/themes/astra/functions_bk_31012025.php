<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Define Constants
 */
define( 'ASTRA_THEME_VERSION', '4.3.1' );
define( 'ASTRA_THEME_SETTINGS', 'astra-settings' );
define( 'ASTRA_THEME_DIR', trailingslashit( get_template_directory() ) );
define( 'ASTRA_THEME_URI', trailingslashit( esc_url( get_template_directory_uri() ) ) );
define( 'ASTRA_PRO_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=dashboard&utm_medium=free-theme&utm_campaign=upgrade-now' );
define( 'ASTRA_PRO_CUSTOMIZER_UPGRADE_URL', 'https://wpastra.com/pro/?utm_source=customizer&utm_medium=free-theme&utm_campaign=upgrade' );

/**
 * Minimum Version requirement of the Astra Pro addon.
 * This constant will be used to display the notice asking user to update the Astra addon to the version defined below.
 */
define( 'ASTRA_EXT_MIN_VER', '4.1.0' );

/**
 * Setup helper functions of Astra.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-theme-options.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-theme-strings.php';
require_once ASTRA_THEME_DIR . 'inc/core/common-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-icons.php';

/**
 * Update theme
 */
require_once ASTRA_THEME_DIR . 'inc/theme-update/astra-update-functions.php';
require_once ASTRA_THEME_DIR . 'inc/theme-update/class-astra-theme-background-updater.php';

/**
 * Fonts Files
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-font-families.php';
if ( is_admin() ) {
	require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts-data.php';
}

require_once ASTRA_THEME_DIR . 'inc/lib/webfont/class-astra-webfont-loader.php';
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-fonts.php';

require_once ASTRA_THEME_DIR . 'inc/dynamic-css/custom-menu-old-header.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/container-layouts.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/astra-icons.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-walker-page.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-enqueue-scripts.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-gutenberg-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-wp-editor-css.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/block-editor-compatibility.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/inline-on-mobile.php';
require_once ASTRA_THEME_DIR . 'inc/dynamic-css/content-background.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-dynamic-css.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-global-palette.php';

/**
 * Custom template tags for this theme.
 */
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-attr.php';
require_once ASTRA_THEME_DIR . 'inc/template-tags.php';

require_once ASTRA_THEME_DIR . 'inc/widgets.php';
require_once ASTRA_THEME_DIR . 'inc/core/theme-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/admin-functions.php';
require_once ASTRA_THEME_DIR . 'inc/core/sidebar-manager.php';

/**
 * Markup Functions
 */
require_once ASTRA_THEME_DIR . 'inc/markup-extras.php';
require_once ASTRA_THEME_DIR . 'inc/extras.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog-config.php';
require_once ASTRA_THEME_DIR . 'inc/blog/blog.php';
require_once ASTRA_THEME_DIR . 'inc/blog/single-blog.php';

/**
 * Markup Files
 */
require_once ASTRA_THEME_DIR . 'inc/template-parts.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-loop.php';
require_once ASTRA_THEME_DIR . 'inc/class-astra-mobile-header.php';

/**
 * Functions and definitions.
 */
require_once ASTRA_THEME_DIR . 'inc/class-astra-after-setup-theme.php';

// Required files.
require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-helper.php';

require_once ASTRA_THEME_DIR . 'inc/schema/class-astra-schema.php';

/* Setup API */
require_once ASTRA_THEME_DIR . 'admin/includes/class-astra-api-init.php';

if ( is_admin() ) {
	/**
	 * Admin Menu Settings
	 */
	require_once ASTRA_THEME_DIR . 'inc/core/class-astra-admin-settings.php';
	require_once ASTRA_THEME_DIR . 'admin/class-astra-admin-loader.php';
	require_once ASTRA_THEME_DIR . 'inc/lib/astra-notices/class-astra-notices.php';
}

/**
 * Metabox additions.
 */
require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-boxes.php';

require_once ASTRA_THEME_DIR . 'inc/metabox/class-astra-meta-box-operations.php';

/**
 * Customizer additions.
 */
require_once ASTRA_THEME_DIR . 'inc/customizer/class-astra-customizer.php';

/**
 * Astra Modules.
 */
require_once ASTRA_THEME_DIR . 'inc/modules/posts-structures/class-astra-post-structures.php';
require_once ASTRA_THEME_DIR . 'inc/modules/related-posts/class-astra-related-posts.php';

/**
 * Compatibility
 */
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gutenberg.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-jetpack.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/woocommerce/class-astra-woocommerce.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/edd/class-astra-edd.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/lifterlms/class-astra-lifterlms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/learndash/class-astra-learndash.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bb-ultimate-addon.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-contact-form-7.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-visual-composer.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-site-origin.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-gravity-forms.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-bne-flyout.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-ubermeu.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-divi-builder.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-amp.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-yoast-seo.php';
require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-starter-content.php';
require_once ASTRA_THEME_DIR . 'inc/addons/transparent-header/class-astra-ext-transparent-header.php';
require_once ASTRA_THEME_DIR . 'inc/addons/breadcrumbs/class-astra-breadcrumbs.php';
require_once ASTRA_THEME_DIR . 'inc/addons/scroll-to-top/class-astra-scroll-to-top.php';
require_once ASTRA_THEME_DIR . 'inc/addons/heading-colors/class-astra-heading-colors.php';
require_once ASTRA_THEME_DIR . 'inc/builder/class-astra-builder-loader.php';

// Elementor Compatibility requires PHP 5.4 for namespaces.
if ( version_compare( PHP_VERSION, '5.4', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-elementor-pro.php';
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-web-stories.php';
}

// Beaver Themer compatibility requires PHP 5.3 for anonymus functions.
if ( version_compare( PHP_VERSION, '5.3', '>=' ) ) {
	require_once ASTRA_THEME_DIR . 'inc/compatibility/class-astra-beaver-themer.php';
}

require_once ASTRA_THEME_DIR . 'inc/core/markup/class-astra-markup.php';

/**
 * Load deprecated functions
 */
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-filters.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-hooks.php';
require_once ASTRA_THEME_DIR . 'inc/core/deprecated/deprecated-functions.php';

add_filter( 'gettext', function( $text ) {
	if ( 'Search Results for: %s' === $text ) {
		$text = '%s';
	}

	return $text;
} );



// Working by EXplore Logics
function enqueue_custom_scripts() {
	wp_enqueue_script('jquery');
	wp_enqueue_script('custom_checkout_payment_update', get_template_directory_uri() . '/js/custom_checkout_payment_update.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');

add_action('woocommerce_cart_calculate_fees', 'calculate_distance_based_fee');
function calculate_distance_based_fee($cart) {
	if (is_checkout()) {
		$area_fee = 0;
		$selected_area = WC()->session->get('billing_area_dropdown');
		if ($selected_area) {
			$areas_with_fee = array(
				'Manor-78653',
				'Hutto-78634',
				'Salado-76571',
				'Dripping-Springs-78620',
				'Spicewood-78669',
				'Sweetwater-78669',
				'Circle-C-78749-78739',
				'Far-South-Austin-78747',
				'Burnett-78611',
			);
			if (in_array($selected_area, $areas_with_fee, true)) {
				$area_fee = 65;
				$link = '<a href="' . get_permalink(get_page_by_title('Travel Package')) . '" target="_blank">Travel Package</a>';
				add_filter('woocommerce_cart_totals_fee_html', function($html, $fee) use ($link) {
					if ($fee->name === 'Travel Fee') {
						$html = '$65 ' . $link;
					}
					return $html;
				}, 10, 2);
				WC()->cart->add_fee('Travel Fee', $area_fee);
			}
		}

		$chosen_payment_method = WC()->session->get('chosen_payment_method');
		if (in_array($chosen_payment_method, array('stripe', 'paypal', 'ppcp-gateway'))) {
			$cart_total = $cart->get_subtotal() + $area_fee;
			$service_fee = $cart_total * 0.04;
			WC()->cart->add_fee(__('Card Payment Charges', 'Astra'), $service_fee);
		}
	} else {
	}
}

add_filter('woocommerce_checkout_fields', 'add_area_dropdown_to_checkout');
function add_area_dropdown_to_checkout($fields) {
	$last_selected_value = WC()->session->get('billing_area_dropdown', '000');
	$fields['billing']['billing_area_dropdown'] = array(
		'type'        => 'select',
		'label'       => __('Select Area', 'Astra'),
		'required'    => true,
		'options'     => array(
			'000'        => __('Select an option', 'Astra'),
			'Manor-78653' => __('Manor - 78653', 'Astra'),
			'Hutto-78634' => __('Hutto – 78634', 'Astra'),
			'Salado-76571' => __('Salado – 76571', 'Astra'),
			'Dripping-Springs-78620' => __('Dripping Springs - 78620', 'Astra'),
			'Spicewood-78669' => __('Spicewood - 78669', 'Astra'),
			'Sweetwater-78669' => __('Sweetwater - 78669', 'Astra'),
			'Circle-C-78749-78739' => __('Circle C – 78749, 78739', 'Astra'),
			'Far-South-Austin-78747' => __('Far South Austin – 78747', 'Astra'),
			'Burnett-78611' => __('Burnett - 78611', 'Astra'),
			'Not-applicable' => __('Not applicable', 'Astra'),
		),
		'default' => $last_selected_value,
	);
	return $fields;
}

add_action('woocommerce_checkout_update_order_meta', 'save_area_dropdown_to_order_meta');
function save_area_dropdown_to_order_meta($order_id) {
	if (!empty($_POST['billing_area_dropdown'])) {
		$selected_value = sanitize_text_field($_POST['billing_area_dropdown']);
		WC()->session->set('billing_area_dropdown', $selected_value);
		update_post_meta($order_id, '_billing_area_dropdown', sanitize_text_field($_POST['billing_area_dropdown']));
	}
}

// add_action('woocommerce_admin_order_data_after_billing_address', 'display_area_dropdown_in_admin', 10, 1);
// function display_area_dropdown_in_admin($order) {
// 	$custom_dropdown = get_post_meta($order->get_id(), '_billing_area_dropdown', true);
// 	if ($custom_dropdown) {
// 		echo '<p><strong>' . __('Selected Area:', 'Astra') . '</strong> ' . esc_html($custom_dropdown) . '</p>';
// 	}
// }

add_action('wp_ajax_update_travel_fee', 'update_travel_fee');
add_action('wp_ajax_nopriv_update_travel_fee', 'update_travel_fee');
function update_travel_fee() {
	if (!isset($_POST['selected_area'])) {
		wp_send_json_error(['message' => 'No area selected.']);
	}
	$selected_area = sanitize_text_field($_POST['selected_area']);
	WC()->session->set('billing_area_dropdown', $selected_area);
	$selected_area2 = WC()->session->get('billing_area_dropdown');
	wp_send_json_success(['message' => 'Travel fee updated.', 'selected_area' => $selected_area2]);
}

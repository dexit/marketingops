<?php
/**
 * Add to Cart Input Template - Account Fund Products
 *
 * @package WooCommerce-One-Page-Checkout/Templates
 * @version 1.0
 */

defined( 'ABSPATH' ) || exit;

ob_start();

woocommerce_simple_add_to_cart();

echo str_replace( array( '<form', '</form>', 'method="post"', "enctype='multipart/form-data'" ), array( '<div', '</div>', '', '' ), ob_get_clean() );  // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped

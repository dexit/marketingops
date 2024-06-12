<?php
/**
 * Order XML default columns
 *
 * @link
 *
 * @package ImportExportSuite
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Default meta columns for xml.
 *
 * Enables adding extra arguments or setting defaults for the request.
 *
 * @since 1.0.0
 *
 * @param array   $columns    Import columns.
 */
return apply_filters(
	'hf_xml_order_default_meta_columns',
	array(
		'_billing_address_1'       => '_billing_address_1',
		'_billing_address_2'       => '_billing_address_2',
		'_billing_city'            => '_billing_city',
		'_billing_company'         => '_billing_company',
		'_billing_country'         => '_billing_country',
		'_billing_email'           => '_billing_email',
		'_billing_first_name'      => '_billing_first_name',
		'_billing_last_name'       => '_billing_last_name',
		'_billing_phone'           => '_billing_phone',
		'_billing_postcode'        => '_billing_postcode',
		'_billing_state'           => '_billing_state',
		'_shipping_address_1'      => '_shipping_address_1',
		'_shipping_address_2'      => '_shipping_address_2',
		'_shipping_city'           => '_shipping_city',
		'_shipping_company'        => '_shipping_company',
		'_shipping_phone'          => '_shipping_phone',
		'_shipping_country'        => '_shipping_country',
		'_shipping_first_name'     => '_shipping_first_name',
		'_shipping_last_name'      => '_shipping_last_name',
		'_shipping_method'         => '_shipping_method',
		'_shipping_postcode'       => '_shipping_postcode',
		'_shipping_state'          => '_shipping_state',
		'wf_order_exported_status' => 'wf_order_exported_status',
		'_payment_method'          => '_payment_method',
		'_payment_method_title'    => '_payment_method_title',
		'_completed_date'          => '_completed_date',
		'_customer_email'          => '_customer_email',
		'_fee_total'               => '_fee_total',
		'_order_currency'          => '_order_currency',
		'_order_total'             => '_order_total',
		'_order_number'            => '_order_number',
		'_cart_discount'           => '_cart_discount',
		'_order_discount'          => '_order_discount',
		'_discount_total'          => '_discount_total',
		'_tax_total'               => '_tax_total',
		'_date_completed'          => '_date_completed',
		'_shipping_tax_total'      => '_shipping_tax_total',
		'_paid_date'               => '_paid_date',
		'_customer_user'           => '_customer_user',
		'_order_shipping'          => '_order_shipping',
		'_order_shipping_tax'      => '_order_shipping_tax',
	)
);

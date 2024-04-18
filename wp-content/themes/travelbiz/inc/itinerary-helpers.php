<?php
/**
 * As many pricing related functions in WP Travel 4.4.0 are deprecated,
 * we are making some backward compatible helper functions for the theme.
 *
 * @since 1.1.3
 */

/**
 * Exit if accessed directly.
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function travelbiz_itinerary_get_price( $trip_id, $is_regular_price = false, $pricing_id = '', $category_id = '', $price_key = '' ) {

	if ( method_exists( 'WP_Travel_Helpers_Pricings', 'get_price' ) ) {

		/**
		 * Support for WP Travel 4.4.0 and greater.
		 */
		$args = array(
			'trip_id'          => $trip_id,
			'is_regular_price' => $is_regular_price,
			'pricing_id'       => $pricing_id,
			'category_id'      => $category_id,
			'price_key'        => $price_key,
		);
		return WP_Travel_Helpers_Pricings::get_price( $args );
	} else {
		return wp_travel_get_price( $trip_id, $is_regular_price, $pricing_id, $category_id, $price_key );
	}
}

function travelbiz_itinerary_is_sale_enabled( $trip_id, $from_price_sale_enable = false, $pricing_id = '', $category_id = '', $price_key = '' ) {

	if ( method_exists( 'WP_Travel_Helpers_Trips', 'is_sale_enabled' ) ) {

		/**
		 * Support for WP Travel 4.4.0 and greater.
		 */
		$args = array(
			'trip_id'                => $trip_id,
			'from_price_sale_enable' => $from_price_sale_enable,
			'pricing_id'             => $pricing_id,
			'category_id'            => $category_id,
			'price_key'              => $price_key,
		);
		return WP_Travel_Helpers_Trips::is_sale_enabled( $args );
	} else {
		return wp_travel_is_enable_sale_price( $trip_id, $from_price_sale_enable, $pricing_id, $category_id, $price_key );
	}
}

function travelbiz_itinerary_get_sale_price( $trip_id = 0 ) {

	if ( ! $trip_id ) {
		return 0;
	}

	if ( method_exists( 'WP_Travel_Helpers_Pricings', 'get_price' ) ) {

		/**
		 * Support for WP Travel 4.4.0 and greater.
		 */
		$args = array(
			'trip_id'          => $trip_id,
			'is_regular_price' => true,
		);
		return WP_Travel_Helpers_Pricings::get_price( $args );
	} else {
		return wp_travel_get_trip_sale_price( $trip_id );
	}

}

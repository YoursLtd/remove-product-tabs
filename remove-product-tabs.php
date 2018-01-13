<?php
/*
Plugin Name: Remove Product Tabs
Author: JointByte - Anthony Iacono
Version: 1.0
Text Domain: remove-product-tabs
*/

add_action('init', 'remove_product_tabs_init');

function remove_product_tabs_init() {
	remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
}
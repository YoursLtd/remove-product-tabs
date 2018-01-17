<?php
/*
Plugin Name: Remove Product Tabs
Plugin URI: https://github.com/YoursLtd/remove-product-tabs
Author: JointByte - Anthony Iacono
Author URI: http://yoursltd.com
Version: 1.0
Text Domain: remove-product-tabs
*/

add_action('init', 'remove_product_tabs_init');

function remove_product_tabs_init() {
	remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
}
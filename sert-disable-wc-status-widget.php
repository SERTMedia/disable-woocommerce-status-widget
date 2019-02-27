<?php 
/*
Plugin Name: Disable WooCommerce Status Widget
Plugin URI: https://www.sertmedia.com
Description: Disables the WooCommerce Status widget in the wordpress admin dashboard this can greatly reduce load time of the admin panel for stores with lots of sales, reviews, or products.
Version: 1.0
Author: SERTMedia
Author URI: https://www.sertmedia.com
*/

function remove_woocommerce_status_widget(){
    remove_meta_box( 'woocommerce_dashboard_status', 'dashboard', 'normal');    
}
add_action('wp_user_dashboard_setup', 'remove_woocommerce_status_widget', 20);
add_action('wp_dashboard_setup', 'remove_woocommerce_status_widget', 20);
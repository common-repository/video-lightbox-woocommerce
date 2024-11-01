<?php
/**
 * Plugin Name: Video Lightbox WooCommerce
 * Plugin URI: http://lightbox.tipsandtricks-hq.com/video-lightbox-woocommerce-integration/
 * Description: Addon for integrating WooCommerce with Video Lightbox plugin
 * Version: 1.0
 * Author: Tips and Tricks HQ, wptipsntricks
 * Author URI: http://lightbox.tipsandtricks-hq.com/
 * Requires at least: 3.0
 */
if (!defined('ABSPATH'))
    exit;

add_filter('woocommerce_single_product_image_html', 'video_lightbox_woo_single_product_image_html', 10, 2);
add_filter('woocommerce_single_product_image_thumbnail_html', 'video_lightbox_woo_single_product_image_thumbnail_html', 10, 2);

function video_lightbox_woo_single_product_image_html($output, $post_id) 
{
    $rel = "";
    if(defined('WPVL_PRETTYPHOTO_REL')){
        $rel = WPVL_PRETTYPHOTO_REL;
    }
    if(defined('WP_LIGHTBOX_PRETTYPHOTO_REL')){
        $rel = WP_LIGHTBOX_PRETTYPHOTO_REL;
    }
    if(!empty($rel)){
        $output = str_replace('data-rel="prettyPhoto', 'rel="'.$rel, $output);
    }
    return $output;
}

function video_lightbox_woo_single_product_image_thumbnail_html($output, $post_id) 
{
    $rel = "";
    if(defined('WPVL_PRETTYPHOTO_REL')){
        $rel = WPVL_PRETTYPHOTO_REL;
    }
    if(defined('WP_LIGHTBOX_PRETTYPHOTO_REL')){
        $rel = WP_LIGHTBOX_PRETTYPHOTO_REL;
    }
    if(!empty($rel)){
        $output = str_replace('data-rel="prettyPhoto', 'rel="'.$rel, $output);
    }
    return $output;
}


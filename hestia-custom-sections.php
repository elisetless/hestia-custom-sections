<?php
/*
Plugin Name: Hestia Custom Sections
Plugin URI: https://github.com/elisetless/hestia-custom-sections
Description: Adds a custom promotional banner above the Hestia hero section using WordPress hooks.
Version: 1.0.0
Author: Eli Setless
License: MIT
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
function hcs_render_banner() {

    $desktop_image = plugin_dir_url( __FILE__ ) . 'assets/banner-desktop.png';
    $mobile_image  = plugin_dir_url( __FILE__ ) . 'assets/banner-mobile.png';

    echo '<div class="custom-banner desktop-banner">';
    echo '<img src="' . $desktop_image . '" alt="Desktop Banner" class="banner-image">';
    echo '<div class="banner-content">';
    echo '<div class="custom-banner-spacer desktop-spacer"></div>';
    echo '<a href="mailto:example@example.com?subject=Example%20Subject&body=Example%20Body" class="square-button">Learn More</a>';
    echo '</div>';
    echo '</div>';

    echo '<div class="custom-banner mobile-banner">';
    echo '<img src="' . $mobile_image . '" alt="Mobile Banner" class="banner-image">';
    echo '<div class="banner-content">';
    echo '<div class="custom-banner-spacer mobile-spacer"></div>';
    echo '<a href="mailto:example@example.com?subject=Example%20Subject&body=Example%20Body" class="square-button">Learn More</a>';
    echo '</div>';
    echo '</div>';
}
add_action( 'hestia_before_big_title_section_hook', 'hcs_render_banner' );
?>

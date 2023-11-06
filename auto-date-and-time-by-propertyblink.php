<?php
/*
Plugin Name: Auto Date And Time By PropertyBlink
Plugin URI: https://propertyblink.com
Description: A lightweight Plugin with shortcode to display the current month and year automaticaly.
Version: 1.0
Author: PropertyBlink
Author URI: https://propertyblink.com/about-us/
License: GPL2
*/

function current_month_year_shortcode() {
    $output = date('M Y');
    return $output;
}
add_shortcode('current_month_year', 'current_month_year_shortcode');


/*Important Note:
We need to add below 2 filter functions in themes function.php file
Wordpress Dasdboard > Appreance > Them file editor > child theme or parent theme which is activated > functions.php


// Enable shortcodes in post titles
add_filter('the_title', 'do_shortcode'); //For Without any SEO plugin

// Enable shortcodes in post titles if we are using Yoast SEO plugin. If we are using Yoast SEO plugin then we also need add below function.
add_filter( 'wpseo_title', 'do_shortcode' ); //For Yoast SEO


Refrences:
https : // stackoverflow . com/questions/6845403/using-wordpress-shortcode-in-a-title
https : // developer.yoast . com/features/seo-tags/titles/api/
*/
?>
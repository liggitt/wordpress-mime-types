<?php
/*
Plugin Name: Mime Types
Plugin URI: https://github.com/liggitt/wordpress-mime-types
Description: Adds allowed mime-types
Version: 1.0
Author: Jordan Liggitt
Author URI: http://jordan.liggitt.net
License: GPL2
*/       

function net_liggitt_add_mime_types($mimes) {
    $mimes = array_merge($mimes, array(
        'epub|mobi' => 'application/octet-stream'
    ));
    return $mimes;
}
add_filter('upload_mimes', 'net_liggitt_add_mime_types');

?>
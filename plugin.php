<?php
/*
Plugin Name: 404-Redirect
Plugin URI: https://github.com/1Conan/404-redirect-YOURLS
Description: A simple plugin which sets the 404 header for unkown links.
Version: 1.0
Author: 1Conan
Author URI: https://github.com/1Conan
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_action('redirect_keyword_not_found', '1c_setheader_404');
function 1c_setheader_404() {
	http_response_code(404);
}
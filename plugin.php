<?php
/*
	Plugin Name: 404-Redirect
	Plugin URI: https://github.com/1Conan/404-redirect-YOURLS
	Description: A simple plugin which sets the 404 header and shows the 404 page for unknown links.
	Version: 1.4
	Author: 1Conan
	Author URI: https://github.com/1Conan
*/
	
// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();
	
yourls_add_action('redirect_keyword_not_found', 'conan_setheader_404');
function conan_setheader_404() {
	yourls_status_header( 404 );
	$a = (isset($_SERVER['HTTPS'])) ? "https://" : "http://";
	if(function_exists('curl_exec')){
		$handle = curl_init( $a . $_SERVER["HTTP_HOST"] .'/'.CON_404_PAGE );
		curl_exec($handle);
	} else if (ini_get('allow_url_fopen')) {
		echo file_get_contents( $a . $_SERVER["HTTP_HOST"] .'/'.CON_404_PAGE );
	} else {
		yourls_redirect( $a . $_SERVER["HTTP_HOST"] .'/'.CON_404_PAGE, 404 );
	}
	die();
}

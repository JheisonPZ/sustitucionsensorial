<?php
ob_clean(); ob_start();
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$login_url = $actual_link."wp-login.php";

//header('Location: '.$actual_link."wp-login.php");die;

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );

$current_user = wp_get_current_user()->user_login; 
get_header();
if(!$current_user){
	$url = $login_url ;
	wp_redirect( $url );
	exit;
}

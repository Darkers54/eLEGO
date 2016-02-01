<?php
//
// Recommended way to include parent theme styles.
//  (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
//  
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}

// Logout Redirect

function elego_logout_redirect()
{
	wp_redirect(home_url());
	exit;
}

function elego_login($user_login, $user) {
	$_SESSION['user'] = [
		'id' 			=> $user->data->ID,
		'display_name' 	=> $user->data->display_name,
		'email' 		=> $user->data->user_email,
	];
}
function elego_logout() {
	unset($_SESSION['user']);
}

function elego_session_start() {
	if(!session_id()) {
		session_start();
	}
}

add_action('wp_logout', 	'elego_logout_redirect');
add_action('init', 			'elego_session_start');
add_action('wp_login', 		'elego_login', 10, 2);
add_action('wp_logout', 	'elego_logout');
//
// Your code goes below
//
<?php



// Incluir Bootstrap CSS
function bootstrap_css() {
	wp_enqueue_style( 'bootstrap_css', 
  					get_stylesheet_directory_uri() . '/css/bootstrap.min.css', 
  					array(), 
  					'4.5.0'
  					); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_css');

// Incluir Bootstrap JS
function bootstrap_js() {
	wp_enqueue_script( 'bootstrap_js', 
  					get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
  					array('jquery'), 
  					'4.5.0', 
  					true); 
}
add_action( 'wp_enqueue_scripts', 'bootstrap_js');

function load_assets( ){
	wp_enqueue_style( 'style',get_stylesheet_uri() );
	}      
	add_action('wp_enqueue_scripts', 'load_assets');

//scrip para agregar placeholders
	add_action( 'login_enqueue_scripts', 'wpse_login_enqueue_scripts', 10 );
function wpse_login_enqueue_scripts() {
    wp_enqueue_script( 'custom.js', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), 1.0 );
}

//archivos de font awesome
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css' );
}

?>
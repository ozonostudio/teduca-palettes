<?php
/*
Plugin Name: Teduca Palettes
Plugin URI: https://teduca.club/colores
Description: Insert, display and let your users copy colors palettes.
Author: Teduca
Author URI: https://teduca.club
Text Domain: teduca_palettes
Domain Path: /languages
Version: 1.0

*/

add_action( 'plugins_loaded', 'teduca_palettes_setup' );
function teduca_palettes_setup() {
	add_action( 'init', 'teduca_palettes_init' );
	add_action( 'wp_enqueue_scripts', 'teduca_palettes_enqueue_scripts' );
}

function teduca_palettes_init(){
	load_plugin_textdomain( 'teduca_palettes', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	add_shortcode( 'palette', 'teduca_palettes_shortcode' );
}

function teduca_palettes_enqueue_scripts(){
	wp_enqueue_style( 'teduca-palettess-style', plugins_url('/style.css', __FILE__) );
	wp_enqueue_script( 'teduca-palettes-script', plugins_url('/copy.js', __FILE__), 1.0, true);
}


// SHORTCODE HELPER
function teduca_palettes_shortcode( $args ){
	ob_start();	
	if( isset($args['colors']) )
	{
		teduca_palettes( explode(",", $args['colors']),$args['title'],$args['height'] );
	}
	elseif( isset($args['color']) ) // FOR TYPOS
	{
		teduca_palettes( explode(",", $args['color']),$args['title'],$args['height'] );
	}
	else
	{
		echo '';
	}
	
	$output = ob_get_contents();
	ob_end_clean();
	return $output;
}

function teduca_palettes( $colors, $t=null, $h=null){
	$title = $t;
	$height = 'style=height:'.$h;
	$onClick='onclick=copy(this)';
	
	if(!isset($h)){
		$height = 'style=height:250px;';
	}
	
	$palette = array();
	foreach( $colors as $color ){
		
		$color = trim( str_replace("#", "", $color)  );
		
		if( !$color ) continue;
		if( strlen( $color ) != 6 AND  strlen( $color ) != 3) continue;

		$palette[] = $color;
	}
	
	// USE teduca-palettes.php, CREATE YOUR OWN AND PUT IN YOUR THEME
	$template = locate_template( array( "tpalette.php" ) );
			
	// NO CUSTOM, LOOK IN PLUGIN
	if( !$template ){
		$template = dirname(__FILE__) . "/tpalette.php";
	}
	
	// LOAD TEMPLATE
	if( $template ){
		include( $template );
	}
}
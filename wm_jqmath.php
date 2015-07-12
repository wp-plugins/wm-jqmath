<?php
/*
Plugin Name: WM jqMath
Plugin URI: http://webmind.pt/portfolio/wm-jqmath/
Description: Create math formulas on your posts and pages using jqMath from MathScribe
Author: Carlos Santos, webmind.pt
Version: 1.0
Author URI: http://www.webmind.pt
License: MIT
*/

// Add style and scripts
function wmjqmath_enqueued_assets() {
    wp_enqueue_style( 'jqmath-css', plugin_dir_url( __FILE__ ) . 'css/jqmath-0.4.0.css' );
    wp_enqueue_script( 'jqmath-script', plugin_dir_url( __FILE__ ) . 'js/jqmath-etc-0.4.2.min.js', array( 'jquery' ), '1.0', false );
    wp_enqueue_script( 'jscurry-script', plugin_dir_url( __FILE__ ) . 'js/jscurry-0.3.0.min.js', array( 'jquery' ), '1.0', false );
}

// Generate jqMath formula from shortcode
function Generate_jqMathFormula ($p = array()) {
    
    // Default params
    extract(shortcode_atts(array(
        'expr' => '$$y=f(x)$$',
        'style' => ''
    ), $p));
    
    // Create formula
    $jqMathFormula = '<div' . ($style!='' ? ' style="' . $style . '"' : '') . '>' . $expr . '</div>';
    return $jqMathFormula;
        
}

add_action( 'wp_enqueue_scripts', 'wmjqmath_enqueued_assets' );
add_shortcode( 'jqmath', 'Generate_jqMathFormula' );
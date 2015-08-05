<?php
/*
Plugin Name: WM jqMath
Plugin URI: http://webmind.pt/portfolio/wm-jqmath/
Description: Create math formulas on your posts and pages using jqMath from MathScribe
Author: Carlos Santos, webmind.pt
Version: 1.3
Author URI: http://www.webmind.pt
License: MIT
*/

// Add style and scripts
function wmjqmath_enqueued_assets() {
    wp_enqueue_style( 'jqmath-css', plugin_dir_url( __FILE__ ) . 'css/jqmath-0.4.3.css' );
    wp_enqueue_script( 'jqmath-script', plugin_dir_url( __FILE__ ) . 'js/jqmath-etc-0.4.3.min.js', array( 'jquery' ), '0.4.3', false );
}

// Enable jqMath on post
function enable_jqMath ($p = array()) {
    wmjqmath_enqueued_assets();
}

// Generate jqMath formula from shortcode
function generate_jqMathFormula ($p = array()) {
    
    // Default params
    extract(shortcode_atts(array(
        'expr' => '$$y=f(x)$$',
        'style' => ''
    ), $p));
    
    // Create formula
    $jqMathFormula = '<span' . ($style!='' ? ' style="' . $style . '"' : '') . '>' . $expr . '</span>';
    return $jqMathFormula;
        
}

add_shortcode( 'enable_jqmath', 'enable_jqMath' );
add_shortcode( 'jqmath', 'generate_jqMathFormula' );
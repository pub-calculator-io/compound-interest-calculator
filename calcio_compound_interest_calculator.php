<?php
/*
Plugin Name: Compound Interest Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/compound-interest-calculator/
Description: Maximize your investments with our Compound Interest Calculator. Easily calculate how daily, monthly, or annual compounding grows your savings over time.
Version: 1.0.0
Author: www.calculator.io / Compound Interest Calculator
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: calcio_compound_interest_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Compound Interest Calculator by www.calculator.io";

function calcio_compound_interest_calculator_shortcode(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Compound Interest Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="calcio_compound_interest_calculator_iframe"></iframe></div>';
}


add_shortcode( 'calcio_compound_interest_calculator', 'calcio_compound_interest_calculator_shortcode' );
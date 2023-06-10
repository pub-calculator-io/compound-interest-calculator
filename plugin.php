<?php
/*
Plugin Name: Compound Interest Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/compound-interest-calculator/
Description: Compound interest calculator that uses the interest formula (A = P(1 + r/n)^nt) to help users understand the impacts of compound interest and money growth over time.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_compound_interest_calculator
*/

if (!function_exists('add_shortcode')) die("No direct call");

function display_ci_compound_interest_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/compound-interest-calculator/" target="_blank"><img src="' . plugins_url('assets/images/icon-48.png', __FILE__ ) . '" width="48" height="48"></a> Compound Interest Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . plugins_url($page, __FILE__ ) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_compound_interest_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_compound_interest_calculator', 'display_ci_compound_interest_calculator' );
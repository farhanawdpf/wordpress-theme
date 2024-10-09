<?php
/*
Plugin Name: Test Plugin
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Checks the health of your WordPress install
Version: 0.1.0
Author: The Test Plugin Team
Author URI: http://health-check-team.example.com
Text Domain: test-plugin
Domain Path: /languages
*/

add_shortcode( 'hello_world_shortcode','hello_world_output' );

//define function to show output
// function hello_world_output( $atts, $content = '', $tag ){
//     $html = '';
//     $html .= '<h1>Hello World</h1>';
//     return $html;
// }

function print_hello_world_title()  {
  echo "<h1>Hello World</h1>"; 
}
function hello_world_admin_menu()  {
  add_menu_page(
    'Hello World',// page title  
    'Hello World Menu Title',// menu title  
    'manage_options',// capability  
    'hello-world',// menu slug  
    function () {
        include dirname(__FILE__) . '/page.php';
    }
  );  
}  
add_action( 'admin_menu', 'hello_world_admin_menu' );
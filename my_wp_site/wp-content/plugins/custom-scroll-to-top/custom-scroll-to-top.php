<?php
/**
 * Plugin Name:       Custom Scroll To Top
 * Plugin URI:        https://wordpress.org/plugins/custom-scroll-to-top/
 * Description:       Simple Scroll to top plugin will help you to enable Back to Top button to your WordPress website.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            FF
 * Author URI:        https://techfarhana.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/farhanawdpf
 * Text Domain:       text
 */


  // Including CSS
  function text_enqueue_style(){
    wp_enqueue_style('text-style', plugins_url('css/text-style.css', __FILE__));
  }
  add_action( "wp_enqueue_scripts", "text_enqueue_style" );

  // Including JavaScript
  function text_enqueue_scripts(){
    wp_enqueue_script('jquery');
    wp_enqueue_script('text-plugin-script', plugins_url('js/text-plugin.js', __FILE__), array(), '1.0.0', 'true');
  }
  add_action( "wp_enqueue_scripts", "text_enqueue_scripts" );

  // jQuery Plugin Setting Activation
  function text_scroll_script(){
    ?>
      <script>
        jQuery(document).ready(function () {
          jQuery.scrollUp();
        });
      </script>
    <?php
}
add_action( "wp_footer", "text_scroll_script" );


// Plugin Customization Sattings
add_action( "customize_register", "text_scroll_to_top" );
function text_scroll_to_top($wp_customize){
  $wp_customize-> add_section('text_scroll_top_section', array(
    'title' => __('Scroll To Top', 'tt'),
    'description' => 'Simple Scroll to top plugin will help you to enable Back to Top button to your WordPress website.',
  ));

  $wp_customize ->add_setting('text_default_color', array(
    'default' => '#000000',
  ));
  $wp_customize->add_control('text_default_color', array(
      'label'   => 'Background Color',
      'section' => 'text_scroll_top_section',
      'type'    => 'color',
  ));
  // Adding Rounded Corner
  $wp_customize ->add_setting('text_rounded_corner', array(
    'default' => '5px',
    'description' => 'If you need fully rounded or circular then use 25px here.',
  ));
  $wp_customize->add_control('text_rounded_corner', array(
      'label'   => 'Rounded Corner',
      'section' => 'text_scroll_top_section',
      'type'    => 'text',
  ));
}

// Theme CSS Customization
function text_theme_color_cus(){
  ?>
  <style>
    #scrollUp {
    background-color: <?php print get_theme_mod("text_default_color"); ?>;
    border-radius: <?php print get_theme_mod("text_rounded_corner"); ?>;
  }
  </style>
  <?php 
}
add_action('wp_head', 'text_theme_color_cus');


?>
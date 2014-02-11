<?php
/*
  Plugin Name: include angularjs
  Plugin URI: https://github.com/raoulbuzziol
  Description: Include angularjs in a post (using custom field include-angularjs)
  Author: Raoul Buzziol
  Author URI: https://github.com/raoulbuzziol
  Version: 1.0
*/
function enqueue_angularjs () {
  global $post;
  $post_angularjs_include_value = get_post_meta($post->ID, 'include-angularjs', true);
  if (in_array($post_angularjs_include_value, array('true', '1')) ) {
    wp_enqueue_script('angularjs-js',           plugins_url('angular/angular.min.js', __FILE__), null, null, false);
    wp_enqueue_script('angularjs-resource-js',  plugins_url('angular/angular-resource.min.js', __FILE__), null, null, false);
    wp_enqueue_script('angularjs-route-js',     plugins_url('angular/angular-route.min.js', __FILE__), null, null, false);
    wp_enqueue_script('angularjs-sanitize-js',  plugins_url('angular/angular-sanitize.min.js', __FILE__), null, null, false);
    wp_enqueue_script('angularjs-locale_it-js', plugins_url('angular/i18n/angular-locale_it.js', __FILE__), null, null, false);
  }
}
add_action('wp_enqueue_scripts', 'enqueue_angularjs');
?>
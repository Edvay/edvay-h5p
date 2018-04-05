<?php
/**
 * H5P Plugin.
 *
 * Eases the creation and insertion of rich interactive content
 * into you blog. Find content libraries at http://h5p.org
 *
 * @package   H5P
 * @author    Joubel <contact@joubel.com>
 * @license   MIT
 * @link      http://joubel.com
 * @copyright 2014 Joubel
 *
 * @wordpress-plugin
 * Plugin Name:       H5P
 * Plugin URI:        http://h5p.org/wordpress
 * Description:       Allows you to upload, create, share and use rich interactive content on your WordPress site.
 * Version:           1.10.1
 * Author:            Joubel
 * Author URI:        http://joubel.com
 * Text Domain:       h5p
 * License:           MIT
 * License URI:       http://opensource.org/licenses/MIT
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/h5p/h5p-wordpress
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
  die;
}

require_once plugin_dir_path(__FILE__) . 'autoloader.php';

// Public-Facing Functionality
register_activation_hook(__FILE__, array('H5P_Plugin', 'activate'));
register_deactivation_hook( __FILE__, array('H5P_Plugin', 'deactivate'));
add_action('plugins_loaded', array('H5P_Plugin', 'get_instance'));



// Dashboard and Administrative Functionality
if (is_admin()) {
  add_action('plugins_loaded', array('H5P_Plugin_Admin', 'get_instance'));
}

add_action('init', 'theme_functionality_urls');

function theme_functionality_urls() {

  /* Order section by fb likes */
  add_rewrite_rule(
    '^tus-fotos/mas-votadas/page/(\d)?',
    'index.php?post_type=usercontent&orderby=fb_likes&paged=$matches[1]',
    'top'
  );
  add_rewrite_rule(
    '^tus-fotos/mas-votadas?',
    'index.php?post_type=usercontent&orderby=fb_likes',
    'top'
  );

}



add_filter('query_vars', 'custom_query_vars');

function custom_query_vars($vars){
  $vars[] = 'api_action';
  return $vars;
}

add_action('parse_request', 'custom_requests');
function custom_requests ( $wp ) { 

  $valid_actions = array('action1', 'action2');

  if(
    !empty($wp->query_vars['api_action']) &&
    in_array($wp->query_vars['api_action'], $valid_actions) 
  ) {

    // do something here
    
  }

}



<?php
/**
 * Edvay H5P Plugin.
 *
 * Edvay customization to H5P plugin.Eases the creation and insertion of rich interactive content
 * into you blog. Find content libraries at http://h5p.org
 *
 * @package   Edvay-H5P
 * @author    Vinayak <vinayak@edvay.com>
 * @license   MIT
 * @link      http://edvay.com
 * @copyright 2018 Joubel
 *
 * @wordpress-plugin
 * Plugin Name:       H5P
 * Plugin URI:        http://edvay.com/h5p
 * Description:       Allows you to upload, create, share and use rich interactive content on your WordPress site.
 * Version:           1.10.1
 * Author:            Vinayak
 * Author URI:        http://edvay.com
 * Text Domain:       h5p
 * License:           MIT
 * License URI:       http://opensource.org/licenses/MIT
 * Domain Path:       /languages
 * GitHub Plugin URI: https://github.com/Edvay/edvay-h5p
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



add_action( 'admin_menu', 'register_newpage' );

function register_newpage(){
    add_submenu_page('' ,'newpage title', 'test', 'manage_options', 'h5p/test.php', '', plugins_url( 'h5p/test.php' ), 6 );
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

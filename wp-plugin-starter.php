<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 30/05/2020
 * Time: 8:51 PM
 */

/**
 * @package         WordPressPluginStarter
 */

/**
 * Plugin Name:     WordPress Plugin Starter
 * Plugin URI:      https://github.com/mizanphp/wp-plugin-starter
 * Description:     WordPress Plugin Starter to start a WordPress plugin development in a right way.
 * Version:         1.0.0
 * Author:          Mizanur Rahman
 * Author URI:      https://www.facebook.com/mizan16cse
 * License:         GPLv3 or later
 * Text Domain:     wp-plugin-starter
 * @since           1.0.0
 * License URI:     http://www.gnu.org/licenses/gpl-3.0.html
 */


/**
 * Secured access
 */
defined('ABSPATH') or die('Hey, Something is not right in your mind!');

if(file_exists(dirname(__FILE__).'/vendor/autoload.php')){
    require_once dirname(__FILE__).'/vendor/autoload.php';
}

function activate_wp_plugin_starter(){
    WPPS\Includes\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_wp_plugin_starter');


function deactivate_wp_plugin_starter(){
    WPPS\Includes\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_wp_plugin_starter');


if(class_exists('WPPS\\Includes\\Init')){
    WPPS\Includes\Init::register_services();
}





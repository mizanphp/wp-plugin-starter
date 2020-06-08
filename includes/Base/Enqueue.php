<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 31/05/2020
 * Time: 6:26 PM
 */

/**
 * @package WordPressPluginStarter
 */

namespace WPPS\Includes\Base;

class Enqueue
{
    public function register(){
        add_action('admin_enqueue_scripts', [$this, 'admin_enqueue']);
        add_action('wp_enqueue_scripts', [$this, 'frontend_enqueue']);
    }

    //Admin
    function admin_enqueue()
    {
        //Style
        wp_enqueue_style('wpps-admin-style', WPPS_PLUGIN_URL.'resources/admin/css/admin.css');

        //Script
        wp_enqueue_script('wpps-admin-script', WPPS_PLUGIN_URL.'resources/admin/js/admin.js');
    }

    //Public
    function frontend_enqueue()
    {
        //Style
        wp_enqueue_style('wpps-admin-style', WPPS_PLUGIN_URL.'resources/public/css/public.css');

        //Script
        wp_enqueue_script('wpps-admin-script', WPPS_PLUGIN_URL.'resources/public/js/public.js');
    }
}
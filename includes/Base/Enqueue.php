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

class Enqueue extends BaseController
{
    public function register(){
        add_action('admin_enqueue_scripts', [$this, 'admin_enqueue']);
        add_action('wp_enqueue_scripts', [$this, 'frontend_enqueue']);
    }

    //Admin
    function admin_enqueue()
    {
        //Style
        wp_enqueue_style('wpps-admin-style', $this->plugin_url.'resources/admin/dist/css/admin.min.css');

        //Script
        wp_enqueue_script('wpps-admin-script', $this->plugin_url.'resources/admin/dist/js/admin.min.js');
    }

    //Public
    function frontend_enqueue()
    {
        //Style
        wp_enqueue_style('wpps-admin-style', $this->plugin_url.'resources/frontend/dist/css/frontend.min.css');

        //Script
        wp_enqueue_script('wpps-admin-script', $this->plugin_url.'resources/frontend/dist/js/frontend.min.js');
    }
}
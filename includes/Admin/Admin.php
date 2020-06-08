<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 7/06/2020
 * Time: 3:07 PM
 */

namespace WPPS\Includes\Admin;

class Admin
{
    public function register(){
        // Add admin pages
        add_action('admin_menu', [$this, 'add_admin_pages']);
    }

    public function add_admin_pages()
    {
        add_menu_page('Plugin Starter', 'Plugin Starter', 'manage_options', WPPS_PLUGIN_SLUG, [$this, 'admin_dashboard'], 'dashicons-cart', 3);
    }

    public function admin_dashboard()
    {
        require_once plugin_dir_path(__FILE__) . 'templates/dashboard.php';
    }
}
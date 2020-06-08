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

class SettingsLink extends BaseController
{
    public function register(){
        // Add setting link
        add_filter('plugin_action_links_' . $this->plugin_name, [$this, 'add_settings_link']);
    }

    public function add_settings_link($links)
    {
        $settings_link = '<a href="admin.php?page='.$this->plugin_slug.'">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }
}
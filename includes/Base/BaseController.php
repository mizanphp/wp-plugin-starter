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

class BaseController
{
    public $plugin_url;
    public $plugin_slug;
    public $plugin_name;

    public function __construct()
    {
        $this->plugin_url = plugin_dir_path(dirname(__FILE__,2));
        $this->plugin_slug = 'wp-plugin-starter';
        $this->plugin_name = plugin_basename(dirname(__FILE__,3)).'/wp-plugin-starter.php';
    }
}
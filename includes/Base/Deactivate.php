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

class Deactivate
{
    public static function deactivate(){
        flush_rewrite_rules();
    }
}
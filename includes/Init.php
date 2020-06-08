<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 7/06/2020
 * Time: 12:03 PM
 */


/**
 * @package WordPressPluginStarter
 */

namespace WPPS\Includes;

final class Init
{
    public static function get_services(){
        return [
            Admin\Admin::class,
            Base\Enqueue::class,
            Base\SettingsLink::class
        ];
    }

    public static function register_services(){
        foreach (self::get_services() as $class){
            $service = self::instantiate($class);

            if(method_exists($service, 'register')){
                $service->register();
            }
        }
    }

    public static function instantiate($class){
        $instant = new $class();
        return $instant;
    }
}
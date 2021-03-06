<?php
use Core\Config;
class App {
    public static $_instance;
    
    public static function load(){ // load les Autoloader et le sessionstart().
        session_start();
        require ROOT . '/app/AutoLoader.php';
        App\Autoloader::register();
        require ROOT . '/core/AutoLoader.php';
        Core\Autoloader::register();
        require ROOT . '/vendor/autoload.php';
    }    
    public static function getInstance() {
        if(self::$_instance === null){ 
            self::$_instance = new App();
        }
        return self::$_instance;
    }
}
<?php

namespace Core;

/**
* Class Autoloader
* @package Core
*/
class Autoloader{
    
    /**
    * Enregistre l'autoloader
    */

    static function register(){
        spl_autoload_register(array(__CLASS__ , 'autoload'));
    }

    /**
    * Inclue le fichier correspondant à la classe
    * @param $class string le nom de la class à charger
    */

    static function autoload($class){
        if(strpos($class, __NAMESPACE__ . '\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '', $class);
            $class = str_replace('\\', '/', $class);
            require  __DIR__ . '/' . $class . '.php';
        }
    }
}
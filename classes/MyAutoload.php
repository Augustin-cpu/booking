<?php

class MyAutoload{

    public static function autoload($classes){
        if(file_exists(CONTROLLERS.$classes.'.php')){
            require_once(CONTROLLERS.$classes.'.php');
        }
        elseif(file_exists(MODEL.$classes.'.php')){
            require_once(MODEL.$classes.'.php');
        }elseif(file_exists(CLASSES.$classes.'.php')){
            require_once(CLASSES.$classes.'.php');
        }
    }

    public static function register(){
        spl_autoload_register(array('MyAutoload','autoload'));
    }
}
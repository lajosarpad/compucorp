<?php

class Loader {
    private static $dirs = array("classes",
                                 "core",
                                 "models",
                                 "projects",
                                 "views");
    
    public static function ensureClass($class, $directory = null) {
        if (!class_exists($class)) {
            $directories = ((!!$directory) ? array($directory) : self::$dirs);
            foreach ($directories as $dir) {
                $file = $dir."/".$class.'.php';
                if (file_exists($file)) {
                    include $file;
                    return;
                }
            }
        }
        if (!class_exists($class)) {
            self::instantiate("ClassNotFoundException", $class, "core");
        }
    }
    
    public static function instantiate($class, $parameters, $directory = null) {
        self::ensureClass($class, $directory);
        $reflection = new ReflectionClass($class);
        return $reflection->newInstance($parameters);
    }
}

Loader::ensureClass("URLHandler", "classes");
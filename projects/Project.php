<?php

class Project {
    
    private static $currentProject = null;
    public function getCSS() {}
    public function getJavascript() {}
    public function loadModel($model = "main") {
        require_once "models/".strtolower(URLHandler::get("project"))."/".$model.".php";
    }
    public function getView($view, $parameters) {
        return Loader::instantiate($view."View", $parameters, "views");
    }
    
    public function instantiate($subclass, $parameters) {
        return Loader::instantiate("Project".$subclass, $parameters, "projects");
    }
    
    public static function current() {
        if (self::$currentProject === null) {
            session_start();
            self::$currentProject = Loader::instantiate("Project".URLHandler::get("project"), array());
        }
        return self::$currentProject;
    }
    
    public function __construct() {}
    
}
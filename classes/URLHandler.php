<?php

define("REQUEST_TYPE_GET", "GET");
define("REQUEST_TYPE_POST", "POST");
define("REQUEST_TYPE_PUT", "PUT");
define("REQUEST_TYPE_DELETE", "DELETE");
class URLHandler {
    private static $requestType = "";
    public static function getRequestType() {
        if (self::$requestType === "") {
            self::$requestType = $_SERVER['REQUEST_METHOD'];
        }
        return self::$requestType;
    }
    
    public static function get($key, $default = "") {
        if (isset($_GET[$key])) {
            return $_GET[$key];
        } else if (isset($_POST[$key])) {
            return $_POST[$key];
        }
        return $default;
    }
    
    public static function handleRequest() {
        Loader::ensureClass("Project");
        $params = array();
        if (!!self::get("params")) {
            $params = json_decode($params);
        }
        if (self::get("project", false) === false) {
            $_POST["project"] = "Weather";
        }
        Project::current()->loadModel(self::get("model", "main"));
        if (URLHandler::getRequestType() === REQUEST_TYPE_GET) {
            require_once "templates/layout.php";
        }
    }
    
}
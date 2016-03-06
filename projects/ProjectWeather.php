<?php

class ProjectWeather extends Project {
    
    public function getCSS() {
    ?>
    <link rel="stylesheet" href="css/weather.css"  >
    <?php
    }
    
    public function getJavascript() {
    ?>
    <script type="text/javascript" src="js/lib/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/prototypes/Initializable.js"></script>
    <script type="text/javascript" src="js/prototypes/Event.js"></script>
    <script type="text/javascript" src="js/prototypes/Weather.js"></script>
    <script type="text/javascript" src="js/pages/weather.js"></script>
    <?php
    }
    
    public function __construct() {
        
    }
    
}
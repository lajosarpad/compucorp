<?php

class WeatherView {
    private function main() {
    ?>
    <div id="main-container" class="allowed">
        <!-- 
        Example inputs:
        q=94040,us
        q=Arad
        q=Arad,ro
        -->
       <input type="text" id="input" class="form" placeholder="Enter data">
       <input type="button" id="weather-button" class="form" value="Weather">
       
       <!--html structure weather design start-->
       <div id="location-container" class="invisible">
           <span id="data-time"></span> <span id="city"></span>&nbsp;<span id="Country"></span><span id="current-temp"></span>
       </div>
       
       <div id="weather-params">
       </div>
       <!--html structure weather design end-->
    </div>
    <div id="output"></div>
    <?php
    }
    
    public function display($templateName) {
        $this->$templateName();
    }
    
    public function __construct() {
        
    }
}
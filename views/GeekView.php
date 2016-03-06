<?php

class GeekView {
    private function main() {
        ?>
    <section id="header">
        <div class="container">
            <div class="inner-container">
                <img src="img/geek-logo.png" alt="Home" width="407">
                <div class="span-container">
                    <span>A team of self confessed geeks who are all about great digital design</span>
                </div>
            </div>
            <div class="button-container">
                <a href="#section1">
                    <img src="img/button-down-white.png" alt="Down">
                </a>
            </div>
        </div> 
    </section> 
    <section id="section1">
        <div class="container">
            <div class="inner-container">
                <img src="img/section1-img.png" alt="" width="690" class="img-pad">
                <div class="span-container">
                    <span>Some agencies love <span class="red">design</span>, but don't know how to build</span>
                </div>
            </div>
            <div class="button-container">
                <a href="#section2">
                    <img src="img/button-down.png" alt="">
                </a>
            </div>            
        </div>
    </section> 
    <section id="section2">
        <div class="container">
            <div class="inner-container">
                <img src="img/section2-img.png" alt="" width="720" class="img-pad">
                <div class="span-container">
                    <span>Some agencies know how to <span class="red">build</span>, but can't do design</span>
                </div>    
            </div>
            <div class="button-container">
                <a href="#section3">
                    <img src="img/button-down.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="section3">
        <div class="container">
            <div class="inner-container">
                <img src="img/section3-img.png" alt="" width="750" class="img-pad" >
                <div class="span-container">
                    <span>We love <span class="red">both</span></span>
                </div>
            </div> 
            <div class="button-container">
                <a href="#section4">
                    <img src="img/button-down.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="section4">
        <div class="container">
            <h1>Services</h1>
            <div class="inner-container">
                <div>
                    <img src="img/web-dev-icon.png" alt="" width="260" >
                    <span>Web Development</span>
                </div>
                <div>
                    <img src="img/design-icon.png" alt="" width="260" >
                    <span>Design</span>
                </div>
                <div>
                    <img src="img/branding-icon.png" alt="" width="260">
                    <span>Branding</span>
                </div>    
                <div id="ux-icon-div">    
                    <img src="img/ux-icon.png" alt="" width="260">
                    <span>UX Research</span>
                </div>
            </div>
            <div class="button-container">
                <a href="#section5">
                    <img src="img/button-down-black.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="section5">
        <div class="container">
            <h1>Clients</h1>
            <div class="inner-container">
                <div>
                    <i class="fa fa-angle-left"></i>
                </div>
                <div>
                    <img src="img/tpg-logo.png" alt="" width="250" >
                </div>
                <div>
                    <img src="img/vegan-logo.png" alt="" width="250" >
                </div>
                <div>
                    <img src="img/pshe-logo.png" alt="" width="250">
                </div>
                <div class="no-marg">
                    <i class="fa fa-angle-right"></i>
                </div>
            </div>
            <div class="button-container">
                <a href="#section6">
                    <img src="img/button-down-black.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="section6">
        <div class="container">
            <h1>How to find us</h1>
            <div class="inner-container">
                <div class="map">
                    <img src="img/map.png" alt="Trial version" />
                </div>
            </div>
            <div class="button-container">
                <a href="#section7">
                    <img src="img/button-down.png" alt="">
                </a>
            </div>
        </div>
    </section>
    <section id="section7">
        <div class="container">
            <h1>Contact</h1>
                <form action="" id="contact-form">
                    <input type="text" name="Name" placeholder="Name">
                    <input type="email" name="Email" placeholder="Email">
                    <textarea id="message" name="message" rows="7" cols="30" placeholder="Message"></textarea>
                    <input type="submit" value="Send Message!" id="send-btn">
                    <p>Or phone on: 01923 220121</p>
                </form>
        </div>
    </section>
    <?php
    }
    
    public function display($templateName) {
        $this->$templateName();
    }
    
    public function __construct() {
        
    }
}
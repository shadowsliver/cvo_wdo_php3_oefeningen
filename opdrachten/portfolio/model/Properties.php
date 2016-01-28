<?php

class Properties
{
    public $language = "en"; //en, de, nl,...
    public $pagetitle = "Default Website Title";
    public $pagemeta = "Short description about this website";


    /*Stylesheets*/
    public $stylesheets = array(
        "style.css"
    );

    /*scripts top of page*/
    public $javascript_top = array(
        "js/html5shiv.js", "js/jquery.min.js", "js/smoothScroll.js"
    );
    //jquery 2.2.0

    /*scripts bottom of page*/
    public $javascript_bot = array(

    );


    //extra
    public $creator = "Michel Michaux";
    public $copyright = '&#169; Michel Michaux - <a href="http://www.shadowsliver.be/">http://www.shadowsliver.be/</a>';
}
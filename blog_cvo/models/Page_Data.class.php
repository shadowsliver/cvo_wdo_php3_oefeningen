<?php

class Page_Data {
    public $title = '';
    public $content = '';
    public $css = '';
    public $embeddedStyle = '';
    public $scriptElements = '';

    public function addCss($href) {
        // niet .= vergeten want meerdere stijlbladen moeten TOEGEVOEGD worden
        $this->css .= "<link href='$href' rel='stylesheet' >";
    }
    public function addScript($src){
        $this->scriptElements .="<script src='$src'></script>";
    }

}
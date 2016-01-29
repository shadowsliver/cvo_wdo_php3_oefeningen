<?php
include_once 'includes/config.incl.php';
include_once 'model/Properties.php';
include_once 'model/Quiz.php';
include_once 'includes/working_functions.incl.php';
$properties = New Properties();
$page = 'home'; // de 'index' pagina

$properties->language ='nl';
$properties->pagetitle = "Quizzen";
$properties->pagemeta = "Quizzen voor web developers";
$properties->stylesheets =  array(
    "style.css"
);
$properties->javascript_top = array(
    "js/html5shiv.js"
);
$properties->javascript_bot = array(
    "js/jquery.min.js", "js/bootstrap.min.js"
);

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}else{
    redirect("index.php?page=$page");
}

include_once 'templates/page.tpl.php';
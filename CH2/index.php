<?php
error_reporting(E_ALL);
ini_set("display_error", 1);

include_once 'classes/Page_Data.class.php';

$pageData = new Page_Data();

$pageData->title = "Portfoliosite";
$pageData->css = "<link rel='stylesheet' type='text/css' href='css/layout.css'>";
$pageData->content = "<h1>Mijn Portfolio</h1>";
$pageData->content .= include_once 'views/navigation.php';


$navigationIsClicked = isset($_GET['page']);

if($navigationIsClicked){
    $fileToLoad = $_GET['page'];   
}else{
    $fileToLoad = 'skills';
}
$pageData->content .= include_once "views/$fileToLoad.php";
$pageData->embeddedStyle = "
    <style>
    nav a[href *= '?page=$fileToLoad']{
        padding: 3px;
        background-color: white;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }
    </style>
";
$page = include_once'templates/page.php';

echo $page;

<?php
error_reporting(E_ALL);
ini_set("display_error", 1);

$pageData = new stdClass();

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


$page = include_once'templates/page.php';

echo $page;

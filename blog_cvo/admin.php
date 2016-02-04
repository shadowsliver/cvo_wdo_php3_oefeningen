<?php
error_reporting(E_All);
ini_set('display_errors', 1);

//models
include_once 'models/Page_Data.class.php';
$pageData = New Page_Data();
$pageData->title = "PHP/MYSQL blog Demo";
$pageData->addCSS("css/blog.css");
$pageData->content = "<h1>$pageData->title</h1>";


//view
$pageData .= include_once 'view/admin/admin-navigation.php';
$navigationIsClicked = isset($_GET['page']);
if($navigationIsClicked){
    $fileToLoad = $_GET['page'];
}else{
    $fileToLoad="entries";
}
$pageData->content .= include_once "controller/admin/$fileToLoad.php";
$page = include_once 'view/page.php';




//models-view

echo $page;
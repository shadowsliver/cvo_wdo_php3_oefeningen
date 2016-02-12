<?php
/**
 * Created by PhpStorm.
 * User: guy
 * Date: 4/02/16
 * Time: 10:15
 */

include_once 'models/db.php';


// Model
include_once 'models/Page_Data.class.php';
$pageData = new Page_Data();
$pageData->title = "Mijn Blog";
$pageData->addCss('css/blog.css');
$pageData->addScript('js/editor.js');
$pageData->content = "<h1>$pageData->title</h1>";


// View
$pageData->content .= include_once 'views/admin/admin-navigation.php';
$navigationIsClicked = isset($_GET['page']);
if ($navigationIsClicked) {
    $fileToLoad = $_GET['page'];
} else {
    $fileToLoad = "entries";
}

$pageData->content .= include_once "controllers/admin/$fileToLoad.php";
$page = include_once 'views/page.php';





// Model and view
echo $page;
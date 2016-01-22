<?php
error_reporting(E_ALL);
ini_set("display_error", 1);

include_once 'classes/Page_Data.class.php';

$pageData = new Page_Data();

$pageData->title = "Building and processing HTML forms with php";
$pageData->content = "<h1>$pageData->title</h1>";
$pageData->content .= include_once 'views/navigation.php';
$pageData->content .= include_once 'views/' . $_GET['page'] . '.php';

$navigationIsClicked = isset($_GET['page']);

$fileToLoad = $navigationIsClicked ? $_GET['page'] : 'quiz';
$pageData->content .= include_once "views/$fileToLoad.php";

echo include_once 'templates/page.php';
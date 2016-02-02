<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

include_once 'model/Page_Data.class.php';
$pageData = new Page_Data();
$pageData->title = "PHP/MYSQL site poll example";

$pageData->addCSS('css/layout.css');
$pageData->addCSS('css/navigation.css');

$pageData->content = "<h1>$pageData->title</h1>";

$servername = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "playground";

try{
    $db = new PDO("mysql:host=$servername;dbname=$dbName", $dbUser, $dbPass);;
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e){
    $pageData->content .= "<h3>Connection failed!</h3><p>$e</p>";
}

$pageData->content .= include_once 'controller/poll.php';

//$pageData->content .= include_once "view/$fileToLoad.php";
$page = include_once 'view/page.php';
echo $page;


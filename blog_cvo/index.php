<?php
/**
 * Created by PhpStorm.
 * User: guy
 * Date: 5/02/16
 * Time: 09:44
 */
include_once 'models/db.php';

// model
include_once 'models/Page_Data.class.php';
$pageData = new Page_Data();
$pageData->title = "PHP/MySQL Blog Demo Example";
$pageData->addCss('css/blog.css');


$pageData->content = "<h1>$pageData->title</h1>";
//$pageData->content .= "<h2>All is good</h2>";
$pageData->content .= include_once 'controllers/blog.php';

// view
$page = include_once 'views/page.php';

// model en view
echo $page;
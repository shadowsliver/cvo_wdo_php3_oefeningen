<?php
include_once 'view/includes/config.incl.php';
include_once 'controller/StockManagementController.php';

$controller = new StockManagementController();
$page = 'home'; // de 'index' pagina

$controller->properties->stylesheets =  array(
    "style.css"
);
$controller->properties->javascript_top = array(
    "js/html5shiv.js"
);
$controller->properties->javascript_bot = array(
    "js/jquery.min.js", "js/bootstrap.min.js"
);

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}else{
    redirect("index.php?page=$page");
}

include_once 'view/templates/page.tpl.php';
<?php
include_once 'includes/config.incl.php';
include_once 'model/Properties.php';
include_once 'includes/working_functions.incl.php';
$properties = New Properties();
$page = 'home';

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}else{
    redirect("index.php?page=$page");
}

include_once 'templates/page.tpl.php';
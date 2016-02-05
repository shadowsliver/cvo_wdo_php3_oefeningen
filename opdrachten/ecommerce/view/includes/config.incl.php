<?php
include 'view/includes/session.incl.php';
include 'view/includes/settings.incl.php';


//Error Messaging
if($global_error == 1){
    error_reporting(E_ALL);
    ini_set("display_error", $global_error);
    include 'view/includes/error_handler.incl.php';
}

include 'view/includes/working_functions.incl.php';
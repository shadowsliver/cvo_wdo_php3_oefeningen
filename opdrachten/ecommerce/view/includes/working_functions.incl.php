<?php

function message_debug($message)
{
    if(!isset($_SESSION['debugMessage'])){
        $_SESSION['debugMessage'] = '<br>' . $message;
    }else{
        $_SESSION['debugMessage'] .= '<br>' . $message;
    }

}

function message_info($message)
{
    if(!isset($_SESSION['infoMessage'])){
        $_SESSION['infoMessage'] = '<br>' . $message;
    }else{
        $_SESSION['infoMessage'] .= '<br>' . $message;
    }
}

function message_error($message)
{
    if(!isset($_SESSION['errorMessage'])){
        $_SESSION['errorMessage'] = '<br>' . $message;
    }else{
        $_SESSION['errorMessage'] .= '<br>' . $message;
    }
}

function redirect($page)
{
    header("location:$page");
    exit();
}
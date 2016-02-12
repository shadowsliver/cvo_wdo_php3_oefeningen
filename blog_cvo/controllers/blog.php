<?php
/**
 * Created by PhpStorm.
 * User: guy
 * Date: 5/02/16
 * Time: 09:54
 */

// return "<h3>Blog entries coming soon!</h3>";

// model
include_once 'models/Blog_Entry_Table.class.php';
$entryTable = new Blog_Entry_Table($db);

$isEntryClicked = isset($_GET['id']);
if($isEntryClicked){
    $entryId = $_GET['id'];
    $entryData = $entryTable->getEntry($entryId);
    //view
    $blogOutput = include_once 'views/entry-html.php';
    $blogOutput .= include_once "controllers/comments.php";
} else {
    $entries = $entryTable->getAllEntries();
    $blogOutput = include_once 'views/list-entries-html.php';
}


/*
$oneEntry = $entries->fetchObject();
$test = print_r($oneEntry, true);
return "<pre>$test</pre>";
*/

// model en view
return $blogOutput;
<?php
/**
 * Created by PhpStorm.
 * User: guy
 * Date: 4/02/16
 * Time: 11:47
 */


// Model
include_once 'models/Blog_Entry_Table.class.php';
$entryTable = new Blog_Entry_Table($db);

$editorSubmitted = isset($_POST['action']);
// als er iets in de waarde zit dus true
if($editorSubmitted) {
    $buttonClicked = $_POST['action'];
    $save = ($buttonClicked === 'Save');
    $id = $_POST['id'];
    $title = $_POST['title'];
    $entry = $_POST['entry'];

    $insertNewEntry = ($save AND $id === '0');
    $deleteEntry = ($buttonClicked === 'Delete');
    $updateEntry = ($save AND $insertNewEntry === false);

    if($insertNewEntry) {
        $savedEntryId = $entryTable->saveEntry($title, $entry);
    } elseif ($updateEntry) {
        $entryTable->updateEntry($id, $title, $entry);
        $savedEntryId = $id;
    } elseif ($deleteEntry) {
        $entryTable->deleteEntry($id);
    }
}



// View
$entryRequested = isset($_GET['id']);
if($entryRequested) {
    $id = $_GET['id'];
    $entryData = $entryTable->getEntry($id);
    $entryData->entry_id = $id;
    $entryData->message = "";
}
$entrySaved = isset($savedEntryId);
if($entrySaved){
    $entryData = $entryTable->getEntry($savedEntryId);
    $entryData->message = "Entry was saved";
}
$editorOutput = include_once 'views/admin/editor-html.php';

// View and Model
return $editorOutput;
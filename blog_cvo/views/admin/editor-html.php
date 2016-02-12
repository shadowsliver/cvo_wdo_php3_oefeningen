<?php
/**
 * Created by PhpStorm.
 * User: guy
 * Date: 4/02/16
 * Time: 11:57
 */

$entryDataFound = isset($entryData);
if($entryDataFound === false){
    $entryData = new StdClass();
    $entryData->entry_id = 0;
    $entryData->entry_title = "";
    $entryData->entry_text = "";
    $entryData->message = "";
}


return "
<form method='post' action='admin.php?page=editor' id='editor'>
    <input type='hidden' name='id' value='$entryData->entry_id'>
    <fieldset>
        <legend>New Entry Submission</legend>
        <label for='title'>Title</label>
        <input type='text' name='title' maxlength='150' value='$entryData->entry_title'>
        <p id='title-warning'></p>

        <label for='entry'>Entry</label>
        <textarea name='entry'>$entryData->entry_text</textarea>

        <fieldset id = editor-buttons>
            <input type='submit' name='action' value='Save'>
            <input type='submit' name='action' value='Delete'>
            <p id=' editor-message'>$entryData->message</p>
        </fieldset>
    </fieldset>
</form>
";
<?php
/**
 * Created by PhpStorm.
 * User: guy
 * Date: 4/02/16
 * Time: 11:45
 */
// model
include_once 'models/Blog_Entry_Table.class.php';
$entryTable = new Blog_Entry_Table($db);
$allEntries = $entryTable->getAllEntries();


// view
$entriesAsHTML = include_once 'views/admin/entries-html.php';






// hooking up model and view
return $entriesAsHTML;
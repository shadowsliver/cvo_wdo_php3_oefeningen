<?php
/**
 * Created by PhpStorm.
 * User: guy
 * Date: 5/02/16
 * Time: 10:15
 */
$entriesFound = isset($entries);
if($entriesFound === false) {
    trigger_error('views/list-entries-html.php needs $entries');
}





$entriesHTML = "<ul id='blog-entries'>";
while($entry = $entries->fetchObject()) {
    // SUPER belangrijk!! amp ertussen zetten anders kan je geen 2 waardes doorsturen!!!
    $href = "index.php?page=blog&amp;id=$entry->entry_id";
    $entriesHTML .= "<li><h3>$entry->entry_title</h3>
                        <div>$entry->intro<p><a href='$href'>Read more...</a></p></div>
                        </li>";
}
$entriesHTML .= "</ul>";
return $entriesHTML;
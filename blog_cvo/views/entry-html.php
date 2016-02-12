<?php
/**
 * Created by PhpStorm.
 * User: guy
 * Date: 5/02/16
 * Time: 10:39
 */
$entryDataFound = isset($entryData);
if($entryDataFound === false) {
    trigger_error('views/entry-html.php needs an $entryData object');
}

return "
<article>
    <h1>$entryData->entry_title</h1>
    <div class='data'>$entryData->date_created</div>
    <p>$entryData->entry_text</p>
</article>
";
<?php
return "
<form method='post' action='admin.php?page=editor' id='editor'>
<fieldset>
    <legend>New Entry submission</legend>
    <label>Title</label>
    <input type='text' name='title' maxlength='150'>
    <label for=''>Entry</label>
    <textarea name='entry'></textarea>

        <fieldset id='editor-buttons'>
            <input type='submit' name='action' value='Save'>
            <input type='submit' name='action' value='Delete'>
        </fieldset>

</fieldset>

</form>
";

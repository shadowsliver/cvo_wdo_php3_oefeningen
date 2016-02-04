<?php

return "
<form method='post' action='admin.php?page=editor' id=''editor'>
    <fieldset>
    <legend>new Entry Submission</legend>
    <label>Title</label>
    <input type='text' name='title' maxlength='150'>

    <label>Entry</label>
    <textarea name='entry'></textarea>
    <fieldset id='editor-buttons'>
        <input type='submit' name='action' value='Save'>
         <input type=='submit' name='action' value='Delete'>
</fieldset>
</fieldset>
</form>
";
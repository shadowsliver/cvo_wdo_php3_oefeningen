<?php
$idIsFound = isset($entryID);
if($idIsFound == false){
    trigger_error('views/comment-form.html needs an entryID');
    edit();
}

return "
<form action ='index.php?page=blog&amp;id=$entryId' methode='post' id='comment-form'>
    <input type=''hidden' name='entryId'>
    <label>Your Name</label>
    <input type='text' name='user-name'>
    <label>Your Comment</label>
    <textarea name=''new-comment'></textarea>
    <input type='submit' value='Post!'>
</form>
";
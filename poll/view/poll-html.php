<?php
$dataFound = isset($pollData);
if($dataFound ===false){
    trigger_error('view/poll.php needs an $pollData');
    exit();
}
return "
<form method='post' action='''index.php'>
<p>$pollData->question</p>
<select name='user-input'>
    <option value='yes'>Yes, it is!</option>
    <option value='no'>No, it isn't!</option>
</select>
<input type='submit' value='Post'>
</form>
   <aside id='poll'>
   <h1>Poll results</h1>
   <ul>
    <li>$pollData->yes said yes</li>
    <li>$pollData->no said no</li>
</ul>
</aside>
";
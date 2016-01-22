<?php
return "
    <form method='post' action='index.php?page=quiz'>
        <p> Is het moeilijk om PHP te leren?</p>
        <select name='answer'>
            <option value='yes'>Ja, het is moeilijk</option>
            <option value='no'>Neen, het is gemakkelijk</option>
        </select>
        <input type='submit' name='quiz-submitted' value='Inzenden'>
    </form>
";
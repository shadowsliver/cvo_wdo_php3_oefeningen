<?php
return "
<!DOCTYPE html>

<html>
    <head>
        <meta charset='UTF-8'>
        <title>$pageData->title</title>
        $pageData->css
        $pageData->embeddedStyle    
    </head>
    <body>
        $pageData->content
    </body>
</html>
";

<?php
return "
<!DOCTYPE html>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>$pageData->title</title>  
        $pageData->css
    </head>
    <body>
        $pageData->content
        $pageData->embeddedStyle
    </body>
</html>
";